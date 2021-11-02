  

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Halaman Data Admin</h1><hr>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-pen"></i> Tambah Admin
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Data Admin</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                        <form method="post" action="">
                          <div class="form-group">
                            <label for="exampleInputEmail1">username</label>
                            <input type="text" name="username" placeholder="Masukan username"  required="" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">password</label>
                            <input type="password" name="pass" placeholder="Masukan password"  required="" class="form-control">
                          </div>


                          <div class="form-group">
                            <label for="exampleInputPassword1">Rule Admin</label>
                            <select class="form-control" name="rule">
                              <option>-- PIlih Rule Admin --</option>
                              <option>Admin</option>
                              <option>Super Admin</option>
                            </select>
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
                <h3 class="card-title">Data Admin</h3>
              </div>
              <div class="card-body">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Username</th>
                        <th scope="col">Rule</th>
                        <th scope="col">Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1; ?>
                      <?php foreach($admin as $data) { ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['username'] ?></td>
                        <td><?= $data['rule'] ?></td>
                       
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
 