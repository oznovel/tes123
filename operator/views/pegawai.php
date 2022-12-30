<?php
$query = mysqli_query($koneksi, "SELECT * FROM admin WHERE level = 'Pegawai'");
$no = 1;
?>
                    <div class="row">
                        <div class="col-auto text-center flex-column d-none d-sm-flex">
                            <div class="row h-50">
                            </div>
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
                                    <div class="float-right text-muted">Wed, Jan 11th 2019 8:30 AM</div>
                                    <h4 class="card-title"><b>Ekspress</b></h4>
                                    <p>Shoreditch vegan artisan Helvetica. Tattooed Codeply Echo Park Godard kogi, next
                                        level irony ennui twee squid fap selvage. Meggings flannel Brooklyn literally
                                        small batch, mumblecore PBR try-hard kale chips. Brooklyn vinyl lumbersexual
                                        bicycle rights, viral fap cronut leggings squid chillwave pickled gentrify
                                        mustache. 3 wolf moon hashtag church-key Odd Future. Austin messenger bag
                                        normcore, Helvetica Williamsburg sartorial tote bag distillery Portland before
                                        they sold out gastropub taxidermy Vice.</p>


                                        <a href="index.php?page=add_pegawai" class="btn btn-success btn-icon-split mb-4">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-plus"></i>
                                            </span>
                                            <span class="text"><b>Tambah Data</b></span>
                                        </a>

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
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-dark" id="dataTable">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>ID</th>
                                                    <th>Nama</th>
                                                    <th>Telepon</th>
                                                    <th>Email</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            <?php while ($row = mysqli_fetch_assoc($query)): ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $row['id_admin'] ?></td>
                                                    <td><?= $row['nama'] ?></td>
                                                    <td><?= $row['telp'] ?></td>
                                                    <td><?= $row['email'] ?></td>
                                                    <td class="text-center">
                                                        <a href="index.php?page=edit_pegawai&id_pegawai=<?= $row['id_admin'] ?>" class="btn btn-warning btn-icon-split mb-4">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-edit"></i>
                                                            </span>
                                                        </a>
                                                        <a href="sistem/hapus_pegawai.php?id_pegawai=<?= $row['id_admin'] ?>" class="btn btn-danger btn-icon-split mb-4">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-trash-alt"></i>
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


    




