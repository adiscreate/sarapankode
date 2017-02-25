<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>

<h2 class="page-header"><?php echo $title; ?></h2>

<form class="form" method="post" action="<?php echo base_url(); ?>/index.php/home/tambah">
	<div class="form-group">
		<label>Tugas</label>
		<input type="text" name="input_tugas" class="form-control" required="">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea id="editor" name="input_deskripsi" class="form-control" required=""></textarea>
	</div>
	<div class="form-group">
		<label>Prioritas</label>
		<select name="input_prioritas" class="form-control">
			<option>High</option>
			<option>Medium</option>
			<option>Low</option>
		</select>
	</div>
	<div class="form-group">
		<button type="submit" name="submit" class="btn btn-primary">Simpan</button>
	</div>
</form>

<script type="text/javascript">
	CKEDITOR.replace('editor');
</script>