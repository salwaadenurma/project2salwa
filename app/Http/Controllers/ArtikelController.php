<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    //
    public function home(){
        $data['artikel'] = Artikel::all();
        return view('home', $data);
    }
    public function show(){
        $data['artikel'] = Artikel::all();
        $data['total'] = $data['artikel']->count();
        // $data['pengguna'] = Auth::user()->name;
        return view('admin', $data);
    }
    public function create()
    {
        return view('artikelcreate');
    }
    public function add(Request $request){
        // $request->validate([
        //     'title' => 'required',
        //     'category_id' => 'required',
        //     'deskripsi' => 'required',
        //     'tinjauan' => 'required',
        //     'gambar' => 'image'
        // ]);
        $filename = '';
        if ($request -> file('gambar')) {
            $ext = $request->file('gambar')->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $request->file('gambar')->storeAs('gambar', $filename);
        }

        Artikel::create([
            'title' => $request->title,
            'category_id' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'tinjauan' => $request->tinjauan,
            'gambar'=> $filename
        ]);
        return redirect('admin');
    }
    public function delete(Request $request){
        $hapus = Artikel::find($request->id);
        // Artikel::delete('gambar/'.$hapus->gambar);
        $hapus -> delete();
        return redirect('admin');
    }
    public function search(Request $request){
        $data['artikel'] = Artikel::where('title','LIKE','%'.$request->cari.'%')->get();
        $data['total'] = count(Artikel::all());
        return view('admin',$data);
    }
    public function edit(Request $request){
        // $data['artikel'] = Artikel::all();
        $data['artikel'] = Artikel::find($request->id);
        return view('artikeledit',$data);
    }
    public function update(Request $request, $id){
        $data['artikel'] = Artikel::find($request->id);
        // $data['pengguna'] = Auth::user()->nama;

        // $validasi = $request->validate([
        //     'title'=>['required','min:3'],
        //     'kategori'=>['required'],
        //     'deskripsi'=>['required'],
        //     'tinjauan'=>['required'],
        //     'gambar'=>'image'
        // ]);
        $produk = Artikel::where('id',$id)->first();
        if ($request->gambar) {
            Storage::delete('/gambar/'.$produk->gambar);

            $filename = '';
            if ($request->file('gambar')) {
                $ext = $request->file('gambar')->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $request->file('gambar', $filename)->storeAs('/gambar',$filename);
            }

            Artikel::where('id',$request->id)->update([
                'title'=> $request->title,
                'category_id'=> $request->category_id,
                'deskripsi'=> $request->deskripsi,
                'tinjauan'=> $request->tinjauan,
                'gambar'=> $filename
            ]);
            return redirect('admin');
        }else {
            Artikel::where('id',$request->id)->update([
                'title'=> $request->title,
                'category_id'=> $request->category_id,
                'deskripsi'=> $request->deskrpsi,
                'tinjauan'=> $request->tinjauan,
            ]);
        return redirect('admin');
        }
        return redirect('admin');
    }
    // public function detail($id){
    //     $data['artikel'] = Artikel::where("id", $id)->first();
    //     return view('detail', $data);
    // }
}
