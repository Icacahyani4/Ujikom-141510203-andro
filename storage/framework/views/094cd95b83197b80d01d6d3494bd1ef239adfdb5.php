<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Penggajian</h5>
    </div>
        <div class="widget-content">
            <h3>Lihat Data Penggajian</h3>
            <hr>
            <form class="form-horizontal">
                <div class="control-group">
                    <label class="control-label">Nama Pegawai :</label>
                    <div class="controls">
                        <input id="tunjangan_pegawai_id" type="text" class="span11" name="tunjangan_pegawai_id" value="<?php echo e($penggajian->Tunjangan_pegawai->Pegawai->User->name); ?>" readonly>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Jumlah Jam Lembur :</label>
                    <div class="controls">
                         <input id="Jumlah_jam_lembur" type="text" class="span11" name="Jumlah_jam_lembur" value="<?php echo e($penggajian->Jumlah_jam_lembur); ?> Jam" readonly>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Jumlah Uang Lembur :</label>
                    <div class="controls">
                         <input id="Jumlah_uang_lembur" type="text" class="span11" name="Jumlah_uang_lembur" value="<?php echo 'Rp. '.number_format($penggajian->Jumlah_uang_lembur, 2, ",", ".");?>" readonly>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Gaji Pokok :</label>
                    <div class="controls">
                         <input id="Gaji_pokok" type="text" class="span11" name="Gaji_pokok" value="<?php echo 'Rp. '.number_format($penggajian->Gaji_pokok, 2, ",", "."); ?>" readonly>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Total Gaji :</label>
                    <div class="controls">
                         <input id="Total_gaji" type="text" class="span11" name="Total_gaji" value="<?php echo 'Rp. '.number_format($penggajian->Total_gaji, 2, ",", "."); ?>" readonly>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Tanggal Pengambilan :</label>
                    <div class="controls">
                         <input id="Tanggal_pengambilan" type="text" class="span11" name="Tanggal_pengambilan" value="<?php echo e($penggajian->Tanggal_pengambilan); ?>" readonly>
                    </div>
                </div>
                <?php
                    if($penggajian->Status_pengambilan == 0){
                        $status = "Sudah Terambil";
                    }
                    elseif($penggajian->Status_pengambilan == 1){
                        $status = "Belum Terambil";
                    }
                ?>
                <div class="control-group">
                    <label class="control-label">Status Pengambilan :</label>
                    <div class="controls">
                         <input id="Status_pengambilan" type="text" class="span11" name="Status_pengambilan" value="<?php echo e($status); ?>" readonly>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Petugas Penerima :</label>
                    <div class="controls">
                         <input id="Petugas_penerima" type="text" class="span11" name="Petugas_penerima" value="<?php echo e($penggajian->Petugas_penerima); ?>" readonly>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                         <a href="/gaji" type="submit" class="btn btn-primary">
                                <span class="icon-arrow-right"></span>
                            </a>
                    </div>
                </div>
            <form>

    </div>
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>