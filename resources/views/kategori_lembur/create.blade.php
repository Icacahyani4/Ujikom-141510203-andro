@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Kategori Lembur</h5>
        </div>
        <div class="widget-content">
            <h3>Tambah Data Kategori Lembur</h3>
            <hr>
            {!!Form::open(['url' => '/katelembur', 'class' => 'form-horizontal']) !!}
				        <div class="control-group">
                  <label class="control-label">Kode Kategori Lembur :</label>
                  <div class="controls">
                    <input id="Kode_lembur" type="text" class="span11" name="Kode_lembur" value="{{ $kode }}" readonly />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Kode Jabatan :</label>
                  <div class="controls">
                    <select name="jabatan_id" class="span11">
                        @foreach($jabatan as $data)
                            <option value="{{ $data->id }}">{{ $data->Nama_jabatan }}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Kode Golongan :</label>
                  <div class="controls">
                    <select name="golongan_id" class="span11">
                        @foreach($golongan as $data)
                            <option value="{{ $data->id }}">{{ $data->Nama_golongan }}</option>
                        @endforeach
                    </select>
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
</div> 	
@endsection