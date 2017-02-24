<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">Lihat Data Lembur Pegawai</div>
                <div class="panel-body">
                <hr>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="Kode_tunjangan_id" class="col-md-4 control-label">Kode Tunjangan</label>
                        <div class="col-md-6">
                            <input id="Kode_tunjangan_id" type="text" class="form-control" name="Kode_tunjangan_id" value="<?php echo e($tunjangan_pegawai->Tunjangan->Kode_tunjangan); ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">

                        <label for="pagawai_id" class="col-md-4 control-label">Nama Pegawai</label>
                        <div class="col-md-6">
                            <input id="pegawai_id" type="text" class="form-control" name="pegawai_id" value="<?php echo e($tunjangan_pegawai->Pegawai->User->name); ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <a href="/tunpeg" type="submit" class="btn btn-primary">
                                Kembali
                            </a>
                        </div>
                     </div>
                <form>
               </div>
           </div>
       </div>
    </div>
</div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>