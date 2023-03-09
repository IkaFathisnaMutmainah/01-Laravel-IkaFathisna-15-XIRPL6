@extends('layout_user.navbar')
@section('content')
<div class="container mt-4">
     
       <div class="card border-secondary mb-3" style="max-width: 30rem;">
              <div class="card-header">DETAIL BUKU</div>
                     <div class="col-md-6 mt-3">
                     <img src="{{ asset('storage/'.$bukus->gambar)}}" alt="" style="width: 240px;">
                     </div>

                     <div class="card-body text-secondary">
                     <h2 class="card-title">{{$bukus->judul_buku}}</h2>
                     <h7 class="card-text">Nama Pengarang : {{$bukus->nama_pengarang}}</h7>
                     <br>
                     <h7 class="card-text">Penerbit : {{$bukus->penerbit}}</h7>
                     <br>
                     <h7 class="card-text">Tahun terbit : {{$bukus->tahun_terbit}}</h7>
                     <br>
                     <a class="btn btn-danger mt-4" href="/"  style="background-color: ;" >Kembali</a>
              </div>
       </div>
</div>

@endsection('content')