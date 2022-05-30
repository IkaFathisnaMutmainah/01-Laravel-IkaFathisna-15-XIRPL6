@extends('layouts.main')

@section('container')

    <div class="main-content">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Data Galleryku</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                                    
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Gambar</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($galeri as $tampil => $gallery)
                                            <tr>
                                                <td>{{ 1 }}</td>
                                                <td>{{ $gallery->judul}}</td>
                                                <td>{{ $gallery->deskripsi}}</td>
                                                <td><img src="{{ asset('storage/public/admin/galleries/'. $gallery->gambar )}}" class="rounded" style="width: 150px" alt="" srcset=""></td>
                                               
                                                
                                            </tr>
                                            @endforeach
                                            
                                           
                                        </tbody>
                                    </table>
                                    {{ $galeri->links()}}
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection