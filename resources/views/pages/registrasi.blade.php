@extends('layouts.app')

{{-- set title --}}
@section('title', 'DeLibrary')

@section('content')


<section>
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="card bg-white">
                        <div class="card-body px-5 py-3">
                            <form action="/signed" method="POST" class="mb-3 mt-md-3">
                                @csrf
                                <h2 class="fw-bold mb-2 text-uppercase text-center">daftar</h2>
                                <p class="mb-4 text-center">Please enter your login and password!</p>
                                <div class="mb-3">
                                    <label for="name" class="form-label ">Nama</label>
                                    <input type="name" class="form-control" id="name" name="name" placeholder="name example">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label ">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label ">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="*******">
                                </div>
                                <!-- <p class="small"><a class="text-primary" href="forget-password.html">Lupa sandi?</a>
                                            </p> -->
                                <div class="d-grid py-3">
                                    <button class="btn btn-outline-dark" type="submit">Daftar</button>
                                </div>
                            </form>
                            <div>
                                <p class="mb-0  text-center">Sudah punya akun? <a href="registrasi.html" class="text-primary fw-bold">Masuk</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('after-style')
@endpush