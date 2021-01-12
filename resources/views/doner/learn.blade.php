@extends('layouts.app')

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
    <section id="component" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="borderHover">
                        <div class="text-center p-3">
                            <h2 id="heading"> BLOOD COMPONENTS.</h2>
                            <div class="hBorder m-auto"></div>
                        </div>
                        <p class=" py-2 text-center">
                            There are four basic components that comprise human blood:
                            plasma, red blood cells, white blood cells and platelets</p>
                    </div>
                </div>
            </div>
            <div class="row py-4 pt-4">
                <div class=" col-lg-3">
                    <p class="comp">Red Blood Cells:</p>
                    <p>Red blood cells represent 40%-45% of your blood volume.They are generated from your bone marrow
                        at a rate of four to five billion per hour.</p>
                    <p class="comp">Plasma:</p>
                    <p> Plasma is the liquid portion of your blood.</p>
                </div>
                <div class=" col-lg-3">

                    <p class="comp">Platelets:</p>
                    <p>Platelets are an amazing part of your blood.
                        Platelets are the smallest of our blood cells and literally look like small plates in their
                        non-active form.</p>
                    <p class="comp">white blood cells:</p>
                    <p> Although white blood cells only account for about 1% of your blood, they are very important.</p>
                </div>
                <div class="col-lg-6">
                    <div>
{{--                        component_n--}}
                        <img class="img-fluid" style="max-height: 400px" src="{{ URL::to('images/OC1OWB0.jpg') }}">

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--End component-->

    <!--Start how your blood is used-->

    <section id="how-blood-used" class="py-5">
        <div class="container">
            <div class=" text-center">
                <div class="borderHover">
                    <h2 id="heading">How your blood is used</h2>
                    <div class="hBorder m-auto"></div>
                </div>
                <div class="row py-4">
                    <div class="col-md-4">
                        <div class="how-box rounded-circle text-center m-auto">
                            <div class="how">
                                <h3>70%</h3>
                                <p>Help medical conditions such as anaemia, cancer, etc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="how-box rounded-circle text-center m-auto">
                            <div class="how">
                                <h3>25%</h3>
                                <p>Used in surgeries including cardiac surgery etc</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="how-box rounded-circle  text-center m-auto">
                            <div class="how ">
                                <h3>5%</h3>
                                <p>Treat blood loss after childbirth etc. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End how your blood is used-->
    <!-------------------------------------------------------------------->
    <!--  SECTION FAQ -->

    <section id="details" class="pt-5">
        <div class="container">
            <div class=" text-center">
                <div class="borderHover">
                    <h2 id="heading">Donation Instructions</h2>
                    <div class="hBorder m-auto"></div>
                    <p class=" py-2 text-center">
                        know more about blood donation and know how you can help people.
                    </p>


                </div>
                <div class="row py-5">
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-8  text-center">

                        <h3>What are preliminary psychological disorder?</h3>
                        <p class="shadow" style="display: block;">We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                        </p>

                        <h3>ٍHow many sessions can I have with my counselor?</h3>
                        <p class="shadow">We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                        </p>
                        <h3> How can I be sure effective form of counseling?</h3>
                        <p class="shadow"></pp>>We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                        </p>
                        <h3>How is my privacy protected?</h3>
                        <p class="shadow">We all to some extent are on an End of Life journey. For some of our clients and their family additional care and help is required as they progress through this journey. Care on Call work closely with.
                        </p>
                    </div>
                    <div class="col-sm-2">
                    </div>

                </div>
            </div>

    </section>

    <!--End SECTION FAQ-->
    <!-------------------------------------------------------------------->




@endsection
