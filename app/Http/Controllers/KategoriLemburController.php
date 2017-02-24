<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jabatan;
use App\Golongan;
use App\kategori_lembur;
use DB;
use Validator;
use Input;

class KategoriLemburController extends Controller
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
        //
        $jabatan = Jabatan::all();
        $golongan = Golongan::all();
        $kategori_lembur = Kategori_lembur::all();
        return view('kategori_lembur.index', compact('jabatan', 'golongan', 'kategori_lembur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jabatan = Jabatan::all();
        $golongan = Golongan::all();

        $untukid = DB::table('kategori_lemburs')->max('id');
        $newkode = $untukid + 1;
        $digit = strlen($newkode);
        if ($digit == '1') {
            $kode = "KL00".$newkode;
        }
        elseif ($digit == '2') {
            $kode = "KL0".$newkode;
        }
        elseif ($digit == '3') {
            $kode = "KL".$newkode;
        }

        return view('kategori_lembur.create', compact('kode', 'jabatan', 'golongan'));
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
        $this->validate($request, [
                'Kode_lembur' => 'required',
                'jabatan_id' => 'required',
                'golongan_id' => 'required',
                'Besaran_uang' => 'required'
        ]);
        $jb = Kategori_lembur::create([
            'Kode_lembur' => $request['Kode_lembur'],
            'jabatan_id' => $request['jabatan_id'],
            'golongan_id' => $request['golongan_id'],
            'Besaran_uang' => $request['Besaran_uang']
        ]);

        return redirect('katelembur');

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
        $kategori_lembur = kategori_lembur::find($id);
        return view('kategori_lembur.show', compact('kategori_lembur'));
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
        $kategori_lembur = Kategori_lembur::find($id);
        
        $jselected = Jabatan::whereIn('id',[$kategori_lembur->jabatan_id])->first();
        $junselect = Jabatan::whereNotIn('id',[$kategori_lembur->jabatan_id])->get();
        $gselected = Golongan::whereIn('id',[$kategori_lembur->golongan_id])->first();
        $golselect = Golongan::whereNotIn('id',[$kategori_lembur->golongan_id])->get();

        return view('kategori_lembur.edit', compact('kategori_lembur','jselected','junselect','gselected','golselect'));
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
        $kategori_lembur = Kategori_lembur::find($id);
        $kategori_lembur->Kode_lembur = $request['Kode_lembur'];
        $kategori_lembur->jabatan_id = $request['jabatan_id'];
        $kategori_lembur->golongan_id = $request['golongan_id'];
        $kategori_lembur->Besaran_uang = $request['Besaran_uang'];
        $kategori_lembur->save();
        
        return redirect('katelembur');
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
        Kategori_lembur::find($id)->delete();
        return redirect('katelembur');
    }
}
