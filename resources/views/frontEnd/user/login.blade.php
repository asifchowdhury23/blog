@extends('frontEnd.master')
@section('title')
    Contact
@endsection
@section('content')
    <section id="contact" class="contact mb-5">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">Login</h1>

                </div>
            </div>

            <div class="mt-5 col-md-6 offset-3">
                <form action="{{route('user.login')}}" method="post" class="php-email-form" >
                    @csrf
                    <div class="row">
                        <div class="form-group">
                            <input type="text" name="user_name" class="form-control" placeholder="Enter Email or Phone" required>
                            <p class="text-danger">{{session('name')}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group ">
                            <input type="password" class="form-control" name="password" placeholder="Your password" required>
                            <p class="text-danger">{{session('pass')}}</p>
                        </div>
                    </div>
                    <div class="text-center"><button type="submit">Register</button></div>
                </form>
            </div><!-- End Contact Form -->
        </div>
    </section>
@endsection
