<?php
$query = mysqli_query($koneksi, "SELECT * FROM produk");
?>




<hr />
<div class="row">
    <div class="col-auto text-center flex-column d-none d-sm-flex">
        <div class="row h-50"></div>
        <h5 class="m-2"><span class="badge badge-pill bg-success border">&nbsp;</span></h5>
        <div class="row h-50">
            <div class="col border-right">&nbsp;</div>
            <div class="col">&nbsp;</div>
        </div>
    </div>
    <div class="col py-2">
        <div class="card bg-success text-white">
            <div class="card-body">
                <div class="float-right text-muted">Mon, Jan 9th 2019 7:00 AM</div>
                <h4 class="card-title"><b>Jenis Cucian</b></h4>
                <p class="card-text">Welcome to the campus, introduction and get started with the tour.</p>
            </div>
        </div>
    </div>
</div>

<?php while ($row = mysqli_fetch_assoc($query)): ?>
    <div class="row">
        <div class="col-auto text-center flex-column d-none d-sm-flex">
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
            <h5 class="m-2"><span class="badge badge-pill bg-success border">&nbsp;</span></h5>
            <div class="row h-50">
                <div class="col border-right">&nbsp;</div>
                <div class="col">&nbsp;</div>
            </div>
        </div>
        <div class="col py-2">
            <div class="card">
                <div class="card-body">
                    <div class="float-right"><img src="../<?= $row['icon'] ?>" alt="" class="w-100"></div>
                    <h4 class="card-title"><b><?= $row['nama'] ?></b></h4>
                    <p class="card-text">Sign-up for the lessons and speakers that coincide with your course syllabus. Meet and greet with instructors.</p>
                    <p class="card-text">Rp. <?= number_format($row['harga'], 2, ',', '.') ?></p>


                    <a href="javascript:void(0)" data-toggle="modal" data-target="#edit_product" class="btn btn-warning btn-icon-split mb-4" data-product="<?= base64_encode(json_encode($row)) ?>">
                        <span class="icon text-white-50"><i class="fas fa-trash-alt"></i></span><span class="text">Edit</span>
                    </a>

                   

                    <a href="sistem/hapus_produk.php?id_produk=<?= $row['id_produk'] ?>"
                     class="btn btn-danger btn-icon-split mb-4">
                        <span class="icon text-white-50"><i class="fas fa-trash-alt"></i></span><span class="text">Hapus</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>

<div class="row">
    <div class="col-auto text-center flex-column d-none d-sm-flex">
        <div class="row h-50">
            <div class="col border-right">&nbsp;</div>
            <div class="col">&nbsp;</div>
        </div>
        <h5 class="m-2"><span class="badge badge-pill bg-success border">&nbsp;</span></h5>
        <div class="row h-50">
            <div class="col">&nbsp;</div>
            <div class="col">&nbsp;</div>
        </div>
    </div>
    <div class="col-lg-4 py-2">
        <div class="card">
            <div class="card-body">
                <div class="float-right text-muted">Thu, Jan 12th 2019 11:30 AM</div>
                <h4 class="card-title">Tambah Kategori</h4>
                <p>Join us for lunch in Bootsy's cafe across from the Campus Center.</p>
                <button type="button" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#addBackdropJenis">
                    <span class="icon text-white-50"><i class="fas fa-plus"></i></span><span class="text"><b>Tambah Kategori</b></span>
                </button>
            </div>
        </div>
    </div>
</div>



<!--_______________________________________________________________________________ -->

<!-- add kategori -->
<div class="modal fade" id="addBackdropJenis" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

        <form action="sistem/add_produk.php" method="post" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="staticBackdropLabel">Tambah Kategori</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>

                <div class="modal-body">
            
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nama Kategori</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" id="nama" class="form-control form-control-lg" placeholder="" require>
                        </div>
                    </div>
                    <div class="form-group row mb-2 mr-sm-2">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" name="harga" id="harga" class="form-control form-control-lg" placeholder="Rp." require>
                        </div>
                    </div>
                    <div class="form-group row mb-2 mr-sm-2">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Kg</label>
                        <div class="col-sm-10">
                            <input type="text" name="satuan" id="satuan" class="form-control form-control-lg" placeholder="kg, satuan, potong" require>
                        </div>
                    </div>
                </div>
                
                <button type="button" class="btn btn-secondary btn-danger" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success">Simpan</button></div>
            
                <div class="modal-footer">

        </form> 
        </div>
    </div>
</div>



<!--_______________________________________________________________________________ -->


<!-- edit kategori -->
<div class="modal fade" id="editBackdropJenis" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title text-dark" id="staticBackdropLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
           
            <div class="modal-body">




            

               
            <form action="sistem/update_produk.php" method="post" enctype="multipart/form-data">

               
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nama Kategori</label>
                        <div class="col-sm-10"> <input type="file" name="icon" id="icon-edit" class="custom-file-input" accept="image/*">
                                <input type="hidden" name="id_produk" id="edit-id-produk">
                            <input type="text" name="nama" id="edit-nama-produk" class="form-control" placeholder="Nama Produk" required></div>
                    </div>
                    <div class="form-group row mb-2 mr-sm-2">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Harga</label>
                        <div class="col-sm-10">
                            <input type="number" name="harga" id="edit-harga-produk" class="form-control" aria-label="Harga" placeholder="Ex. 10.0000" pattern="(^[1-9])+[0-9]{0,}" required>
                        </div>
                    </div>
                    <div class="form-group row mb-2 mr-sm-2">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Kg</label>
                        <div class="col-sm-10">
                            <input type="text" name="satuan" id="edit-satuan-produk" class="form-control" placeholder="satuan Produk. Ex: Kg, Potong" required>
                        </div>
                    </div>
            
            </form>
            


                <div class="modal-footer"><button type="button" class="btn btn-secondary btn-danger" data-dismiss="modal">Tutup</button><button type="button" class="btn btn-success">Simpan</button></div>
        



            </div>
        </div>
    </div>
</div>





<div class="modal fade" id="edit_product" tabindex="-1" role="dialog" aria-labelledby="edit_product_label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">



        
            <form action="sistem/update_produk.php" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h3 class="modal-title" >Edit Produk</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="icon-edit">Icon/Gambar</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="icon" id="icon-edit" class="custom-file-input" accept="image/*">
                                <input type="hidden" name="id_produk" id="edit-id-produk">
                                <label class="custom-file-label" for="icon">Choose image</label>
                            </div>
                        </div>
                        <small class="text-muted">Kosongkan jika tidak ingin dirubah!</small>
                        <!-- <input type="file" name="icon" id="icon" class="form-control" placeholder="" required> -->
                    </div>
                    <div class="form-group">
                        <label for="edit-nama-produk">Nama Produk</label>
                        <input type="text" name="nama" id="edit-nama-produk" class="form-control" placeholder="Nama Produk" required>
                    </div>
                    <div class="form-group">
                        <label for="edit-harga-produk">Harga</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            <input type="number" name="harga" id="edit-harga-produk" class="form-control" aria-label="Harga" placeholder="Ex. 10.0000" pattern="(^[1-9])+[0-9]{0,}" required>
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit-satuan-produk">Satuan Produk</label>
                        <input type="text" name="satuan" id="edit-satuan-produk" class="form-control" placeholder="satuan Produk. Ex: Kg, Potong" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>