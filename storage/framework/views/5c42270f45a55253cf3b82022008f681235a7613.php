<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Golongan</h5>
        </div>
        <div class="widget-content">
        <h3>Edit Data Golongan</h3>
        <hr>
            <?php echo Form::model($golongan, ['method' => 'PATCH', 'route' => ['golongan.update', $golongan->id], 'class' => 'form-horizontal']); ?>

                <div class="control-group">
                  <label class="control-label">Kode Golongan :</label>
                  <div class="controls">
                    <input type="text" name="Kode_golongan" class="span11" value="<?php echo e($golongan->Kode_golongan); ?>" readonly>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Nama Golongan :</label>
                  <div class="controls">
                    <input type="text" name="Nama_golongan" class="span11" value="<?php echo e($golongan->Nama_golongan); ?>">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Besaran Uang</label>
                  <div class="controls">
                    <input type="number" name="Besaran_uang" class="span11" value="<?php echo e($golongan->Besaran_uang); ?>">
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