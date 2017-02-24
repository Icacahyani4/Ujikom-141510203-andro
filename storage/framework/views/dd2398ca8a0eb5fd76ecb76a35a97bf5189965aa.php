<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Tunjangan</h5>
    </div>
        <div class="widget-content">
            <h3>Lihat Data Tunjangan</h3>
            <hr>
            <form class="form-horizontal">
                <div class="control-group">
                    <label class="control-label">Kode Tunjangan :</label>
                    <div class="controls">
                        <input id="Kode_tunjangan_id" type="text" class="span11" name="Kode_tunjangan_id" value="<?php echo e($tunjangan_pegawai->Tunjangan->Kode_tunjangan); ?>" readonly>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">NIP :</label>
                    <div class="controls">
                         <input id="pegawai_id" type="text" class="span11" value="<?php echo e($tunjangan_pegawai->Pegawai->Nip); ?>" readonly>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Nama Pegawai :</label>
                    <div class="controls">
                         <input id="pegawai_id" type="text" class="span11" name="pegawai_id" value="<?php echo e($tunjangan_pegawai->Pegawai->User->name); ?>" readonly>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Jabatan :</label>
                    <div class="controls">
                         <input id="pegawai_id" type="text" class="span11" value="<?php echo e($tunjangan_pegawai->Pegawai->Jabatan->Nama_jabatan); ?>" readonly>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Golongan :</label>
                    <div class="controls">
                         <input id="pegawai_id" type="text" class="span11" value="<?php echo e($tunjangan_pegawai->Pegawai->Golongan->Nama_golongan); ?>" readonly>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                         <a href="/tunpeg" type="submit" class="btn btn-primary">
                                <span class="icon-arrow-right"></span>
                            </a>
                    </div>
                </div>
            <form>

    </div>
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>