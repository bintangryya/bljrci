<table class="table table-bordered" >
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddSiswa'); ?>" class="btn btn-primary">Add</a>
		</td>
	</tr>
	<tr>
		<th>NIS</th>
		<th>Nama</th>
		<th>alamat</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataSiswa))
	{
		foreach($DataSiswa as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->nis; ?></td>
		<td><?php echo $ReadDS->nama; ?></td>
		<td><?php echo $ReadDS->alamat; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataSiswa/'.$ReadDS->nis.'/view') ?>" class="btn btn-success">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataSiswa/'.$ReadDS->nis) ?>" class="btn btn-danger">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>