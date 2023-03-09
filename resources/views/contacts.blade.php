@extends('layouts.main')

@section('container')
<div class="title-top mb-5">
    <h2 class="fw-bold">Contact Us</h2>
</div>
<form method="post" action="{{route('contacts.store')}}">
  {{csrf_field()}}
  <div class="form-floating mb-3">
    <label for="inputname">Judul Buku</label>
    <input type="text" class="form-control" id="inputname" placeholder="Nama" name="nama">
  </div>
  <div class="form-floating mb-3">
    <label for="inputemail" class="form-label">Nama Pengarang</label>
    <input type="email" class="form-control" id="inputemail" placeholder="Email" name="email">
  </div>
  <div class="form-floating mb-3">
      <textarea class="form-control" placeholder="Tinggalkan pesan disini !" id="floatingTextarea2" style="height: 100px" name="pesan"></textarea>
    <label for="floatingTextarea2">Penerbit</label>
  </div>
  <div class="form-floating mb-3">
      <textarea class="form-control" placeholder="Tinggalkan pesan disini !" id="floatingTextarea2" style="height: 100px" name="pesan"></textarea>
    <label for="floatingTextarea2">Tahun Terbit</label>
  </div>
  <div class="form-floating mb-3">
      <textarea class="form-control" placeholder="Tinggalkan pesan disini !" id="floatingTextarea2" style="height: 100px" name="pesan"></textarea>
    <label for="floatingTextarea2">Gambar</label>
  </div>
  <div class="form-floating mb-3">
      <textarea class="form-control" placeholder="Tinggalkan pesan disini !" id="floatingTextarea2" style="height: 100px" name="pesan"></textarea>
    <label for="floatingTextarea2">Aksi</label>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection