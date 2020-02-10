<?php
$con = mysqli_connect("localhost", "root", "", "belajar");
$id= $_GET['id'];
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Data Dosen</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index1.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
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
      <?php

$result = mysqli_query($con, "SELECT * FROM dosen WHERE nidn='$id'");
while ($row=mysqli_fetch_array($result))
{


?>
      <form class="form-horizontal" action="layoutedit_aksi1.php" method="post">
        <div class="form-group">
          <label class="col-sm-3 control-label">NIDN</label>
          <div class="col-sm-2">
            <input type="text" name="nidn" value="<?php echo  $row['nidn'];?>" class="form-control" placeholder="NIDN" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Nama</label>
          <div class="col-sm-4">
            <input type="text" name="nama" value="<?php echo  $row['nama'];?>"class="form-control" placeholder="Nama" required>
          </div>
        </div>
         <div class="form-group">
          <label class="col-sm-3 control-label">Alamat</label>
          <div class="col-sm-4">
            <input type="text" name="alamat" value="<?php echo  $row['alamat'];?>"class="form-control" placeholder="Alamat" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Jenis Kelamin</label>
          <div class="col-sm-2">
            <select name="jns_kelamin" class="form-control" required>
              <option value="<?php echo  $row['jns_kelamin'];?>"><?php echo  $row['jns_kelamin'];?></option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Jabatan</label>
          <div class="col-sm-2">
            <select name="jabatan" class="form-control" required>
              <option value="<?php echo  $row['jabatan'];?>"><?php echo  $row['jabatan'];?></option>
              <option value="Dosen Luar Biasa">Dosen Luar Biasa</option>
              <option value="Dosen Biasa">Dosen Biasa</option>
              <option value="Dosen Tetap">Dosen Tetap</option>
            </select>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-sm-3 control-label">&nbsp;</label>
          <div class="col-sm-6">
            <input type="submit" name="add" class="btn btn-sm btn-primary" value="Simpan" data-toggle="tooltip" title="Simpan Data Karyawan" >
            <a href="index.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Batal">Batal</a>
          </div>
        </div>
      </form>
    <?php
  }
    ?><!-- /form -->
    </div> <!-- /.content -->
  </div> <!-- /.container -->
      </div> <!-- /.jumbotron -->
    </div> <!-- /.content -->
  </div>
          </section>
           
    </section>
    <!-- /.content -->
  </div> 