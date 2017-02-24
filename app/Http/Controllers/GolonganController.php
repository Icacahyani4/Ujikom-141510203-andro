<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Golongan;
use DB;
use Validator;
use Input;

class GolonganController extends Controller
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
        $golongan = Golongan::all();
        return view('golongan.index', compact('golongan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $untukid = DB::table('golongans')->max('id');
        $newkode = $untukid + 1;
        $digit = strlen($newkode);
        if ($digit == '1') {
            $kode = "G00".$newkode;
        }
        elseif ($digit == '2') {
            $kode = "G0".$newkode;
        }
        elseif ($digit == '3') {
            $kode = "G".$newkode;
        }

        

        return view('golongan.create', compact('kode'));
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
            'Kode_golongan' => 'required',
            'Nama_golongan' => 'required|unique:golongans,Nama_golongan',
            'Besaran_uang' => 'required'
        ]);
        
        $jb = Golongan::create([
            'Kode_golongan' => $request['Kode_golongan'],
            'Nama_golongan' => $request['Nama_golongan'],
            'Besaran_uang' => $request['Besaran_uang']
        ]);

        return redirect('golongan');

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
        $golongan = Golongan::find($id);
        return view('golongan.show', compact('golongan'));
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
        $golongan = Golongan::find($id);
        return view('golongan.edit', compact('golongan', 'kode'));
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
        
        $golongan = Golongan::find($id);
        $golongan->Kode_golongan = $request['Kode_golongan'];
        $golongan->Nama_golongan = $request['Nama_golongan'];
        $golongan->Besaran_uang = $request['Besaran_uang'];
        $golongan->save();

        return redirect('golongan');
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
        Golongan::find($id)->delete();
        return redirect('golongan');
    }
}
