<!DOCTYPE html5>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

{{--    <link rel="stylesheet" type="text/css" href="{{url('css/index_style.css')}}">--}}

    <link rel="stylesheet"  type="text/css" href="{{url('css/bootstrap.min.css')}}">
{{--    <link rel="stylesheet" type="text/css" href="{{url('css/all.min.css')}}" >--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/v4-shims.min.csshttps://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/FontAwesome.otf" integrity="sha512-p++g4gkFY8DBqLItjIfuKJPFvTPqcg2FzOns2BNaltwoCOrXMqRIOqgWqWEvuqsj/3aVdgoEo2Y7X6SomTfUPA==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="{{url('css/index_style.css')}}">

    <title>blood donation</title>



</head>


<body>

@yield('mycontent')

<!--  ----------------------------------------foter----------------------------------------------->

<footer id="footer ">
    <div class="mainFooter pt-5 px-5">
        <div class="container-fluid py-3">
            <div class="row ">
                <div class="col-lg-3 col-md-6 pb-2 pr-5">
                    <div>
                        <h4 class="text-white">About us</h4>
                        <div>
                            <p>I am save Life Sharing diverse, remarkable, inspiring real-life stories is what the
                                save Life
                                movement is all about. Help spread the word about the important role blood donations
                                hold in our community.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-2 ">
                    <div>
                        <h4 class="text-white">Opening Hours</h4>
                        <div>
                            <ul class="p-0">
                                <li> <i class="fas fa-angle-right"> </i> Mon-Thu: 8:00 - 17:00</li>
                                <li><i class="fas fa-angle-right"> </i> Wed: 8:00 - 19:00</li>
                                <li><i class="fas fa-angle-right"> </i> Sat: 11:00 - 14:00</li>
                                <li><i class="fas fa-angle-right"> </i> Tue: 8:00 - 19:00</li>
                                <li><i class="fas fa-angle-right"> </i> Sun: Closed</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-2">
                    <div>
                        <h4 class="text-white">Pages</h4>
                        <div>
                            <ul class="p-0">
                                <li> <i class="fas fa-angle-right"></i> <a href="/"> Home</a> </li>
                                <li> <i class="fas fa-angle-right"></i> <a href="/donerRegs">Doner
                                        Registration</a> </li>
                                <li> <i class="fas fa-angle-right"></i> <a href="/donerReq">doner Request </a>
                                </li>
                                <li> <i class="fas fa-angle-right"></i> <a href="/learn">Learn</a> </li>
                                <li> <i class="fas fa-angle-right"></i> <a href="/contact">Contact</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-2">
                    <h4 class="text-white">Contact Details</h4>
                    <div>
                        <div> <i class="fas fa-map-marker-alt pr-2"></i> Manchester Road 123-78B, Silictown
                            7854MD, Great Country</div>
                        <div class="pt-3 phone "> <i class="fas fa-phone-alt pr-2"></i> +46 123 456 789</div>
                        <div class="pt-3 phone "> <i class="fas fa-envelope pr-2"></i>hello@saveLife.com</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footerBottom pt-4 pb-3 px-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 ">
                    <p> Copyright 2020. All rights reserved.</p>
                </div>
                <div class="col-md-6">
                    <div class="soialIcon float-right px-5">
                        <a><i class="fab fa-facebook-f i1"></i> </a>
                        <a> <i class="fab fa-google i2"></i></a>
                        <a> <i class="fab fa-linkedin-in i3"></i> </a>
                        <a> <i class="fab fa-twitter i4"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>


</footer>

{{--<script src="js/jquery-3.4.1.min.js"></script>--}}
{{--<script src="js/popper.min.js"></script>--}}
{{--<script src="js/bootstrap.min.js"></script>--}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

{{--<script src="js/index.js"></script>--}}

{{--<script  src="{{url('js/index.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{url('js/index.js')}}"></script>--}}
<script src="{{URL::to('js/index.js')}}"></script>


</body>

</html>

