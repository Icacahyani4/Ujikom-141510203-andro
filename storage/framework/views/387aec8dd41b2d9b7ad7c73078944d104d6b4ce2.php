<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Tunjangan</h5>
        </div>
        <div class="widget-content">
            <h3>Tambah Data Tunjangan</h3>
            <hr>
            <?php echo Form::open(['url' => '/tunjangan', 'class' => 'form-horizontal']); ?>

                        <div class="control-group">
                            <label class="control-label">Kode_tunjangan :</label>
                            <div class="controls">
                                <input id="Kode_tunjangan" type="text" class="span11" name="Kode_tunjangan" value="<?php echo e($kode); ?>" readonly>
                            </div>
                        </div>
                        <div class="control-group<?php echo e($errors->has('Jabatan') ? ' has-error' : ''); ?>">
                          <label class="control-label">Jabatan :</label>
                          <div class="controls">
                            <select name="jabatan_id" class="span11">
                                    <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_jabatan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                          </div>
                        </div>
                        <div class="control-group<?php echo e($errors->has('Golongan') ? ' has-error' : ''); ?>">
                          <label class="control-label">Golongan :</label>
                          <div class="controls">
                            <select name="golongan_id" class="span11">
                                    <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_golongan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                          </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Status :</label>
                            <div class="controls">
                                <input id="Status" type="text" class="span11" name="Status" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Jumlah Anak :</label>
                            <div class="controls">
                                <input id="Jumlah_anak" type="text" class="span11" name="Jumlah_anak" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Besaran Uang :</label>
                            <div class="controls">
                                <input id="Besaran_uang" type="number" class="span11" name="Besaran_uang" required>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>