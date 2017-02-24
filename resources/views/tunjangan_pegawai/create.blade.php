@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Tunjangan Pegawai</h5>
        </div>
        <div class="widget-content">
            <h3>Tambah Data Tunjangan Pegawai</h3>
            <hr>
                    {!!Form::open(['url' => '/tunpeg', 'class' => 'form-horizontal']) !!}
						          <div class="control-group{{ $errors->has('Kode_tunjangan_id') ? ' has-error' : '' }}">
                          <label class="control-label">Kode tunjangan :</label>
                          <div class="controls">
                            <select name="Kode_tunjangan_id" class="span11">
                                    @foreach($tunjangan as $data)
                                        <option value="{{ $data->id }}">{{ $data->Kode_tunjangan }} || {{ $data->Jabatan->Nama_jabatan }} || {{ $data->Golongan->Nama_golongan }} || {{ $data->Status }} || {{ $data->Jumlah_anak }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('Kode_tunjangan_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Kode_tunjangan_id') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                        <div class="control-group{{ $errors->has('pegawai_id') ? ' has-error' : '' }}">
                          <label class="control-label">Pegawai :</label>
                          <div class="controls">
                            <select name="pegawai_id" class="span11">
                                    @foreach($pegawai as $data)
                                        <option value="{{ $data->id }}">{{ $data->Nip }} || {{ $data->User->name }} || {{ $data->Jabatan->Nama_jabatan }} || {{ $data->Golongan->Nama_golongan }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('pegawai_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('pegawai_id') }}</strong>
                                </span>
                            @endif
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
	   </div>
    </div>
</div> 	
@endsection