<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Lembur Pegawai</h5>
        </div>
        <div class="widget-content">
        <h3>Edit Data Lembur Pegawai</h3>
        <hr>
		<?php echo Form::model($lembur_pegawai, ['method' => 'PATCH', 'route' => ['lempeg.update', $lembur_pegawai->id], 'class' => 'form-horizontal']); ?>

	        <div class="control-group">
                <label class="control-label">Kode Jabatan :</label>
                <div class="controls">
                    <select name="pagawai_id" class="span11">
	                    <option value="<?php echo e($pselected->id); ?>" selected><?php echo e($pselected->Nip); ?> || <?php echo e($pselected->User->name); ?></option>
	                    <?php $__currentLoopData = $pegselect; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->Nip); ?> || <?php echo e($data->User->name); ?></option>
	                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Jumlah Jam :</label>
                <div class="controls">
                    <input type="number" name="Jumlah_jam" class="span11" value="<?php echo e($lembur_pegawai->Jumlah_jam); ?>">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-primary"><span class="icon-edit"></span></button>
                </div>
            </div>
		<?php echo Form::close(); ?>

    </div>
</div> 	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>