<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Jabatan</h5>
        </div>
        <div class="widget-content">
        <h3>Lihat Data Jabatan</h3>
        <hr>
            <form class="form-horizontal">
                <div class="control-group">
                  <label class="control-label">Kode Jabatan :</label>
                  <div class="controls">
                    <input type="text" name="Kode_jabatan" class="span11" value="<?php echo e($jabatan->Kode_jabatan); ?>" readonly>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Nama Jabatan :</label>
                  <div class="controls">
                    <input type="text" name="Nama_jabatan" class="span11" value="<?php echo e($jabatan->Nama_jabatan); ?>" readonly>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Besaran Uang</label>
                  <div class="controls">
                    <input type="text" class="span11" name="Besaran_uang" value="<?php echo 'Rp. '.number_format($jabatan->Besaran_uang, 2, ",", "."); ?>" readonly>
                  </div>
                </div>
                <div class="form-actions">
                    <a href="/jabatan" type="submit" class="btn btn-primary">
                        <span class=" icon-arrow-right"></span>
                    </a>                
                </div>
              </form>
            </div>
          </div>
    </div>
</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>