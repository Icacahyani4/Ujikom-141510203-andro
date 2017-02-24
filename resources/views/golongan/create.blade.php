@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Golongan</h5>
        </div>
        <div class="widget-content">
        <h3>Tambah Data Golongan</h3>
        <hr>
            {!!Form::open(['url' => '/golongan', 'class' => 'form-horizontal']) !!}
                <div class="control-group{{ $errors->has('Kode_golongan') ? ' has-error' : '' }}">
                  <label class="control-label">Kode Golongan :</label>
                  <div class="controls">
                    <input id="Kode_golongan" type="text" class="span11" name="Kode_golongan" value="{{ $kode }}" readonly />
                    @if ($errors->has('Kode_golongan'))
                      <span class="help-block">
                        <strong>{{ $errors->first('Kode_golongan') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="control-group{{ $errors->has('Nama_golongan') ? ' has-error' : '' }}">
                  <label class="control-label">Nama Golongan :</label>
                  <div class="controls">
                    <input id="Nama_golongan" type="text" class="span11" name="Nama_golongan" required />
                    @if ($errors->has('Nama_golongan'))
                      <span class="help-block">
                        <strong>{{ $errors->first('Nama_golongan') }}</strong>
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