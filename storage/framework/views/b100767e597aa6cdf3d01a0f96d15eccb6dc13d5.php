<?php $__env->startSection('content'); ?>
<!-- Header -->
			<section id="header">
				<header>
					<h1>Hallo.. <?php echo e(Auth::user()->name); ?></h1>
					<p><?php echo e(Auth::user()->email); ?></p>
				</header>
				<footer>
					<a href="#first" class="button style2 scrolly-middle">Lihat Gaji Anda</a>
				</footer>
			</section>

		<!-- Feature 1 -->
			<article id="first" class="container box style1 right">
				<a href="#" class="image fit"><img src="<?php echo e(asset('/image/'.$pegawai->Photo)); ?>"/></a>
				<div class="inner">
					<header>
						<h2>Gaji Anda</h2>
					</header>
					<?php if(isset($penggajian)): ?>
						<table class="table table-bordered">
							<tr>
								<td><?php echo 'Rp. '.number_format($penggajian->Total_gaji, 2, ",", "."); ?></td>
							</tr>
							<tr>
								<td><?php
										if($penggajian->Status_pengambilan == 0)
											echo "Sudah Terambil";
										elseif($penggajian->Status_pengambilan == 1)
											echo "Belum Terambil";
									?></td>
							</tr>
						</table>
					<?php else: ?>
						<table class="table table-bordered">
							<tr>
								<td>Gaji Anda Belum Terdaftar. Silahkan Hubungi Admin atau Bagian Keuangan</td>
							</tr>
							
						</table>
					<?php endif; ?>
				</div>
			</article>
		

		<section id="footer">
			<ul class="icons">
				<a href="<?php echo e(url('/logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
		            <i class="icon-key"></i>Logout
		        </a>
		        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
		            <?php echo e(csrf_field()); ?>

		        </form>
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>&copy; 2017. Ica Cahyani | SMK Assalaam Bandung.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
		</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.gaji', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>