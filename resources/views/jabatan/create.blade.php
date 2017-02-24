@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Jabatan</h5>
        </div>
        <div class="widget-content">
        <h3>Tambah Data Jabatan</h3>
        <hr>
            {!!Form::open(['url' => '/jabatan', 'class' => 'form-horizontal']) !!}
                <div class="control-group{{ $errors->has('Kode_jabatan') ? ' has-error' : '' }}">
                  <label class="control-label">Kode Jabatan :</label>
                  <div class="controls">
                    <input id="Kode_jabatan" type="text" class="span11" name="Kode_jabatan" value="{{ $kode }}" readonly />
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
                    <input id="Nama_jabatan" type="text" class="span11" name="Nama_jabatan" required />
                    @if ($errors->has('Nama_jabatan'))
                      <span class="help-block">
                        <strong>{{ $errors->first('Nama_jabatan') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Besaran Uang</label>
                  <div class="controls">
                    <input id="Besaran_uang" type="number" class="span11" name="Besaran_uang"  required>
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
@endsection