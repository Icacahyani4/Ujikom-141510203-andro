<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Pegawai</h5>
    </div>
        <div class="widget-content">
	        <h3>Edit Data Pegawai</h3>
	        <hr>
				<?php echo Form::model($pegawai, ['class' => 'form-horizontal',  'enctype' => 'multipart/form-data', 'method' => 'PATCH', 'route' => ['pegawai.update', $pegawai->id], 'files' => true]); ?>

				        <div class="control-group">
                  <label class="control-label">NIP :</label>
                  <div class="controls">
                    <input id="Nip" type="text" class="span11" name="Nip" value="<?php echo e($pegawai->Nip); ?>" required readonly />
                  </div>
                </div>
	          
                <div class="control-group">
                  <label class="control-label">Nama Pegawai :</label>
                  <div class="controls">
                    <input id="user_id" type="text" class="span11" name="user_id" value="<?php echo e($pegawai->User->name); ?>" readonly />
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Nama Jabatan :</label>
                  <div class="controls">
                    <select name="jabatan_id" class="span11">
						          <option value="<?php echo e($jselected->id); ?>" selected><?php echo e($jselected->Nama_jabatan); ?></option>
                        <?php $__currentLoopData = $junselect; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unselect): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo e($unselect->id); ?>" ><?php echo e($unselect->Nama_jabatan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Nama Golongan :</label>
                  <div class="controls">
                    <select name="golongan_id" class="span11">
						          <option value="<?php echo e($gselected->id); ?>" selected><?php echo e($gselected->Nama_golongan); ?></option>
                        <?php $__currentLoopData = $golselect; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unselected): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo e($unselected->id); ?>" ><?php echo e($unselected->Nama_golongan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select>
                  </div>
                </div>
	            <div class="control-group">
                  <label class="control-label">Photo :</label>
                  <div class="controls">
                    <img src="<?php echo e(asset('/image/'.$pegawai->Photo)); ?>"  height="100px" width="100px" class="image-control img-rounded">
                  </div>
                  <div class="controls">
                  	<input id="Photo" type="file" class="span11" name="Photo" value="<?php echo e($pegawai->Photo); ?>">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>