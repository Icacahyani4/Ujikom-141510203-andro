@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Tunjangan</h5>
        </div>
        <div class="widget-content">
            <h3>Edit Data Tunjangan</h3>
            <hr>
				{!! Form::model($tunjangan, ['method' => 'PATCH', 'route' => ['tunjangan.update', $tunjangan->id], 'class' => 'form-horizontal']) !!}
					<div class="control-group">
	                    <label class="control-label">Kode Tunjangan :</label>
						<div class="controls">
	                        <input type="text" name="Kode_tunjangan" class="span11" value="{{ $tunjangan->Kode_tunjangan }}" readonly>
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
	                  <label class="control-label">Status :</label>
	                  <div class="controls">
	                    <input id="Status" type="text" class="span11" name="Status" value="{{ $tunjangan->Status }}"  />
	                  </div>
	                </div>
	                <div class="control-group">
	                  <label class="control-label">Jumlah_anak :</label>
	                  <div class="controls">
	                    <input id="Jumlah_anak" type="text" class="span11" name="Jumlah_anak" value="{{ $tunjangan->Jumlah_anak }}" />
	                  </div>
	                </div>
	                <div class="control-group">
	                  <label class="control-label">Besaran_uang :</label>
	                  <div class="controls">
	                    <input id="Besaran_uang" type="text" class="span11" name="Besaran_uang" value="{{ $tunjangan->Besaran_uang }}" />
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
</div> 	
@endsection