<?php
    $last_id = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT SUBSTR(id_member, 3, 3) AS id FROM member ORDER BY id_member DESC LIMIT 0,1"));
    $prefix = 'MB';
    $new_id = sprintf('%03d', $last_id['id'] + 1);
    $full_id = $prefix . $new_id;
?>


<form action="sistem/add_member.php" method="post">
<div class="row" data-aos="fade-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
    <div class="col-auto text-center flex-column d-none d-sm-flex" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
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
                <div class="float-right text-muted">Wed, Jan 11th 2019 8:30 AM</div>
                <h4 class="card-title"><b>Ekspress</b></h4>
                <p> Tattooed Codeply Echo Park Godard kogi, next level irony ennui twee squid fap selvage. Meggings flannel Brooklyn literally small batch, mumblecore PBR try-hard kale chips. Brooklyn
                    vinyl lumbersexual bicycle rights, viral fap cronut leggings squid chillwave pickled gentrify mustache. 3 wolf moon hashtag church-key Odd Future. Austin messenger bag normcore, Helvetica Williamsburg sartorial tote bag
                    distillery Portland before they sold out gastropub taxidermy Vice.
                </p>
                <button type="submit" value="Save" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text"><b>Simpan</b></span>
                </button>







            </div>
        </div>
    </div>
</div>




<div class="row" data-aos="fade-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
    <div class="col-auto text-center flex-column d-none d-sm-flex" data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine">
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





                <div class="row">
                    <div class="form-group col-sm-12 col-md-6">
                        <label for="id">ID :</label>
                        <input type="text" name="id" id="id" class="form-control" placeholder="<?= $full_id ?>" disabled="" />
                        <input type="hidden" name="id" value="<?= $full_id ?>" />
                    </div>
                    <div class="form-group col-sm-12 col-md-6">
                        <label for="nama">Nama :</label>
                        <input type="text" name="nama" id="nama" class="form-control" autocomplete="name" placeholder="Masukan Nama Pegawai" required="" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="jk" class="d-block">Jenis Kelamin</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="l" name="jenis_kelamin" value="L" class="custom-control-input" />
                        <label class="custom-control-label" for="l">Laki-laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="p" name="jenis_kelamin" value="P" class="custom-control-input" />
                        <label class="custom-control-label" for="p">Perempuan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                    <textarea name="alamat" id="alamat" rows="3" class="form-control" autocomplete="street-address" placeholder="Masukan Alamat Member"></textarea>
                </div>
                <div class="form-group">
                    <label for="telp">Telp :</label>
                    <input
                        type="number"
                        name="telp"
                        id="telp"
                        class="form-control"
                        autocomplete="tel"
                        pattern="^[08][0-9]{10,15}"
                        title="Masukan Nomor Telpon yang valid, seperti 085774237xxx. Telp hanya bisa berisi angka"
                        placeholder="Masukan Telp Pegawai"
                        required=""
                    />
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password" class="form-control" autocomplete="new-password" placeholder="********" required="" />
                </div>




            </div>
        </div>
    </div>
</div>
</form>