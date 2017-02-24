<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Tunjangan Pegawai</h5>
        </div>
        <div class="widget-content">
            <h3>Edit Data Tunjangan Pegawai</h3>
            <hr>
				<?php echo Form::model($tunjangan_pegawai, ['method' => 'PATCH', 'route' => ['tunpeg.update', $tunjangan_pegawai->id], 'class' => 'form-horizontal']); ?>

					<div class="control-group">
                      <label class="control-label">Nama pegawai :</label>
                      <div class="controls">
                        <select name="pegawai_id" class="span11">
                                      <option value="<?php echo e($pselected->id); ?>" selected><?php echo e($pselected->User->name); ?></option>
                            <?php $__currentLoopData = $pegselect; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unselect): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <option value="<?php echo e($unselect->id); ?>" ><?php echo e($unselect->User->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </select>
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