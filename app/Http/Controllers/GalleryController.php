<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {
        return view('gallery', [
            "title" => "Gallery"
        ]);
       
    }

    /**
     * create
     * 
     * @return void
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * store
     * 
     * @param mixed @request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'deskripsi' => 'required',
            'gambar'    => 'required|image|mimes:png,jpg,jpeg'
        ]);

        //script untuk upload gambar
        $image = $request->file('gambar');
        $image->storeAs('public/admin/galleries', $image->hashName());

        $gallery = Gallery::create([
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar'    => $image->hashName()
        ]);

        if($gallery){
            //pesan ketika gambar berhasil di upload
            return redirect('/gallery/tambah')->with(['success' => 'Data Berhasil Ditambahkan:D']);
        }else{
            //pesan ketika gambar gagal dikirim
            return redirect('/gallery/tambah')->with(['error' => 'Data Gagal di Ditambahkan']);
        }
    }
    public function tambah()
    {
        $galleries =  DB::table('galleries')->get();
        $galleries = Gallery::paginate(5);
        return view('admin.gallery.tambah', compact('galleries'));
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin/gallery/edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->update($request->all());
        $gallery->save();

        return redirect()->route('gallery.tambah');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect()->route('gallery.tambah');
    }

    public function tampil()
    {
        $galeri = Gallery::paginate(5);
        $title = "gallery";
        return view('gallery', compact('galeri', 'title'));
    }
}