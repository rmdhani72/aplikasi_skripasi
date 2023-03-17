<?php
    include '../konek.php';
?>
<!-- Fonts and icons -->
<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
<?php
	if(isset($_GET['tahun'])){
        $tahun=$_GET['tahun'];
    $sql = "SELECT
		data_user.nik,
		data_user.nama,
		data_request_sku.acc,
        data_request_sku.tanggal_request,
		data_request_sku.keperluan,
		data_request_sku.request
	FROM
		data_user
	INNER JOIN data_request_sku ON data_request_sku.nik = data_user.nik
	WHERE year(data_request_sku.acc) = '$tahun'";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK SURAT KETERNGAN USAHA</title>
</head>
<body>
<table border="0" align="center">
        <tr>
        <td><img src="../main/img/db/tanahlaut.png" width="70" height="87" alt=""></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
            <td>
                <center>
                    <font size="4"><b>LAPORAN SURAT KETERANGAN USAHA</b></font><br>
                    <font size="4"><b>DESA DURIAN BUNGKUK</b></font><br>
                    <font size="4"><b>TAHUN <?php echo $tahun;?></b></font><br>
                </center>
            </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
            <td colspan="45"><hr color="black"></td>
        </tr>
    </table>
    <br>
    <center>
<table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Tanggal Request</th>
            <th>Tanggal ACC</th>
            <th>Nama</th>
            <th>Keperluan</th>
            <th>Request</th>
        </tr>
        <?php
            $no=0;
            $query=mysqli_query($konek,$sql);
            while($data=mysqli_fetch_array($query,MYSQLI_BOTH)){
                $no++;
                // $nik = $data['nik'];
                $nama = $data['nama'];
                $tanggal = $data['acc'];
                $format1 = date('d F Y',strtotime($tanggal));
                $keperluan = $data['keperluan'];
                $request = $data['request'];
                $tglreq = $data['tanggal_request'];
                $req = date('d F Y',strtotime($tglreq));
        ?>
        <tbody>
            <tr>
                <th><?php echo $no;?></th>
                <td><?php echo $req;?></td>
                <td><?php echo $format1;?></td>
                <!-- <td><?php echo $nik;?></td> -->
                <td><?php echo $nama;?></td>
                <td><?php echo $keperluan;?></td>
                <td><?php echo $request;?></td>
            </tr>
        </tbody>
        <?php
            }
        }
        ?>
</table>
    </center>


<br>
<br>
        <table border='0' align="right">
            <tr>
                <td style="text-align: center"><b>Durian Bungkuk, <?php echo date('d F Y');?></b></td>
            </tr>
        </table>
        <br><br><br><br><br>
        <table border='0' align="right">
            <tr>
                <td style="text-align: center"><b>Kepala Desa Durian Bungkuk</b></td>
            </tr>
            <tr>
                <td style="text-align: center"><b>H.SUNHAJI</b></td>
            </tr>
        </table>
</body>
</html>
<script>
    window.print();
</script>