@extends('layouts.app')

{{-- set title --}}
@section('title', 'DeLibrary')

@section('content')

    <div class="container mt-3 vh-100" style="min-height: 560px;">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                {!! \Session::get('success') !!}
            </div>
        @endif
        <a href="/admin/addBuku" class="btn btn-primary mb-2">+ Tambahkan Buku</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Author</th>
                    <th scope="col">Synopsis</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Cover</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bukus as $buku)
                    <tr>
                        <th scope="row" style="vertical-align: middle">{{ $buku->id }}</th>
                        <td style="vertical-align: middle">{{ $buku->title }}</td>
                        <td style="vertical-align: middle">{{ $buku->author }}</td>
                        <td style="vertical-align: middle">{{ Str::limit($buku->synopsis, 30) }}</td>
                        <td style="vertical-align: middle">{{ $buku->genre->genre }}</td>
                        <td style="vertical-align: middle"><img src="img/{{ $buku->cover }}" alt="" height="100">
                        </td>
                        <td style="vertical-align: middle">Rp {{ $buku->price }}</td>
                        <td style="vertical-align: middle">
                            <form action="/admin/edit/{{ $buku->id }}" method="POST" class="d-inline">
                                @csrf
                                <button class="btn btn-warning">Edit</button>
                            </form>
                            <form action="/delete/{{ $buku->id }}" method="POST" class="d-inline"
                                onclick="return confirm('Yakin?')">
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection

@push('after-style')
@endpush
