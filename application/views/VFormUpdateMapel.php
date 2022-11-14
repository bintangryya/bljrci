<form action="<?php echo site_url('Welcome/UpdateDataMapel'); ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Mapel</label>
    <input type="hidden" name="kd_mapel" class="form-control" value="<?php echo $detail['kd_mapel']; ?>">
    <input type="text" name="nama_mapel" class="form-control" value="<?php echo $detail['nama_mapel']; ?>">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">kkm</label>
    <input type="text" name="kkm" class="form-control" value="<?php echo $detail['kkm']; ?>">
  </div>
  
  <button type="submit" name="btn_simpan"  class="btn btn-primary" value="Simpan" >Submit</button>
</form>
