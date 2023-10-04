<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Log;
use function PHPUnit\Framework\returnSelf;

class HomeController extends Controller
{
    public function dashboard()
    {
        
        return view('dashboard');
    }

    public function index()
    {
        // mengambil data dengan membuat variabel baru
        $data = User::get();

        // memasukkan data dari variabel $data ke index
        return view('index', compact('data'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['email']      = $request->email;
        $data['name']       = $request->name;
        $data['password']   = Hash::make($request->password);

        User::create($data);
        return redirect()->route('user.index');
    }

    public function edit(Request $request, $id){
        $data = User::find($id);

        // dd($data);
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable'
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['email']      = $request->email;
        $data['name']       = $request->name;
        if($request->password){
        $data['password']   = Hash::make($request->password);
        }

        // dd($request->all());
        User::whereId($id)->update($data);
        return redirect()->route('user.index');
    }
    public function delete(Request $request, $id){
      $data = User::find($id);

      if($data){
        $data->delete($id);
      }
      return redirect()->route('user.index');
    }
}
