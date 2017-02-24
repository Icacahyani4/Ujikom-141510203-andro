<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Lembur_pegawai;
use App\Pegawai;
use App\Jabatan;
use App\Golongan;
use App\Kategori_lembur;
use Validator;

class LemburPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('HRD');
    }
    
    public function index()
    {
        //
        $jabatan = Jabatan::all();
        $golongan = Golongan::all();
        $pegawai = Pegawai::all();
        $lembur_pegawai = Lembur_pegawai::all();
        $kategori_lembur = Kategori_lembur::all();

        return view('lembur_pegawai.index', compact('jabatan', 'golongan', 'pegawai', 'lembur_pegawai', 'kategori_lembur', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategori_lembur = Kategori_lembur::all();
        $pegawai = Pegawai::all();

        return view('lembur_pegawai.create', compact('pegawai', 'kategori_lembur'));
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

        $lembur_pegawai = $request->all();
        

        $pegawai = Pegawai::where('id', $lembur_pegawai['pegawai_id'])->first();
        $kategori_lembur = Kategori_lembur::where('jabatan_id', $pegawai->jabatan_id)
                        ->where('golongan_id', $pegawai->golongan_id)->first();

        $lemburpegawai = Lembur_pegawai::create([
                'Kode_lembur_id' => $kategori_lembur->id,
                'pegawai_id' => $lembur_pegawai['pegawai_id'],
                'Jumlah_jam' => $lembur_pegawai['Jumlah_jam']
        ]);
            // $error = true;
            return redirect('lempeg');
        // }        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $kategori_lembur = kategori_lembur::all();
        $pegawai  = Pegawai::all();
        $lembur_pegawai = Lembur_pegawai::find($id);
        
        return view('lembur_pegawai.show', compact('lembur_pegawai', 'kategori_lembur', 'pegawai'));
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

        $lembur_pegawai = Lembur_pegawai::find($id);
        $kategori_lembur = kategori_lembur::all();
        // $pegawai = Pegawai::all();
        $pselected = Pegawai::whereIn('id',[$lembur_pegawai->pegawai_id])->first();
        $pegselect = Pegawai::whereNotIn('id',[$lembur_pegawai->pegawai_id])->get();
        
        // dd($lembur_pegawai);
        return view('lembur_pegawai.edit', compact('lembur_pegawai', 'kategori_lembur', 'pegselect', 
            'pselected', 'pegawai'));
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
        $lembur_pegawai = Lembur_pegawai::find($id);
        
        $pegawai = Pegawai::where('id', $lembur_pegawai['pegawai_id'])->first();
        $kategori_lembur = Kategori_lembur::where('jabatan_id', $pegawai->jabatan_id)
                        ->where('golongan_id', $pegawai->golongan_id)->first();
        
        $lembur_pegawai->Kode_lembur_id = $kategori_lembur->id;
        $lembur_pegawai->pegawai_id = $pegawai->id;
        $lembur_pegawai->Jumlah_jam = $request->get('Jumlah_jam');
        // dd($lembur_pegawai);
        $lembur_pegawai->save();

        return redirect('lempeg');
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
        Lembur_pegawai::find($id)->delete();
        return redirect('lempeg');
    }
}
