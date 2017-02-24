<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
        <h5>Data Lembur Pegawai</h5>
    </div>
    <div class="widget-content ">
        <h3>Lembur Pegawai</h3>
        <hr>
        <?php echo Form::open(['url' => '/lempeg', 'class' => 'form-horizontal']); ?>

            <div class="control-group">
                <label class="control-label">Nama Pegawai :</label>
                  <div class="controls">
                    <select name="pegawai_id" class="span11">
                        <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo e($data->id); ?>"><?php echo e($data->User->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Jumlah Jam :</label>
                  <div class="controls">
                    <input id="Jumlah_jam" type="number" class="span11" name="Jumlah_jam" required>

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