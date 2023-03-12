<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Exports\BukuExport;

class BukuController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index(Request $request){
        if($request->has('search')){
            $bukus = Buku::where('judul_buku', 'LIKE', '%' .$request->search. '%')->paginate(10);
            
        }else{
            $bukus = Buku::paginate(10);
        }
        return view('admin/buku/index', compact('bukus'));
    }  
       


    /**
     * create
     * 
     * @return void
     */
    public function create()
    {
        return view('admin/buku/create');
    }

    /**
     * store
     * 
     * @param mixed @request
     * @return void
     */
    public function store(Request $request)
    {
        $bukus = $request->all();
        $bukus['gambar'] = $request->file('gambar')->store('gambarbuku', 'public');
        Buku::create($bukus);
        return redirect()->route('bukus.index')->with('success','Data buku berhasil ditambahkan!');
    }
    public function tambah()
    {
        $bukus =  DB::table('bukus')->get();
        $bukus = Buku::paginate(10);
        return view('admin.buku.tambah', compact('buku'));
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('admin/buku/edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);
        $bukus = $request->all();
        if($request->hasFile('gambar')){
            $bukus['gambar'] = $request->file('gambar')->store('gambarbuku', 'public');
        } else {
            $bukus['gambar'] = $buku->gambar;
        }
        $buku->update($bukus);
        return redirect()->route('bukus.index');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('bukus.index');
    }

    public function tampil()
    {
        $buku = Buku::paginate(5);
        $title = "Buku";
        return view('buku', compact('buku', 'title'));
    }

    public function beranda()
    {
            $bukus = Buku::all();
            $title = Buku::all();
            $title = "Beranda";
            return view('index', [
                'bukus' => $bukus,
                'title' => $title,
            ]);
    }

    public function detail($id){
        $bukus = Buku::find($id);

        return view('detail', compact('bukus'));
    }

    public function exportpdf(){
        $bukus = Buku::all();

        view()->share('bukus', $bukus);
        $pdf = PDF::loadview('bukuPDF-pdf');
        return $pdf->download('data.pdf');
        
    }

    public function exportexcel(){
        return Excel::download(new BukuExport, 'databuku.xlsx');
        
    }

    public function dashboard(Request $request){

       
        if ($request->has('search')) {
              $bukus = Buku::where('judul_buku','LIKE','%'.$request->search.'%')
                                  ->orWhere('nama_pengarang', 'like', '%'.$request->search.'%')
                                  ->orWhere('penerbit', 'like', '%'.$request->search.'%')->paginate(10);
                                  
              Session::put('halaman_url',request()->fullUrl());
              // halaman_url manggil mana ya
          }else {
              
              $bukus = Buku::paginate(10);
              Session::put('halaman_url',request()->fullUrl());
          }
  
      //   menampilkan halaman databuku
          $title = "Search";
          return view('/index', [
            'bukus' => $bukus,
            'title' => $title,
          ]);
            
        
        }
}
