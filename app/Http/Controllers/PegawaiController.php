<?php

namespace App\Http\Controllers;

use App\Jabatan;
use App\Golongan;
use App\User;
use App\Pegawai;
use DB;
use Validator;
use Input;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use File;   

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    use RegistersUsers;

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
        return view('pegawai.index', compact('jabatan', 'golongan', 'pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $untukid = DB::table('pegawais')->max('id');
        $newkode = $untukid + 1;
        $digit = strlen($newkode);
        if ($digit == '1') {
            $kode = "162702700".$newkode;
        }
        elseif ($digit == '2') {
            $kode = "16270270".$newkode;
        }
        elseif ($digit == '3') {
            $kode = "1627027".$newkode;
        }

        $dd = User::all();
        $jabatan = Jabatan::all();
        $golongan = Golongan::all();
        return view('pegawai.create', compact('kode', 'pegawai', 'dd', 'jabatan', 'golongan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|email|max:100|unique:users',
            'password' => 'required|min:6|confirmed',
            'permission' => 'required',
            'Nip' => 'required|unique:pegawais,Nip',
        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'permission' =>  $request['permission'],
        ]);

        $pegawai = new Pegawai;
        $pegawai->Nip =  $request['Nip']; 
        $pegawai->user_id = $user->id;  
        $pegawai->jabatan_id =  $request['jabatan_id']; 
        $pegawai->golongan_id =  $request['golongan_id']; 
        
        if($request->hasFile('Photo')){
            $file = $request->file('Photo');
            $destinationPath = public_path().'/image/';
            $filename = str_random(6).'_'.$file->getClientOriginalExtension();
            $uploadSuccess = $file->move($destinationPath, $filename);
            
            $pegawai->Photo = $filename;
            $pegawai->save();            
        }
        else{
            $pphoto = public_path().'/img/default.jpg';
            $pegawai->Photo = $pphoto;
            $pegawai->save();
        }
        return redirect('pegawai');
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
        $pegawai = Pegawai::find($id);
        $jabatan = Jabatan::all();
        $golongan = Golongan::all();
        return view('pegawai.show', compact('pegawai'));
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
        $pegawai = pegawai::find($id);
        $jselected = Jabatan::whereIn('id',[$pegawai->jabatan_id])->first();
        $junselect = Jabatan::whereNotIn('id',[$pegawai->jabatan_id])->get();
        $gselected = Golongan::whereIn('id',[$pegawai->golongan_id])->first();
        $golselect = Golongan::whereNotIn('id',[$pegawai->golongan_id])->get();

        return view('pegawai.edit', compact('pegawai', 'jabatan','jselected','junselect','gselected','golselect'));
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

        $pegawai = Pegawai::find($id);
        $pegawai->Nip = $request['Nip']; 
        $pegawai->jabatan_id = $request['jabatan_id']; 
        $pegawai->golongan_id = $request['golongan_id'];

        if($request->hasFile('Photo'))
        {   
            $file = $request->file('Photo');
            $destinationPath = public_path().'/image/';
            $filename = str_random(6).'_'.$file->getClientOriginalExtension();
            $uploadSuccess = $file->move($destinationPath, $filename);
            if($pegawai->Photo){
                $old_photo = $pegawai->Photo;
                $filepath = public_path(). DIRECTORY_SEPARATOR. '/image/'. 
                    DIRECTORY_SEPARATOR. $pegawai->Photo;
                try{
                    File::delete($filepath);
                } catch (FileNotFoundException $e){

                }
            }
            $pegawai->Photo = $filename;
        }
        $pegawai->save(); 
        
        return redirect('pegawai');
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
        Pegawai::find($id)->delete();
        return redirect('pegawai');
    }
}
