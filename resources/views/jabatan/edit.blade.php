@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Jabatan</h5>
        </div>
        <div class="widget-content">
        <h3>Edit Data Jabatan</h3>
        <hr>
            {!! Form::model($jabatan, ['method' => 'PATCH', 'route' => ['jabatan.update', $jabatan->id], 'class' => 'form-horizontal']) !!}
                <div class="control-group{{ $errors->has('Kode_jabatan') ? ' has-error' : '' }}">
                  <label class="control-label">Kode Jabatan :</label>
                  <div class="controls">
                    <input type="text" name="Kode_jabatan" class="span11" value="{{ $jabatan->Kode_jabatan }}" readonly>
                    @if ($errors->has('Kode_jabatan'))
                      <span class="help-block">
                        <strong>{{ $errors->first('Kode_jabatan') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="control-group{{ $errors->has('Nama_jabatan') ? ' has-error' : '' }}">
                  <label class="control-label">Nama Jabatan :</label>
                  <div class="controls">
                    <input type="text" name="Nama_jabatan" class="span11" value="{{ $jabatan->Nama_jabatan }}">
                    @if ($errors->has('Nama_jabatan'))
                      <span class="help-block">
                        <strong>{{ $errors->first('Nama_jabatan') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="control-group{{ $errors->has('Besaran_uang') ? ' has-error' : '' }}">
                  <label class="control-label">Besaran Uang</label>
                  <div class="controls">
                    <input type="number" name="Besaran_uang" class="span11" value="{{ $jabatan->Besaran_uang }}">
                    @if ($errors->has('Besaran_uang'))
                      <span class="help-block">
                        <strong>{{ $errors->first('Besaran_uang') }}</strong>
                      </span>
                    @endif
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
    </div>
</div> 		
@endsection 	
