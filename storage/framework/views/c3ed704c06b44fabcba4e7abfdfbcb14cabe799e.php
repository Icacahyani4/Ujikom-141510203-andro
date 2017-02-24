<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">Edit Data Tunjangan</div>
                <div class="panel-body">
				<hr>
				<?php echo Form::model($tunjangan, ['method' => 'PATCH', 'route' => ['tunjangan.update', $tunjangan->id], 'class' => 'form-horizontal']); ?>

					<div class="form-group<?php echo e($errors->has('Kode_tunjangan') ? ' has-error' : ''); ?>">
	                    <label for="Kode_tunjangan" class="col-md-4 control-label">Kode Jabatan</label>
						<div class="col-md-6">
	                        <input type="text" name="Kode_tunjangan" class="form-control" value="<?php echo e($tunjangan->Kode_tunjangan); ?>" readonly>
	                    </div>
	                </div>
	                <div class="form-group<?php echo e($errors->has('jabatan_id') ? ' has-error' : ''); ?>">
	                    <label for="jabatan_id" class="col-md-4 control-label">Nama Jabatan</label>
						<div class="col-md-6">
	                        <select name="jabatan_id" class="form-control">
                                <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_jabatan); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
	                    </div>
	                </div>
	                <div class="form-group<?php echo e($errors->has('golongan_id') ? ' has-error' : ''); ?>">
	                    <label for="golongan_id" class="col-md-4 control-label">Nama Golongan</label>
						<div class="col-md-6">
	                        <select name="golongan_id" class="form-control">
                                <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_golongan); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
	                    </div>
	                </div>
	                <div class="form-group<?php echo e($errors->has('Status') ? ' has-error' : ''); ?>">
	                    <label for="Status" class="col-md-4 control-label">Status</label>
						<div class="col-md-6">
	                        <input type="text" name="Status" class="form-control" value="<?php echo e($tunjangan->Status); ?>">
	                    </div>
	                </div>
	                <div class="form-group<?php echo e($errors->has('Jumlah_anak') ? ' has-error' : ''); ?>">
	                    <label for="Jumlah_anak" class="col-md-4 control-label">Jumlah Anak</label>
						<div class="col-md-6">
	                        <input type="number" name="Jumlah_anak" class="form-control" value="<?php echo e($tunjangan->Jumlah_anak); ?>">
	                    </div>
	                </div>
	                <div class="form-group<?php echo e($errors->has('Besaran_uang') ? ' has-error' : ''); ?>">
	                    <label for="Besaran_uang" class="col-md-4 control-label">Besaran Uang</label>
						<div class="col-md-6">
	                        <input type="number" name="Besaran_uang" class="form-control" value="<?php echo e($tunjangan->Besaran_uang); ?>">
	                    </div>
	                </div>
					<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
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