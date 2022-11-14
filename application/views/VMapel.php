<table class="table table-bordered" >
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddMapel'); ?>" class="btn btn-primary">Add</a>
		</td>
	</tr>
	<tr>
		<th>mapel</th>
		<th>nama mapel</th>
		<th>kkm</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataMapel))
	{
		foreach($DataMapel as $ReadDM)
		{
	?>

	<tr>
		<td><?php echo $ReadDM->kd_mapel; ?></td>
		<td><?php echo $ReadDM->nama_mapel; ?></td>
		<td><?php echo $ReadDM->kkm; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataMapel/'.$ReadDM->kd_mapel.'/view') ?>" class="btn btn-success">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataMapel/'.$ReadDM->kd_mapel) ?>" class="btn btn-danger">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>