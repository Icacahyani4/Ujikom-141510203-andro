<?php

namespace App\Http\Controllers;

use Request;
use DB;
use Validator;
use App\Tunjangan;
use App\Golongan;
use App\Jabatan;

class TunjanganController extends Controller
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
        $tunjangan = Tunjangan::all();
        // dd($tunjangan);
        return view('tunjangan.index', compact('tunjangan', 'jabatan', 'golongan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $untukid = DB::table('tunjangans')->max('id');
        $newkode = $untukid + 1;
        $digit = strlen($newkode);
        if ($digit == '1') {
            $kode = "TUN00".$newkode;
        }
        elseif ($digit == '2') {
            $kode = "TUN0".$newkode;
        }
        elseif ($digit == '3') {
            $kode = "TUN".$newkode;
        }
        $jabatan = Jabatan::all();
        $golongan = Golongan::all();
        return view('tunjangan.create', compact('jabatan', 'golongan', 'kode'));
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
        $tunjangan = Request::all();
        Tunjangan::create($tunjangan);

        return redirect('tunjangan');
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
        $jabatan = Jabatan::all();
        $golongan = Golongan::all();
        $tunjangan = Tunjangan::find($id);

        return view('tunjangan.show', compact('tunjangan', 'jabatan', 'golongan'));
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

        $tunjangan = Tunjangan::find($id);

        $jselected = Jabatan::whereIn('id',[$tunjangan->jabatan_id])->first();
        $junselect = Jabatan::whereNotIn('id',[$tunjangan->jabatan_id])->get();
        $gselected = Golongan::whereIn('id',[$tunjangan->golongan_id])->first();
        $golselect = Golongan::whereNotIn('id',[$tunjangan->golongan_id])->get();

        return view('tunjangan.edit', compact('tunjangan', 'tunjangan', 'jselected','junselect','gselected','golselect'));
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
        $tunjanganUpdate = Request::all();
        $tunjangan = Tunjangan::find($id);
        $tunjangan->update($tunjanganUpdate);

        return redirect('tunjangan');
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
        Tunjangan::find($id)->delete();
        return redirect('tunjangan');
    }
}
