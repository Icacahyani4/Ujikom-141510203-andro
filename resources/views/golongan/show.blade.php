@extends('layouts.apps')

@section('content')
<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Golongan</h5>
        </div>
        <div class="widget-content">
        <h3>Lihat Data Golongan</h3>
        <hr>
            <form class="form-horizontal">
                <div class="control-group">
                  <label class="control-label">Kode Golongan :</label>
                  <div class="controls">
                    <input type="text" name="Kode_golongan" class="span11" value="{{ $golongan->Kode_golongan }}" readonly>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Nama Golongan :</label>
                  <div class="controls">
                    <input type="text" name="Nama_golongan" class="span11" value="{{ $golongan->Nama_golongan }}" readonly>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Besaran Uang</label>
                  <div class="controls">
                    <input type="text" class="span11" name="Besaran_uang" value="<?php echo 'Rp. '.number_format($golongan->Besaran_uang, 2, ",", "."); ?>" readonly>
                  </div>
                </div>
                <div class="form-actions">
                    <a href="/golongan" type="submit" class="btn btn-primary">
                        <span class=" icon-arrow-right"></span>
                    </a>                
                </div>
              </form>
            </div>
          </div>
    </div>
</div> 
@endsection