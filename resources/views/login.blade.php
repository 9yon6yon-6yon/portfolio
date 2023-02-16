@include('header')
@extends('header')
@push('title')
    <title>Log In</title>
@endpush

<form action="{{ url('/') }}/login" method="post">
    @csrf
    <section class="vh-100 gradient-custom">

        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Please enter your email and password!</p>

                                <div class="form-outline form-white mb-4">
                                    <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg"
                                        placeholder="Email address" value="{{old('email')}}"/>

                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg"
                                        placeholder="Password" />

                                </div>

                                <p class="small mb-5 pb-lg-2"><a class="text-white-50"
                                        href="{{ url('/') }}/reset-password">Forgot
                                        password?</a></p>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit" name="login">Login</button>

                            </div>

                            <div>
                                <p class="mb-0">Don't have an account? <a href="{{ url('/') }}/register"
                                        class="text-white-50 fw-bold">Sign Up</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</form>




@include('footer')
