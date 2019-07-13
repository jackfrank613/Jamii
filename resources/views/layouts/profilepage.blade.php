<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Celt - HTML Construction Website Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}" />

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="{{asset('public/css/owl.carousel.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('public/css/owl.theme.default.css')}}" />

    <!-- Magnific Popup -->
    <link type="text/css" rel="stylesheet" href="{{asset('public/css/magnific-popup.css')}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">

    <!-- Custom stlylesheet -->
    <!-- @include('partials.stylesheets') -->

    <link type="text/css" rel="stylesheet" href="{{asset('public/css/mainpage.css')}}" />
    <!-- <link type="text/css" rel="stylesheet" href="{{asset('public/css/productionpage.css')}}" /> -->
    <!-- <link type="text/css" rel="stylesheet" href="{{asset('public/css/auth.css')}}" /> -->
    <link type="text/css" rel="stylesheet" href="{{asset('public/css/style.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('public/css/custom.css')}}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <div id="application">
        <div data-reactroot="" data-reactid="1">
            <!-- react-empty: 2 -->
            <div data-reactid="3">
                <!-- react-empty: 4 -->
                <!-- react-empty: 5 -->
                <section id="container" data-reactid="6" data-pagename="compte_part::tableau_de_bord">
                    <!-- react-empty: 7 -->
                    <!-- react-empty: 697 -->
                    <main class="_2ketD" role="main" data-reactid="9">
                        <div>
                            @include('partials.headerpart');
                            <noscript>
                                <div class="_20fZ0">
                                    <div class="_2Kpxj _2yDC9">
                                        <div class="_1jIsn"><span class="_1BHQN">Attention : </span></div>
                                        <div>Activez JavaScript pour profiter de toutes les fonctionnalités de leboncoin
                                        </div>
                                    </div>
                                </div>
                            </noscript>
                            <div>
                                <div>
                                    <div class="xkw6H">
                                        <ul class="_1AsHn AVKQ-">
                                            <li class="_3Y9_a rljXf _3cD2j"><a class="_2KBuw"
                                                    href="{{route('myadmob')}}"><span class="_1vK7W K5CQx _2PyiJ"
                                                        name="listing"><svg viewBox="0 0 24 24" data-name="Calque 1"
                                                            focusable="false">
                                                            <path
                                                                d="M2 10.1a1.9 1.9 0 1 0 0 3.8 1.9 1.9 0 1 0 0-3.8zm0-7.6a1.92 1.92 0 0 0-2 1.9 1.92 1.92 0 0 0 2 1.9 1.9 1.9 0 1 0 0-3.8zm0 15.2a1.9 1.9 0 1 0 0 3.8 1.9 1.9 0 1 0 0-3.8zm5.19 3.17H22.7a1.27 1.27 0 1 0 0-2.54H7.14a1.27 1.27 0 1 0 0 2.54zm0-7.6H22.7a1.27 1.27 0 1 0 0-2.54H7.14a1.27 1.27 0 1 0 0 2.54zM5.84 4.4a1.28 1.28 0 0 0 1.3 1.27H22.7a1.27 1.27 0 1 0 0-2.54H7.14a1.28 1.28 0 0 0-1.3 1.27z">
                                                            </path>
                                                        </svg></span>
                                                    <div class="trackable">
                                                        <div class="_2xBxS">
                                                            <!-- react-text: 5733 -->
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">My ads</font>
                                                            </font><!-- /react-text -->
                                                        </div>
                                                        <div class="UvFJk">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Announcements
                                                                </font>
                                                            </font>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="_3Y9_a rljXf"><a class="_2KBuw"
                                                    href="{{route('mytransaction')}}"><span class="_1vK7W K5CQx _2PyiJ"
                                                        name="securepayment"><svg viewBox="0 0 24 24"
                                                            data-name="Calque 1" focusable="false">
                                                            <path
                                                                d="M20.23 3.59L12.84.17a2.13 2.13 0 0 0-1.68 0L3.77 3.59a2.18 2.18 0 0 0-1.27 2v5.19c0 6.07 4 11.81 9.5 13.24 5.49-1.43 9.5-7.17 9.5-13.24V5.57a2.18 2.18 0 0 0-1.27-1.98zM13 9.54a.52.52 0 0 1 .53.56.51.51 0 0 1-.53.55H9.89v1.1H13a.51.51 0 0 1 .53.55.52.52 0 0 1-.53.56h-2.69A3.69 3.69 0 0 0 13.58 15a3.51 3.51 0 0 0 1.9-.55.63.63 0 0 1 .85.11.76.76 0 0 1-.11 1.1 4.35 4.35 0 0 1-2.64.78 5 5 0 0 1-4.75-3.53H7.36a.52.52 0 0 1-.53-.56.47.47 0 0 1 .53-.44h1.16v-1.1H7.36a.55.55 0 0 1 0-1.1h1.47a5.19 5.19 0 0 1 4.75-3.54 5.33 5.33 0 0 1 2.64.78.69.69 0 0 1 .11 1.05.81.81 0 0 1-.85.11 3 3 0 0 0-1.9-.66 3.81 3.81 0 0 0-3.27 2.09z">
                                                            </path>
                                                        </svg></span>
                                                    <div class="trackable">
                                                        <div class="_2xBxS">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">My transactions
                                                                </font>
                                                            </font>
                                                        </div>
                                                        <div class="UvFJk">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Transactions
                                                                </font>
                                                            </font>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="_3Y9_a rljXf"><a class="_2KBuw"
                                                    href="{{route('mypurchase')}}"><span class="_1vK7W K5CQx _2PyiJ"
                                                        name="shop"><svg viewBox="0 0 24 24" data-name="Calque 1"
                                                            focusable="false">
                                                            <path
                                                                d="M7.2 19.2a2.4 2.4 0 1 0 2.4 2.4 2.4 2.4 0 0 0-2.4-2.4zM19.19 19.2a2.4 2.4 0 1 0 2.4 2.4 2.39 2.39 0 0 0-2.4-2.4zM17.45 13.2a2.38 2.38 0 0 0 2.1-1.2l4.3-7.78A1.2 1.2 0 0 0 22.8 2.4H5.05L4.25.68A1.2 1.2 0 0 0 3.17 0h-2a1.2 1.2 0 0 0 0 2.4H2.4l4.32 9.11-1.62 2.93A2.4 2.4 0 0 0 7.2 18h13.19a1.2 1.2 0 0 0 0-2.4H7.2l1.32-2.4z">
                                                            </path>
                                                        </svg></span>
                                                    <div class="trackable">
                                                        <div class="_2xBxS">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">My purchases
                                                                </font>
                                                            </font>
                                                        </div>
                                                        <div class="UvFJk">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Shopping</font>
                                                            </font>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="_3Y9_a rljXf"><a class="_2KBuw"
                                                    href="{{route('myaccount')}}"><span class="_1vK7W K5CQx _2PyiJ"
                                                        name="cv"><svg viewBox="0 0 24 24" data-name="Calque 1"
                                                            focusable="false">
                                                            <path
                                                                d="M20.8 6.5L15.08.71A2.38 2.38 0 0 0 13.39 0H4.88A2.4 2.4 0 0 0 2.5 2.4v19.2A2.39 2.39 0 0 0 4.86 24h14.26a2.4 2.4 0 0 0 2.38-2.4V8.2a2.4 2.4 0 0 0-.7-1.7zm-5.24 12.7H8.44a1.2 1.2 0 0 1 0-2.4h7.12a1.2 1.2 0 0 1 0 2.4zm0-4.8H8.44a1.2 1.2 0 0 1 0-2.4h7.12a1.2 1.2 0 0 1 0 2.4zm-1.18-6a1.19 1.19 0 0 1-1.19-1.2V1.8l6.53 6.6z">
                                                            </path>
                                                        </svg></span>
                                                    <div class="trackable">
                                                        <div class="_2xBxS">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">My account</font>
                                                            </font>
                                                        </div>
                                                        <div class="UvFJk">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Account</font>
                                                            </font>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li class="_3Y9_a rljXf"><a class="_2KBuw" href="{{route('mycv')}}"><span
                                                        class="_1vK7W K5CQx _2PyiJ" name="cv"><svg viewBox="0 0 24 24"
                                                            data-name="Calque 1" focusable="false">
                                                            <path
                                                                d="M20.8 6.5L15.08.71A2.38 2.38 0 0 0 13.39 0H4.88A2.4 2.4 0 0 0 2.5 2.4v19.2A2.39 2.39 0 0 0 4.86 24h14.26a2.4 2.4 0 0 0 2.38-2.4V8.2a2.4 2.4 0 0 0-.7-1.7zm-5.24 12.7H8.44a1.2 1.2 0 0 1 0-2.4h7.12a1.2 1.2 0 0 1 0 2.4zm0-4.8H8.44a1.2 1.2 0 0 1 0-2.4h7.12a1.2 1.2 0 0 1 0 2.4zm-1.18-6a1.19 1.19 0 0 1-1.19-1.2V1.8l6.53 6.6z">
                                                            </path>
                                                        </svg></span>
                                                    <div>
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">My CV</font>
                                                        </font>
                                                    </div>
                                                </a></li>
                                            <li class="_3Y9_a rljXf"><a class="_2KBuw"
                                                    href="{{route('mybooking')}}"><span class="_1vK7W K5CQx _2PyiJ"
                                                        name="booking"><svg viewBox="0 0 24 24" data-name="Calque 1"
                                                            focusable="false">
                                                            <path
                                                                d="M4 4.07A13.79 13.79 0 0 0 2 21a2.69 2.69 0 0 0 4.2.43L8 19.68A15.26 15.26 0 0 1 4 4.07zM19.68 8l1.74-1.74A2.7 2.7 0 0 0 21 2 13.77 13.77 0 0 0 4.07 4a15.23 15.23 0 0 1 15.61 4zM23.6 21.65l-7.82-7.82-1.95 1.95 7.82 7.82a1.38 1.38 0 0 0 2-2z">
                                                            </path>
                                                            <path
                                                                d="M4.06 4H4c-.52 4.11 1.6 9.4 5.87 13.68l7.82-7.82C13.46 5.64 8.16 3.52 4.06 4z">
                                                            </path>
                                                        </svg></span>
                                                    <div class="trackable">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">My bookings</font>
                                                        </font>
                                                    </div>
                                                </a></li>
                                            <div class="_1A0X5">
                                                <div class="_11PoU">
                                                    <div class="_36XVT"><a
                                                            href="https://www.leboncoin.fr/account/my-shopping.html"
                                                            data-qa-id="credit-link-desktop" class="trackable">
                                                            <!-- react-text: 6114 -->
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Buy credits
                                                                </font>
                                                            </font><!-- /react-text --><span class="_1vK7W _3cqxs"
                                                                name="more"><svg viewBox="0 0 24 24"
                                                                    data-name="Calque 1" focusable="false">
                                                                    <path
                                                                        d="M12 0a12 12 0 1 0 12 12A12 12 0 0 0 12 0zm4.8 13.2h-3.6v3.6a1.2 1.2 0 0 1-2.4 0v-3.6H7.2a1.2 1.2 0 1 1 0-2.4h3.6V7.2a1.2 1.2 0 1 1 2.4 0v3.6h3.6a1.2 1.2 0 0 1 0 2.4z">
                                                                    </path>
                                                                </svg></span>
                                                        </a></div>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                @yield('content');
                            </div>
                            <footer class="_3mBNy">
                                <div class="_1AsHn In37K">
                                    <div class="_29yTo">
                                        <div>
                                            <!-- react-text: 6097 -->
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">jamii 2019 - </font>
                                            </font><!-- /react-text -->
                                            <!-- react-text: 6098 -->
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">2030</font>
                                            </font><!-- /react-text -->
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </main><!-- react-empty: 750 -->
                    <div class="_3kopx" data-reactid="607"></div>
                </section><span hidden="" class="hidden" data-reactid="608">jamii: 2019-06-20.22646</span>
            </div>
        </div>
    </div>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- /Preloader -->

    <!-- jQuery Plugins -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('public/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/jquery.magnific-popup.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/main.js')}}"></script>

    @yield('after-script')

</body>

</html>
