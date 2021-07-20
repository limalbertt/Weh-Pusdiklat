<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<h5>Nama</h5>
					<p class="card-text"><?= $mahasiswa['nama']; ?></p>
					<h5>Instansi</h5>
					<p class="card-text"><?= $mahasiswa['instansi']; ?></p>
					<h5>Program Studi</h5>
					<p class="card-text"><?= $mahasiswa['prodi']; ?></p>
					<h5>Semester</h5>
					<p class="card-text"><?= $mahasiswa['semester']; ?></p>
					<h5>Kontak</h5>
					<p class="card-text"><?= $mahasiswa['no_telp']; ?></p>
					<p class="card-text"><?= $mahasiswa['email']; ?></p>
					<h5>Unit</h5>
					<p class="card-text"><?= $mahasiswa['unit']; ?></p>
					<h5>Keterangan Magang</h5>
					<p class="card-text"><?= $mahasiswa['ketentuan']; ?></p>
					<h5>Kartu Hasil Studi</h5>
					<a href="<?= base_url("admin/getKHS/") . $mahasiswa['nim']; ?>"><?= $mahasiswa['khs']; ?></a>
					<h5>Surat Permohonan Magang</h5>
					<a href="<?= base_url("admin/getSuratMagang/") . $mahasiswa['nim']; ?>"><?= $mahasiswa['surat_magang']; ?></a>
					<h5>Status Magang</h5>
					<p class="card-text"><?= $mahasiswa['status']; ?></p>
					<h5>Keterangan Status</h5>
					<p class="card-text"><?= $mahasiswa['keterangan']; ?></p>
					<a href="<?= base_url("admin/index/"); ?>" class="btn btn-primary float-end">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>
