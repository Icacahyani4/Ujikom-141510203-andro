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
	                    <label for="Kode_lebur_id" class="col-md-4 control-label">Kode Jabatan</label>
						<div class="col-md-6">
	                       	<input id="Kode_lebur_id" type="text" class="form-control" name="Kode_lebur_id" value="<?php echo e($lembur_pegawai->kategori_lembur->Kode_lembur); ?>" readonly>
	                    </div>
	                </div>
	                <div class="form-group">

	                    <label for="pagawai_id" class="col-md-4 control-label">Nama Pegawai</label>
						<div class="col-md-6">
	                        <input id="pegawai_id" type="text" class="form-control" name="pegawai_id" value="<?php echo e($lembur_pegawai->Pegawai->User->name); ?>" readonly>
	                    </div>
	                </div>
	                <div class="form-group">

	                    <label for="pagawai_id" class="col-md-4 control-label"> Jabatan</label>
						<div class="col-md-6">
	                        <input id="pegawai_id" type="text" class="form-control" name="pegawai_id" value="<?php echo e($lembur_pegawai->Pegawai->Jabatan->Nama_jabatan); ?>" readonly>
	                    </div>
	                </div>
	                <div class="form-group">

	                    <label for="pagawai_id" class="col-md-4 control-label"> Golongan</label>
						<div class="col-md-6">
	                        <input id="pegawai_id" type="text" class="form-control" name="pegawai_id" value="<?php echo e($lembur_pegawai->Pegawai->Golongan->Nama_golongan); ?>" readonly>
	                    </div>
	                </div>
	                <div class="form-group">

	                    <label for="pagawai_id" class="col-md-4 control-label"> Besaran Uang</label>
						<div class="col-md-6">
	                        <input id="pegawai_id" type="text" class="form-control" name="pegawai_id" value="<?php echo 'Rp. '.number_format($lembur_pegawai->Kategori_lembur->Besaran_uang, 2, ",", "."); ?>" readonly>
	                    </div>
	                </div>
	                <div class="form-group">

	                    <label for="Jumlah_jam" class="col-md-4 control-label">Jumlah jam</label>
						<div class="col-md-6">
	                        <input type="number" name="Jumlah_jam" class="form-control" value="<?php echo e($lembur_pegawai->Jumlah_jam); ?>" readonly>
	                    </div>
	                </div>
					<div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <a href="/lempeg" type="submit" class="btn btn-primary">
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