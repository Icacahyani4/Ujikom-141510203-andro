<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Golongan</h5>
        </div>
        <div class="widget-content">
        <h3>Tambah Data Golongan</h3>
        <hr>
            <?php echo Form::open(['url' => '/golongan', 'class' => 'form-horizontal']); ?>

                <div class="control-group<?php echo e($errors->has('Kode_golongan') ? ' has-error' : ''); ?>">
                  <label class="control-label">Kode Golongan :</label>
                  <div class="controls">
                    <input id="Kode_golongan" type="text" class="span11" name="Kode_golongan" value="<?php echo e($kode); ?>" readonly />
                    <?php if($errors->has('Kode_golongan')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('Kode_golongan')); ?></strong>
                      </span>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="control-group<?php echo e($errors->has('Nama_golongan') ? ' has-error' : ''); ?>">
                  <label class="control-label">Nama Golongan :</label>
                  <div class="controls">
                    <input id="Nama_golongan" type="text" class="span11" name="Nama_golongan" required />
                    <?php if($errors->has('Nama_golongan')): ?>
                      <span class="help-block">
                        <strong><?php echo e($errors->first('Nama_golongan')); ?></strong>
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