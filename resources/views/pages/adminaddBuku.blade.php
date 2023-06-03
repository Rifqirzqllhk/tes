@extends('layouts.app')

{{-- set title --}}
@section('title', 'DeLibrary')

@section('content')

<div class="container">
    <div class="col-lg-8 mx-auto mt-3">
      <h1 class="text-center">Tambah Buku</h1>
      <form action="/admin/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="my-3">
          <label for="form-title" class="form-label">Judul Buku</label>
          <input type="text" class="form-control" id="title" placeholder="" name="title" required>
        </div>

        <div class="my-3">
          <label for="author" class="form-label">Author</label>
          <input type="text" class="form-control" id="author" placeholder="" name="author" required>
        </div>

        <div class="mb-3">
          <label for="synopsis" class="form-label">Synopsis</label>
          <textarea class="form-control" id="synopsis" rows="3" name="synopsis" required></textarea>
        </div>

        {{-- genres form --}}
        <div class="my-3">
          <label for="form-genre-id">Genre</label>
          <select name="genre_id" id="form-genre-id" class="form-select">
            @foreach ($genres as $genre)
            <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
            @endforeach
          </select>
        </div>

        {{-- form cover image --}}
        <div class="my-3">
          <label for="form-cover" class="form-label">Cover Buku</label>
          <input class="form-control" type="file" id="form-cover" name="cover">
        </div>

        {{-- price form --}}
        <div class="my-3">
          <label for="form-price" class="form-label">Harga</label>
          <input type="number" class="form-control" id="form-price" name="price" required>
        </div>

        {{-- rating form --}}
        <div class="my-3 text-center">
          <button type="submit" class="btn btn-primary" value="submit">Tambah</button>
        </div>

      </form>

    </div>

  </div>

@endsection

@push('after-style')

@endpush
