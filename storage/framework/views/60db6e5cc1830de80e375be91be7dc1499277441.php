<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Jabatan</h5>
        </div>
        <div class="widget-content">
        <h3>Edit Data Jabatan</h3>
        <hr>
		<?php echo Form::model($kategori_lembur, ['method' => 'PATCH', 'route' => ['katelembur.update', $kategori_lembur->id], 'class' => 'form-horizontal']); ?>

			<div class="control-group">
                <label class="control-label">Kode Kategori Lembur :</label>
                <div class="controls">
                   <input type="text" name="Kode_lembur" class="span11" value="<?php echo e($kategori_lembur->Kode_lembur); ?>" readonly>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Kode Jabatan :</label>
                <div class="controls">
                   <select name="jabatan_id" class="span11">
						<option value="<?php echo e($jselected->id); ?>" selected><?php echo e($jselected->Nama_jabatan); ?></option>
                        <?php $__currentLoopData = $junselect; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unselect): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo e($unselect->id); ?>" ><?php echo e($unselect->Nama_jabatan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Kode golongan :</label>
                <div class="controls">
                   <select name="golongan_id" class="span11">
						<option value="<?php echo e($gselected->id); ?>" selected><?php echo e($gselected->Nama_golongan); ?></option>
                        <?php $__currentLoopData = $golselect; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unselect): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo e($unselect->id); ?>" ><?php echo e($unselect->Nama_golongan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Besaran Uang :</label>
                <div class="controls">
                   <input type="text" name="Besaran_uang" class="span11" value="<?php echo e($kategori_lembur->Besaran_uang); ?>">
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