<form action="<?php echo site_url('Welcome/UpdateDataKelas'); ?>" method="post">
<table>
	<tr>
		<td>kelas</td>
		<td>:</td>
		<td><input type="hidden" name="kd_kelas" value="<?php echo $detail['kd_kelas']; ?>">
			<input type="text" name="nama_kelas" value="<?php echo $detail['nama_kelas']; ?>">
		</td>
	</tr>
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan">
		</td>
	</tr>
</table>
</form>