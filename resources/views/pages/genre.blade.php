@extends('layouts.app')

{{-- set title --}}
@section('title', 'DeLibrary')

@section('content')

<section>
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <h1>Genre</h1>
            </div>
            <div class="col d-flex">
                <div class="input-group center">
                    <input type="text" class="form-control" placeholder="Cari buku disini..." />
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <a href="">
                    <img src="assets/img/Buku.png" alt="" srcset="" />
                </a>
            </div>
            <div class="col">
                <a href="">
                    <img src="assets/img/Buku.png" alt="" srcset="" />
                </a>
            </div>
            <div class="col">
                <a href="">
                    <img src="assets/img/Buku.png" alt="" srcset="" />
                </a>
            </div>
            <div class="col">
                <a href="">
                    <img src="assets/img/Buku.png" alt="" srcset="" />
                </a>
            </div>
            <div class="col">
                <a href="">
                    <img src="assets/img/Buku.png" alt="" srcset="" />
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('after-style')

@endpush