<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
        <h5>Data Penggajian</h5>
    </div>
    <div class="widget-content ">
        <h3>Tambah Penggajian</h3>
        <hr>
        <?php echo Form::open(['url' => '/gaji', 'class' => 'form-horizontal']); ?>

            <div class="control-group">
                <label class="control-label">Nama Pegawai  :</label>
                <div class="controls">
                    <select name="tunjangan_pegawai_id" class="span11">
                        <?php $__currentLoopData = $tunjangan_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo e($data->id); ?>"><?php echo e($data->Pegawai->Nip); ?> || <?php echo e($data->Pegawai->User->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select>
                    <?php if($errors->has('tunjangan_pegawai_id')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('tunjangan_pegawai_id')); ?></strong>
                                </span>
                            <?php endif; ?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Status Pengambilan  :</label>
                <div class="controls">
                    <select name="Status_pengambilan" class="span11">
                        <option value="0">Sudah Terambil</option>
                        <option value="1">Belum Terambil</option>
                    </select>
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