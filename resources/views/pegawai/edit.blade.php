@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Pegawai</h5>
    </div>
        <div class="widget-content">
	        <h3>Edit Data Pegawai</h3>
	        <hr>
				{!! Form::model($pegawai, ['class' => 'form-horizontal',  'enctype' => 'multipart/form-data', 'method' => 'PATCH', 'route' => ['pegawai.update', $pegawai->id], 'files' => true]) !!}
				        <div class="control-group">
                  <label class="control-label">NIP :</label>
                  <div class="controls">
                    <input id="Nip" type="text" class="span11" name="Nip" value="{{ $pegawai->Nip }}" required readonly />
                  </div>
                </div>
	          
                <div class="control-group">
                  <label class="control-label">Nama Pegawai :</label>
                  <div class="controls">
                    <input id="user_id" type="text" class="span11" name="user_id" value="{{ $pegawai->User->name }}" readonly />
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Nama Jabatan :</label>
                  <div class="controls">
                    <select name="jabatan_id" class="span11">
						          <option value="{{ $jselected->id }}" selected>{{ $jselected->Nama_jabatan }}</option>
                        @foreach($junselect as $unselect)
                            <option value="{{ $unselect->id }}" >{{ $unselect->Nama_jabatan }}</option>
                        @endforeach
                    </select>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Nama Golongan :</label>
                  <div class="controls">
                    <select name="golongan_id" class="span11">
						          <option value="{{ $gselected->id }}" selected>{{ $gselected->Nama_golongan }}</option>
                        @foreach($golselect as $unselected)
                            <option value="{{ $unselected->id }}" >{{ $unselected->Nama_golongan }}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
	            <div class="control-group">
                  <label class="control-label">Photo :</label>
                  <div class="controls">
                    <img src="{{asset('/image/'.$pegawai->Photo)}}"  height="100px" width="100px" class="image-control img-rounded">
                  </div>
                  <div class="controls">
                  	<input id="Photo" type="file" class="span11" name="Photo" value="{{ $pegawai->Photo }}">
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