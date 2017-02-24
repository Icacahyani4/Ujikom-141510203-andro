@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
        <h5>Data Golongan</h5>
    </div>
    <div class="widget-content ">
        <h3>Golongan</h3>
        <hr>
        <a href="{{ url('/golongan/create') }}" class="btn btn-success"><span class="icon-plus"></span>&nbsp;&nbsp; Tambah data</a><hr/>
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
			@if(count($golongan) == 0)
				<tr>
					<td colspan="7"><center>Data Kosong!!</center></td>
				</tr>
			@else
				<?php
					$no = 1;
				?>
				@foreach($golongan as $data)
					<tr>
						<td><center>{{ $no++ }}</center></td>
						<td>{{ $data->Kode_golongan }}</td>
						<td>{{ $data->Nama_golongan }}</td>
						<td><?php echo 'Rp. '.number_format($data->Besaran_uang, 2, ",", "."); ?></td>
						<td><center><a href="{{ url('golongan', $data->id) }}" class="btn btn-primary"><span class=" icon-eye-open"></span></a></center></td>
						<td><center><a href="{{ route('golongan.edit', $data->id) }}" class="btn btn-warning"><span class=" icon-edit"></span></a></center></td>
						<td><center>
							{!! Form::open(['method' => 'DELETE', 'route' => ['golongan.destroy', $data->id]]) !!}
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