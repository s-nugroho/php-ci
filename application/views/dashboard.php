<?php $this->load->view('templates/header', ['title' => 'Dashboard']); ?>
<?php $this->load->view('templates/sidebar'); ?>

<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<h1>Dashboard</h1>
		</div>
	</section>
	<section class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<p>Selamat datang di Dashboard AdminLTE via CDN!</p>
				</div>
			</div>
		</div>
	</section>
</div>

<?php $this->load->view('templates/footer'); ?>
