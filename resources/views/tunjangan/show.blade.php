@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Tunjangan</h5>
    </div>
        <div class="widget-content">
            <h3>Lihat Data Tunjangan</h3>
            <hr>
            <form class="form-horizontal">
                <div class="control-group">
                    <label class="control-label">Kode Tunjangan :</label>
                    <div class="controls">
                        <input type="text"  class="span11" name="Kode_tunjangan" value="{{ $tunjangan->Kode_tunjangan }}" readonly>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Nama Jabatan :</label>
                    <div class="controls">
                        <input id="jabatan_id" type="text" class="span11" name="jabatan_id" value="{{ $tunjangan->Jabatan->Nama_jabatan }}" readonly>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Nama Golongan :</label>
                    <div class="controls">
                        <input id="golongan_id" type="text" class="span11" name="golongan_id" value="{{ $tunjangan->Golongan->Nama_golongan }}" readonly>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Status :</label>
                    <div class="controls">
                        <input id="Status" type="text" class="span11" name="Status" value="{{ $tunjangan->Status }}" readonly>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Jumlah Anak :</label>
                    <div class="controls">
                        <input id="Jumlah_anak" type="text" class="span11" name="Jumlah_anak" value="{{ $tunjangan->Jumlah_anak }}" readonly>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Besaran Uang :</label>
                    <div class="controls">
                        <input id="Besaran_uang" type="text" class="span11" name="Besaran_uang" value="<?php echo 'Rp. '.number_format($tunjangan->Besaran_uang, 2, ",", "."); ?>" readonly>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <a href="/tunjangan" type="submit" class="btn btn-primary">
                                    <span class="icon-arrow-right"></span>
                                </a>
                    </div>
                </div>
			{!! Form::close() !!}
    </div>
</div> 	
@endsection