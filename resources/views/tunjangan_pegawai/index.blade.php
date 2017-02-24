@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
        <h5>Data Tunjangan Pegawai</h5>
    </div>
    <div class="widget-content ">
        <h3>Tunjangan Pegawai</h3>
        <hr>
        <a href="{{ url('/tunpeg/create') }}" class="btn btn-success"><span class="icon-plus"></span>&nbsp;&nbsp; Tambah Data</a><hr/>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr class="success">
					<th><center>No</center></th>
					<th><center>Kode Tunjangan</center></th>
					<th><center>NIP Pegawai</center></th>
					<th><center>Nama Pegawai</center></th>
					<th><center>Jabatan</center></th>
					<th><center>Golongan</center></th>
					<th colspan="3"><center>Action</center></th>
				</tr>
			</thead>
			<tbody>
			@if(count($tunjangan_pegawai) == 0)
				<tr>
					<td colspan="9"><center>Data Kosong!!</center></td>
				</tr>
			@else
				<?php
					$no = 1;
				?>
				@foreach($tunjangan_pegawai as $data)
					<tr>
						<td><center>{{ $no++ }}</center></td>
						<td>{{ $data->Tunjangan->Kode_tunjangan }}</td>
						<td>{{ $data->Pegawai->Nip }}</td>
						<td>{{ $data->Pegawai->User->name }}</td>
						<td>{{ $data->Pegawai->Jabatan->Nama_jabatan }}</td>
						<td>{{ $data->Pegawai->Golongan->Nama_golongan }}</td>
						<td><center><a href="{{ url('tunpeg', $data->id) }}" class="btn btn-primary"><span class=" icon-eye-open"></span></a></center></td>
						<td><center><a href="{{ route('tunpeg.edit', $data->id) }}" class="btn btn-warning"><span class=" icon-edit"></span></a></center></td>
						<td><center>
							{!! Form::open(['method' => 'DELETE', 'route' => ['tunpeg.destroy', $data->id]]) !!}
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