<!-- Flash Message Section -->

<?php if ($this->session->flashdata('flashMessage') == TRUE) : ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<p>
			<?php echo $this->session->flashdata('flashMessage'); ?>
		</p>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
<?php endif; ?>


<!-- Search Form Section -->
<div class="container-fluid mt-3">
	<div class="row d-flex flex-row-reverse">
		<div class="col-4">
			<form action="" method="post" class="d-flex">
				<div class="input-group">
					<input type="search" class="form-control rounded me-2" name="keyword" id="search" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
					<button type="submit" class="btn btn-outline-dark rounded">Search</button>
				</div>
			</form>
		</div>
	</div>
</div>


<!-- Data Section -->
<div class="container-fluid">
	<table class="table table-bordered mt-3">
		<thead>
			<tr>
				<td class="text-center"><strong>Nama Mahasiswa</strong></td>
				<td class="text-center"><strong>Asal Instansi</strong></td>
				<td class="text-center"><strong>Unit Kerja</strong></td>
				<td class="text-center"><strong>Keterangan</strong></td>
				<td class="text-center"><strong>Status</strong></td>
				<td class="text-center"><strong>Keterangan Status</strong></td>
				<td class="text-center"><strong>Tanggal Masuk</strong></td>
				<td class="text-center"><strong>Tanggal Keluar</strong></td>
				<td class="text-center" colspan="5"><strong>Aksi</strong></td>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($mahasiswa as $mhs) : ?>
				<tr>
					<td><?= $mhs['nama']; ?></td>
					<td><?= $mhs['instansi']; ?></td>
					<td><?= $mhs['unit']; ?></td>
					<td><?= $mhs['ketentuan']; ?></td>
					<td><?= $mhs['status']; ?></td>
					<td><?= $mhs['keterangan']; ?></td>
					<td><?= date_indo($mhs['tanggal_masuk']); ?></td>
					<td><?= date_indo($mhs['tanggal_keluar']); ?></td>
					<td>
						<a href="<?= base_url("root/detil/") . $mhs['nim']; ?>" class="btn btn-sm"><img src="<?= base_url("assets/loupe.png"); ?>" width="25" data-toggle="tooltip" title="Detil Data Mahasiswa"></a>
					</td>
					<td>
						<a href="<?= base_url("root/ubah/") . $mhs['nim']; ?>" class="btn btn-sm" data-toggle="tooltip" title="Ubah Data Mahasiswa">
							<img src="<?= base_url("assets/edit.png"); ?>" width="25">
						</a>
					</td>
					<td>
						<a href="<?= base_url("root/buatSurat/") . $mhs['nim']; ?>" class="btn btn-sm">
							<img src="<?= base_url("assets/email.png"); ?>" width="25" data-toggle="tooltip" title="Buat Data Surat">
						</a>
					</td>
					<td>
						<div class="dropdown show dropleft">
							<a class="btn btn-light dropdown-toggle" href="<?= base_url("root/pdf/") . $mhs['nim']; ?>" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="<?= base_url("assets/printer.png"); ?>" width="25" data-toggle="tooltip" title="Cetak Surat">
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="<?= base_url("root/pdf/") . $mhs['nim']; ?>" class="btn btn-sm" target="_blank">Diterima</a>
								<a class="dropdown-item" href="<?= base_url("root/pdf4/") . $mhs['nim']; ?>" class="btn btn-sm" target="_blank">Ditolak</a>
							</div>
						</div>
					</td>
					<td>
						<a href="<?= base_url("root/hapus/") . $mhs['nim'] . "/" . $mhs['surat_magang'] . "/" . $mhs['khs']; ?>" class="btn btn-sm " data-toggle="tooltip" title="Hapus Data" onclick="return confirm(`Yakin ingin menghapus?`)">
							<img src="<?= base_url("assets/trash.png"); ?>" width="25">
						</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>