  

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Produk ON Salle</h1><hr>

              <!-- Button trigger modal -->
            <!--   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-pen"></i> Input Produk
              </button> -->

              <!-- Modal -->
            
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
                <h3 class="card-title">Halaman Edit Produk ON Salle</h3>
              </div>
              <div class="card-body">

                <form method="post" action="<?= base_url('admin/act_edit2') ?>" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?= $produk['id'] ?>">
                   <div class="form-group">
                      <label for="exampleInputEmail1">Title Product</label>
                      <textarea class="form-control" name="title_product"><?= $produk['title_product'] ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Images</label>
                     <!--  <input type="file" class="form-control" name="images"> -->
                       <input type="file" class="form-control" name="images" id="preview_gambar">

                            <img src="<?= base_url('upload/') ?><?= $produk['images'] ?>" id="gambar_nodin" width="200" alt="Preview Gambar" class="mt-2" />
                    </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga Awal</label>
                    <input type="number" class="form-control" name="harga_awal"  placeholder="Harga awal" value="<?= $produk['harga_awal'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Harga Diskon</label>
                    <input type="number" class="form-control" name="harga_diskon"  placeholder="Harga diskon" value="<?= $produk['harga_diskon'] ?>">
                  </div>

                   <div class="form-group">
                      <label for="exampleInputPassword1">Link Button</label>
                      <input type="text" class="form-control" name="link_button"  placeholder="Link Button" value="<?=  $produk['link_button'] ?>">
                    </div>


                  <div class="form-group">
                    
                    <input type="submit" class="btn btn-primary" name="edit" value="Edit">
                    <a href="<?= base_url('admin/produk') ?>" class="btn btn-success"> Kembali</a>
                  </div>
              </div>
              </form>
            </div>
          
        </div>
    </section>
  </div>
  
    <!-- /.content -->
 