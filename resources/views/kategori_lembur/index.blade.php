@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
        <h5>Data Kategori Lembur</h5>
    </div>
    <div class="widget-content ">
        <h3>Kategori Lembur</h3>
        <hr>
        <a href="{{ url('/katelembur/create') }}" class="btn btn-success"><span class="icon-plus"></span>&nbsp;&nbsp; Tambah Data</a><hr/>
        <table class="table table-bordered table-striped">
			<thead>
				<tr class="success">
					<th><center>No</center></th>
					<th><center>Kode Lembur</center></th>
					<th><center>Nama Jabatan</center></th>
					<th><center>Nama Golongan</center></th>
					<th><center>Besaran Uang</center></th>
					<th colspan="3"><center>Action</center></th>
				</tr>
			</thead>
			<tbody>
			@if(count($kategori_lembur) == 0)
				<tr>
					<td colspan="8"><center>Data Kosong!!</center></td>
				</tr>
			@else
				<?php
					$no = 1;
				?>
				@foreach($kategori_lembur as $data)
					<tr>
						<td><center>{{ $no++ }}</center></td>
						<td>{{ $data->Kode_lembur }}</td>
						<td>{{ $data->jabatan->Nama_jabatan }}</td>
						<td>{{ $data->golongan->Nama_golongan }}</td>
						<td><?php echo 'Rp. '.number_format($data->Besaran_uang, 2, ",", "."); ?></td>
						<td><center><a href="{{ url('katelembur', $data->id) }}" class="btn btn-primary"><span class=" icon-eye-open"></span></a></center></td>
						<td><center><a href="{{ route('katelembur.edit', $data->id) }}" class="btn btn-warning"><span class=" icon-edit"></span></a></center></td>
						<td><center>
							{!! Form::open(['method' => 'DELETE', 'route' => ['katelembur.destroy', $data->id]]) !!}
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