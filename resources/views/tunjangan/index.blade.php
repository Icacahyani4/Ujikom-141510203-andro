@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
        <h5>Data Tunjangan</h5>
    </div>
    <div class="widget-content ">
        <h3>Tunjangan</h3>
        <hr>
        <a href="{{ url('/tunjangan/create') }}" class="btn btn-success"><span class="icon-plus"></span>&nbsp;&nbsp; Tambah Data</a><hr/>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr class="success">
					<th><center>No</center></th>
					<th><center>Kode Tunjangan</center></th>
					<th><center>Jabatan</center></th>
					<th><center>Golongan</center></th>
					<th><center>Status</center></th>
					<th><center>Jumlah Anak</center></th>
					<th><center>Besaran Uang</center></th>
					<th colspan="3"><center>Action</center></th>
				</tr>
			</thead>
			<tbody>
			@if(count($tunjangan) == 0)
				<tr>
					<td colspan="10"><center>Data Kosong!!</center></td>
				</tr>
			@else
				<?php
					$no = 1;
				?>
				@foreach($tunjangan as $data)
					<tr>
						<td><center>{{ $no++ }}</center></td>
						<td>{{ $data->Kode_tunjangan }}</td>
						<td>{{ $data->Jabatan->Nama_jabatan }}</td>
						<td>{{ $data->Golongan->Nama_golongan }}</td>
						<td>{{ $data->Status }}</td>
						<td>{{ $data->Jumlah_anak }}</td>
						<td><?php echo 'Rp. '.number_format($data->Besaran_uang, 2, ",", "."); ?></td>
						<td><center><a href="{{ url('tunjangan', $data->id) }}" class="btn btn-primary"><span class=" icon-eye-open"></span></a></center></td>
						<td><center><a href="{{ route('tunjangan.edit', $data->id) }}" class="btn btn-warning"><span class=" icon-edit"></span></a></center></td>
						<td><center>
							{!! Form::open(['method' => 'DELETE', 'route' => ['tunjangan.destroy', $data->id]]) !!}
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