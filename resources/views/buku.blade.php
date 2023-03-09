@extends('layouts.app')
@section('title', 'Ika Fathisna | Data Buku Perpustakaan')
@section('content')
<div class="main-content">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Data Buku</h2>
                                    
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
                                                <th>Judul Buku</th>
                                                <th>Nama Pengarang</th>
                                                <th>Penerbit</th>
                                                <th>Tahun Terbit</th>
                                                <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bukus as $index => $buku)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $buku->judul_buku}}</td>
                                                <td>{{ $buku->nama_pengarang}}</td>
                                                <td>{{ $buku->penerbit}}</td>
                                                <td>{{ $buku->tahun_terbit}}</td>
                                                <td>{{ $buku->gambar}}</td>
                                                <td>
                                                    <a href="{{ route('bukus.edit', $buku->id)}}"><i class="fas fa-edit"></i></a>
                                                    <a href="{{ route('bukus.destroy', $buku->id)}}"><i class="fas fa-trash" style="color:red"></i></a>
                                                </td>
                                                
                                            </tr>
                                            @endforeach
                                            
                                           
                                        </tbody>
                                    </table>
                                    {{ $bukus->links()}}
                                </div>
                                <!-- END DATA TABLE-->
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