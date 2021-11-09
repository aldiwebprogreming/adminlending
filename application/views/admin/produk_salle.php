  

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-shopping-cart"></i> Halaman Produk ON Salle</h1><hr>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-pen"></i> Input Produk
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Input Produk </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                        <form method="post" action="" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Title Product</label>
                            <textarea class="form-control" name="title_product"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Images</label>
                            <input type="file" class="form-control" name="images">
                          </div>

                          <div class="form-group">
                            <label for="exampleInputPassword1">Harga Awal</label>
                            <input type="number" class="form-control" name="harga_awal"  placeholder="Harga awal">
                             <small>Masukan harga awal tanpa karekter Rupiah, koma dan titik.</small>
                          </div>


                          <div class="form-group">
                            <label for="exampleInputPassword1">Harga Diskon</label>
                            <input type="number" class="form-control" name="harga_diskon"  placeholder="Harga diskon">
                             <small>Masukan harga diskon tanpa karekter Rupiah, koma dan titik.</small>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputPassword1">Link Button</label>
                            <input type="text" class="form-control" name="link_button"  placeholder="Link Button">
                          </div>
                          
                      

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <input type="submit" class="btn btn-primary" name="kirim" value="Save changes">


                     </form>
                    </div>
                  </div>
                </div>
              </div>

          </div><!-- /.col -->
    <!--       <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div> --><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">

          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Halaman Produk ON Salle</h3>
              </div>
              <div class="card-body">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Images</th>
                        <th scope="col">Harga Awal</th>
                        <th scope="col">Harga Diskon</th>
                        <th scope="col">Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <?php foreach($produk_salle as $data){ ?>

                        <tr>
                          <td><?= $data['title_product'] ?></td>
                          <td><img src="<?= base_url('upload/') ?><?= $data['images'] ?>" style="height: 100px;"></td>
                          <td><?= $data['harga_awal'] ?></td>
                          <td><?= $data['harga_diskon'] ?></td>
                          <td>
                            <!-- Button trigger modal -->
                              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter<?= $data['id'] ?>">
                                Hapus
                              </button>

                              <a href="<?= base_url('admin/edit_product_salle?id=') ?><?= $data['id'] ?>" class= "btn btn-primary btn-sm">Edit</a>


                              

                              <!-- Modal -->
                              <div class="modal fade" id="exampleModalCenter<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Pesan</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <strong style="text-align: center;"> Apakah anda ingin menghapus data ini?
                                    </div>
                                    <div class="modal-footer">
                                      <form method="post" action="<?= base_url('admin/hapus_produk_salle') ?>">
                                        
                                        <input type="hidden" name="id" value="<?= $data['id'] ?>"  class="form-control">
                                    
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                      <input type="submit" name="" class="btn btn-primary" value="Yes">
                                    </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </td>
                        </tr>

                      <?php } ?>
                     
                    </tbody>
                  </table>
              </div>
            </div>
          
        </div>
    </section>
  </div>
  
    <!-- /.content -->
 