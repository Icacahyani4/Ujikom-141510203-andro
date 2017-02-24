<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">Lihat Data Tunjangan</div>
                <div class="panel-body">
                <hr>
                    <form class="form-horizontal">
                        <div class="form-group<?php echo e($errors->has('Kode_tunjangan') ? ' has-error' : ''); ?>">
                            <label for="Kode_tunjangan" class="col-md-4 control-label">Kode_tunjangan</label>

                            <div class="col-md-6">
                                <input id="Kode_tunjangan" type="text" class="form-control" name="Kode_tunjangan" value="<?php echo e($tunjangan->Kode_tunjangan); ?>" readonly required>
                            </div>
                        </div>
						<div class="form-group<?php echo e($errors->has('jabatan_id') ? ' has-error' : ''); ?>">
                            <label for="jabatan_id" class="col-md-4 control-label">Nama Jabatan</label>
                            <div class="col-md-6">
                                <input id="jabatan_id" type="text" class="form-control" name="jabatan_id" value="<?php echo e($tunjangan->Jabatan->Nama_jabatan); ?>" readonly required>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('golongan_id') ? ' has-error' : ''); ?>">
                            <label for="golongan_id" class="col-md-4 control-label">Nama Golongan</label>
                            <div class="col-md-6">
                                <input id="golongan_id" type="text" class="form-control" name="golongan_id" value="<?php echo e($tunjangan->Golongan->Nama_golongan); ?>" readonly required>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('Status') ? ' has-error' : ''); ?>">
                            <label for="Status" class="col-md-4 control-label">Status</label>
                            <div class="col-md-6">
                                <input id="Status" type="text" class="form-control" name="Status" value="<?php echo e($tunjangan->Status); ?>" readonly autofocus>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('Jumlah_anak') ? ' has-error' : ''); ?>">
                            <label for="Jumlah_anak" class="col-md-4 control-label">Jumlah Anak</label>
                            <div class="col-md-6">
                                <input id="Jumlah_anak" type="number" class="form-control" name="Jumlah_anak" value="<?php echo e($tunjangan->Jumlah_anak); ?>" readonly autofocus>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('Besaran_uang') ? ' has-error' : ''); ?>">
                            <label for="Besaran_uang" class="col-md-4 control-label">Besaran Uang</label>
                            <div class="col-md-6">
                                <input id="Besaran_uang" type="text" class="form-control" name="Besaran_uang" value="<?php echo 'Rp. '.number_format($tunjangan->Besaran_uang, 2, ",", "."); ?>" readonly autofocus>
                            </div>
                        </div>
						<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="/tunjangan" type="submit" class="btn btn-primary">
                                    Kembali
                                </a>
                            </div>
                        </div>
					<?php echo Form::close(); ?>

	           </div>
	       </div>
	   </div>
    </div>
</div> 	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>