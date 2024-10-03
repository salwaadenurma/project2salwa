<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Level;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }
    public function authentikasi(Request $request){
        $validasi = $request->validate([
            'email'=>['required'],
            'password' =>['required'],
        ]);
        if (Auth::attempt($validasi)) {
            if (Auth::user()->levels_id == 1) {
                return redirect('/admin');
            } else {
                return redirect('/');
            }
            return redirect('/')->with('pesan','login anda berhasil');
        }
        return redirect()->back()->with('pesan','login anda gagal');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function home(){
        return view('home');
    }

    public function kategori(){
        return view('kategori');
    }
    public function berita1(){
        return view('berita1');
    }
    public function admin(){
        return view('admin');
    }
    public function gigi(){
        return view('gigi');
    }
    public function nutrisi(){
        return view('nutrisi');
    }
    public function kulit(){
        return view('kulit');
    }
    public function kebugaran(){
        return view('kebugaran');
    }
    public function mental(){
        return view('mental');
    }
    public function berita2(Request $request){
        $data['artikel'] = Artikel::where("id", $request->id)->first();
        return view('berita2', $data);
    }
    public function artikel(){
        $data['artikel'] = Artikel::all();
        return view('artikel', $data);
    }

    public function profil(){
        return view('profil');
    }

    public function show(){
        $data['user'] = User::orderby('name','desc')->get();
        $data['total_user'] = User::count();
        return view('user', $data);
    }
    public function search(Request $request){
        $data['user'] = User::where('name', $request->cari)->orwhere('email', $request->cari)->get();
        $data['total_user'] = $data['user']->count();
        return view('user',$data);
    }
    public function create(){
        $data['levels'] = Level::all();
        return view('user-create', $data);
    }

    public function add(Request $request){
        $validateData = $request->validate([
            'name' =>['required','min:3'],
            'email' =>['required','email'],
            'levels_id'=> 'required',
            'gambar'=>'image'
        ]);

        $filename = '';
        if ($request -> file('gambar')) {
            $ext = $request->file('gambar')->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $request->file('gambar')->storeAs('gambar', $filename);
        }
        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password ? bcrypt($request->password): DB:: raw('password'),
            'levels_id'=> $request->levels_id,
            // 'gambar'=> $filename
        ]);
        return redirect('user');
    }
    public function delete(Request $request){
        $user = User::find($request->id);
        $delete = User::where('id',$request->id)->delete();
        return redirect('user');
    }
    public function edit(Request $request){
        $data['user'] = User::find($request->id);
        return view('user-update', $data);
    }
    public function update(Request $request){
        $update = User::where('id',$request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password'=> $request->password ? bcrypt($request->password): DB::raw('password'),
        ]);
        $produk = User::findOrFail($request->id);
        if ($produk->gambar) {
            Storage::delete('gambar'. $produk->foto);
        }
        return redirect('user');
    }
}
