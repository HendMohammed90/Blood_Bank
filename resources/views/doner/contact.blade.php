@extends('layouts.app')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact_style.css') }}">
@endsection

@section('mycontent')

    <header>
        <nav class="nav1 navbar navbar-expand-lg p-2 border-bottom">
            <div class="container-fluid">
                <a class="navbar-brand mb-2 coll" href="/">SAFE A LIFE<span class="logo"></span></a>
                <button class="navbar-toggler " type="button" data-toggle="collapse"
                        data-target="#navbar-togglerDemo02" aria-controls="navbar-togglerDemo02"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line" style="margin-bottom: 0;"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar-togglerDemo02">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active p-2">
                            <a class="nav-link coll" href="/">Home
                                <span
                                    class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item active p-2">
                            <a class="nav-link coll" href="/donerRegs">
                                {{--                                        href="/posts/{{$post->id}}"--}}
                                Doner Registration <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active p-2">
                            <a class="nav-link coll" href="/donerReq">Doner request <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active p-2">
                            <a class="nav-link coll" href="/learn">Learn <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active bor p-2">
                            <a class="nav-link coll" href="/contact"> <span >
                                            Contact
                                        </span> <span class="sr-only">(current)</span></a>
                        </li>
                        {{--                                <li class="nav-item active bor">--}}
                        {{--                                    <a class="nav-link" href="Arabic.html"> <span class="badge badge-secondary">--}}
                        {{--                                            Arabic--}}
                        {{--                                        </span> <span class="sr-only">(current)</span></a>--}}
                        {{--                                </li>--}}
                    </ul>

                </div>
            </div>
        </nav>


    </header>
    <section id="contact" class="py-5">

        <div class="container">
            <h2>Get In Touch</h2>
            <p class="text-muted text-center">Let's work together.</p>
            <div class="row">
                <div class="col-lg-6 ">
                    <h3 id="heading" class="mb-3">CONTACT INFO</h3>
                    <p class="text-muted p-2">Why you should hire me writeup Lorem ipsum dolor sit amet, consectetuer
                        adipiscing elit. Aenean
                        commodo ligula eget dolor. Aenean massa. Cum sociis natoque nascetur ridiculus mus.</p>
                    <div class="icons my-2">
                        <p class="text-muted p-3 "><i class="fa fa-map-marker-alt mr-3"></i> New Street 22545, Nexa
                            Road, New York City, USA</p>
                        <p class="text-center p-3  text-danger"><i class="fas fa-envelope mr-3 text-muted"></i>
                            hello@uigrid.com</p>
                        <p class="text-center text-muted p-3 mb-5"> <i class="fas fa-phone-alt mr-3"></i>
                            001-000-000-000 </p>
                    </div>
                    <div class="soialIcons text-muted">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-google-plus-g"></i>
                        <i class="fab fa-behance"></i>
                        <i class="fas fa-basketball-ball"></i>
                    </div>
                </div>
                <div class="col-lg-6 mt-3">
                    <!-- Success message -->
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif

{{--                    <form action="" method="post" action="{{ route('contact.store') }}">--}}
                        <!-- CROSS Site Request Forgery Protection -->
                        @csrf
{{--                        <div class="form-group">--}}
{{--                            <input id="inputName" type="text" class="mb-4 rounded-0 form-control " id="colFormLabelLg"--}}
{{--                                   placeholder="Enter Name">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <input id="userEmail" type="email" class="mb-4 rounded-0 form-control " id="colFormLabelLg"--}}
{{--                                   placeholder="Enter Email">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <textarea id="userMessage" type="text" class="mb-2 rounded-0 form-control "--}}
{{--                                      id="colFormLabelLg" placeholder="Enter Message"></textarea>--}}

{{--                        </div>--}}
{{--                        <button id="addBtn" type="submit" class="btn  btn-outline btn-lg rounded-0 ">SEND--}}
{{--                            MESSAGE</button>--}}


{{--                    </form>--}}

                    <form action="" method="post" action="{{ route('contact.store') }}">

                        @csrf

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">

                            <!-- Error -->
                            @if ($errors->has('name'))
                                <div class="error">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">

                            @if ($errors->has('email'))
                                <div class="error">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">

                            @if ($errors->has('phone'))
                                <div class="error">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                                   id="subject">

                            @if ($errors->has('subject'))
                                <div class="error">
                                    {{ $errors->first('subject') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
                                      rows="4"></textarea>

                            @if ($errors->has('message'))
                                <div class="error">
                                    {{ $errors->first('message') }}
                                </div>
                            @endif
                        </div>

                        <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
                    </form>


                </div>
            </div>

        </div>
    </section>
    <section id="map"class="mb-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7291207.310200586!2d26.379643752464382!3d26.834868609627065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14368976c35c36e9%3A0x2c45a00925c4c444!2zw4lneXB0ZQ!5e0!3m2!1sfr!2seg!4v1585347950172!5m2!1sfr!2seg" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>


@endsection

