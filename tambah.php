<?php include('config.php'); ?>

		<center><font size="6">Tambah Data</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$NIM			= $_POST['NIM'];
			$Nama 		    = $_POST['Nama'];
			$Jenis_Kelamin	= $_POST['Jenis_Kelamin'];
			$Program_Studi  = $_POST['Program_Studi'];
			$Jenis_Gedung   = $_POST['Jenis_Gedung'];
			$Tanggal		= $_POST['Tanggal'];
			$Transaksi		= $_POST['Transaksi'];

			$cek = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE NIM='$NIM'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO mahasiswa(NIM, Nama, Jenis_Kelamin, Program_Studi, Jenis_Gedung, Tanggal, Transaksi) VALUES('$NIM', '$Nama', '$Jenis_Kelamin', '$Program_Studi', '$Jenis_Gedung', '$Tanggal', '$Transaksi')") or die(mysqli_error($koneksi));

				if($sql){
					// echo '<script>alert("Berhasil menambahkan data."); document.location="tampil.php";</script>';
					echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampil_mhs";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, NIM sudah terdaftar.</div>';
			}
		}
		?>

		<form action="tambah.php" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">NIM</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="NIM" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Mahasiswa</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nama" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
				<div class="col-md-6 col-sm-6 ">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-outline-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="Jenis_Kelamin" value="Laki-Laki" required>Laki-Laki
						</label>
						<label class="btn btn-outline-dark " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="Jenis_Kelamin" value="Perempuan" required>Perempuan
						</label>
					</div>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Program Studi</label>
				<div class="col-md-6 col-sm-6">
					<select name="Program_Studi" class="form-control" required>
						<option value="">Pilih Program Studi</option>
						<option value="Meteorologi Terapan">Meteorologi Terapan</option>
						<option value="Ilmu Komputer">Ilmu Komputer</option>
						<option value="ITK">ITK</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Gedung</label>
				<div class="col-md-6 col-sm-6">
					<select name="Jenis_Gedung" class="form-control" required>
						<option value="">Pilih Jenis Gedung</option>
						<option value="Auditorium">Auditorium</option>
						<option value="Kelas">Kelas</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="date" name="Tanggal" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Transaksi</label>
				<div class="col-md-6 col-sm-6">
					<select name="Transaksi" class="form-control" required>
						<option value="">Pilih Jenis Transaksi</option>
						<option value="Transfer Bank">Transfer Bank</option>
						<option value="Go Pay">Go Pay</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>
