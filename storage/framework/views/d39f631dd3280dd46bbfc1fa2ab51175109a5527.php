<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Pegawai</h5>
    </div>
        <div class="widget-content">
            <h3>Lihat Data Pegawai</h3>
            <hr>
            <form class="form-horizontal">
				<div class="control-group">
                  <label class="control-label">NIP :</label>
                  <div class="controls">
                    <input id="Nip" type="text" class="span11" name="Nip" value="<?php echo e($pegawai->Nip); ?>" readonly />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Nama Pegawai :</label>
                  <div class="controls">
                    <input id="user_id" type="text" class="span11" name="user_id" value="<?php echo e($pegawai->User->name); ?>" readonly />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Nama Jabatan :</label>
                  <div class="controls">
                    <input id="jabatan_id" type="text" class="span11" name="jabatan_id" value="<?php echo e($pegawai->Jabatan->Nama_jabatan); ?>" readonly />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Nama Golongan :</label>
                  <div class="controls">
                    <input id="golongan_id" type="text" class="span11" name="golongan_id" value="<?php echo e($pegawai->Golongan->Nama_golongan); ?>" readonly />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Photo :</label>
                  <div class="controls">
                    <img src="<?php echo e(asset('/image/'.$pegawai->Photo)); ?>"  height="100px" width="100px" class="image-control img-rounded">
                  </div>
                </div>
                <div class="control-group">
                  <div class="controls">
                    <a href="/pegawai" type="submit" class="btn btn-primary">
                        <span class="icon-arrow-right"></span>
                    </a>  
                  </div>
                </div>
              </form>
	   </div>
</div> 	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>