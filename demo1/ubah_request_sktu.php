<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<?php
if(isset($_GET['id_request_sktu'])){
    $id=$_GET['id_request_sktu'];
	$tampil_nik = "SELECT * FROM data_request_sktu NATURAL JOIN data_user WHERE id_request_sktu=$id";
	$query = mysqli_query($konek,$tampil_nik);
    $data = mysqli_fetch_array($query,MYSQLI_BOTH);
    $id=$data['id_request_sktu'];
	$nik = $data['nik'];
    $nama = $data['nama'];
    $usaha = $data['usaha'];
    $keperluan = $data['keperluan'];
    $ktp = $data['scan_ktp'];
    $kk = $data['scan_kk'];
}
?>
<div class="page-inner">
					<div class="row">
						<div class="col-md-12">	
						<form method="POST" enctype="multipart/form-data">
							<div class="card">
								<div class="card-header">
									<div class="card-title">UBAH DATA REQUEST SURAT KETERANGAN TEMPAT USAHA</div>
								</div>
								<div class="card-body">
									<div class="row">
											<div class="col-md-6 col-lg-6">
                                                <div class="form-group">
													<label>NIK</label>
													<input type="text" name="nik" class="form-control" value="<?= $nik.' - '.$nama;?>" readonly>
												</div>
												<div class="form-group">
													<label>Usaha</label>
													<input type="text" name="usaha" class="form-control" value="<?= $usaha;?>" placeholder="Usaha Anda.." autofocus>
												</div>
												<div class="form-group">
													<label>Keperluan</label>
													<input type="text" name="keperluan" class="form-control" value="<?= $keperluan;?>" placeholder="Keperluan Anda..">
												</div>
											</div>
											<div class="col-md-6 col-lg-6">	
                                                <div class="form-group">
													<label>Scan KTP</label><br>
                                                    <img src="../dataFoto/scan_ktp/<?= $ktp;?>" width="200" height="100" alt="">
												</div>	
												<div class="form-group">
													<input type="file" name="ktp" class="form-control" size="37">
												</div>
                                                <div class="form-group">
													<label>Scan KTP</label><br>
                                                    <img src="../dataFoto/scan_kk/<?= $kk;?>" width="200" height="100" alt="">
												</div>	
												<div class="form-group">
													<label>Scan KK</label>
													<input type="file" name="kk" class="form-control" size="37">
												</div>
											</div>
									</div>
								</div>
								<div class="card-action">
									<button name="ubah" class="btn btn-success">Ubah</button>
									<a href="?halaman=tampil_status" class="btn btn-default">Batal</a>
								</div>
							</div>
						</div>
						</form>
					</div>
</div>
<?php
if(isset($_POST['ubah'])){
	$usaha = $_POST['usaha'];
    $keperluan = $_POST['keperluan'];
	$nama_ktp = isset($_FILES['ktp']);
	$file_ktp = $_POST['nik']."_".".jpg";
	$nama_kk = isset($_FILES['kk']);
	$file_kk = $_POST['nik']."_".".jpg";
    $sql = "UPDATE data_request_sktu SET
    usaha='$usaha',
    keperluan='$keperluan',
    scan_ktp='$file_ktp',
    scan_kk='$file_kk' WHERE id_request_sktu=$id";
	$query = mysqli_query($konek,$sql);

	if($query){
		copy($_FILES['ktp']['tmp_name'],"../dataFoto/scan_ktp/".$file_ktp);
		copy($_FILES['kk']['tmp_name'],"../dataFoto/scan_kk/".$file_kk);
		echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	  }else{
		echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>" ;
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
      }
}
	
?>
