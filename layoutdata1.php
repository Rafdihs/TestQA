<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index1.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>   
    <section class="content">

          <section class="col-lg-12 connectedSortable">
<div class="container">
		<div class="content">
			<h2>Data Dosen</h2>
			<hr />

			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						
						<th>NIDN</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Jenis Kelamin</th>
						<th>Jabatan</th>
						<th>Tools</th>
					</tr>
					<tr>
						<td>

						</td>
					</tr>
					<?php
// buat koneksi dengan MySQL, gunakan database: universitas
$con = mysqli_connect("localhost", "root", "", "belajar");
// jalankan query
$result = mysqli_query($con, "SELECT * FROM dosen");
// tampilkan query
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{ ?> <tr>
		<td><?php  echo $row['nidn'];?></td>
		<td><?php  echo $row['nama'];?></td>
		<td><?php  echo $row['alamat'];?></td>
		<td><?php  echo $row['jns_kelamin'];?></td>
		<td><?php  echo $row['jabatan'];?></td>
		<td>
			<a href="edit1.php?id=<?php echo $row['nidn']?>" title="Edit Data" data-toggle="tooltip" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a href="hapus1.php?id=<?php echo $row['nidn']?>". title="Hapus Data" data-toggle="tooltip" onclick="return confirm('Anda  yakin ingin menghapus data?')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
								</td>
		</tr>	
<?php }

?>
					
				</table>
			</div> <!-- /.table-responsive -->
		</div> <!-- /.content -->
	</div> <!-- /.container -->
</section>
</section>
</div>
