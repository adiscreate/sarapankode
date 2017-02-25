<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>

<h2 class="page-header"><?php echo $title; ?></h2>

<form class="form" method="post" action="<?php echo base_url(); ?>/index.php/home/update">
	<input type="hidden" name="input_id" value="<?php echo $detail['id']; ?>">

	<div class="form-group">
		<label>Tugas</label>
		<input type="text" name="input_tugas" class="form-control" value="<?php echo $detail['tugas'];?>" required="">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea id="editor" name="input_deskripsi" class="form-control" value="<?php echo $detail['deskripsi']; ?>" required=""></textarea>
		<input type="hidden" id="sampel" value="<?php echo $detail['deskripsi']; ?>">
	</div>
	<div class="form-group">
		<label>Prioritas</label>
		<select name="input_prioritas" class="form-control">
			<option value="High" <?php $detail['prioritas']=='High' ?  print 'selected="selected"': ''?>>High</option>
			<option value="Medium" <?php $detail['prioritas']=='Medium' ?  print 'selected="selected"': ''?>>Medium</option>
			<option value="Low" <?php $detail['prioritas']=='Low' ?  print 'selected="selected"': ''?>>Low</option>
		</select>
	</div>
	<div class="form-group">
		<button type="submit" name="submit" class="btn btn-primary">Update</button>
	</div>
</form>

<script type="text/javascript">
	CKEDITOR.replace('editor');

	var x = document.getElementById('sampel').value;
	CKEDITOR.instances.editor.setData(x);
</script>