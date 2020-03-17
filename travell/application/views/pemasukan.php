
<h4>Tambah Data Supir</h4>
	<?php if ($this->session->flashdata('message')) { ?>
		<div class="alert alert-dismissible alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<p class="mb-0"><?php echo $this->session->flashdata('message');?></p>
		</div>
	<?php } ?>
<form action="<?=base_url('p/tambah_pemasukan');?>" method="POST">
	<div class="form-group">
		<label class="col-form-label" for="nomor">Nomor</label>
		<input type="number" class="form-control" name="nomor" id="nomor" value="<?=$nomor;?>" required="">
	</div>
	<div class="form-group">
		<label class="col-form-label" for="nama">Nama</label>
		<textarea class="form-control" name="nama" id="nama" placeholder="Isi nama anda" required=""></textarea>
	</div>
	<div class="form-group">
		<label class="col-form-label" for="alamat">Alamat</label>
		<textarea class="form-control" name="alamat" id="alamat" placeholder="Isi nama anda" required=""></textarea>
	</div>
	<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
</form>
