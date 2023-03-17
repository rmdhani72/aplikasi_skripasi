<?php
 session_start();
 if (isset($_SESSION['password'])=="" || ($_SESSION['hak_akses'])=="")  {
 header('location:login.php');
 }
 else{
 $hak_akses = $_SESSION['hak_akses'];
 }
 ?>
<?php include 'header.php'; ?>
<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="main2.php">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">fitur</h4>
						</li>
						<?php
							if($hak_akses=="Staf"){
						?>
						<li class="nav-item">
							<a href="?halaman=tampil_user">
								<i class="fas fa-user-alt"></i>
								<p>Data User</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="?halaman=permohonan_surat">
								<i class="far fa-calendar-check"></i>
								<p>Cetak Surat</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="?halaman=surat_dicetak">
								<i class="far fa-calendar-check"></i>
								<p>Surat Selesai</p>
							</a>
						</li>
						<?php
							 }elseif($hak_akses=="Kepala Desa"){
						?>
						<li class="nav-item">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-table"></i>
								<p>Laporan</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
									<a href="#perbulan-menu" data-toggle="collapse" aria-expanded="false">
										<span class="sub-item">Laporan Surat</span>
										<span class="caret"></span>
									</a>
									<ul class="collapse list-unstyled" id="perbulan-menu">
										<li>
										<a href="?halaman=laporan_sktm">
											<span class="sub-item">SKTM</span>
										</a>
										</li>
										<li>
										<a href="?halaman=laporan_sku">
											<span class="sub-item">SKU</span>
										</a>
										</li>
										<li>
										<a href="?halaman=laporan_sktu">
											<span class="sub-item">SKTU</span>
										</a>
										</li>
										<li>
										<a href="?halaman=laporan_skp">
											<span class="sub-item">SKP</span>
										</a>
										</li>
										<li>
										<a href="?halaman=laporan_skd">
											<span class="sub-item">SKD</span>
										</a>
										</li>
									</ul>
									</li>
									<li>
									<a href="?halaman=laporan_pertahun">
										<span class="sub-item">Pertahun</span>
									</a>
									</li>
								</ul>
								</div>

						</li>
						<?php
							}
						?>
						<li class="mx-4 mt-2">
							<a href="logout.php" class="btn btn-danger btn-block"><span class="btn-label mr-2"> <i class="icon-logout"></i> </span>Logout</a> 
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
			<?php
          if(isset($_GET['halaman'])){
            $hal = $_GET['halaman'];
            switch($hal){
              case 'beranda';
                include 'beranda.php';
              break;
              case 'ubah_pemohon';
                include 'ubah_pemohon.php';
			  break;
			  case 'tampil_pemohon';
                include 'tampil_pemohon.php';
			  break;
			  case 'request_sktm';
                include 'request_sktm.php';
			  break;
			  case 'request_sku';
                include 'request_sku.php';
			  break;
			  case 'request_sktu';
                include 'request_sktu.php';
			  break;
			  case 'request_skp';
                include 'request_skp.php';
			  break;
			  case 'request_skd';
                include 'request_skd.php';
			  break;
			  case 'tampil_status';
                include 'status_request.php';
			  break;
			  case 'belum_acc_sktm';
                include 'belum_acc_sktm.php';
			  break;
			  case 'belum_acc_sku';
                include 'belum_acc_sku.php';
			  break;
			  case 'belum_acc_sktu';
                include 'belum_acc_sktu.php';
			  break;
			  case 'belum_acc_skp';
                include 'belum_acc_skp.php';
			  break;
			  case 'belum_acc_skd';
                include 'belum_acc_skd.php';
			  break;
			  case 'sudah_acc_sktm';
                include 'acc_sktm.php';
			  break;
			  case 'sudah_acc_sku';
                include 'acc_sku.php';
			  break;
			  case 'sudah_acc_sktu';
                include 'acc_sktu.php';
			  break;
			  case 'sudah_acc_skp';
                include 'acc_skp.php';
			  break;
			  case 'sudah_acc_skd';
                include 'acc_skd.php';
			  break;
			  case 'detail_sktm';
                include 'detail_sktm.php';
			  break;
			  case 'detail_sku';
                include 'detail_sku.php';
			  break;
			  case 'detail_sktu';
			  include 'detail_sktu.php';
			break;
			  case 'detail_skp';
                include 'detail_skp.php';
			  break;
			  case 'detail_skd';
                include 'detail_skd.php';
			  break;
			  case 'cetak_sktm';
                include 'cetak_sktm.php';
			  break;
			  case 'tampil_user';
                include 'tampil_user.php';
			  break;
			  case 'tambah_user';
                include 'tambah_user.php';
			  break;
			  case 'ubah_user';
                include 'ubah_user.php';
			  break;
			  case 'view_sktm';
                include 'view_sktm.php';
			  break;
			  case 'view_sku';
                include 'view_sku.php';
			  break;
			  case 'view_sktu';
                include 'view_sktu.php';
			  break;
			  case 'view_skp';
                include 'view_skp.php';
			  break;
			  case 'view_skd';
                include 'view_skd.php';
			  break;
			  case 'view_cetak_sktm';
                include 'view_cetak_sktm.php';
			  break;
			  case 'view_cetak_sku';
                include 'view_cetak_sku.php';
			  break;
			  case 'view_cetak_sktu';
			  include 'view_cetak_sktu.php';
			break;
			  case 'view_cetak_skp';
                include 'view_cetak_skp.php';
			  break;
			  case 'view_cetak_skd';
                include 'view_cetak_skd.php';
			  break;
			  case 'surat_dicetak';
                include 'surat_dicetak.php';
              break;
			  case 'laporan_perbulan';
                include 'laporan_perbulan.php';
			  break;
			  case 'laporan_sktm';
			  include 'laporan_sktm.php';
			break;
			case 'laporan_sktu';
				include 'laporan_sktu.php';
		 	break;
		  	case 'laporan_sku';
		 		 include 'laporan_sku.php';
			break;
			case 'laporan_skp';
				include 'laporan_skp.php';
	  		break;
	  		case 'laporan_skd';
	  			include 'laporan_skd.php';
			break;
			  case 'laporan_pertahun';
                include 'laporan_pertahun.php';
			  break;
			  case 'permohonan_surat';
                include 'permohonan_surat.php';
              break;
              default:
                echo "<center>HALAMAN KOSONG</center>";
              break;
            }
          }else{
            include 'beranda2.php';
          }
        ?>
			</div>
<?php include 'footer.php'; ?>