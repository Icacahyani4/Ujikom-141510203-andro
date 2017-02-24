<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Pegawai</h5>
        </div>
        <div class="widget-content">
            <h3>Tambah Data Pegawai</h3>
            <hr>
                    <?php echo Form::open(['url' => '/pegawai', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'files' => true]); ?>

                        <?php echo e(csrf_field()); ?>

                        <div class="control-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                          <label class="control-label">Nama :</label>
                          <div class="controls">
                            <input id="name" type="text" class="span11" name="name" value="<?php echo e(old('name')); ?>" required>
                            <?php if($errors->has('name')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('name')); ?></strong>
                                </span>
                            <?php endif; ?>
                          </div>
                        </div>
                        <div class="control-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                          <label class="control-label">E-Mail Address :</label>
                          <div class="controls">
                            <input id="email" type="email" class="span11" name="email" value="<?php echo e(old('email')); ?>" required>
                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                          </div>
                        </div>
                        <div class="control-group<?php echo e($errors->has('permission') ? ' has-error' : ''); ?>">
                          <label class="control-label">Permission :</label>
                          <div class="controls">
                            <select class="span11" name="permission">
                                    <option value="Pegawai">Pegawai</option>
                                    <option value="Admin">Admin</option>
                                    <option value="HRD">HRD</option>
                                    <option value="Keuangan">Keuangan</option>
                            </select>
                          </div>
                        </div>
                        <div class="control-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                          <label class="control-label">Password :</label>
                          <div class="controls">
                            <input id="password" type="password" class="span11" name="password" value="<?php echo e(old('password')); ?>" required>
                            <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                            <?php endif; ?>
                          </div>
                        </div>
                        <div class="control-group<?php echo e($errors->has('password-confirm') ? ' has-error' : ''); ?>">
                          <label class="control-label">Password :</label>
                          <div class="controls">
                            <input id="password-confirm" type="password" class="span11" name="password_confirmation" required>
                          </div>
                        </div>               
                        <hr>
                        








						            <div class="control-group<?php echo e($errors->has('Nip') ? ' has-error' : ''); ?>">
                          <label class="control-label">NIP :</label>
                          <div class="controls">
                            <input id="Nip" type="text" class="span11" name="Nip" value="<?php echo e($kode); ?>" readonly required>
                            <?php if($errors->has('Nip')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('Nip')); ?></strong>
                                </span>
                            <?php endif; ?>
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
                       <div class="control-group<?php echo e($errors->has('Photo') ? ' has-error' : ''); ?>">
                          <label class="control-label">Photo :</label>
                          <div class="controls">
                            <input id="Photo" type="file" class="span11" name="Photo">
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