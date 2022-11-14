<table class="table table-bordered">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddGuru'); ?>" class="btn btn-primary">Add</a>
		</td>
	</tr>
	<tr>
		<th>NIP</th>
		<th>Nama</th>
		<th>no_hp</th>
		<th>email</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataGuru))
	{
		foreach($DataGuru as $ReadDG)
		{
	?>

	<tr>
		<td><?php echo $ReadDG->nip; ?></td>
		<td><?php echo $ReadDG->nama; ?></td>
		<td><?php echo $ReadDG->no_hp; ?></td>
		<td><?php echo $ReadDG->email; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataGuru/'.$ReadDG->nip.'/view') ?>" class="btn btn-success">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataGuru/'.$ReadDG->nip) ?>" class="btn btn-danger">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>