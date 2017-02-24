@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Pegawai</h5>
        </div>
        <div class="widget-content">
            <h3>Tambah Data Pegawai</h3>
            <hr>
                    {!!Form::open(['url' => '/pegawai', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data', 'files' => true]) !!}
                        {{ csrf_field() }}
                        <div class="control-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label class="control-label">Nama :</label>
                          <div class="controls">
                            <input id="name" type="text" class="span11" name="name" value="{{ old('name') }}" required>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                        <div class="control-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label class="control-label">E-Mail Address :</label>
                          <div class="controls">
                            <input id="email" type="email" class="span11" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                        <div class="control-group{{ $errors->has('permission') ? ' has-error' : '' }}">
                          <label class="control-label">Permission :</label>
                          <div class="controls">
                            <select class="span11" name="permission">
                                    <option value="Pegawai">Pegawai</option>
                                    <option value="Admin">Admin</option>
                                    <option value="HRD">HRD</option>
                                    <option value="Keuangan">Keuangan</option>
                            </select>
                          </div>
                        </div>
                        <div class="control-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label class="control-label">Password :</label>
                          <div class="controls">
                            <input id="password" type="password" class="span11" name="password" value="{{ old('password') }}" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                        <div class="control-group{{ $errors->has('password-confirm') ? ' has-error' : '' }}">
                          <label class="control-label">Password :</label>
                          <div class="controls">
                            <input id="password-confirm" type="password" class="span11" name="password_confirmation" required>
                          </div>
                        </div>               
                        <hr>
                        








						            <div class="control-group{{ $errors->has('Nip') ? ' has-error' : '' }}">
                          <label class="control-label">NIP :</label>
                          <div class="controls">
                            <input id="Nip" type="text" class="span11" name="Nip" value="{{ $kode }}" readonly required>
                            @if ($errors->has('Nip'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Nip') }}</strong>
                                </span>
                            @endif
                          </div>
                        </div>
                        <div class="control-group{{ $errors->has('Jabatan') ? ' has-error' : '' }}">
                          <label class="control-label">Jabatan :</label>
                          <div class="controls">
                            <select name="jabatan_id" class="span11">
                                    @foreach($jabatan as $data)
                                        <option value="{{ $data->id }}">{{ $data->Nama_jabatan }}</option>
                                    @endforeach
                                </select>
                          </div>
                        </div>
                        <div class="control-group{{ $errors->has('Golongan') ? ' has-error' : '' }}">
                          <label class="control-label">Golongan :</label>
                          <div class="controls">
                            <select name="golongan_id" class="span11">
                                    @foreach($golongan as $data)
                                        <option value="{{ $data->id }}">{{ $data->Nama_golongan }}</option>
                                    @endforeach
                                </select>
                          </div>
                        </div>
                       <div class="control-group{{ $errors->has('Photo') ? ' has-error' : '' }}">
                          <label class="control-label">Photo :</label>
                          <div class="controls">
                            <input id="Photo" type="file" class="span11" name="Photo">
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