<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {
        $galleries = Gallery::latest()->paginate(5);
        return view('gallery.tambah', compact('galleries'));
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
        $image = $request->file('image');
        $image->storeAs('public/galleries', $image->hashName());

        $gallery = Gallery::create([
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar'    => $image->hashName()
        ]);

        if($gallery){
            //pesan ketika gambar berhasil di upload
            return redirect()->route('admin.gallery.tambah')->with(['success' => 'Data Berhasil Ditambahkan:D']);
        }else{
            //pesan ketika gambar gagal dikirim
            return redirect()->route('admin.gallery.tambah')->with(['error' => 'Data Gagal di Ditambahkan']);
        }
    }
    public function tambah()
    {
        $galleries = Gallery::latest()->paginate(5);
        return view('admin.gallery.tambah', compact('galleries'));
    }
}
