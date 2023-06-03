@extends('layouts.app')

{{-- set title --}}
@section('title', 'DeLibrary')

@section('content')

    <section>
        <div class="vh-80 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="card bg-white">
                            <div class="card-body px-5 py-3">
                                <form action="/prosesLogin" class="mb-3 mt-md-3" method="POST">
                                    @csrf
                                    <h2 class="fw-bold mb-2 text-uppercase text-center">Masuk</h2>
                                    <p class="mb-4 text-center">Please enter your login and password!</p>
                                    <div class="mb-3">
                                        <label for="email" class="form-label ">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="name@example.com" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label ">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="*******">
                                    </div>
                                    <!-- <p class="small"><a class="text-primary" href="forget-password.html">Lupa sandi?</a>
                                        </p> -->
                                    <div class="d-grid py-3">
                                        <button class="btn btn-outline-dark" type="submit" value="Login">Login</button>
                                    </div>
                                </form>
                                <div>
                                    <p class="mb-0  text-center">Belum punya akun? <a href="/signup"
                                            class="text-primary fw-bold">Daftar</a></p>
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
