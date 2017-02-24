<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Kategori Lembur</h5>
        </div>
        <div class="widget-content">
            <h3>Lihat Data Kategori Lembur</h3>
            <hr>
            <form class="form-horizontal">
                <div class="control-group">
                  <label class="control-label">Kode Kategori Lembur :</label>
                  <div class="controls">
                    <input id="Kode_lembur" type="text" class="span11" name="Kode_lembur" value="<?php echo e($kategori_lembur->Kode_lembur); ?>" readonly />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Kode Jabatan :</label>
                  <div class="controls">
                    <input id="Kode_jabatan" type="text" class="span11" name="Kode_jabatan" value="<?php echo e($kategori_lembur->Jabatan->Nama_jabatan); ?>" readonly />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Kode Golongan :</label>
                  <div class="controls">
                    <input id="Kode_golongan" type="text" class="span11" name="Kode_golongan" value="<?php echo e($kategori_lembur->Golongan->Nama_golongan); ?>" readonly />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Besaran Uang</label>
                  <div class="controls">
                  <input id="Besaran_uang" type="text" class="span11" name="Besaran_uang" value="<?php echo 'Rp. '.number_format($kategori_lembur->Besaran_uang, 2, ",", "."); ?>" readonly />
                  </div>
                </div>
                <div class="form-actions">
                    <a href="/katelembur" type="submit" class="btn btn-primary">
                        <span class="icon-arrow-right"></span>
                    </a>                
                </div>
                    <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
    </div>
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>