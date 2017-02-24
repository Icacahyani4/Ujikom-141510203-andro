<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('HRD');
    }

    public function index()
    {
        //
        $user = User::all();

        return view('user.index', compact('user'));
    }
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('user');
    }

}
