<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Jabatan</h5>
        </div>
        <div class="widget-content">
        <h3>Edit Data Jabatan</h3>
        <hr>
            <?php echo Form::model($jabatan, ['method' => 'PATCH', 'route' => ['jabatan.update', $jabatan->id], 'class' => 'form-horizontal']); ?>

                <div class="control-group<?php echo e($errors->has('Kode_jabatan') ? ' has-error' : ''); ?>">
                  <label class="control-label">Kode Jabatan :</label>
                  <div class="controls">
                    <input type="text" name="Kode_jabatan" class="span11" value="<?php echo e($jabatan->Kode_jabatan); ?>" readonly>
                    <?php if($errors->has('Kode_jabatan')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('Kode_jabatan')); ?></strong>
                      </span>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="control-group<?php echo e($errors->has('Nama_jabatan') ? ' has-error' : ''); ?>">
                  <label class="control-label">Nama Jabatan :</label>
                  <div class="controls">
                    <input type="text" name="Nama_jabatan" class="span11" value="<?php echo e($jabatan->Nama_jabatan); ?>">
                    <?php if($errors->has('Nama_jabatan')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('Nama_jabatan')); ?></strong>
                      </span>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="control-group<?php echo e($errors->has('Besaran_uang') ? ' has-error' : ''); ?>">
                  <label class="control-label">Besaran Uang</label>
                  <div class="controls">
                    <input type="number" name="Besaran_uang" class="span11" value="<?php echo e($jabatan->Besaran_uang); ?>">
                    <?php if($errors->has('Besaran_uang')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('Besaran_uang')); ?></strong>
                      </span>
                    <?php endif; ?>
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
<?php $__env->stopSection(); ?> 	

<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>