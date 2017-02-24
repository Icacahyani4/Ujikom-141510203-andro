<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Tunjangan</h5>
        </div>
        <div class="widget-content">
            <h3>Edit Data Tunjangan</h3>
            <hr>
				<?php echo Form::model($tunjangan, ['method' => 'PATCH', 'route' => ['tunjangan.update', $tunjangan->id], 'class' => 'form-horizontal']); ?>

					<div class="control-group">
	                    <label class="control-label">Kode Tunjangan :</label>
						<div class="controls">
	                        <input type="text" name="Kode_tunjangan" class="span11" value="<?php echo e($tunjangan->Kode_tunjangan); ?>" readonly>
	                    </div>
	                </div>
	                <div class="control-group">
	                  <label class="control-label">Nama Jabatan :</label>
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
	                  <label class="control-label">Nama Golongan :</label>
	                  <div class="controls">
	                    <select name="golongan_id" class="span11">
							          <option value="<?php echo e($gselected->id); ?>" selected><?php echo e($gselected->Nama_golongan); ?></option>
	                        <?php $__currentLoopData = $golselect; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unselected): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	                            <option value="<?php echo e($unselected->id); ?>" ><?php echo e($unselected->Nama_golongan); ?></option>
	                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	                    </select>
	                  </div>
	                </div>
	                <div class="control-group">
	                  <label class="control-label">Status :</label>
	                  <div class="controls">
	                    <input id="Status" type="text" class="span11" name="Status" value="<?php echo e($tunjangan->Status); ?>"  />
	                  </div>
	                </div>
	                <div class="control-group">
	                  <label class="control-label">Jumlah_anak :</label>
	                  <div class="controls">
	                    <input id="Jumlah_anak" type="text" class="span11" name="Jumlah_anak" value="<?php echo e($tunjangan->Jumlah_anak); ?>" />
	                  </div>
	                </div>
	                <div class="control-group">
	                  <label class="control-label">Besaran_uang :</label>
	                  <div class="controls">
	                    <input id="Besaran_uang" type="text" class="span11" name="Besaran_uang" value="<?php echo e($tunjangan->Besaran_uang); ?>" />
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
	   </div>
    </div>
</div> 	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>