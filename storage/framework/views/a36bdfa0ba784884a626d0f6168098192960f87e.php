<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
        <h5>Data Lembur Pegawai</h5>
    </div>
    <div class="widget-content ">
        <h3>Lembur Pegawai</h3>
        <hr>
        <a href="<?php echo e(url('/lempeg/create')); ?>" class="btn btn-success"><span class="icon-plus"></span>&nbsp;&nbsp; Tambah Data</a>
        <hr/>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr class="success">
					<th><center>No</center></th>
					<th><center>Tanggal</center></th>
					<th><center>Kode Lembur</center></th>
					<th><center>NIP Pegawai</center></th>
					<th><center>Nama Pegawai</center></th>
					<th><center>Jabatan</center></th>
					<th><center>Golongan</center></th>
					<th><center>Jumlah Jam</center></th>
					<th colspan="3"><center>Action</center></th>
				</tr>
			</thead>
			<tbody>
			<?php if(count($lembur_pegawai) == 0): ?>
				<tr>
					<td colspan="11"><center>Data Kosong!!</center></td>
				</tr>
			<?php else: ?>
				<?php
					$no = 1;
				?>
				<?php $__currentLoopData = $lembur_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<tr>
						<td><center><?php echo e($no++); ?></center></td>
						<td><?php echo e($data->created_at); ?></td>
						<td><?php echo e($data->Kategori_lembur->Kode_lembur); ?></td>
						<td><?php echo e($data->Pegawai->Nip); ?></td>
						<td><?php echo e($data->Pegawai->User->name); ?></td>
						<td><?php echo e($data->Pegawai->Jabatan->Nama_jabatan); ?></td>
						<td><?php echo e($data->Pegawai->Golongan->Nama_golongan); ?></td>
						<td><?php echo e($data->Jumlah_jam); ?> Jam</td>
						<td><center><a href="<?php echo e(url('lempeg', $data->id)); ?>" class="btn btn-primary"><span class=" icon-eye-open"></span></a></center></td>
						<td><center><a href="<?php echo e(route('lempeg.edit', $data->id)); ?>" class="btn btn-warning"><span class=" icon-edit"></span></a></center></td>
						<td><center>
							<?php echo Form::open(['method' => 'DELETE', 'route' => ['lempeg.destroy', $data->id]]); ?>

								<button class="btn btn-danger"><span class="icon-trash"></span></button>
							<?php echo Form::close(); ?>

						</center></td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			<?php endif; ?>
			</tbody>
		</table>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>