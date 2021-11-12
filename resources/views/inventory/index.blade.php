@extends('layouts.main')

@section('container')
    <a class="btn btn-primary" href="/inventory/create" role="button">Add new Data</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inventory as $item)
                <tr>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>
                        <a class="btn btn-info" href="/inventory/{{ $item->link }}" role="button"> Detail</a>
                        <a class="btn btn-warning" href="" role="button"> Edit</a>
                        <form action="/inventory/{{ $item->link }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onClick="return confirm('Apakah anda yakin ?')"> Delete</button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection