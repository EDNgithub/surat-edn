  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Surat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Surat</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3>Surat Dikirim</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal Pengiriman Surat</th>
                    <th>Sifat Surat</th>
                    <th>Tujuan Surat</th>
                    <th>Judul Surat</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=0; foreach($user as $u){ echo ''; $i++; ?> 
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $u->tanggal_kirim_surat ?></td>
                    <td><?php echo $u->sifat_surat ?></td>
                    <td><?php echo $u->tujuan ?></td>
                    <td><?php echo $u->judul_surat ?></td>
                    <td><?php echo $u->status ?></td>
                    <td>
                      <a href="<?php echo site_url('C_superadmin/edit_surat/'.$u->id_surat);?>" class="btn btn-primary">
                              <i class="fas fa-pencil-alt">
                              </i>
                      </a>
                      <a class="btn btn-danger" href="<?php echo site_url('C_superadmin/hapus_surat/'.$u->id_surat);?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
                              <i class="fas fa-trash">
                              </i>
                      </a>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Tanggal Pengiriman Surat</th>
                    <th>Sifat Surat</th>
                    <th>Tujuan Surat</th>
                    <th>Judul Surat</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->