<table class="table table-bordered" >
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddJadwal'); ?>" class="btn btn-primary">Add</a>
		</td>
	</tr>
	<tr>
		<th>jadwal</th>
		<th>kelas</th>
		<th>nama mapel</th>
		<th>nama guru</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataJadwal))
	{
		foreach($DataJadwal as $ReadDJ)
		{
	?>

	<tr>
		<td><?php echo $ReadDJ->kd_jadwal; ?></td>
		<td><?php echo $ReadDJ->nama_kelas; ?></td>
		<td><?php echo $ReadDJ->nama_mapel; ?></td>
		<td><?php echo $ReadDJ->nama; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataJadwal/'.$ReadDJ->kd_jadwal.'/view') ?>" class="btn btn-success">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteJadwal/'.$ReadDJ->kd_jadwal) ?>" class="btn btn-danger">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>