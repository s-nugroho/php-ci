<?php $this->load->view('templates/header', ['title' => 'Hasil Form']); ?>
<?php $this->load->view('templates/sidebar'); ?>

<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<h1>Data Berhasil Dikirim</h1>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<p><strong>Nama:</strong> <?= htmlspecialchars($name) ?></p>
					<p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
					<p><strong>Pesan:</strong> <?= nl2br(htmlspecialchars($message)) ?></p>
					<a href="<?= site_url('form') ?>" class="btn btn-secondary">Kembali</a>
				</div>
			</div>
		</div>
	</section>
</div>

<?php $this->load->view('templates/footer'); ?>
