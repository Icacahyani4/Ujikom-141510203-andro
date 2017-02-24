<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penggajian;
use App\Tunjangan_pegawai;
use App\Tunjangan;
use App\Pegawai;
use App\Jabatan;
use App\Golongan;
use App\User;
use App\Kategori_lembur;
use App\Lembur_pegawai;
use DB;
use Auth;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('Pegawai');
    }

    public function index()
    {
        //
        $user = User::where('name', Auth::user()->name)->first();
        // dd($user);
        $pegawai = Pegawai::where('user_id', $user->id)->first();
        // dd($pegawai);
        $tunjangan_pegawai = Tunjangan_pegawai::where('pegawai_id', $pegawai->id)->first();
        // dd($tunjangan_pegawai);
        $penggajian = Penggajian::where('tunjangan_pegawai_id', $tunjangan_pegawai->id)->first();
        // dd($penggajian);

        // $gaji = $penggajian->Total_gaji;
        // dd($gaji);
        return view('penggajian.penggajian_karyawan', compact('penggajian', 'tunjangan_pegawai', 'gaji', 'pegawai', 'user'));
        // return redirect('/gapeg');
    }
}
