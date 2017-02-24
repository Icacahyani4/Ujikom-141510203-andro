<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">Lihat Data Pegawai</div>
                <div class="panel-body">
                <hr>
                    <form class="form-horizontal">
						<div class="form-group<?php echo e($errors->has('Nip') ? ' has-error' : ''); ?>">
                            <label for="Nip" class="col-md-4 control-label">Kode Jabatan</label>
                            <div class="col-md-6">
                                <input id="Nip" type="text" class="form-control" name="Nip" value="<?php echo e($pegawai->Nip); ?>" readonly required autofocus>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('user_id') ? ' has-error' : ''); ?>">
                            <label for="user_id" class="col-md-4 control-label">Kode Jabatan</label>
                            <div class="col-md-6">
                                <input id="user_id" type="text" class="form-control" name="user_id" value="<?php echo e($pegawai->User->name); ?>" readonly required autofocus>
                            </div>
                        </div>
						<div class="form-group<?php echo e($errors->has('jabatan_id') ? ' has-error' : ''); ?>">
                            <label for="jabatan_id" class="col-md-4 control-label">Nama Jabatan</label>
                            <div class="col-md-6">
                                <input id="jabatan_id" type="text" class="form-control" name="jabatan_id" value="<?php echo e($pegawai->Jabatan->Nama_jabatan); ?>" readonly required autofocus>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('golongan_id') ? ' has-error' : ''); ?>">
                            <label for="golongan_id" class="col-md-4 control-label">Nama Golongan</label>
                            <div class="col-md-6">
                                <input id="golongan_id" type="text" class="form-control" name="golongan_id" value="<?php echo e($pegawai->Golongan->Nama_golongan); ?>" readonly required autofocus>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('Besaran_uang') ? ' has-error' : ''); ?>">
                            <label for="Besaran_uang" class="col-md-4 control-label">Photo</label>
                            <div class="col-md-6">
                                <img src="<?php echo e(asset('/image/'.$pegawai->Photo)); ?>"  height="100px" width="100px" class="image-control" class="img-rounded">
                            </div>
                        </div>
						<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="/pegawai" type="submit" class="btn btn-primary">
                                    Kembali
                                </a>
                            </div>
                        </div>
					</form>
	           </div>
	       </div>
	   </div>
    </div>
</div> 	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>