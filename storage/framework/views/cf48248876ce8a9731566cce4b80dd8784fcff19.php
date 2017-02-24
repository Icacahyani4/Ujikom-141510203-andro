<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">Edit Data Lembur Pegawai</div>
                <div class="panel-body">
				<hr>
				<?php echo Form::model($lembur_pegawai, ['method' => 'PATCH', 'route' => ['lempeg.update', $lembur_pegawai->id], 'class' => 'form-horizontal']); ?>

					<div class="form-group<?php echo e($errors->has('Kode_lebur_id') ? ' has-error' : ''); ?>">
	                    <label for="Kode_lebur_id" class="col-md-4 control-label">Kode Jabatan</label>
						<div class="col-md-6">
	                        <select name="Kode_lebur_id" class="form-control">
                                <?php $__currentLoopData = $kategori_lembur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->Kode_lembur); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
	                    </div>
	                </div>
	                <div class="form-group<?php echo e($errors->has('pagawai_id') ? ' has-error' : ''); ?>">
	                    <label for="pagawai_id" class="col-md-4 control-label">Nama Pegawai</label>
						<div class="col-md-6">
	                        <select name="pagawai_id" class="form-control">
                                <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->User->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
	                    </div>
	                </div>
	                <div class="form-group<?php echo e($errors->has('Jumlah_jam') ? ' has-error' : ''); ?>">
	                    <label for="Jumlah_jam" class="col-md-4 control-label">Jumlah jam</label>
						<div class="col-md-6">
	                        <input type="number" name="Jumlah_jam" class="form-control" value="<?php echo e($lembur_pegawai->Jumlah_jam); ?>">
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