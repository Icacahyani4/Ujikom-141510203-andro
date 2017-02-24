<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penggajian;
use App\Tunjangan_pegawai;
use App\Tunjangan;
use App\Pegawai;
use App\Jabatan;
use App\Golongan;
use App\Kategori_lembur;
use App\Lembur_pegawai;
use DB;
use DateTime;
use Auth;

class PenggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('Keuangan');
    }

    public function index()
    {
        
        $penggajian = Penggajian::all();
        $tunjangan_pegawai = Tunjangan_pegawai::all();
        $pegawai = Pegawai::all();
        // dd($penggajian);
        return view('penggajian.index', compact('penggajian', 'tunjangan_pegawai', 'count', 'pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $pegawai = Pegawai::all();
        $tunjangan_pegawai = Tunjangan_pegawai::all();
        return view('penggajian.create', compact('tunjangan_pegawai', 'pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $this->validate($request,[
            'tunjangan_pegawai_id' => 'required|unique:penggajians,tunjangan_pegawai_id'  
        ]);

        $gaji = $request->all();


        $tunjangan_pegawai = Tunjangan_pegawai::where('id', $gaji['tunjangan_pegawai_id'])->first();
        // dd($tunjangan_pegawai);

        $tunjangan = Tunjangan::where('id', $tunjangan_pegawai->Kode_tunjangan_id)->first();
        // dd($tunjangan);

        $pegawai = Pegawai::where('id', $tunjangan_pegawai->pegawai_id)->first();
        // dd($pegawai);

        $lempeg = Lembur_pegawai::where('pegawai_id', $tunjangan_pegawai->pegawai_id)->first();
        // dd($lempeg);

        $kate = Kategori_lembur::where('jabatan_id', $pegawai->jabatan_id)
                        ->where('golongan_id', $pegawai->golongan_id)->first();
        // dd($kate);

        $jabatan = Jabatan::where('id', $pegawai->jabatan_id)->first();
        // dd($jabatan);

        $golongan = Golongan::where('id', $pegawai->golongan_id)->first();
        // dd($golongan);

        

        $jj = DB::table('lembur_pegawais')
                ->select(DB::raw("SUM(Jumlah_jam) as Jumlah_jam"))
                ->where('pegawai_id', $tunjangan_pegawai->pegawai_id)
                ->groupBy('pegawai_id')
                ->first();
                // dd($jj);
        if ($jj == null && $jj == 0) {
            $jq = 0;
        }
        else{
            $jq = round($jj);
        }
        dd($jq);

        $jamlem = round($jq);
        // dd($jamlem);
        $jumuang = $jamlem * $kate->Besaran_uang;
        // dd($jumuang);

        $gapok = $jabatan->Besaran_uang + $golongan->Besaran_uang + $tunjangan->Besaran_uang;
        $gatot = $gapok + $jumuang; 
        // dd($gatot);
        $tgl_ambil = date('Y-m-d');
        $petugas = Auth::user()->permission;
        // dd($petugas);
        
        $penggajian = new Penggajian;
        $penggajian->tunjangan_pegawai_id = $request['tunjangan_pegawai_id'];
        $penggajian->Jumlah_jam_lembur = $jamlem;
        $penggajian->Jumlah_uang_lembur = $jumuang;
        $penggajian->Gaji_pokok = $gapok;
        $penggajian->Total_gaji = $gatot;
        $penggajian->Tanggal_pengambilan = $tgl_ambil;
        $penggajian->Status_pengambilan = $request['Status_pengambilan'];
        $penggajian->Petugas_penerima = $petugas;
        $penggajian->save();
        // dd($penggajian);

        return redirect('gaji');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penggajian = Penggajian::find($id);
        $tunjangan_pegawai = Tunjangan_pegawai::all();
        $pegawai = Pegawai::all();
        return view('penggajian.show', compact('penggajian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $penggajian = Penggajian::find($id);
        $pselected = Tunjangan_pegawai::whereIn('id',[$penggajian->tunjangan_pegawai_id])->first();
        $pegunselect = Tunjangan_pegawai::whereNotIn('id',[$penggajian->tunjangan_pegawai_id])->get();
        
        return view('penggajian.edit', compact('penggajian', 'pselected','pegunselect'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $gaji = $request->all();


        $tunjangan_pegawai = Tunjangan_pegawai::where('id', $gaji['tunjangan_pegawai_id'])->first();
        // dd($tunjangan_pegawai);

        $tunjangan = Tunjangan::where('id', $tunjangan_pegawai->Kode_tunjangan_id)->first();
        // dd($tunjangan);

        $pegawai = Pegawai::where('id', $tunjangan_pegawai->pegawai_id)->first();
        // dd($pegawai);

        $lempeg = Lembur_pegawai::where('pegawai_id', $tunjangan_pegawai->pegawai_id)->first();
        // dd($lempeg);

        $kate = Kategori_lembur::where('jabatan_id', $pegawai->jabatan_id)
                        ->where('golongan_id', $pegawai->golongan_id)->first();
        // dd($kate);

        $jabatan = Jabatan::where('id', $pegawai->jabatan_id)->first();
        // dd($jabatan);

        $golongan = Golongan::where('id', $pegawai->golongan_id)->first();
        // dd($golongan);

        

        $jj = DB::table('lembur_pegawais')
                ->select(DB::raw("SUM(Jumlah_jam) as Jumlah_jam"))
                ->where('pegawai_id', $tunjangan_pegawai->pegawai_id)
                ->groupBy('pegawai_id')
                ->first();
                // dd($jj);

        $jamlem = $jj->Jumlah_jam;
        // dd($jamlem);
        $jumuang = $jamlem * $kate->Besaran_uang;
        // dd($jumuang);

        $gapok = $jabatan->Besaran_uang + $golongan->Besaran_uang + $tunjangan->Besaran_uang;
        $gatot = $gapok + $jumuang; 
        $tgl_ambil = date('Y-m-d');
        $petugas = Auth::user()->permission;
        // dd($petugas);
        
        $penggajian = Penggajian::find($id);
        $penggajian->tunjangan_pegawai_id = $request['tunjangan_pegawai_id'];
        $penggajian->Jumlah_jam_lembur = $jamlem;
        $penggajian->Jumlah_uang_lembur = $jumuang;
        $penggajian->Gaji_pokok = $gapok;
        $penggajian->Total_gaji = $gatot;
        $penggajian->Tanggal_pengambilan = $tgl_ambil;
        $penggajian->Status_pengambilan = $request['Status_pengambilan'];
        $penggajian->Petugas_penerima = $petugas;
        $penggajian->save();
        // dd($penggajian);

        return redirect('gaji');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Penggajian::find($id)->delete();
        return redirect('gaji');
    }
}
