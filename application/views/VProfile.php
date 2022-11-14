<table class="table table-bordered" >
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddProfile'); ?>" class="btn btn-primary">Add</a>
		</td>
	</tr>
	<tr>
		<th>kode profile</th>
		<th>nama</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataProfile))
	{
		foreach($DataProfile as $ReadDP)
		{
	?>

	<tr>
		<td><?php echo $ReadDP->kd_profile; ?></td>
		<td><?php echo $ReadDP->nama_profile; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataProfile/'.$ReadDP->kd_profile.'/view') ?>" class="btn btn-success">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataProfile/'.$ReadDP->kd_profile) ?>" class="btn btn-danger">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>