@extends('layouts.app')
@section('title', 'Ika Fathisna | Data Galleryku')
@section('content')
<div class="main-content">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="card">
                                    <div class="card-header">
                                        <strong>Form Edit</strong> Gallery
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('admin.gallery.edit', $gallery->id)}}" method="post" class="">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Judul</label>
                                                <input type="text" name="nama" class="form-control" value="{{ $gallery->judul}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Deskripsi</label>
                                                <input type="description" name="deskripsi" class="form-control" value="{{ $gallery->deskripsi}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Upload Image</label>
                                                <input class="form-control" type="file" id="formFile" value="{{ $gallery->gambar }}">
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