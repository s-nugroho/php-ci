<?php $this->load->view('templates/header', ['title' => 'Data Berhasil Dikirim']); ?>
<?php $this->load->view('templates/sidebar'); ?>

<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<h1>Data Kesehatan</h1>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="card card-success">
				<div class="card-header">
					<h3 class="card-title">Hasil Input</h3>
				</div>
				<div class="card-body">
					<table class="table table-bordered">
						<tr><th>Nama</th><td><?= htmlspecialchars($nama) ?></td></tr>
						<tr><th>Tanggal Lahir</th><td><?= htmlspecialchars($ttl) ?></td></tr>
						<tr><th>Pekerjaan</th><td><?= htmlspecialchars($pekerjaan) ?></td></tr>
						<tr><th>Tinggi Badan</th><td><?= htmlspecialchars($tb) ?> cm</td></tr>
						<tr><th>Berat Badan</th><td><?= htmlspecialchars($bb) ?> kg</td></tr>
						<tr><th>BMI</th><td><?= htmlspecialchars($bmi) ?></td></tr>
						<tr><th>Tekanan Darah</th><td><?= htmlspecialchars($td) ?></td></tr>
						<tr><th>Golongan Darah</th><td><?= htmlspecialchars($gol_darah) ?></td></tr>
					</table>
					<a href="<?= site_url('form') ?>" class="btn btn-secondary mt-3">Kembali</a>
				</div>
			</div>
		</div>
	</section>
</div>

<?php $this->load->view('templates/footer'); ?>
