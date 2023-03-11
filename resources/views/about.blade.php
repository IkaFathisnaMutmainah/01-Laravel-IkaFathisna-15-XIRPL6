@extends('layouts.main')

@section('container')
<style>
    body {
    background: #F5E9CF;
    color: #111111;
    background-size: 200% 200%;
    /* animation: shining 6s ease-in-out infinite; */
}
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .main{
        width: 100%;
        height: 100vh;
        padding: 0 11%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .img img{
        width: 460px;
        padding: 0 10%
    }
    .text h1{
        font-size: 42px;
        color: black;
        position: relative;
    }
    .text h1::after{
        position: absolute;
        content: "";
        width: 28%;
        height: 4px;
        background-color: tomato;
        left: 0;
        bottom: -8px;
    }
    .text p{
        font-size: 15px;
        color: black;
        line-height: 28px;
        margin: 30px 0 45px 0;
        max-width: 600;
        text-align: justify;
        font-family: "poppins";
    }
    .btn{
        padding: 7px 25px;
        border: 2px solid tomato;
        border-radius: 5px;
        color: tomato;
        text-decoration: none;
        margin-right: 15px;
        transition: all .5s ease;
    }
    .btn:hover{
        background-color: tomato;
        color: #333;
    }
    /* .btn1{
        background-color: tomato;
        color: #333;
    }
    .btn1:hover{
        color: tomato;
        background-color: transparent;
    } */
</style>
<body>
    <div class="main">
        <div class="img">
        <img src="{{asset('images/library1.jfif')}}" alt="library">
        </div>
        <div class="text">
            <h1>About</h1>
            <p>Perpustakaan dengan nama Flytion merupakan singkatan dari Fly to Literation, yang dimana website perpustakaan ini
                dibuat oleh yayasan telkom untuk menaungi anak-anak bangsa yang ingin belajar tentang dunia IT (Teknologi Information).
                Bukan hanya itu, perpustakaan digital ini nyatanya bukan hanya sekedar di situs web, kalian bisa mengunjunginya
                disekitaran kawasan pendidikan telkom.
            </p>
        
            <p> Perpustakaan ini menampung banyak sekali koleksi buku,
                mulai dari buku fiksi, non-fiksi, hingga pada buku pembelajaran. Selain itu, buku ini juga diciptakan untuk
                memudahkan dalam mengakses materi dimanapun dan kapanpun waktunya.</p>
        
        <div class="button">
            <!-- <a href="#" class="btn btn1">Eksplore</a> -->
            <a href="/" class="btn btn2">Eksplore</a>
        </div>
        </div>
    </div>
</body>
@endsection