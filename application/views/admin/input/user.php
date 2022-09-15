  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_admin/divisi')?>">User</a></li>
              <li class="breadcrumb-item active">Tambah Data User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo site_url('C_admin/simpan_user')?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Masukkan Password">
                    <input type="checkbox" onclick="myFunction()">Tampilkan Password
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Role</label>
                    <select name="level" class="form-control select2" style="width: 100%;">
                        <option value="user" selected="selected">-------------------------SIlahkan Pilih Role-------------------------</option>
                        <option value="user">Suport</option>
                        <option value="admin">Admin Divisi</option>
                        <option value="koordinator">Koordinator</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jabatan</label>
                    <select name="jabatan" class="form-control select2" style="width: 100%;">
                        <option selected="selected">-------------------------SIlahkan Pilih Jabatan-------------------------</option>
                            <?php                                
                                  foreach ($user3 as $row) {  
                                  echo "<option value='".$row->id_jabatan."'>".$row->jabatan."</option>";
                                  }
                            ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Telpon/Hp</label>
                    <input type="text" name="no_telpon" class="form-control" id="exampleInputPassword1" onkeypress="return event.charCode >= 48 && event.charCode <=57" placeholder="Masukkan No Telpom/Hp">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

      <script>
        function myFunction() {
            var x = document.getElementById("inputPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>