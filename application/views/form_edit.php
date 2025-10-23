<?php $this->load->view('templates/header', ['title' => 'Form Data Kesehatan']); ?>
<?php $this->load->view('templates/sidebar'); ?>

<div class="container mt-4">
	<h2>Edit Data Kesehatan</h2>
	<form action="<?= site_url('form/update/'.$record->id) ?>" method="post">
		<div class="form-group">
			<label>Nama</label>
			<input type="text" name="nama" class="form-control" value="<?= $record->nama ?>" required>
		</div>

		<div class="form-group">
			<label>Tanggal Lahir</label>
			<input type="date" name="ttl" class="form-control" value="<?= $record->ttl ?>" required>
		</div>

		<div class="form-group">
			<label>Pekerjaan</label>
			<input type="text" name="pekerjaan" class="form-control" value="<?= $record->pekerjaan ?>" required>
		</div>

		<div class="form-group">
			<label>Tinggi Badan (cm)</label>
			<input type="number" name="tb" class="form-control" value="<?= $record->tb ?>" required>
		</div>

		<div class="form-group">
			<label>Berat Badan (kg)</label>
			<input type="number" name="bb" class="form-control" value="<?= $record->bb ?>" required>
		</div>

		<div class="form-group">
			<label>BMI</label>
			<input type="number" name="bmi" class="form-control" value="<?= $record->bmi ?>">
		</div>

		<div class="form-group">
			<label>Tekanan Darah</label>
			<input type="text" name="td" class="form-control" value="<?= $record->td ?>">
		</div>

		<div class="form-group">
			<label>Golongan Darah</label>
			<select name="gol_darah" class="form-control">
				<option <?= $record->gol_darah == 'A' ? 'selected' : '' ?>>A</option>
				<option <?= $record->gol_darah == 'B' ? 'selected' : '' ?>>B</option>
				<option <?= $record->gol_darah == 'AB' ? 'selected' : '' ?>>AB</option>
				<option <?= $record->gol_darah == 'O' ? 'selected' : '' ?>>O</option>
			</select>
		</div>

		<button type="submit" class="btn btn-primary">Update</button>
		<a href="<?= site_url('form') ?>" class="btn btn-secondary">Kembali</a>
	</form>
</div>
