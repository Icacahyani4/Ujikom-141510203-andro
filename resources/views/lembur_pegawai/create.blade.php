@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
        <h5>Data Lembur Pegawai</h5>
    </div>
    <div class="widget-content ">
        <h3>Lembur Pegawai</h3>
        <hr>
        {!!Form::open(['url' => '/lempeg', 'class' => 'form-horizontal']) !!}
            <div class="control-group">
                <label class="control-label">Nama Pegawai :</label>
                  <div class="controls">
                    <select name="pegawai_id" class="span11">
                        @foreach($pegawai as $data)
                            <option value="{{ $data->id }}">{{ $data->User->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Jumlah Jam :</label>
                  <div class="controls">
                    <input id="Jumlah_jam" type="number" class="span11" name="Jumlah_jam" required>

                </div>
            </div>
            <div class="control-group">
                  <div class="controls">
                  <button class="btn btn-success"><span class="icon-plus"></span>&nbsp;&nbsp; Tambah</button>
                </div>
            </div>
		{!! Form::close() !!}
    </div>
</div> 	
@endsection