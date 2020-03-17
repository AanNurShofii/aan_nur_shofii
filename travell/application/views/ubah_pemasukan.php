
<h4>Ubah Pemasukan</h4>
<?php if ($this->session->flashdata('message')) { ?>
	<div class="alert alert-dismissible alert-danger">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<p class="mb-0"><?php echo $this->session->flashdata('message');?></p>
	</div>
<?php } ?>
<form action="<?=base_url('p/update_pemasukan');?>" method="POST">
<div class="form-group">
		<label class="col-form-label" for="nomor">Nomor</label>
		<input type="number" class="form-control" name="nomor" id="nomor" value="<?=$nomor;?>" readonly="">
	</div>
	<div class="form-group">
		<label class="col-form-label" for="nama">Nama</label>
		<input class="form-control" name="nama" id="nama" placeholder="Isi nama anda" value="<?=$nama;?>" required="">
	</div>
	<div class="form-group">
		<label class="col-form-label" for="alamat">Alamat</label>
		<input type="text" class="form-control" name="alamat" id="alamat" value="<?=$alamat;?>" placeholder="Isi alamat anda" required="">
	</div>
	<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
</form>


