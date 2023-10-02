<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\returnSelf;

class HomeController extends Controller
{
    public function dashboard(){
        return view ('dashboard');
    }

    public function index(){
// mengambil data dengan membuat variabel baru
    $data = User::get();

// memasukkan data dari variabel $data ke index
        return view('index', compact('data'));
    }
    public function create(){
        return view('create');
    }
    // public function store(Request $request){
    public function store(Request $request){


        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'email' => 'required|email', 
            'password' => 'required'
        ]);
        if($validator->fails()) return redirect() ->back()->withInput()->withErrors($validator);
        // dd($request->all());
        // return view ('store');

        $data['email']      = $request->email;
        $data['name']       = $request->nama;
        $data['password']   = Hash::make($request->password);

        User::store($data);
        return redirect()->route('index');

    }

}
