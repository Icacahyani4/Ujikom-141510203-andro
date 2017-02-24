@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Data Pegawai</h5>
        </div>
        <div class="widget-content">
            <h3> Pegawai</h3>
            <hr>
		<a href="{{ url('/pegawai/create') }}" class="btn btn-success"><span class="icon-plus"></span>&nbsp;&nbsp; Tambah Data</a>		
        <a href="{{ url('/user') }}" class="btn btn-info"><span class="icon-user"></span>&nbsp;&nbsp; Data Pengguuna</a>
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
			@if(count($pegawai) == 0)
				<tr>
					<td colspan="10"><center>Data Kosong!!</center></td>
				</tr>
			@else
				<?php
					$no = 1;
				?>
				@foreach($pegawai as $data)
					<tr>
						<td><center>{{ $no++ }}</center></td>
						<td>{{ $data->Nip }}</td>
						<td>{{ $data->User->name }}</td>
						<td>{{ $data->Jabatan->Nama_jabatan }}</td>
						<td>{{ $data->Golongan->Nama_golongan }}</td>
						<td>{{ $data->User->permission }}</td>
						<td>
							<center>
								<img src="{{asset('/img/'.$data->Photo)}}" height="100px" width="100px" class="img-rounded">
							</center>
						</td>
						<td><center><a href="{{ url('pegawai', $data->id) }}" class="btn btn-primary"><span class="icon-eye-open"></span></a></center></td>
						<td><center><a href="{{ route('pegawai.edit', $data->id) }}" class="btn btn-warning"><span class="icon-edit"></span></a></center></td>
						<td><center>
							{!! Form::open(['method' => 'DELETE', 'route' => ['pegawai.destroy', $data->id]]) !!}
								<button class="btn btn-danger"><span class="icon-trash"></span></button>
							{!! Form::close() !!}
						</center></td>
					</tr>
				@endforeach
			@endif
			</tbody>
		</table>
	</div>
</div>

@endsection