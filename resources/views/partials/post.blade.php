@extends('layouts.main')

@section('container')

<article>
    <h2>{{ $post ["judul"] }}</h2>
    <h5>{{ $post ["deskripsi"] }}</h5>
    <p>{{ $post ["body"] }}</p>
</article>

<a href="/gallery">Back to Post</a>
@endsection

