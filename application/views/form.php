<?php $this->load->view('templates/header', ['title' => 'Form Input']); ?>
<?php $this->load->view('templates/sidebar'); ?>

<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<h1>Form Input Data</h1>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Contoh Form</h3>
				</div>
				<!-- form start -->
				<form action="<?= site_url('form/submit') ?>" method="post">
					<div class="card-body">
						<div class="form-group">
							<label for="name">Nama</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Masukkan nama" required>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email" required>
						</div>
						<div class="form-group">
							<label for="message">Pesan</label>
							<textarea class="form-control" name="message" id="message" rows="3" placeholder="Tulis pesan..."></textarea>
						</div>
					</div>
					<!-- /.card-body -->

					<div class="card-footer">
						<button type="submit" class="btn btn-primary">Kirim</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>

<?php $this->load->view('templates/footer'); ?>
