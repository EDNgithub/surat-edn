  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ubah Data Divisi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_superadmin/divisi')?>">Divisi</a></li>
              <li class="breadcrumb-item active">Ubah Data Divisi</li>
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
                <h3 class="card-title">Ubah Divisi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php foreach($user as $u){ ?>
              <form action="<?php echo site_url('C_superadmin/update_data_divisi')?>" method="post">
                <div class="card-body">
                  <input type="hidden" name="id_divisi" value="<?php echo $u->id_divisi ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Divisi">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama DIvisi</label>
                    <input type="text" name="divisi" value="<?php echo $u->divisi ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Divisi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <input type="text" name="keterangan" value="<?php echo $u->keterangan ?>" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Keterangan">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Ubah Data</button>
                </div>
              </form>
              <?php } ?>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->