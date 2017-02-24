@extends('layouts.gaji')

@section('content')
<!-- Header -->
			<section id="header">
				<header>
					<h1>Hallo.. {{ Auth::user()->name }}</h1>
					<p>{{ Auth::user()->email }}</p>
				</header>
				<footer>
					<a href="#first" class="button style2 scrolly-middle">Lihat Gaji Anda</a>
				</footer>
			</section>

		<!-- Feature 1 -->
			<article id="first" class="container box style1 right">
				<a href="#" class="image fit"><img src="{{asset('/image/'.$pegawai->Photo)}}"/></a>
				<div class="inner">
					<header>
						<h2>Gaji Anda</h2>
					</header>
					@if(isset($penggajian))
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
					@else
						<table class="table table-bordered">
							<tr>
								<td>Gaji Anda Belum Terdaftar. Silahkan Hubungi Admin atau Bagian Keuangan</td>
							</tr>
							
						</table>
					@endif
				</div>
			</article>
		

		<section id="footer">
			<ul class="icons">
				<a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
		            <i class="icon-key"></i>Logout
		        </a>
		        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
		            {{ csrf_field() }}
		        </form>
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>&copy; 2017. Ica Cahyani | SMK Assalaam Bandung.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
		</section>
@endsection