@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Lembur Pegawai</h5>
        </div>
        <div class="widget-content">
        <h3>Edit Data Lembur Pegawai</h3>
        <hr>
		{!! Form::model($lembur_pegawai, ['method' => 'PATCH', 'route' => ['lempeg.update', $lembur_pegawai->id], 'class' => 'form-horizontal']) !!}
	        <div class="control-group">
                <label class="control-label">Kode Jabatan :</label>
                <div class="controls">
                    <select name="pagawai_id" class="span11">
	                    <option value="{{ $pselected->id }}" selected>{{ $pselected->Nip }} || {{ $pselected->User->name }}</option>
	                    @foreach($pegselect as $data)
	                        <option value="{{ $data->id }}">{{ $data->Nip }} || {{ $data->User->name }}</option>
	                    @endforeach
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Jumlah Jam :</label>
                <div class="controls">
                    <input type="number" name="Jumlah_jam" class="span11" value="{{ $lembur_pegawai->Jumlah_jam }}">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-primary"><span class="icon-edit"></span></button>
                </div>
            </div>
		{!! Form::close() !!}
    </div>
</div> 	
@endsection