
<?php
$b = @$_GET['bulan'] ? $_GET['bulan'] : date('m');
$t = @$_GET['tahun'] ? $_GET['tahun'] : date('Y');
if ($b !== 'semua') {
    $query = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE status >= '4' AND DATE_FORMAT(tgl_transaksi, '%Y-%m-%d') BETWEEN '$t-$b-01' AND '$t-$b-32'  ORDER BY status ASC, tgl_transaksi ASC");
} else {
    $query = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE status >= '4' AND DATE_FORMAT(tgl_transaksi, '%Y') = '$t'  ORDER BY status ASC, tgl_transaksi ASC");
}
$bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
$total = 0;
?>


<div class="row">
    <div class="col-auto text-center flex-column d-none d-sm-flex">
        <div class="row h-50"></div>
        <h5 class="m-2">
            <span class="badge badge-pill bg-success border">&nbsp;</span>
        </h5>
        <div class="row h-50">
            <div class="col border-right">&nbsp;</div>
            <div class="col">&nbsp;</div>
        </div>
    </div>
    <div class="col py-2">
        <div class="card">
            <div class="card-body">
                <div class="float-right text-muted"><?= (is_numeric($b)) ? 'Bulan ' . $bulan[$b-1] . ',' : 'Tahun' ?> <?= $t ?></div>
                <h4 class="card-title"><b>Laporan</b></h4>
                <p>
                    Shoreditch vegan artisan Helvetica. Tattooed Codeply Echo Park Godard kogi, next level irony ennui twee squid fap selvage. Meggings flannel Brooklyn literally small batch, mumblecore PBR try-hard kale chips. Brooklyn
                    vinyl lumbersexual bicycle rights, viral fap cronut leggings squid chillwave pickled gentrify mustache. 3 wolf moon hashtag church-key Odd Future. Austin messenger bag normcore, Helvetica Williamsburg sartorial tote bag
                    distillery Portland before they sold out gastropub taxidermy Vice.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-auto text-center flex-column d-none d-sm-flex">
        <div class="row h-50">
            <div class="col border-right">&nbsp;</div>
            <div class="col">&nbsp;</div>
        </div>
        <h5 class="m-2">
            <span class="badge badge-pill bg-success border">&nbsp;</span>
        </h5>
    </div>
    <div class="col py-2">
        <div class="card">
            <div class="card-body">
            <div class="float-right text-muted"><?= (is_numeric($b)) ? 'Bulan ' . $bulan[$b-1] . ',' : 'Tahun' ?> <?= $t ?></div>
                <h4 class="card-title"><b>Laporan</b></h4>
                <div class="table-responsive">
                    <table class="table table-bordered text-dark" id="dataTable">
                        <thead>
                            <tr>
                                <th>Kode Transaksi</th>
                                <th>Pemesanan</th>
                                <th>Tanggal</th>
                                <th>Alamat</th>
                                <th>Total</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php while ($row = mysqli_fetch_assoc($query)): $total += $row['total'] ?>
                            <tr>
                                <td><?= $row['kode_transaksi'] ?></td>
                                <td>
                                    <span><?= $row['pemesan'] ?></span> <br>
                                    <span class="text-muted">Telp. <?= $row['telp'] ?></span>
                                </td>
                                <td>
                                    <?= date('d M Y', strtotime($row['tgl_transaksi'])) ?>
                                </td>
                                <td><?= $row['alamat'] ?></td>
                                <td>Rp. <?= number_format($row['total'], '0', ',', '.') ?></td>
                                <!-- <td>
                                    <?php if ($row['status'] == '0') echo "<span class=\"badge badge-warning\">Menunggu</span>" ?>
                                    <?php if ($row['status'] == '1') echo "<span class=\"badge badge-info\">Dikerjakan</span>" ?>
                                    <?php if ($row['status'] == '2') echo "<span class=\"badge badge-primary\">Selesai Dikerjakan</span>" ?>
                                    <?php if ($row['status'] == '3') echo "<span class=\"badge badge-secondary\">Sedang Diantarkan</span>" ?>
                                    <?php if ($row['status'] == '4') echo "<span class=\"badge badge-success\">Selesai</span>" ?>
                                </td> -->
                                <td>
                                    <a href="#detail-transaksi" class="btn btn-dark btn-xs btn-detail-transaksi py-1" data-toggle="modal" data-target="#detail-transaksi" data-kt="<?= base64_encode($row['kode_transaksi']) ?>"><i class="fa fa-file-invoice fa-2x"  data-toggle="tooltip" data-placement="top" title="Detail Transaksi"></i></a>
                                </td>
                            </tr>
                        <?php endwhile; ?>










                        <?php while ($row = mysqli_fetch_assoc($query)): $total += $row['total'] ?>
                            <tr>
                                <td><?= $row['kode_transaksi'] ?></td>
                                <td>
                                    <span><?= $row['pemesan'] ?></span> <br>
                                    <span class="text-muted">Telp. <?= $row['telp'] ?></span>
                                </td>
                                <td><?= date('d M Y', strtotime($row['tgl_transaksi'])) ?></td>
                                <td><?= $row['alamat'] ?></td>
                                <td>Rp. <?= number_format($row['total'], '0', ',', '.') ?></td>
                                <td class="text-center">
                                    <a href="#detail-transaksi" class="btn btn-primary btn-icon-split mb-4" data-toggle="modal" data-target="#hasilBackdrop" data-kt="<?= base64_encode($row['kode_transaksi']) ?>">
                                        <span class="icon text-white-10">
                                            <i class="fas fa-file-alt"></i>
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        <?php endwhile; ?>




                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
