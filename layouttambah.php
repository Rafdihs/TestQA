<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Data Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>   
    <section class="content">

          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
  
       <div class="container">
    <div class="content">
      <hr />
      
      <form class="form-horizontal" action="layouttambah_aksi.php" method="post">
        <div class="form-group">
          <label class="col-sm-3 control-label">NIM</label>
          <div class="col-sm-2">
            <input type="text" name="nim" class="form-control" placeholder="NIM" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Nama</label>
          <div class="col-sm-4">
            <input type="text" name="nama" class="form-control" placeholder="Nama" required>
          </div>
        </div>
         <div class="form-group">
          <label class="col-sm-3 control-label">Alamat</label>
          <div class="col-sm-4">
            <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Jenis Kelamin</label>
          <div class="col-sm-2">
            <select name="jns_kelamin" class="form-control" required>
              <option value=""> ----- </option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">No HP</label>
          <div class="col-sm-3">
            <input type="text" name="nohp" class="form-control" placeholder="nohp" required>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-sm-3 control-label">&nbsp;</label>
          <div class="col-sm-6">
            <input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan" data-toggle="tooltip" title="Simpan Data Karyawan" >
            <a href="index.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Batal">Batal</a>
          </div>
        </div>
      </form> <!-- /form -->
    </div> <!-- /.content -->
  </div> <!-- /.container -->
      </div> <!-- /.jumbotron -->
    </div> <!-- /.content -->
  </div>
          </section>
           
    </section>
    <!-- /.content -->
  </div>