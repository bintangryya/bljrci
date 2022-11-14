<table class="table table-bordered" >
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddKelas'); ?>" class="btn btn-primary">Add</a>
		</td>
	</tr>
	<tr>
		<th>kode kelas</th>
		<th>nama kelas</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataKelas))
	{
		foreach($DataKelas as $ReadDK)
		{
	?>

	<tr>
		<td><?php echo $ReadDK->kd_kelas; ?></td>
		<td><?php echo $ReadDK->nama_kelas; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataKelas/'.$ReadDK->kd_kelas.'/view') ?>" class="btn btn-success">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteKelas/'.$ReadDK->kd_kelas) ?>" class="btn btn-danger">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>