<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tunjangan_pegawai;
use App\Tunjangan;
use App\Golongan;
use App\Jabatan;
use App\Pegawai;


class TunjanganPegawaiController extends Controller
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
        $tunjangan = Tunjangan::all();
        $pegawai = Pegawai::all();
        $tunjangan_pegawai = Tunjangan_pegawai::all();
        //dd($tunjangan_pegawai);

        return view('tunjangan_pegawai.index', compact('tunjangan', 'pegawai', 'tunjangan_pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tunjangan = Tunjangan::all();
        $pegawai = Pegawai::all();
        //dd($tunjangan_pegawai);

        return view('tunjangan_pegawai.create', compact('tunjangan', 'pegawai', 'tunjangan_pegawai'));
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
        $tunpeg = $request->all();
        
        $this->validate($request, [
            'pegawai_id' => 'required|unique:tunjangan_pegawais,pegawai_id',
            ]);
        
        

        $tunjanganpeg = Tunjangan_pegawai::create([
            'Kode_tunjangan_id' => $request['Kode_tunjangan_id'],
            'pegawai_id' => $request['pegawai_id']
        ]);

        
        
        return redirect('tunpeg');
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
        $tunjangan_pegawai=Tunjangan_pegawai::find($id);
        return view('tunjangan_pegawai.show', compact('tunjangan_pegawai'));
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
        $tunjangan_pegawai=Tunjangan_pegawai::find($id);
        
        $pselected = Pegawai::whereIn('id',[$tunjangan_pegawai->pegawai_id])->first();
        $pegselect = Pegawai::whereNotIn('id',[$tunjangan_pegawai->pegawai_id])->get();
        return view('tunjangan_pegawai.edit', compact('tunjangan_pegawai', 'tunjangan', 'pselected','pegselect'));
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
        $tunjangan_pegawai = Tunjangan_pegawai::find($id);
        
        $pegawai = Pegawai::where('id', $tunjangan_pegawai['pegawai_id'])->first();
        $tunjangan = Tunjangan::where('jabatan_id', $pegawai->jabatan_id)
                        ->where('golongan_id', $pegawai->golongan_id)->first();
        
        $tunjangan_pegawai->Kode_tunjangan_id = $tunjangan->id;
        $tunjangan_pegawai->pegawai_id = $pegawai->id;
        // dd($tunjangan_pegawai);
        $tunjangan_pegawai->save();

        return redirect('tunpeg');
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
        Tunjangan_pegawai::find($id)->delete();
        return redirect('tunpeg');
    }
}
