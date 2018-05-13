<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Sistem Informasi Mahasiswa</title>
</head>

<body>
	<header>
		<div id="logo">
				<div class="logo-left">
				<img src="images/himsya.png" />
			</div>
		</div>
				
		<div id="description">
			<div class="app-name">
				SISTEM INFORMASI MAHASISWA
			</div>
			
			<div class="app-author">
				STMIK HIMSYA SEMARANG
			</div>
		</div>
	</header>

	<article>
	
	<?php
		include "connect.php";
	?>
			
		<div id="post">
					
			<div class="post-form">
				<form method="post">
					<input class="textarea" name="no" type="text" placeholder="MASUKAN NIM ANDA" required />
					<input class="button" name="submit" type="submit" value="LIHAT !"/>
				</form>
			</div>
		</div>
		
		<?php
		if(isset($_REQUEST['submit'])){
			$numexam = $_REQUEST['no'];
			
			$result = mysqli_query($db_conn, "SELECT * FROM mahasiswa WHERE nim='$numexam'");
			if(mysqli_num_rows($result) > 0){
				$data = mysqli_fetch_array($result);
		?>	
		
		<table id="identity">
			<tr>			
				<td class="parameter">NIM</td>
				<td class="space">:</td>
				<td class="value"><?php echo $data['nim']; ?></td>
			</tr>
			
			<tr>			
				<td class="parameter">Nama</td>
				<td class="space">:</td>
				<td class="value"><?php echo $data['nama']; ?></td>
			</tr>
			
			<tr>			
				<td class="parameter">Kompetensi Keahlian</td>
				<td class="space">:</td>
				<td class="value"><?php echo $data['prodi']; ?></td>
			</tr>
			
			<tr>			
				<td class="parameter">Semester</td>
				<td class="space">:</td>
				<td class="value"><?php echo $data['semester']; ?></td>
			</tr>
			
			<tr>			
				<td class="parameter">Alamat</td>
				<td class="space">:</td>
				<td class="value"><?php echo $data['alamat']; ?></td>
			</tr>
			
			<tr>			
				<td class="parameter">No HP</td>
				<td class="space">:</td>
				<td class="value"><?php echo $data['no_hp']; ?></td>
			</tr>
		</table>
		
		<?php
			} else {
				echo '
				<div class="alert-sorry">
				    Nomor Induk Tidak Ditemukan !</br>
					Periksa Kembali Nomor Induk Anda.
				</div>';
			} 
		}else {
				
			?>
			<?php
			}
			?>
			
		<!--
		<div id="countdown">
		            Berdasarkan Hasil Rapat Pleno Dewan Guru SMK Negeri 1 Wirosari pada tanggal 2 Mei 2018, </br>tentang Pengumuman Kelulusan Tahun Ajaran 2017/2018 disampaikan bahwa :
		            </br>
			        Pengumuman dapat diakses pada tanggal <strong>3 Mei 2018 Pukul 15.00 WIB</strong></br></br><strong>Dalam Hitungan Mundur</strong></br>
				    <script type="text/javascript" src="./countdown/jquery-2.0.3.js"></script>
                    <script type="text/javascript" src="./countdown/jquery.countdownTimer.js"></script>
                    <span id="future_date"></span>
                <div class="timer">
                   <script>
                        $(function(){
                            $('#future_date').countdowntimer({
                                dateAndTime : "2018-05-03 15:00:00",
                                size : "lg",
                                regexpMatchFormat: "([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2}):([0-9]{1,2})",
                                regexpReplaceWith: "$2:$3:$4"
                            });
                        });
                    </script>
                </div>
		</div>
		-->
		
		<div id="spanner">
		    <br/><br/>
		</div>
	</article>
	
	</body>
</html>