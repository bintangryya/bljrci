<form action="<?php echo site_url('Welcome/UpdateDataProfile'); ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="hidden" name="kd_profile" value="<?php echo $detail['kd_profile']; ?>">
	<input type="text" name="nama_profile" value="<?php echo $detail['nama_profile']; ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

