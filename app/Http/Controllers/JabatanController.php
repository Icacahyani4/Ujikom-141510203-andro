<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jabatan;
use DB;
use Validator;
use Input;

class JabatanController extends Controller
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
        return view('jabatan.index', compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $untukid = DB::table('jabatans')->max('id');
        $newkode = $untukid + 1;
        $digit = strlen($newkode);
        if ($digit == '1') {
            $kode = "J00".$newkode;
        }
        elseif ($digit == '2') {
            $kode = "J0".$newkode;
        }
        elseif ($digit == '3') {
            $kode = "J".$newkode;
        }

        

        return view('jabatan.create', compact('kode'));
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
            'Kode_jabatan' => 'required',
            'Nama_jabatan' => 'required|unique:jabatans,Nama_jabatan',
            'Besaran_uang' => 'required'
        ]);
        
        $jb = Jabatan::create([
            'Kode_jabatan' => $request['Kode_jabatan'],
            'Nama_jabatan' => $request['Nama_jabatan'],
            'Besaran_uang' => $request['Besaran_uang']
        ]);

        return redirect('jabatan');

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
        $jabatan = Jabatan::find($id);
        return view('jabatan.show', compact('jabatan'));
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
        $jabatan = Jabatan::find($id);
        return view('jabatan.edit', compact('jabatan', 'kode'));
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
        
        $jabatan = Jabatan::find($id);
        $jabatan->Kode_jabatan = $request['Kode_jabatan'];
        $jabatan->Nama_jabatan = $request['Nama_jabatan'];
        $jabatan->Besaran_uang = $request['Besaran_uang'];
        $jabatan->save();

        return redirect('jabatan');
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
        Jabatan::find($id)->delete();
        return redirect('jabatan');
    }
}
