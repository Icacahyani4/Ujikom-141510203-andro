<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Jabatan</h5>
        </div>
        <div class="widget-content">
        <h3>Tambah Data Jabatan</h3>
        <hr>
            <?php echo Form::open(['url' => '/jabatan', 'class' => 'form-horizontal']); ?>

                <div class="control-group<?php echo e($errors->has('Kode_jabatan') ? ' has-error' : ''); ?>">
                  <label class="control-label">Kode Jabatan :</label>
                  <div class="controls">
                    <input id="Kode_jabatan" type="text" class="span11" name="Kode_jabatan" value="<?php echo e($kode); ?>" readonly />
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
                    <input id="Nama_jabatan" type="text" class="span11" name="Nama_jabatan" required />
                    <?php if($errors->has('Nama_jabatan')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('Nama_jabatan')); ?></strong>
                      </span>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Besaran Uang</label>
                  <div class="controls">
                    <input id="Besaran_uang" type="number" class="span11" name="Besaran_uang"  required>
                  </div>
                </div>
                <div class="control-group">
                  <div class="controls">
                    <button class="btn btn-success"><span class="icon-plus"></span>&nbsp;&nbsp; Tambah</button>
                  </div>
              </div>
              <?php echo Form::close(); ?>

            </div>
          </div>
    </div>
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>