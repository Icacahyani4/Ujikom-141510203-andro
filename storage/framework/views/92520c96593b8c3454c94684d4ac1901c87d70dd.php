<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Tunjangan Pegawai</h5>
        </div>
        <div class="widget-content">
            <h3>Tambah Data Tunjangan Pegawai</h3>
            <hr>
                    <?php echo Form::open(['url' => '/tunpeg', 'class' => 'form-horizontal']); ?>

						          <div class="control-group<?php echo e($errors->has('Kode_tunjangan_id') ? ' has-error' : ''); ?>">
                          <label class="control-label">Kode tunjangan :</label>
                          <div class="controls">
                            <select name="Kode_tunjangan_id" class="span11">
                                    <?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->Kode_tunjangan); ?> || <?php echo e($data->Jabatan->Nama_jabatan); ?> || <?php echo e($data->Golongan->Nama_golongan); ?> || <?php echo e($data->Status); ?> || <?php echo e($data->Jumlah_anak); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                                <?php if($errors->has('Kode_tunjangan_id')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('Kode_tunjangan_id')); ?></strong>
                                </span>
                            <?php endif; ?>
                          </div>
                        </div>
                        <div class="control-group<?php echo e($errors->has('pegawai_id') ? ' has-error' : ''); ?>">
                          <label class="control-label">Pegawai :</label>
                          <div class="controls">
                            <select name="pegawai_id" class="span11">
                                    <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->Nip); ?> || <?php echo e($data->User->name); ?> || <?php echo e($data->Jabatan->Nama_jabatan); ?> || <?php echo e($data->Golongan->Nama_golongan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>
                                <?php if($errors->has('pegawai_id')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('pegawai_id')); ?></strong>
                                </span>
                            <?php endif; ?>
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
</div> 	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>