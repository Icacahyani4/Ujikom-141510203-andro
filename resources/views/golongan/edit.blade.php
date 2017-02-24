@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Golongan</h5>
        </div>
        <div class="widget-content">
        <h3>Edit Data Golongan</h3>
        <hr>
            {!! Form::model($golongan, ['method' => 'PATCH', 'route' => ['golongan.update', $golongan->id], 'class' => 'form-horizontal']) !!}
                <div class="control-group{{ $errors->has('Kode_golongan') ? ' has-error' : '' }}">
                  <label class="control-label">Kode Golongan :</label>
                  <div class="controls">
                    <input type="text" name="Kode_golongan" class="span11" value="{{ $golongan->Kode_golongan }}" readonly>
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
                    <input type="text" name="Nama_golongan" class="span11" value="{{ $golongan->Nama_golongan }}">
                    @if ($errors->has('Nama_golongan'))
                      <span class="help-block">
                        <strong>{{ $errors->first('Nama_golongan') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
                <div class="control-group{{ $errors->has('Besaran_uang') ? ' has-error' : '' }}">
                  <label class="control-label">Besaran Uang</label>
                  <div class="controls">
                    <input type="number" name="Besaran_uang" class="span11" value="{{ $golongan->Besaran_uang }}">
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
