@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
        <h5>Data Penggajian</h5>
    </div>
    <div class="widget-content ">
        <h3>Tambah Penggajian</h3>
        <hr>
        {!! Form::model($penggajian, ['method' => 'PATCH', 'route' => ['gaji.update', $penggajian->id], 'class' => 'form-horizontal']) !!}
            <div class="control-group">
                <label class="control-label">Nama Pegawai  :</label>
                <div class="controls">
                    <select name="tunjangan_pegawai_id" class="span11">
                        <option value="{{ $pselected->id }}">{{ $pselected->Pegawai->Nip }} || {{ $pselected->Pegawai->User->name }}</option>
                        @foreach($pegunselect as $data)
                            <option value="{{ $data->id }}">{{ $data->Pegawai->Nip }} || {{ $data->Pegawai->User->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Status Pengambilan  :</label>
                <div class="controls">
                    <select name="Status_pengambilan" class="span11">
                        <option value="0">Sudah Terambil</option>
                        <option value="1">Belum Terambil</option>
                    </select>
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