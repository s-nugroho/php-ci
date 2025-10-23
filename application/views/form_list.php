<a href="<?= site_url('form/list') ?>" class="btn btn-primary mb-2">Tambah Data</a>
<table class="table table-bordered">
	<thead>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Tanggal Lahir</th>
		<th>Pekerjaan</th>
		<th>TB</th>
		<th>BB</th>
		<th>BMI</th>
		<th>TD</th>
		<th>Gol. Darah</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	<?php $no=1; foreach($data_kesehatan as $row): ?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $row->nama ?></td>
			<td><?= $row->ttl ?></td>
			<td><?= $row->pekerjaan ?></td>
			<td><?= $row->tb ?></td>
			<td><?= $row->bb ?></td>
			<td><?= $row->bmi ?></td>
			<td><?= $row->td ?></td>
			<td><?= $row->gol_darah ?></td>
			<td>
				<a href="<?= site_url('health/edit/'.$row->id) ?>" class="btn btn-sm btn-warning">Edit</a>
				<a href="<?= site_url('health/delete/'.$row->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
