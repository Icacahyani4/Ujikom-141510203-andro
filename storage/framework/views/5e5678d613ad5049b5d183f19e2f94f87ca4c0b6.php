<?php $__env->startSection('content'); ?>
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
        <h5>Data Penggajian</h5>
    </div>
    <div class="widget-content ">
        <h3>Penggajian</h3>
        <hr>
        <a href="<?php echo e(url('/gaji/create')); ?>" class="btn btn-success"><span class="icon-plus"></span>&nbsp;&nbsp; Tambah Data</a><hr/>
        <?php
        	use App\Penggajian;

        	$jumpen = Penggajian::count();
        	echo "Jumlah data penggajian : ".$jumpen;
        ?> 
        <hr/>	
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr class="success">
					<th><center>No</center></th>
					<th><center>Nama Pegawai</center></th>
					<th><center>Jumlah Jam Lembur</center></th>
					<th><center>Jumlah Uang Lembur</center></th>
					<th><center>Gaji Pokok</center></th>
					<th><center>Total Gaji</center></th>
					<th><center>Tanggal Pengambilan</center></th>
					<th><center>Status Pengambilan</center></th>
					<th><center>Petugas Penerima</center></th>
					<th colspan="3"><center>Action</center></th>
				</tr>
			</thead>
			<tbody>
				<?php
					$no = 1;
				?>
					<?php $__currentLoopData = $penggajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
						<tr>
							<td><center><?php echo e($no++); ?></center></td>
							<td><?php echo e($data->Tunjangan_pegawai->Pegawai->User->name); ?></td>
							<td><?php echo e($data->Jumlah_jam_lembur); ?> Jam</td>
							<td><?php echo 'Rp. '.number_format($data->Jumlah_uang_lembur, 2, ",", "."); ?></td>
							<td><?php echo 'Rp. '.number_format($data->Gaji_pokok, 2, ",", "."); ?></td>
							<td><?php echo 'Rp. '.number_format($data->Total_gaji, 2, ",", "."); ?></td>
							<td><?php echo e($data->Tanggal_pengambilan); ?></td>
							<td><?php
									if($data->Status_pengambilan == 0)
										echo "Sudah Terambil";
									elseif($data->Status_pengambilan == 1)
										echo "Belum Terambil";
								?>
							</td>
							<td><?php echo e($data->Petugas_penerima); ?></td>
							<td><center><a href="<?php echo e(url('gaji', $data->id)); ?>" class="btn btn-primary"><span class="icon-eye-open"></span></a></center></td>
							<td><center><a href="<?php echo e(route('gaji.edit', $data->id)); ?>" class="btn btn-warning"><span class="icon-edit"></span></a></center></td>
							<td><center>
								<?php echo Form::open(['method' => 'DELETE', 'route' => ['gaji.destroy', $data->id]]); ?>

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