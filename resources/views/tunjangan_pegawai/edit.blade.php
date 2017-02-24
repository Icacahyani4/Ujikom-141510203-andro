@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Tunjangan Pegawai</h5>
        </div>
        <div class="widget-content">
            <h3>Edit Data Tunjangan Pegawai</h3>
            <hr>
				{!! Form::model($tunjangan_pegawai, ['method' => 'PATCH', 'route' => ['tunpeg.update', $tunjangan_pegawai->id], 'class' => 'form-horizontal']) !!}
					<div class="control-group">
                      <label class="control-label">Nama pegawai :</label>
                      <div class="controls">
                        <select name="pegawai_id" class="span11">
                                      <option value="{{ $pselected->id }}" selected>{{ $pselected->User->name }}</option>
                            @foreach($pegselect as $unselect)
                                <option value="{{ $unselect->id }}" >{{ $unselect->User->name }}</option>
                            @endforeach
                        </select>
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