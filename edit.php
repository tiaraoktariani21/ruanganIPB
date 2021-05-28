<?php include('config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data</font></center>

		<hr>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['NIM'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$NIM = $_GET['NIM'];

			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE NIM='$NIM'") or die(mysqli_error($koneksi));

			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>

		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$Nim 			= $_POST['NIM'];
			$Nama			= $_POST['Nama'];
			$Jenis_Kelamin	= $_POST['Jenis_Kelamin'];
			$Program_Studi	= $_POST['Program_Studi'];
			$Jenis_Gedung	= $_POST['Jenis_Gedung'];
			$Tanggal		= $_POST['Tanggal'];
			$Transaksi		= $_POST['Transaksi'];

			$sql = mysqli_query($koneksi, "UPDATE mahasiswa SET Nama='$Nama', Jenis_Kelamin='$Jenis_Kelamin', Program_Studi='$Program_Studi', Jenis_Gedung='$Jenis_Gedung', Tanggal='$Tanggal', Transaksi='$Transaksi' WHERE NIM='$Nim'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=tampil_mhs";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<!-- tes -->
		<?php 
		include("config.php");
		$NIM = $_GET['Nim'];
		$select = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE NIM='$NIM'") or die(mysqli_error($koneksi));
		while($data = mysqli_fetch_assoc($select)) { ?>
		<form action="edit.php" method="post">
			<input type="hidden" name="id" value="<?= $data['Nim'] ?>">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">NIM</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="NIM" class="form-control" size="4" value="<?= $data['Nim'] ?>" required>
				</div>
			</div>

			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Mahasiswa</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nama" class="form-control" value="<?= $data['Nama'] ?>" required>
				</div>
			</div>

			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
				<div class="col-md-6 col-sm-6 ">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-outline-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="Jenis_Kelamin" value="Laki-Laki" <?php if($data['Jenis_Kelamin'] == 'Laki-Laki') echo 'checked="checked"' ?> required>Laki-Laki
						</label>
						<label class="btn btn-outline-dark" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="Jenis_Kelamin" value="Perempuan" <?php if($data['Jenis_Kelamin'] == 'Perempuan') echo 'checked="checked"' ?> required>Perempuan
						</label>
					</div>
				</div>
			</div>

			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Program Studi</label>
				<div class="col-md-6 col-sm-6">
					<select name="Program_Studi" class="form-control" required>
						<option value="">Pilih Program Studi</option>
						<option value="Meteorologi Terapan" <?php if($data['Program_Studi'] == 'Meteorologi Terapan') echo 'selected="selected"' ?>>Meteorologi Terapan</option>
						<option value="Ilmu Komputer" <?php if($data['Program_Studi'] == 'Ilmu Komputer') echo 'selected="selected"' ?>>Ilmu Komputer</option>
						<option value="ITK" <?php if($data['Program_Studi'] == 'ITK') echo 'selected="selected"' ?>>ITK</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Gedung</label>
				<div class="col-md-6 col-sm-6">
					<select name="Jenis_Gedung" class="form-control" required>
						<option value="">Pilih Jenis Gedung</option>
						<option value="Auditorium" <?php if($data['Jenis_Gedung'] == 'Auditorium') echo 'selected="selected"' ?>>Auditorium</option>
						<option value="Kelas" <?php if($data['Jenis_Gedung'] == 'Kelas') echo 'selected="selected"' ?>>Kelas</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal</label>
				<div class="col-md-6 col-sm-6">
					<input type="date" name="Tanggal" class="form-control" value="<?= $data['Tanggal'] ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Transaksi</label>
				<div class="col-md-6 col-sm-6">
					<select name="Transaksi" class="form-control" required>
						<option value="">Pilih Jenis Transaksi</option>
						<option value="Transfer Bank" <?php if($data['Transaksi'] == 'Transfer Bank') echo 'selected="selected"' ?>>Transfer Bank</option>
						<option value="Go Pay" <?php if($data['Transaksi'] == 'Go Pay') echo 'selected="selected"' ?>>Go Pay</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="index.php?page=tampil_mhs" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form><?php } ?>
	</div>