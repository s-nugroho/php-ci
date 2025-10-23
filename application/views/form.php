<?php $this->load->view('templates/header', ['title' => 'Form Data Kesehatan']); ?>
<?php $this->load->view('templates/sidebar'); ?>

<div class="content-wrapper">
	<section class="content-header">
		<div class="container-fluid">
			<h1>Form Data Kesehatan</h1>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Yang bertandatangan dibawah ini Dokter RSUD Saras Adyatma menerangkan dengan
						sebenar-benarnya bahwa</h3>
				</div>

				<form action="<?= site_url('form/submit') ?>" method="post">
					<div class="card-body">

						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama"
								   placeholder="Masukkan nama lengkap" required>
						</div>

						<div class="form-group">
							<label for="ttl">Tanggal Lahir</label>
							<input type="date" class="form-control" id="ttl" name="ttl" required>
						</div>

						<div class="form-group">
							<label for="pekerjaan">Pekerjaan</label>
							<input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
								   placeholder="Masukkan pekerjaan" required>
						</div>

						<div class="form-group">
							<label for="tb">Tinggi Badan (cm)</label>
							<input type="number" class="form-control" id="tb" name="tb"
								   placeholder="Masukkan tinggi badan" required>
						</div>

						<div class="form-group">
							<label for="bb">Berat Badan (kg)</label>
							<input type="number" class="form-control" id="bb" name="bb"
								   placeholder="Masukkan berat badan" required>
						</div>

						<div class="form-group">
							<label for="bmi">BMI (Body Mass Index)</label>
							<input type="number" step="0.1" class="form-control" id="bmi" name="bmi"
								   placeholder="Masukkan nilai BMI">
						</div>

						<div class="form-group">
							<label for="td">Tekanan Darah (mmHg)</label>
							<input type="text" class="form-control" id="td" name="td" placeholder="Contoh: 120/80">
						</div>

						<div class="form-group">
							<label for="gol_darah">Golongan Darah</label>
							<select class="form-control" id="gol_darah" name="gol_darah" required>
								<option value="">-- Pilih Golongan Darah --</option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="AB">AB</option>
								<option value="O">O</option>
							</select>
						</div>

					</div>

					<div class="card-footer">
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>

					<script>
						document.addEventListener('DOMContentLoaded', function () {
							const tbInput = document.getElementById('tb');
							const bbInput = document.getElementById('bb');
							const bmiInput = document.getElementById('bmi');

							function calculateBMI() {
								const tb = parseFloat(tbInput.value);
								const bb = parseFloat(bbInput.value);
								if (tb > 0 && bb > 0) {
									const tinggiMeter = tb / 100;
									const bmi = (bb / (tinggiMeter * tinggiMeter)).toFixed(1);
									bmiInput.value = bmi;
								}
							}

							tbInput.addEventListener('input', calculateBMI);
							bbInput.addEventListener('input', calculateBMI);
						});
					</script>

				</form>
			</div>
		</div>
	</section>
</div>

<?php $this->load->view('templates/footer'); ?>
