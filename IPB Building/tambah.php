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
						<option value="Manajemen Sumberdaya Lahan">Manajemen Sumberdaya Lahan</option>
						<option value="Agronomi & Hortikultura">Agronomi & Hortikultura</option>
						<option value="Proteksi Tanaman">Proteksi Tanaman</option>
						<option value="Arsitektur Lanskap">Arsitektur Lanskap</option>
						<option value="Kedokteran Hewan">Kedokteran Hewan</option>
						<option value="Teknologi & Manajemen Perikanan Budidaya">Teknologi & Manajemen Perikanan Budidaya</option>
						<option value="Manajemen Sumberdaya Perairan">Manajemen Sumberdaya Perairan</option>
						<option value="Teknologi Hasil Perairan">Teknologi Hasil Perairan</option>
						<option value="Teknologi & Manajemen Perikanan Tangkap">Teknologi & Manajemen Perikanan Tangkap</option>
						<option value="Ilmu & Teknologi Kelautan">Ilmu & Teknologi Kelautan</option>
						<option value="Teknologi Produksi Ternak">Teknologi Produksi Ternak</option>
						<option value="Nutrisi & Teknologi Pakan">Nutrisi & Teknologi Pakan</option>
						<option value="Teknologi Hasil Ternak">Teknologi Hasil Ternak</option>
						<option value="Manajemen Hutan">Manajemen Hutan</option>
						<option value="Teknologi Hasil Hutan">Teknologi Hasil Hutan</option>
						<option value="Konservasi Sumberdaya Hutan & Ekowisata">Konservasi Sumberdaya Hutan & Ekowisata</option>
						<option value="Silvikultur">Silvikultur</option>
						<option value="Teknik Pertanian & Biosistem">Teknik Pertanian & Biosistem</option>
						<option value="Teknologi Pangan">Teknologi Pangan</option>
						<option value="Teknik Industri Pertanian">Teknik Industri Pertanian</option>
						<option value="Teknik Sipil & Lingkungan">Teknik Sipil & Lingkungan</option>
						<option value="Statistika & Sains Data">Statistika & Sains Data</option>
						<option value="Meteorologi Terapan">Meteorologi Terapan</option>
						<option value="Biologi">Biologi</option>
						<option value="Kimia">Kimia</option>
						<option value="Matematika">Matematika</option>
						<option value="Ilmu Komputer">Ilmu Komputer</option>
						<option value="Fisika">Fisika</option>
						<option value="Biokimia">Biokimia</option>
						<option value="Aktuaria">Aktuaria</option>
						<option value="Ekonomi Pembangunan">Ekonomi Pembangunan</option>
						<option value="Manajemen">Manajemen</option>
						<option value="Agribisnis">Agribisnis</option>
						<option value="Ekonomi & Sumberdaya Lingkungan">Ekonomi & Sumberdaya Lingkungan</option>
						<option value="Ilmu Ekonomi Syariah">Ilmu Ekonomi Syariah</option>
						<option value="Ilmu Keluarga & Konsumen">Ilmu Keluarga & Konsumen</option>
						<option value="Komunikasi & Pengembangan Masyarakat">Komunikasi & Pengembangan Masyarakat</option>
						<option value="Bisnis">Bisnis</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Gedung</label>
				<div class="col-md-6 col-sm-6">
					<select name="Jenis_Gedung" class="form-control" required>
						<option value="">Pilih Jenis Gedung</option>
						<option value="Auditorium GMSK">Auditorium GMSK</option>
						<option value="Auditorium Toyib">Auditorium Toyib</option>
						<option value="Auditorium FMIPA">Auditorium FMIPA</option>
						<option value="RK FEM">RK FEM</option>
						<option value="RK AGH">RK AGH</option>
						<option value="RK FEMA">RK FEMA</option>
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
						<option value="Go Pay">Cash On Delivery</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>
