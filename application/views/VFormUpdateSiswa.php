<form action="<?php echo site_url('Welcome/UpdateDataSiswa'); ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">NAMA</label>
    <input type="hidden" name="nis" class="form-control" value="<?php echo $detail['nis']; ?>">
	<input type="text" name="nama" class="form-control" value="<?php echo $detail['nama']; ?>">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat</label>
    <input type="text" name="alamat" class="form-control" value="<?php echo $detail['alamat']; ?>">
  </div>
  
  <button type="submit" class="btn btn-primary" value="Simpan" >Submit</button>
</form>
