<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class usersController extends Controller
{
    public function __construct()
    {
        $this->middleware('Auth');
    }
    public function tampilkanprofil($id){
        
        $user = auth::user()->id;
        $user = User::all();
        return view('tampilanpengguna.profil');

    }
    public function tablezakatuser()
    {
        $iduser=Auth::user()->id;
        $pembayaran = pembayaran::where('id_users',$iduser)->get();
        return view('tampilanpengguna.tablepembayaran', compact('pembayaran'));
    }

}
