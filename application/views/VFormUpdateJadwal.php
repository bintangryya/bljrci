<form action="<?php echo site_url('Welcome/UpdateDataJadwal'); ?>" method="post">
<table>
	<div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">kelas</label>
                    <div class="col-sm-10">
                              <select name="kd_kelas" class="form-control">
                                <?php
                                if(!empty($GetKelas))
                                  {
                                    $no=1;
                                    foreach($GetKelas as $GetKelas_read) 
                                  {  
                                ?>
                                 <option value="<?php echo $GetKelas_read->kd_kelas; ?>"><?php echo$no; echo ". "; echo $GetKelas_read->nama_kelas; ?></option>
                                 <?php
                                    $no++;}}
                                 ?>
                              </select>
                    </div>
                  </div>






<div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">mapel</label>
                    <div class="col-sm-10">
                              <select name="kd_mapel" class="form-control">
                                <?php
                                if(!empty($GetMapel))
                                  {
                                    $no=1;
                                    foreach($GetMapel as $GetMapel_read) 
                                  {  
                                ?>
                                  <option value="<?php echo $GetMapel_read->kd_mapel; ?>"><?php echo$no; echo ". "; echo $GetMapel_read->nama_mapel; ?></option>
                                 <?php
                                    $no++;}}
                                 ?>
                              </select>
                    </div>
                  </div>





  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">nip</label>
                    <div class="col-sm-10">
                              <select name="nip" class="form-control">
                                <?php
                                if(!empty($GetGuru))
                                  {
                                    $no=1;
                                    foreach($GetGuru as $GetGuru_read) 
                                  {  
                                ?>
                                 <option value="<?php echo $GetGuru_read->nip; ?>"><?php echo$no; echo ". "; echo $GetGuru_read->nama; ?></option>
                                 <?php
                                    $no++;}}
                                 ?>
                              </select>
                    </div>
                  </div>
	<tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" class="btn btn-success" value="Simpan">
		</td>
	</tr>
</table>
</form>