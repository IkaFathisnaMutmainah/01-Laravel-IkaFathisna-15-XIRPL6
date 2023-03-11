@extends('layouts.main')
@section('container')

<style>
body {
    background: #F5E9CF;
    color: #111111;
    background-size: 200% 200%;
    /* animation: shining 6s ease-in-out infinite; */
}
</style>
<div class="row mt-3">
<img src="{{asset('images/logo flytion.png')}}" alt="Logo Library" style='width:180px;'/>
  <center><h2><b>Perpustakaan Diligent</b></h2></center>
  <!-- <form action="/dashboard" method="GET">
        <input type="search" placeholder="Cari data buku" id="inputsearch" name="search"class="form-control ml-3 mt-3" aria-describedby="passwordHelpInline">
    </form> -->

    @foreach ($bukus as $buku)
    
        <div class="col-lg-3 mt-5">

            <div class="card h-2" style='width:16rem'>

                <img src="{{ asset('storage/' . $buku->gambar) }}" class="card-img-top" style='width: 100%;'
                    alt="perpustakaan">

                <div class="card-body">

                    <h5 class="card-title">{{ $buku->judul_buku }}</h5>

                    <p class="card-text"><i>by {{ $buku->nama_pengarang }}</i></p>

                    <a href="/detail/{{ $buku->id }}" class="btn btn-danger w-40" style="background-color: danger">Detail Buku</a>


                </div>

            </div>

        </div>

    @endforeach

</div>

@endsection
