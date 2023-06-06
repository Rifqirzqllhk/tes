@extends('layouts.app')

{{-- set title --}}
@section('title', 'DeLibrary')

@section('content')

<div class="container mt-3" style="min-height: 600px;">
  <div class="container">
    <p class="h2 mt-4 mb-4">Daftar Transaksi</p>
  </div>
  <table class="table table-striped table-hover text-center align-middle">
    <thead>
      <tr>
        <th scope="col">Reservation ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Judul Buku</th>
        <th scope="col">Genre</th>
        <th scope="col">Cover</th>
        <th scope="col">Harga</th>
        <th scope="col">Receipt</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pesanans as $pesanan)
      <tr>
        <th scope="col">{{ $pesanan->id }}</th>
        <td scope="col">{{ $pesanan->user->name }}</td>
        <td scope="col">{{ $pesanan->user->email }}</td>
        <td scope="col">{{ $pesanan->buku->title }}</td>
        <td scope="col">{{ $pesanan->buku->genre->genre }}</td>
        <td scope="col"><img src="/img/{{ $pesanan->buku->cover }}" alt="cover" style="width: 50px;"></td>
        <td scope="col">Rp {{ $pesanan->buku->price }}</td>
        <td scope="col"><a class="btn btn-success" href="/pesanan/{{ $pesanan->id }}">Print</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection

@push('after-style')
@endpush