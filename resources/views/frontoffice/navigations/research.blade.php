<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Jamii</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>

    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <link type="text/css" rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}" />


    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="{{asset('public/css/owl.carousel.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('public/css/owl.theme.default.css')}}" />

    <!-- Magnific Popup -->
    <link type="text/css" rel="stylesheet" href="{{asset('public/css/magnific-popup.css')}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">

    <!-- Custom stlylesheet -->
  

    <link type="text/css" rel="stylesheet" href="{{asset('public/css/mainpage.css')}}" />
    <!-- <link type="text/css" rel="stylesheet" href="{{asset('public/css/productionpage.css')}}" /> -->
    <!-- <link type="text/css" rel="stylesheet" href="{{asset('public/css/auth.css')}}" /> -->
    <link type="text/css" rel="stylesheet" href="{{asset('public/css/style.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('public/css/custom.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('public/css/header.css')}}">

</head>

<body>
   
    @include('frontoffice.partials.headerpart')
    <section>
        <div class="_3p2mW">
            <div class="_3Cgb0">
                <div class="_-iQiq">
                    <img src="../public/img/m_research.PNG" alt="Vous n‘avez pas encore de recherche sauvegardée"
                        title="Vous n‘avez pas encore de recherche sauvegardée" class="_1hKxU">
                    <h1 class="_1XU38">Vous n‘avez pas encore de recherche sauvegardée</h1>
                    <span class="_28rnK"><a class="_2sNbI _1xIyN _2xk2l _2yLrh trackable" href="#" type="submit"
                            alt="Créer une nouvelle recherche" title="Créer une nouvelle recherche"
                            data-qa-id="noresult-cta-button">Créer une nouvelle recherche</a></span>
                    <img src="../public/img/research.PNG" alt="" class="gnz2y">
                </div>

            </div>

        </div>
    </section>

    <footer>
    </footer>

</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../public/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../public/js/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="../public/js/main.js"></script>
    @yield('after-script')
</html>
