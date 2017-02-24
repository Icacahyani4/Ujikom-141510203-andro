<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
        <h5>Data Pengguna</h5>
    </div>
    <div class="widget-content ">
        <h3>Pengguna</h3>
        <hr>
        <a href="<?php echo e(url('/pegawai/create')); ?>" class="btn btn-success"><span class="icon-plus"></span>&nbsp;&nbsp; Tambah Data</a>
        <a href="<?php echo e(url('/pegawai')); ?>" class="btn btn-info"><span class="icon-user"></span>&nbsp;&nbsp; Data Pegawai</a>
		<hr>
        <?php
        	use App\User;

        	$jumpen = User::count();
        	echo "Jumlah data Pengguna : ".$jumpen;
        ?> 
        <hr/>	
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr class="success">
					<th><center>No</center></th>
					<th><center>Nama Pegawai</center></th>
					<th><center>Email</center></th>
					<th><center>Password</center></th>
					<th><center>Permisson</center></th>
					<th><center>Action</center></th>
				</tr>
			</thead>
			<tbody>
				<?php
					$no = 1;
				?>
					<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
						<tr>
							<td><center><?php echo e($no++); ?></center></td>
							<td><?php echo e($data->name); ?></td>
							<td><?php echo e($data->email); ?></td>
							<td><?php echo e($data->password); ?></td>
							<td><?php echo e($data->permission); ?></td>
							<td><center>
								<?php echo Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $data->id]]); ?>

									<button class="btn btn-danger"><span class="icon-trash"></span></button>
								<?php echo Form::close(); ?>

							</center></td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			</tbody>
		</table>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.apps', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>