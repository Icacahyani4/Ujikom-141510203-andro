@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Kategori Lembur</h5>
        </div>
        <div class="widget-content">
        <h3>Edit Data Kategori Lembur</h3>
        <hr>
		{!! Form::model($kategori_lembur, ['method' => 'PATCH', 'route' => ['katelembur.update', $kategori_lembur->id], 'class' => 'form-horizontal']) !!}
			<div class="control-group">
                <label class="control-label">Kode Kategori Lembur :</label>
                <div class="controls">
                   <input type="text" name="Kode_lembur" class="span11" value="{{ $kategori_lembur->Kode_lembur }}" readonly>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Kode Jabatan :</label>
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
                <label class="control-label">Kode golongan :</label>
                <div class="controls">
                   <select name="golongan_id" class="span11">
						<option value="{{ $gselected->id }}" selected>{{ $gselected->Nama_golongan }}</option>
                        @foreach($golselect as $unselect)
                            <option value="{{ $unselect->id }}" >{{ $unselect->Nama_golongan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Besaran Uang :</label>
                <div class="controls">
                   <input type="text" name="Besaran_uang" class="span11" value="{{ $kategori_lembur->Besaran_uang }}">
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