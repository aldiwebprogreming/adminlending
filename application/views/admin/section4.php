  

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Halaman Section 4</h1><hr>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-pen"></i> Input Halaman Section 4
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Input Halaman Utama Section 4</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                        <form method="post" action="<?= base_url('admin/act_section4') ?>" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <textarea class="form-control" name="title"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Images</label>
                            <input type="file" class="form-control" name="images">
                          </div>

                          <div class="form-group">
                            <label for="exampleInputPassword1">Link Button</label>
                            <input type="text" class="form-control" name="link_button"  placeholder="link button">
                          </div>


                          <div class="form-group">
                            <label for="exampleInputPassword1">Color Button</label>
                            <input type="color" class="form-control" name="color"  placeholder="link button">
                          </div>


                          <div class="form-group">
                            <label for="exampleInputPassword1">Title Button</label>
                            <input type="text" class="form-control" name="title_button"  placeholder="title button">
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
                <h3 class="card-title">Data Halaman Section 2</h3>
              </div>
              <div class="card-body">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Images</th>
                        <th scope="col">Link Button</th>
                        <th scope="col">Title Button</th>
                        <th scope="col">Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($section4 as $data) { ?>
                      <tr>
                        <th scope="row"><?= $data['title'] ?></th>
                        <td><img src="<?= base_url('upload/') ?><?= $data['images'] ?>" style="height: 100px;"></td>
                        <td><?= $data['link_button'] ?></td>
                        <td><?= $data['title_button'] ?></td>
                        <td><button class="btn btn-danger">Detail</button></td>
                        
                      </tr>
                    <?php } ?>
                      <tr>
                     
                    </tbody>
                  </table>
              </div>
            </div>
          
        </div>
    </section>
  </div>
  
    <!-- /.content -->
 