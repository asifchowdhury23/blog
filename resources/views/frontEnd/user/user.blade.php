@extends('frontEnd.master')
@section('title')
    Contact
@endsection
@section('content')
    <section id="contact" class="contact mb-5">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title">Registration</h1>
                </div>
            </div>

            <div class="mt-5 col-md-6 offset-3">
                <form action="{{route('save.user')}}" method="post" class="php-email-form" >
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone Number" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Add Password" required>
                        </div>
                    </div>
                    <div class="text-center"><button type="submit">Register</button></div>
                </form>
            </div><!-- End Contact Form -->
        </div>
    </section>
@endsection
