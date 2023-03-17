<?php 

include '../konek.php';
date_default_timezone_set('Asia/Jakarta');
?>
<?php
	if(!isset($_POST['tampilkan'])){
		$tahun = isset($_POST['tahun']) ? $_POST['tahun'] : '';
	$sql = "SELECT
		data_user.nik,
		data_user.nama,
		data_request_sktu.acc,
		data_request_sktu.keperluan,
		data_request_sktu.request
	FROM
		data_user
	INNER JOIN data_request_sktu ON data_request_sktu.nik = data_user.nik
	WHERE data_request_sktu.status = 3";
	$query = mysqli_query($konek,$sql);

	}elseif(isset($_POST['tampilkan'])){
		$tahun = isset($_POST['tahun']) ? $_POST['tahun'] : '';
	$sql = "SELECT
		data_user.nik,
		data_user.nama,
		data_request_sktu.acc,
		data_request_sktu.keperluan,
		data_request_sktu.request
	FROM
		data_user
	INNER JOIN data_request_sktu ON data_request_sktu.nik = data_user.nik
	WHERE year(data_request_sktu.acc) = '$tahun'";
	$query = mysqli_query($konek,$sql);
	}

?>

            <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">LAPORAN SURAT KETERANGAN TEMPAT USAHA</h2>
							</div>
						</div>
					</div>
                </div>
                <div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
								<div class="card-tools">
								<form action="" method="POST">
                                            <div class="form-group">
                                                <select name="tahun" class="form-control">
													<option value="">Pilih Tahun</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2029">2029</option>
                                                    <option value="2030">2030</option>
                                                    <option value="2031">2031</option>
													<option value="2032">2032</option>
													<option value="2033">2033</option>
													<option value="2034">2034</option>
												</select>
                                                <div class="form-group">
                                                    <input type="submit" name="tampilkan" value="Tampilkan" class="btn btn-primary btn-sm">
													<a href="?halaman=laporan_sktu">
													<input type="submit" value="Reload" class="btn btn-primary btn-sm">
													</a>
                                                </div>
                                            </div>
                                        </form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-tools">
											<a href="cetak_laporan_sktu.php?tahun=<?php echo $tahun;?>" target="_blank" class="btn btn-info btn-border btn-round btn-sm">
												<span class="btn-label">
													<i class="fa fa-print"></i>
												</span>
												Print
											</a>
										</div>
								</div>
								<div class="card-body">
									<table class="table mt-3">
										<thead>
											<tr>
												<th scope="col">No</th>
												<th scope="col">Tanggal ACC</th>
												<th scope="col">Nama</th>
												<th scope="col">Nik</th>
												<th scope="col">Keperluan</th>
												<th scope="col">Request</th>
											</tr>
										</thead>
										<tbody>
											<?php
												$no=0;
												while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
													$no++;
													$nik = $data['nik'];	
													$nama = $data['nama'];
													$tanggal = $data['acc'];
													$tgl = date('d F Y', strtotime($tanggal));
													$keperluan = $data['keperluan'];
													$request = $data['request'];
											?>
											<tr>
												<td><?php echo $no;?></td>
												<td><?php echo $tgl;?></td>
												<td><?php echo $nik;?></td>
												<td><?php echo $nama;?></td>
												<td><?php echo $keperluan;?></td>
												<td><?php echo $request;?></td>
											</tr>
											<?php
												}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
			</div>