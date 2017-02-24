<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
        <h5>Data Golongan</h5>
    </div>
    <div class="widget-content ">
        <h3>Golongan</h3>
        <hr>
        <a href="<?php echo e(url('/golongan/create')); ?>" class="btn btn-success"><span class="icon-plus"></span>&nbsp;&nbsp; Tambah data</a><hr/>
        <table class="table table-bordered table-striped">
            <thead>
				<tr class="success">
					<th><center>No</center></th>
					<th><center>Kode Golongan</center></th>
					<th><center>Nama Golongan</center></th>
					<th><center>Besaran Uang</center></th>
					<th colspan="3"><center>Action</center></th>
				</tr>
			</thead>
			<tbody>
			<?php if(count($golongan) == 0): ?>
				<tr>
					<td colspan="7"><center>Data Kosong!!</center></td>
				</tr>
			<?php else: ?>
				<?php
					$no = 1;
				?>
				<?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<tr>
						<td><center><?php echo e($no++); ?></center></td>
						<td><?php echo e($data->Kode_golongan); ?></td>
						<td><?php echo e($data->Nama_golongan); ?></td>
						<td><?php echo 'Rp. '.number_format($data->Besaran_uang, 2, ",", "."); ?></td>
						<td><center><a href="<?php echo e(url('golongan', $data->id)); ?>" class="btn btn-primary"><span class=" icon-eye-open"></span></a></center></td>
						<td><center><a href="<?php echo e(route('golongan.edit', $data->id)); ?>" class="btn btn-warning"><span class=" icon-edit"></span></a></center></td>
						<td><center>
							<?php echo Form::open(['method' => 'DELETE', 'route' => ['golongan.destroy', $data->id]]); ?>

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