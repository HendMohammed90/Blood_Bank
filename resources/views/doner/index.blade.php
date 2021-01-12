@extends('layouts.app')

@section('mycontent')



    <div class="layout">
        <div class="layer">
            <header>
                <nav class="nav1 navbar navbar-expand-lg p-2 border-bottom">
                    <div class="container-fluid">
                        <a class="navbar-brand mb-2" href="/">SAFE A LIFE<span class="logo"></span></a>
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
                                    <a class="nav-link " href="/">Home
                                        <span
                                            class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item active p-2">
                                    <a class="nav-link" href="/donerRegs">
{{--                                        href="/posts/{{$post->id}}"--}}
                                        Doner Registration <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active p-2">
                                    <a class="nav-link" href="/donerReq">Doner request <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active p-2">
                                    <a class="nav-link " href="/learn">Learn <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active bor p-2">
                                    <a class="nav-link" href="/contact"> <span >
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
            <div class="caption text-center">
                <h1> YOUR DONATE SAVE LIVE</h1>
                <p class="my-3"> some times,small things we do mean a life to the other</p>
                <button id="addVideo" type="submit" class="btn btn-outline rounded-2 ">Show video
                </button>
            </div>
        </div>
    </div>

    <!------------------------------------------------about--------------------------------------------->

    <section id="about" class="m-5 p-4">
        <div class="container">
            <div class="row">
                <div class="col align-self-center">
                    <div class="text-center p-5 ">
                        <div class="borderHover">
                            <h2 id="heading">WHO WE ARE</h2>
                            <div class="hBorder m-auto"></div>
                        </div>
                        <p class="px-5 mt-3"> we are save Life Sharing diverse, remarkable, inspiring real-life stories
                            is what the
                            saveLife
                            movement is all about. Help spread the word about the important role blood donations hold in
                            our
                            community.
                        </p>
                        <button id="myBtn" type="submit" class="btn btn-outline rounded-2 mt-4">
                            <a href="/">Learn More</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------------------------doctor---------------------------------------------->
    <section id="blog" class="m-5 py-4">
        <div class="container">
            <div class="row bg-white mx-5">
                <div class="col-lg-6">
                    {{--                <img class="img-fluid" src="images/5834.jpg">  david-arch--}}

                    <img class="img-fluid" src="{{ URL::to('images/david-arch.jpg') }}">
                </div>
                <div class="col-lg-6 my-4 py-3 pr-5">
                    <div>
                        <h3> <span>the</span> benefit of donating blood</h3>
                        <P class="pr-4">
                            Blood is universally recognized as the most precious element that sustains life. It saves
                            innumerable lives across the world in a variety of conditions. The need for blood is great -
                            on any given day, approximately 39,000 units of Red Blood Cells are needed. More than 29
                            million units of blood components are transfused every year. Donate Blood Despite the
                            increase in the number of donors, blood remains in short supply during emergencies, mainly
                            attributed to the lack of information and accessibility. We positively believe this tool can
                            overcome most of these challenges by effectively connecting the blood donors with the blood
                            recipients. </P>
                        <button id="myBtn" type="submit" class="btn btn-outline rounded-2 mt-4">
                            <a href="/donerRegs">Get Appointment</a>
                        </button>
                    </div>

                </div>


            </div>
        </div>
    </section>

    <!---------------------------------------------------processSection------------------------------------>

    <section id="process" class="m-5 py-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center p-5">
                        <div class="borderHover">
                            <h2 id="heading">DONATION PROCESS</h2>
                            <div class="hBorder m-auto"></div>
                        </div>
                        <p class=" mt-3">The donation process from the time you arrive center until the time you leave
                        </p>
                    </div>
                </div>
            </div>
            <div class="row px-5">
                <div class="col-md-4 mb-5">
                    <div>
                        <div class="card">
                            <img class="card-img-top img-fluid" alt="Card image cap" src="{{ URL::to('images/process_1.jpg') }}">
                            <div class="card-body">
                                <h4 class="card-title">REGISTRATION</h4>
                                <p class="card-text">You need to complete a very simple registration form. Which
                                    contains all required contact information to enter in the donation process.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <div>
                        <div class="card">
                            <img class="card-img-top img-fluid" alt="Card image cap" src="{{ URL::to('images/process_2.jpg') }}">
                            <div class="card-body">
                                <h4 class="card-title">SCREENING</h4>
                                <p class="card-text">A drop of blood from your finger will take for simple test to
                                    ensure that your blood iron levels are proper enough for donation process.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <div>
                        <div class="card">
                            <img class="card-img-top img-fluid" alt="Card image cap" src="{{ URL::to('images/process_3.jpg') }}">
                            <div class="card-body">
                                <h4 class="card-title">DONATION</h4>
                                <p class="card-text">After ensuring and passed screening test successfully you will be
                                    directed to a donor bed for donation. It will take only 6-10 minutes.</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>

    <!----------------------------------slider----------------------------------------------->

    <section id="bloodDoners" class="pt-5">
        <div class="container">
            <div class="borderHover doner">
                <h2 id="heading" class="text-center">Our Volunteers</h2>
                <div class="hBorder m-auto"></div>
            </div>
            <div id="carouselExampleControls" class=" carousel slide w-75 m-auto bg-white rounded-2 "
                 data-ride="carousel">
                <div class="box pt-5">
                    <div class="carousel-inner shadow">
                        <div class="carousel-item active">
                            <div class="card text-center">
                                <img class="img-fluid" alt="Card image1" src="{{ URL::to('images/david-arch.jpg') }}">

                                <div class="card-body ">
                                    <h3 class="card-title">David Arch</h3>
                                    <h4>Blood Donor</h4>
                                    <p class="card-text">To me donating blood is almost an obligation because you’re
                                        helping
                                        people as well as yourself. I started donating in 1968 when they had the old
                                        hospital where Immigration is now located. Back then, the process was definitely
                                        not
                                        as comfortable as it is now; you felt it more. It soon became natural to me and
                                        now
                                        I look forward to it. It gives me satisfaction that I’m doing something to help
                                        the
                                        community.</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card text-center">
                                <img class="img-fluid" alt="Card image2" src="{{ URL::to('images/jamo-myles.jpg') }}">
                                <div class="card-body">
                                    <h3 class="card-title">James Myles</h3>
                                    <h4>Blood Donor</h4>
                                    <p class="card-text">I chose to become a blood donor because firstly, it saves
                                        lives,
                                        and secondly, it helps you to promote a better lifestyle. I became a donor in
                                        1994.
                                        The blood donation process is always pleasant and is handled by a very
                                        professional
                                        group at the Cayman Islands Blood Bank; I’ve never had a bad experience. Endure
                                        a
                                        discomfort similar to two mosquito bites and you could save three lives. </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card text-center">
                                <img class="img-fluid" alt="Card image3" src="{{ URL::to('images/joel-porter.jpg') }}">
                                <div class="card-body">
                                    <h3 class="card-title">Joel Porter</h3>
                                    <h4>Blood Donor</h4>
                                    <p class="card-text">I became a blood donor because I love being able to give back
                                        to
                                        the community and enjoy helping people. Donating blood saves lives. It’s a lot
                                        faster, a lot easier, and a lot less painful than I expected.Endure a discomfort
                                        similar to two mosquito bites and you could save three lives. And it only takes
                                        about 15 minutes of your time.The process is very quick and feels like a
                                        mosquito
                                        bite. </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card text-center">
                                <img class="img-fluid" alt="Card image4" src="{{ URL::to('images/rohan.jpg') }}">
                                <div class="card-body">
                                    <h3 class="card-title">Christina White</h3>
                                    <h4>Blood Donor</h4>
                                    <p class="card-text">I made the decision to become a blood donor 12 years ago
                                        because my
                                        grandfather and mother both were recipients of blood donations. I wanted to be a
                                        part of giving the gift that could save lives. To date I have given a total of
                                        22
                                        blood donations; the feeling I get once I have given my donation is priceless. I
                                        count it as a privilege in which I take very seriously.I could not imagine
                                        saying no
                                        to donating blood. </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="contr carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="contr carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <!-----------------------------------------------loadingScreen---------------------------->

    <section id="loading">
        <div class="sk-circle">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
        </div>
    </section>
    <!-----------------------------------------------video-------------------------------------------------->
    <div class="box-container  align-items-center justify-content-center">
        <div class="box-item">
            <i class="far fa-times-circle fa-3x"></i>
{{--                    <video id="bloodVideo" src="VID-20200409-WA0178.mp4" height="630" width="600" controls></video>--}}
        </div>
    </div>

    <!--------------------------------------------------btnup---------------------------------------->
    <button id="btnUp" class="btn btn-dark rounded-circle p-2">
        <i class="fas fa-arrow-circle-up"></i>
    </button>



@endsection
