@extends('layouts.main')

@section('container')
    <h1>Halaman Inventory</h1>
    @foreach ($inventory as $item)
        <h2> 
            <a href="/inventory/{{ $item["link"] }}"> {{ $item["judul"]}} </a>
        </h2>
        <p> {{ $item["deskripsi"] }} </p>
    @endforeach
@endsection