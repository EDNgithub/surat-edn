
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kirim Surat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kirim Surat</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Kirim Surat
              </h3>
            </div>
            <!-- /.card-header -->
            <form action="<?php echo site_url('C_admin/simpan_user')?>" method="post">
              <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Surat</label>
                    <input type="date" name="tanggal_surat" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Lampiran</label>
                    <input type="text" name="lampiran" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Lampiran">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Sifat Surat</label>
                    <select name="level" class="form-control select2" style="width: 100%;">
                        <option value="1" selected="selected">-------------------------SIlahkan Pilih Perioritas-------------------------</option>
                        <option value="1">Perioritas</option>
                        <option value="2">Non Perioritas</option>
                        <option value="3">Internal</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tujuan</label>
                    <select class="form-control" name="tujuan" id="coa">
                          <option value="" selected>Silahkan Masukkan Tujuan</option>
                            <?php                                
                              foreach ($user as $row) {  
                              echo "<option value='".$row->id_user."'>".$row->nama_lengkap."</option>";
                              }
                            ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Subjek</label>
                    <input type="text" name="judul_surat" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Subjek">
                  </div>
                  <textarea name="isi_surat" id="summernote">
                    Silahkan masukkan Isi Surat
                  </textarea>
                  <div class="form-group">
                    <label for="exampleInputPassword1">File Lampiran</label>
                    <input type="file" name="file" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.col-->
      </div>
    </section>
    <!-- /.content -->
  </div>
