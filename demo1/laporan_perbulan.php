<?php 

include '../konek.php';
date_default_timezone_set('Asia/Jakarta');
?>
<?php
	if(!isset($_POST['tampilkan'])){
		$bulan = isset($_POST['bulan']) ? $_POST['bulan'] : '';
		$tahun = isset($_POST['tahun']) ? $_POST['tahun'] : '';
		$sql = "SELECT
		data_user.nik,
		data_user.nama,
		data_request_sktm.acc,
		data_request_sktm.keperluan,
		data_request_sktm.request
	FROM
		data_user
	INNER JOIN data_request_sktm ON data_request_sktm.nik = data_user.nik
	WHERE data_request_sktm.status = 3
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		data_request_skd.acc,
		data_request_skd.keperluan,
		data_request_skd.request
	FROM
		data_user
	INNER JOIN data_request_skd ON data_request_skd.nik = data_user.nik
	WHERE data_request_skd.status = 3
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		data_request_skp.acc,
		data_request_skp.keperluan,
		data_request_skp.request
	FROM
		data_user
	INNER JOIN data_request_skp ON data_request_skp.nik = data_user.nik
	WHERE data_request_skp.status = 3
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		data_request_sku.acc,
		data_request_sku.keperluan,
		data_request_sku.request
	FROM
		data_user
	INNER JOIN data_request_sku ON data_request_sku.nik = data_user.nik
	WHERE data_request_sku.status = 3
	UNION
	SELECT
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
		$bulan = isset($_POST['bulan']) ? $_POST['bulan'] : '';
		$tahun = isset($_POST['tahun']) ? $_POST['tahun'] : '';
	$sql = "SELECT
		data_user.nik,
		data_user.nama,
		data_request_skp.acc,
		data_request_skp.keperluan,
		data_request_skp.request
	FROM
		data_user
	INNER JOIN data_request_skp ON data_request_skp.nik = data_user.nik
	WHERE month(data_request_skp.acc) = '$bulan' AND year(data_request_skp.acc) = '$tahun'AND data_request_skp.status = 3
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		data_request_sku.acc,
		data_request_sku.keperluan,
		data_request_sku.request
	FROM
		data_user
	INNER JOIN data_request_sku ON data_request_sku.nik = data_user.nik
	WHERE month(data_request_sku.acc) = '$bulan' AND year (data_request_sku.acc) = '$tahun' AND data_request_sku.status = 3
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		data_request_sktu.acc,
		data_request_sktu.keperluan,
		data_request_sktu.request
	FROM
		data_user
	INNER JOIN data_request_sktu ON data_request_sktu.nik = data_user.nik
	WHERE month(data_request_sktu.acc) = '$bulan' AND year (data_request_sktu.acc) = '$tahun' AND data_request_sktu.status = 3
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		data_request_skd.acc,
		data_request_skd.keperluan,
		data_request_skd.request
	FROM
		data_user
	INNER JOIN data_request_skd ON data_request_skd.nik = data_user.nik
	WHERE month(data_request_skd.acc) = '$bulan' AND year (data_request_skd.acc) = '$tahun'AND data_request_skd.status = 3
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		data_request_sktm.acc,
		data_request_sktm.keperluan,
		data_request_sktm.request
	FROM
		data_user
	INNER JOIN data_request_sktm ON data_request_sktm.nik = data_user.nik
	WHERE month(data_request_sktm.acc) = '$bulan' AND year(data_request_sktm.acc) = '$tahun' AND data_request_sktm.status = 3";
	$query = mysqli_query($konek,$sql);
	}

?>

			    <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">LAPORAN PERBULAN REQUEST SURAT KETERANGAN</h2>
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
                                                <select name="bulan" id="bulan" class="form-control">
													<option value="">Pilih Bulan Disini</option>
                                                    <option value="1">Januari</option>
                                                    <option value="2">Februari</option>
                                                    <option value="3">Maret</option>
                                                    <option value="4">April</option>
                                                    <option value="5">Mei</option>
                                                    <option value="6">Juni</option>
                                                    <option value="7">Juli</option>
                                                    <option value="8">Agustus</option>
                                                    <option value="9">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">Nopember</option>
                                                    <option value="12">Desember</option>
												</select>
												<select name="tahun" id="tahun" class="form-control mt-2">
													<option value="">Pilih Tahun Disini</option>
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
													<a href="?halaman=laporan_perbulan">
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
											<a href="cetak_bulan.php?bulan=<?php echo $bulan?>" target="_blank" class="btn btn-info btn-border btn-round btn-sm">
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
                                                <th scope="col">Nik</th>
												<th scope="col">Nama</th>
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

