<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Data Pegawai</h5>
        </div>
        <div class="widget-content">
            <h3> Pegawai</h3>
            <hr>
		<a href="<?php echo e(url('/pegawai/create')); ?>" class="btn btn-success"><span class="icon-plus"></span>&nbsp;&nbsp; Tambah Data</a>		
        <a href="<?php echo e(url('/user')); ?>" class="btn btn-info"><span class="icon-user"></span>&nbsp;&nbsp; Data Pengguuna</a>
		<hr>
		<?php
        	use App\Pegawai;

        	$jumpen = Pegawai::count();
        	echo "Jumlah data Pegawai : ".$jumpen;
        ?>
        <hr/>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr class="success">
					<th><center>No</center></th>
					<th><center>Nip</center></th>
					<th><center>Nama Pegawai</center></th>
					<th><center>Nama Jabatan</center></th>
					<th><center>Nama Golongan</center></th>
					<th><center>Permission</center></th>
					<th><center>Photo</center></th>
					<th colspan="3"><center>Action</center></th>
				</tr>
			</thead>
			<tbody>
			<?php if(count($pegawai) == 0): ?>
				<tr>
					<td colspan="10"><center>Data Kosong!!</center></td>
				</tr>
			<?php else: ?>
				<?php
					$no = 1;
				?>
				<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<tr>
						<td><center><?php echo e($no++); ?></center></td>
						<td><?php echo e($data->Nip); ?></td>
						<td><?php echo e($data->User->name); ?></td>
						<td><?php echo e($data->Jabatan->Nama_jabatan); ?></td>
						<td><?php echo e($data->Golongan->Nama_golongan); ?></td>
						<td><?php echo e($data->User->permission); ?></td>
						<td>
							<center>
								<img src="<?php echo e(asset('/image/'.$data->Photo)); ?>" height="100px" width="100px" class="img-rounded">
							</center>
						</td>
						<td><center><a href="<?php echo e(url('pegawai', $data->id)); ?>" class="btn btn-primary"><span class="icon-eye-open"></span></a></center></td>
						<td><center><a href="<?php echo e(route('pegawai.edit', $data->id)); ?>" class="btn btn-warning"><span class="icon-edit"></span></a></center></td>
						<td><center>
							<?php echo Form::open(['method' => 'DELETE', 'route' => ['pegawai.destroy', $data->id]]); ?>

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