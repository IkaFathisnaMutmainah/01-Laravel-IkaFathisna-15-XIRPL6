@extends('layouts.app')
@section('title', 'Ika Fathisna | Data Buku')
@section('content')
<div class="main-content">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="card">
                                    <div class="card-header">
                                        <strong>Form Edit</strong> Data Buku
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('bukus.update', $buku->id)}}" method="post" class="" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Judul Buku</label>
                                                <input type="text" name="judul_buku" class="form-control" value="{{ $buku->judul_buku}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Nama Pengarang</label>
                                                <input type="text" name="nama_pengarang" class="form-control" value="{{ $buku->nama_pengarang}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Penerbit</label>
                                                <input type="text" name="penerbit" class="form-control" value="{{ $buku->penerbit}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Tahun Terbit</label>
                                                <input type="date" name="tahun_terbit" class="form-control" value="{{ $buku->tahun_terbit}}">
                                            </div>
                                            <div class="form-group">
                                                <label class="font-weight-bold">Gambar</label>
                                                <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" accept=".png, .jpeg, .jpg">
                            
                                                <!-- pesan error untuk gambar -->
                                                @error('gambar')
                                                <div class="alert alert-danger mt-2">
                                                     {{ $message }}
                                                </div>
                                                @enderror
                                                </div>
                                            
                                            <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Ubah
                                        </button>
                                    </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection