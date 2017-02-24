@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
        <h5>Data Pengguna</h5>
    </div>
    <div class="widget-content ">
        <h3>Pengguna</h3>
        <hr>
        <a href="{{ url('/pegawai/create') }}" class="btn btn-success"><span class="icon-plus"></span>&nbsp;&nbsp; Tambah Data</a>
        <a href="{{ url('/pegawai') }}" class="btn btn-info"><span class="icon-user"></span>&nbsp;&nbsp; Data Pegawai</a>
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
					@foreach($user as $data)
						<tr>
							<td><center>{{ $no++ }}</center></td>
							<td>{{ $data->name }}</td>
							<td>{{ $data->email }}</td>
							<td>{{ $data->password }}</td>
							<td>{{ $data->permission }}</td>
							<td><center>
								{!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $data->id]]) !!}
									<button class="btn btn-danger"><span class="icon-trash"></span></button>
								{!! Form::close() !!}
							</center></td>
						</tr>
					@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection