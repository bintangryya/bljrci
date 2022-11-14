<form action="<?php echo site_url('Welcome/UpdateDataGuru'); ?>" method="post">
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="hidden" name="nip" class="form-control" value="<?php echo $detail['nip']; ?>">
			<input type="text" name="nama" class="form-control" value="<?php echo $detail['nama']; ?>">
		</td>
	</tr>
	<tr>
		<td>no_tlp</td>
		<td>:</td>
		<td>
			<input type="text" name="no_hp" class="form-control" value="<?php echo $detail['no_hp']; ?>">
		</td>
		<td>email</td>
		<td>:</td>
		<td>
			<input type="text" name="email" class="form-control" value="<?php echo $detail['email']; ?>">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan">
		</td>
	</tr>
</table>
</form>