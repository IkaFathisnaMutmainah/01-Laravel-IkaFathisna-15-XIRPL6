@extends('layouts.app')
@section('title', 'Ika Fathisna | Data Buku Perpustakaan')
@section('content')
<div class="main-content">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1"><strong>Data Buku</strong></h2>
                                <div class="col-auto">
                                </div>
                                </div>
                                </div>
                                
                                <a href="{{ route('bukus.create') }}" class="btn btn-md btn-primary mb-3 mt-3 ml-3">Tambah Buku +</a>
                                <a href="/exportexcel" class="btn btn-md btn-success mb-3 mt-3 ml-3">Export Excel</a>
                                <a href="/exportpdf" class="btn btn-md btn-danger mb-3 mt-3 ml-3">Export PDF</a>
                                <div class="row g-3 align-items-center ml-1">
                                    <div class="col-auto">
                                    <form action="{{route('bukus.index')}}" method="GET">
                                    <input type="search" placeholder="search" id="inputsearch" name="search"class="form-control ml-3" aria-describedby="passwordHelpInline">
                                    </form>
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
                                                <td>
                                                        <img src="{{ asset('storage/'.$buku->gambar)}}" alt="" style="width:40px;">
                                                    </td>
                                                <td>
                                                    <a href="{{ route('admin.bukus.edit', $buku->id)}}"><i class="fas fa-edit"></i></a>
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
                    </div>
                </div>
            </div>
@endsection