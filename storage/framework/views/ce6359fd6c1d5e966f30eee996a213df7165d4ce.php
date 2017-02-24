<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
        <h5>Data Lembur Pegawai</h5>
    </div>
    <div class="widget-content ">
        <h3>Lembur Pegawai</h3>
        <hr>
		<form class="form-horizontal">
			<div class="control-group">
                <label class="control-label">Nama Pegawai :</label>
                <div class="controls">
                    <input id="pegawai_id" type="text" class="span11" name="pegawai_id" value="<?php echo e($lembur_pegawai->Pegawai->User->name); ?>" readonly>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Jabatan :</label>
                <div class="controls">
                    <input id="pegawai_id" type="text" class="span11" name="pegawai_id" value="<?php echo e($lembur_pegawai->Pegawai->Jabatan->Nama_jabatan); ?>" readonly>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Golongan :</label>
                <div class="controls">
                   <input id="pegawai_id" type="text" class="span11" name="pegawai_id" value="<?php echo e($lembur_pegawai->Pegawai->Golongan->Nama_golongan); ?>" readonly>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Besaran Uang :</label>
                <div class="controls">
                   <input id="pegawai_id" type="text" class="span11" name="pegawai_id" value="<?php echo 'Rp. '.number_format($lembur_pegawai->Kategori_lembur->Besaran_uang, 2, ",", "."); ?>" readonly>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Jumlah Jam :</label>
                <div class="controls">
                   <input type="text" name="Jumlah_jam" class="span11" value="<?php echo e($lembur_pegawai->Jumlah_jam); ?> Jam" readonly>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                   <a href="/lempeg" type="submit" class="btn btn-primary">
                                <span class="icon-arrow-right"></span>
                    </a>
                </div>
            </div>
		<form>
    </div>
</div> 	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>