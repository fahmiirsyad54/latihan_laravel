@extends('layouts.main')

@section('container')
    <h1>Halaman Inventory</h1>
    <h2>{{ $post->judul }}</h2>
    <p>{{ $post->deskripsi }}</p>

    <a href="/inventory"> Back to Inventory</a>
@endsection