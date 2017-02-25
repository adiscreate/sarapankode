
	<h2 class="page-header">Daftar Tugas</h2>

	<p>Ini adalah daftar tugas yang harus diselesaikan pada bulan <strong>Februari</strong> tahun <strong>2017</strong> : </p>

	<table class="table table-striped table-hover">
		<tr>
			<th>#</th>
			<th>Tugas</th>
			<th class="col-md-7">Deskripsi</th>
			<th class="col-md-1">Prioritas</th>
			<th class="col-md-1">Aksi</th>
		</tr>

		<?php 
		$i = -1;
		foreach($tugas as $tugas_item) { $i++; ?>
			<tr>
				<td><?php echo $i+1; ?></td>
				<td><?php echo $tugas_item['tugas'];?></td>
				<td><?php echo $tugas_item['deskripsi'];?></td>
				<td><?php echo $tugas_item['prioritas'];?></td>
				<td> 
				<a href="<?php echo base_url();?>index.php/home/view/<?php echo trim($tugas_item['id']);?>" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-list"></span></a> 
				<a href="<?php echo base_url();?>index.php/home/update/<?php echo trim($tugas_item['id']);?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a> 
				<a href="<?php echo base_url();?>index.php/home/delete/<?php echo trim($tugas_item['id']);?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a> 
				</td>
			</tr>
		<?php } ?>
	</table>