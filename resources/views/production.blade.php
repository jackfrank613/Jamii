<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

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
    <link type="text/css" rel="stylesheet" href="{{asset('public/css/style.css')}}" />
    <!-- <link type="text/css" rel="stylesheet" href="{{asset('public/css/mainpage.css')}}" /> -->
    <link type="text/css" rel="stylesheet" href="{{asset('public/css/productionpage.css')}}" />
    <!-- <link type="text/css" rel="stylesheet" href="{{asset('public/css/auth.css')}}" /> -->

    <!-- <link type="text/css" rel="stylesheet" href="{{asset('public/css/custom.css')}}" /> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <header id="header">

        <!-- /Top Header -->

        <!-- Main Header -->
        <div id="main-navbar" class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- Logo -->
                    <div class="navbar-brand">
                        <!-- <a class="logo" href="index.html"><img src="{{asset('public/img/logo.png')}}" alt="logo"></a> -->
                    </div>
                    <!-- Logo -->

                    <!-- Mobile toggle -->
                    <button class="navbar-toggle-btn">
                        <span></span>
                    </button>
                    <!-- Mobile toggle -->

                    <!-- Mobile Search toggle -->
                    <button class="search-toggle-btn">
                        <i class="fa fa-search"></i>
                    </button>
                    <!-- Mobile Search toggle -->
                </div>

                <!-- Search -->
                <div class="navbar-search">
                    <!-- <button class="search-btn"><i class="fa fa-search"></i></button> -->
                    <div class="search-form">
                        <form>
                            <input type="text" name="search" value="" placeholder="Search">
                        </form>
                    </div>
                </div>
                <!-- Search -->

                <!-- Navigation -->
                <ul class="main-navbar nav navbar-nav navbar-right">
                    <li>
                        <a title="Mes recherches" class="trackable" data-toggle="modal" data-target="#Login_modal"
                            data-reactid="40">
                            <div class="_3Vuug" data-reactid="41">
                                <div class="_6rJYh" data-reactid="42"><span class="_1vK7W _71Wec"
                                        name="notifoutline"><svg viewBox="0 0 24 24" data-name="Calque 1"
                                            focusable="false">
                                            <path
                                                d="M12 24a2.49 2.49 0 0 0 2.5-2.46h-5A2.48 2.48 0 0 0 12 24zM21.13 18.2l-1.62-1.58v-6.16c0-3.78-2.05-6.94-5.63-7.78v-.83a1.88 1.88 0 0 0-3.76 0v.83c-3.59.84-5.63 4-5.63 7.78v6.16L2.87 18.2a1.23 1.23 0 0 0 .88 2.11h16.49a1.23 1.23 0 0 0 .89-2.11zM17 17.85H7v-7.39c0-3.05 1.89-5.54 5-5.54s5 2.49 5 5.54z">
                                            </path>
                                        </svg></span></div>
                                <div class="_5GFF2" data-text="Mes recherches" data-reactid="44">Mes recherches</div>
                            </div>
                        </a>

                    </li>
                    <li>
                        <a title="Mes favoris" class="trackable" href="/mes-annonces/" data-reactid="45">
                            <div class="_3Vuug" data-reactid="46">
                                <div class="_6rJYh" data-reactid="47"><span class="_1vK7W _71Wec"
                                        name="heartoutline"><svg viewBox="0 0 24 24" data-name="Calque 1"
                                            focusable="false">
                                            <path
                                                d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                            </path>
                                        </svg></span></div>
                                <div class="_5GFF2" data-text="Mes favoris" data-reactid="49">Mes favoris</div>
                            </div>
                        </a>

                    </li>
                    <li>
                        <a title="Messages" class="trackable" href="/messages/" data-reactid="50">
                            <div class="_3Vuug" data-reactid="51">
                                <div class="_6rJYh" data-reactid="52"><span class="_1vK7W _71Wec"
                                        name="messageoutline"><svg viewBox="0 0 24 24" data-name="Calque 1"
                                            focusable="false">
                                            <path
                                                d="M18 12h-7.2a1.13 1.13 0 0 0-1.2 1.2 1.13 1.13 0 0 0 1.2 1.2H18a1.2 1.2 0 0 0 0-2.4zM6 7.2h12A1.13 1.13 0 0 0 19.2 6 1.13 1.13 0 0 0 18 4.8H6a1.2 1.2 0 0 0 0 2.4z">
                                            </path>
                                            <path
                                                d="M21.6 0H2.4A2.41 2.41 0 0 0 0 2.4v14.4a2.41 2.41 0 0 0 2.4 2.4h16.8L24 24V2.4A2.41 2.41 0 0 0 21.6 0zm0 18.24l-1.44-1.44H2.4V2.4h19.2z">
                                            </path>
                                            <path
                                                d="M6 10.8h12a1.13 1.13 0 0 0 1.2-1.2A1.13 1.13 0 0 0 18 8.4H6a1.2 1.2 0 1 0 0 2.4z">
                                            </path>
                                        </svg></span></div>
                                <div class="_5GFF2" data-text="Messages" data-reactid="54">Messages</div>
                            </div>
                        </a>

                    </li>
                    <li><a class="text-link" href="#">
                            <div class="_3Vuug _1ZnAB trackable" data-qa-id="profilarea-login">
                                <div class="_6rJYh"><span class="_1vK7W _71Wec" name="useroutline"><svg
                                            viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                            <path
                                                d="M12 12a5.92 5.92 0 0 0 5.86-6A5.93 5.93 0 0 0 12 0a5.93 5.93 0 0 0-5.86 6A5.92 5.92 0 0 0 12 12zm0-9a3 3 0 1 1-2.93 3A3 3 0 0 1 12 3zM22.46 22.13a10.68 10.68 0 0 0-10.46-8 10.68 10.68 0 0 0-10.46 8A1.5 1.5 0 0 0 2.61 24a1.46 1.46 0 0 0 1.78-1.08A7.72 7.72 0 0 1 12 17.09a7.72 7.72 0 0 1 7.61 5.78A1.48 1.48 0 0 0 21 24a1.12 1.12 0 0 0 .36-.05 1.5 1.5 0 0 0 1.1-1.82z">
                                            </path>
                                        </svg></span></div>
                                <div class="_5GFF2" data-text="Se connecter">Se connecter</div>
                            </div>
                        </a>

                    </li>

                </ul>
                <!-- Navigation -->

            </div>
        </div>
        <!-- /Main Header -->

    </header>
    <section id="container" data-reactid="6" data-pagename="listing">
        <!-- react-empty: 7 -->
        <div class="apn-hbl apn-hb"><span id="hbl-m" class="teal-apn"></span><span id="hbl-l"
                class="teal-apn"></span><span id="hbl-xl" class="teal-apn"></span></div>
        <main class="_2ketD" role="main" data-reactid="9">
            <div data-reactid="10"><noscript data-reactid="109">
                    <div class="_20fZ0">
                        <div class="_2Kpxj _2yDC9">
                            <div class="_1jIsn"><span class="_1BHQN">Attention : </span></div>
                            <div>Activez JavaScript pour profiter de toutes les fonctionnalités de leboncoin</div>
                        </div>
                    </div>
                </noscript>
                <div class="_3iQ0i" style="pointer-events:inherit;" data-reactid="110">
                    <!-- react-empty: 2690 -->
                    <div class="_1ydbl" data-reactid="112">
                        <div class="_3mkBC" data-reactid="113" style="display:flex"><label class="radio" for="offer"
                                data-reactid="114"><input type="radio" id="offer" name="ad_type" value="offer"
                                    data-reactid="115" checked=""><!-- react-text: 116 -->Offres
                                <!-- /react-text --></label><label class="radio" for="demand" data-reactid="117"
                                style="padding:5px"><input type="radio" id="demand" name="ad_type" value="demand"
                                    data-reactid="118">
                                <!-- react-text: 119 -->Demandes
                                <!-- /react-text --></label></div>
                        <div class="MoDD- ypWAz" data-reactid="120">
                            <form data-reactid="121">
                                <div class="KcIeW" data-reactid="122">
                                    <div class="_1mlgr" data-reactid="123">
                                        <section data-reactid="124">
                                            <div class="_343br" data-reactid="125">
                                                <div class="_3giCl" data-reactid="126">
                                                    <div class="_1O_Gw" data-reactid="127">
                                                        <div class="pb209" data-reactid="128">
                                                            <div class="_3dX7I" data-reactid="129">
                                                                <div class="_2a11n" data-reactid="130"><span
                                                                        class="_1vK7W K5CQx" name="close"><svg
                                                                            viewBox="0 0 24 24" data-name="Calque 1"
                                                                            class="_3kNyr" focusable="false">
                                                                            <path
                                                                                d="M23.47 20.9l-8.9-8.9 8.9-8.9A1.81 1.81 0 0 0 20.9.55L12 9.43 3.1.53A1.82 1.82 0 0 0 .53 3.1l8.9 8.9-8.9 8.9a1.82 1.82 0 0 0 2.57 2.57l8.9-8.9 8.9 8.9a1.82 1.82 0 0 0 2.57-2.57z">
                                                                            </path>
                                                                        </svg></span></div>
                                                                <p data-reactid="132">Que recherchez-vous ?</p>
                                                                <div class="_3H9gK" data-reactid="133">Effacer</div>
                                                            </div>
                                                            <div class="_1mfIX" data-reactid="134"><button
                                                                    class="_2sNbI _1xIyN GXQkc _2xk2l _1mgTv"
                                                                    type="button" data-reactid="135">
                                                                    <!-- react-text: 136 -->Valider
                                                                    <!-- /react-text --></button></div>
                                                        </div>
                                                        <div class="bVqYZ" data-reactid="137"><input
                                                                class="_2erBM _20_tk " data-qa-id="input-searchtext"
                                                                value="" placeholder="Que recherchez-vous ?"
                                                                maxlength="500" autocomplete="off" data-reactid="138">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="AGP6T" data-reactid="139">
                                                    <div data-reactid="140">
                                                        <div class="SiZLq" data-reactid="141">
                                                            <div class="_1CJVw egIn7"
                                                                data-qa-id="select-toggle_category" data-reactid="142">
                                                                <div class="_1etKl" data-reactid="143">
                                                                    <div class="_26tGy" data-reactid="144"><span
                                                                            class="_1vK7W _2jG3V"
                                                                            name="chevrondown"><svg viewBox="0 0 24 24"
                                                                                data-name="Calque 1" focusable="false">
                                                                                <path
                                                                                    d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                    <div class="_2gTTZ" data-reactid="146"><select
                                                                            autocomplete="off" data-reactid="147">
                                                                            <option value="" data-reactid="148">Toutes
                                                                                catégories</option>
                                                                            <option data-qa-id="categorylist_cat_71"
                                                                                value="71" class="_1_1B4"
                                                                                data-reactid="149">-- EMPLOI --</option>
                                                                            <option value="33"
                                                                                data-qa-id="categorylist_cat_33"
                                                                                data-reactid="150">Offres d'emploi
                                                                            </option>
                                                                            <option
                                                                                value="https://go.onelink.me/3471221858/bcf737d8"
                                                                                data-reactid="151">Offres d'emploi
                                                                                Cadres</option>
                                                                            <option data-qa-id="categorylist_cat_1"
                                                                                value="1" class="_1_1B4"
                                                                                data-reactid="152">-- VÉHICULES --
                                                                            </option>
                                                                            <option selected="" value="2"
                                                                                data-qa-id="categorylist_cat_2"
                                                                                data-reactid="153">Voitures</option>
                                                                            <option value="3"
                                                                                data-qa-id="categorylist_cat_3"
                                                                                data-reactid="154">Motos</option>
                                                                            <option value="4"
                                                                                data-qa-id="categorylist_cat_4"
                                                                                data-reactid="155">Caravaning</option>
                                                                            <option value="5"
                                                                                data-qa-id="categorylist_cat_5"
                                                                                data-reactid="156">Utilitaires</option>
                                                                            <option
                                                                                value="https://www.truckscorner.fr/#xtor=CS1-16-[leboncoin]-[lien]-[lien_menu]-[tc]"
                                                                                data-reactid="157">Camions</option>
                                                                            <option value="6"
                                                                                data-qa-id="categorylist_cat_6"
                                                                                data-reactid="158">Équipement auto
                                                                            </option>
                                                                            <option value="44"
                                                                                data-qa-id="categorylist_cat_44"
                                                                                data-reactid="159">Équipement moto
                                                                            </option>
                                                                            <option value="50"
                                                                                data-qa-id="categorylist_cat_50"
                                                                                data-reactid="160">Équipement caravaning
                                                                            </option>
                                                                            <option value="7"
                                                                                data-qa-id="categorylist_cat_7"
                                                                                data-reactid="161">Nautisme</option>
                                                                            <option value="51"
                                                                                data-qa-id="categorylist_cat_51"
                                                                                data-reactid="162">Équipement nautisme
                                                                            </option>
                                                                            <option data-qa-id="categorylist_cat_8"
                                                                                value="8" class="_1_1B4"
                                                                                data-reactid="163">-- IMMOBILIER --
                                                                            </option>
                                                                            <option value="9"
                                                                                data-qa-id="categorylist_cat_9"
                                                                                data-reactid="164">Ventes immobilières
                                                                            </option>
                                                                            <option
                                                                                value="https://immobilierneuf.leboncoin.fr"
                                                                                data-reactid="165">Immobilier Neuf
                                                                            </option>
                                                                            <option value="10"
                                                                                data-qa-id="categorylist_cat_10"
                                                                                data-reactid="166">Locations</option>
                                                                            <option value="11"
                                                                                data-qa-id="categorylist_cat_11"
                                                                                data-reactid="167">Colocations</option>
                                                                            <option value="13"
                                                                                data-qa-id="categorylist_cat_13"
                                                                                data-reactid="168">Bureaux &amp;
                                                                                Commerces</option>
                                                                            <option data-qa-id="categorylist_cat_66"
                                                                                value="66" class="_1_1B4"
                                                                                data-reactid="169">-- VACANCES --
                                                                            </option>
                                                                            <option value="12"
                                                                                data-qa-id="categorylist_cat_12"
                                                                                data-reactid="170">Locations &amp; Gîtes
                                                                            </option>
                                                                            <option value="67"
                                                                                data-qa-id="categorylist_cat_67"
                                                                                data-reactid="171">Chambres d'hôtes
                                                                            </option>
                                                                            <option value="68"
                                                                                data-qa-id="categorylist_cat_68"
                                                                                data-reactid="172">Campings</option>
                                                                            <option value="69"
                                                                                data-qa-id="categorylist_cat_69"
                                                                                data-reactid="173">Hôtels</option>
                                                                            <option value="70"
                                                                                data-qa-id="categorylist_cat_70"
                                                                                data-reactid="174">Hébergements
                                                                                insolites</option>
                                                                            <option
                                                                                value="https://www.locasun-vp.fr/?afiliate=leboncoin&amp;utm_campaign=liencat_locasunvp_leboncoin&amp;utm_source=leboncoin&amp;utm_medium=cpc#ectrans=1"
                                                                                data-reactid="175">Ventes privées
                                                                                vacances</option>
                                                                            <option data-qa-id="categorylist_cat_14"
                                                                                value="14" class="_1_1B4"
                                                                                data-reactid="176">-- MULTIMÉDIA --
                                                                            </option>
                                                                            <option value="15"
                                                                                data-qa-id="categorylist_cat_15"
                                                                                data-reactid="177">Informatique</option>
                                                                            <option value="43"
                                                                                data-qa-id="categorylist_cat_43"
                                                                                data-reactid="178">Consoles &amp; Jeux
                                                                                vidéo</option>
                                                                            <option value="16"
                                                                                data-qa-id="categorylist_cat_16"
                                                                                data-reactid="179">Image &amp; Son
                                                                            </option>
                                                                            <option value="17"
                                                                                data-qa-id="categorylist_cat_17"
                                                                                data-reactid="180">Téléphonie</option>
                                                                            <option data-qa-id="categorylist_cat_18"
                                                                                value="18" class="_1_1B4"
                                                                                data-reactid="181">-- MAISON --</option>
                                                                            <option value="19"
                                                                                data-qa-id="categorylist_cat_19"
                                                                                data-reactid="182">Ameublement</option>
                                                                            <option value="20"
                                                                                data-qa-id="categorylist_cat_20"
                                                                                data-reactid="183">Électroménager
                                                                            </option>
                                                                            <option value="45"
                                                                                data-qa-id="categorylist_cat_45"
                                                                                data-reactid="184">Arts de la table
                                                                            </option>
                                                                            <option value="39"
                                                                                data-qa-id="categorylist_cat_39"
                                                                                data-reactid="185">Décoration</option>
                                                                            <option value="46"
                                                                                data-qa-id="categorylist_cat_46"
                                                                                data-reactid="186">Linge de maison
                                                                            </option>
                                                                            <option value="21"
                                                                                data-qa-id="categorylist_cat_21"
                                                                                data-reactid="187">Bricolage</option>
                                                                            <option value="52"
                                                                                data-qa-id="categorylist_cat_52"
                                                                                data-reactid="188">Jardinage</option>
                                                                            <option data-qa-id="categorylist_cat_72"
                                                                                value="72" class="_1_1B4"
                                                                                data-reactid="189">-- MODE --</option>
                                                                            <option value="22"
                                                                                data-qa-id="categorylist_cat_22"
                                                                                data-reactid="190">Vêtements</option>
                                                                            <option value="53"
                                                                                data-qa-id="categorylist_cat_53"
                                                                                data-reactid="191">Chaussures</option>
                                                                            <option value="47"
                                                                                data-qa-id="categorylist_cat_47"
                                                                                data-reactid="192">Accessoires &amp;
                                                                                Bagagerie</option>
                                                                            <option value="42"
                                                                                data-qa-id="categorylist_cat_42"
                                                                                data-reactid="193">Montres &amp; Bijoux
                                                                            </option>
                                                                            <option value="23"
                                                                                data-qa-id="categorylist_cat_23"
                                                                                data-reactid="194">Équipement bébé
                                                                            </option>
                                                                            <option value="54"
                                                                                data-qa-id="categorylist_cat_54"
                                                                                data-reactid="195">Vêtements bébé
                                                                            </option>
                                                                            <option
                                                                                value="https://www.videdressing.com/femme/c-c5988.html?utm_source=leboncoin.fr&amp;utm_medium=referral&amp;utm_campaign=Test4Default"
                                                                                data-reactid="196">Videdressing</option>
                                                                            <option data-qa-id="categorylist_cat_24"
                                                                                value="24" class="_1_1B4"
                                                                                data-reactid="197">-- LOISIRS --
                                                                            </option>
                                                                            <option value="25"
                                                                                data-qa-id="categorylist_cat_25"
                                                                                data-reactid="198">DVD - Films</option>
                                                                            <option value="26"
                                                                                data-qa-id="categorylist_cat_26"
                                                                                data-reactid="199">CD - Musique</option>
                                                                            <option value="27"
                                                                                data-qa-id="categorylist_cat_27"
                                                                                data-reactid="200">Livres</option>
                                                                            <option value="28"
                                                                                data-qa-id="categorylist_cat_28"
                                                                                data-reactid="201">Animaux</option>
                                                                            <option value="55"
                                                                                data-qa-id="categorylist_cat_55"
                                                                                data-reactid="202">Vélos</option>
                                                                            <option value="29"
                                                                                data-qa-id="categorylist_cat_29"
                                                                                data-reactid="203">Sports &amp; Hobbies
                                                                            </option>
                                                                            <option value="30"
                                                                                data-qa-id="categorylist_cat_30"
                                                                                data-reactid="204">Instruments de
                                                                                musique</option>
                                                                            <option value="40"
                                                                                data-qa-id="categorylist_cat_40"
                                                                                data-reactid="205">Collection</option>
                                                                            <option value="41"
                                                                                data-qa-id="categorylist_cat_41"
                                                                                data-reactid="206">Jeux &amp; Jouets
                                                                            </option>
                                                                            <option value="48"
                                                                                data-qa-id="categorylist_cat_48"
                                                                                data-reactid="207">Vins &amp;
                                                                                Gastronomie</option>
                                                                            <option data-qa-id="categorylist_cat_56"
                                                                                value="56" class="_1_1B4"
                                                                                data-reactid="208">-- MATÉRIEL
                                                                                PROFESSIONNEL --</option>
                                                                            <option value="57"
                                                                                data-qa-id="categorylist_cat_57"
                                                                                data-reactid="209">Matériel agricole
                                                                            </option>
                                                                            <option value="58"
                                                                                data-qa-id="categorylist_cat_58"
                                                                                data-reactid="210">Transport -
                                                                                Manutention</option>
                                                                            <option value="59"
                                                                                data-qa-id="categorylist_cat_59"
                                                                                data-reactid="211">BTP - Chantier
                                                                                gros-oeuvre</option>
                                                                            <option value="60"
                                                                                data-qa-id="categorylist_cat_60"
                                                                                data-reactid="212">Outillage - Matériaux
                                                                                2nd-oeuvre</option>
                                                                            <option value="32"
                                                                                data-qa-id="categorylist_cat_32"
                                                                                data-reactid="213">Équipements
                                                                                industriels</option>
                                                                            <option value="61"
                                                                                data-qa-id="categorylist_cat_61"
                                                                                data-reactid="214">Restauration -
                                                                                Hôtellerie</option>
                                                                            <option value="62"
                                                                                data-qa-id="categorylist_cat_62"
                                                                                data-reactid="215">Fournitures de bureau
                                                                            </option>
                                                                            <option value="63"
                                                                                data-qa-id="categorylist_cat_63"
                                                                                data-reactid="216">Commerces &amp;
                                                                                Marchés</option>
                                                                            <option value="64"
                                                                                data-qa-id="categorylist_cat_64"
                                                                                data-reactid="217">Matériel médical
                                                                            </option>
                                                                            <option data-qa-id="categorylist_cat_31"
                                                                                value="31" class="_1_1B4"
                                                                                data-reactid="218">-- SERVICES --
                                                                            </option>
                                                                            <option value="34"
                                                                                data-qa-id="categorylist_cat_34"
                                                                                data-reactid="219">Prestations de
                                                                                services</option>
                                                                            <option value="35"
                                                                                data-qa-id="categorylist_cat_35"
                                                                                data-reactid="220">Billetterie</option>
                                                                            <option value="49"
                                                                                data-qa-id="categorylist_cat_49"
                                                                                data-reactid="221">Évènements</option>
                                                                            <option value="36"
                                                                                data-qa-id="categorylist_cat_36"
                                                                                data-reactid="222">Cours particuliers
                                                                            </option>
                                                                            <option value="65"
                                                                                data-qa-id="categorylist_cat_65"
                                                                                data-reactid="223">Covoiturage</option>
                                                                            <option data-qa-id="categorylist_cat_37"
                                                                                value="37" class="_1_1B4"
                                                                                data-reactid="224">-- AUTRES --</option>
                                                                            <option value="38"
                                                                                data-qa-id="categorylist_cat_38"
                                                                                data-reactid="225">Autres</option>
                                                                        </select></div>
                                                                </div>
                                                            </div>
                                                            <div class="_3X-Yv" data-qa-id="select-toggle_category"
                                                                data-reactid="226">
                                                                <div class="_1etKl" data-reactid="227">
                                                                    <div class="_26tGy" data-reactid="228"><span
                                                                            class="_1vK7W _2jG3V"
                                                                            name="chevrondown"><svg viewBox="0 0 24 24"
                                                                                data-name="Calque 1" focusable="false">
                                                                                <path
                                                                                    d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                                                </path>
                                                                            </svg></span></div>
                                                                    <div class="_2gTTZ" data-reactid="230">
                                                                        <div data-reactid="231">Voitures</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="TwSJ3" data-reactid="232">
                                                <div class="_3Hx4s" data-reactid="233"><label class="WzIvr"
                                                        data-reactid="234"><input type="checkbox" id="ctitle" name="it"
                                                            data-qa-id="checkbox-title_only" data-reactid="235"
                                                            value="on"><!-- react-text: 236 -->Recherche dans le titre
                                                        uniquement
                                                        <!-- /react-text --></label><label class="WzIvr"
                                                        data-reactid="237"><input type="checkbox" id="curgent" name="ur"
                                                            data-qa-id="checkbox-urgent" data-reactid="238" value="on">
                                                        <!-- react-text: 239 -->Annonces
                                                        <!-- /react-text -->
                                                        <!-- react-text: 240 -->
                                                        <!-- /react-text --><span class="ZEqzC" data-reactid="241"><span
                                                                class="_1vK7W K5CQx" name="star"><svg
                                                                    viewBox="0 0 24 24" data-name="Calque 1"
                                                                    focusable="false">
                                                                    <path
                                                                        d="M22.66 8l-6.75-.59L13.23.87a1.35 1.35 0 0 0-2.53 0L8 7.43 1.28 8a1.55 1.55 0 0 0-.84 2.62l5.2 4.66-1.55 6.87a1.44 1.44 0 0 0 2.11 1.61l5.8-3.65 5.76 3.65a1.41 1.41 0 0 0 2.11-1.61L18.3 15.3l5.2-4.66A1.51 1.51 0 0 0 22.66 8z">
                                                                    </path>
                                                                </svg></span><!-- react-text: 243 -->Urgentes
                                                            <!-- /react-text --></span><!-- react-text: 244 -->
                                                        <!-- /react-text -->
                                                        <!-- react-text: 245 -->uniquement
                                                        <!-- /react-text --></label></div><!-- react-empty: 246 -->
                                                <div class="_2hgSM n4U50" data-reactid="247">
                                                    <div data-reactid="248">
                                                        <div class="_19T3o" data-for="select-location"
                                                            data-tip="Impossible de déterminer votre position. Veuillez réessayer ultérieurement."
                                                            data-place="bottom" data-reactid="249">
                                                            <div class="_1etKl _1eqgm" data-reactid="250">
                                                                <div class="_26tGy" data-reactid="251"><span
                                                                        class="_1vK7W _2jG3V" name="chevrondown"><svg
                                                                            viewBox="0 0 24 24" data-name="Calque 1"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                                            </path>
                                                                        </svg></span></div>
                                                                <div class="_2gTTZ" data-reactid="253"><select
                                                                        id="searcharea" autocomplete="off"
                                                                        data-qa-id="select-region_department"
                                                                        data-reactid="254">
                                                                        <option value="around_me" data-reactid="255">
                                                                            Autour de moi</option>
                                                                        <option value="current_region"
                                                                            data-reactid="256">Nord-Pas-de-Calais
                                                                        </option>
                                                                        <option value="near_region" data-reactid="257">
                                                                            Régions voisines</option>
                                                                        <option selected="" value="all"
                                                                            data-reactid="258">Toute la France</option>
                                                                        <option class="_3JrAR" disabled=""
                                                                            data-reactid="259">-- DEPARTEMENT --
                                                                        </option>
                                                                        <option value="59" data-reactid="260">Nord
                                                                        </option>
                                                                        <option value="62" data-reactid="261">
                                                                            Pas-de-Calais</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-reactid="262">
                                                        <div class="_1Uqok" data-reactid="263">
                                                            <div class="Select _1Uqok Select--multi is-searchable"
                                                                data-reactid="264">
                                                                <div class="Select-control" data-reactid="265"><span
                                                                        class="Select-multi-value-wrapper"
                                                                        id="react-select-2--value" data-reactid="266">
                                                                        <div class="Select-placeholder"
                                                                            data-reactid="267"></div>
                                                                        <div class="Select-input"
                                                                            style="display:inline-block;"
                                                                            data-reactid="268">
                                                                            <style data-reactid="269">
                                                                                input#undefined::-ms-clear {
                                                                                    display: none;
                                                                                }
                                                                            </style><input
                                                                                placeholder="Ville ou code postal"
                                                                                autocomplete="off"
                                                                                data-qa-id="input-cityzipcode"
                                                                                role="combobox" aria-expanded="false"
                                                                                aria-owns="" aria-haspopup="false"
                                                                                aria-activedescendant="react-select-2--value"
                                                                                value=""
                                                                                style="width: 110px; box-sizing: content-box;"
                                                                                data-reactid="270">
                                                                            <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 12px; font-family: OpenSans; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"
                                                                                data-reactid="271"></div>
                                                                            <div style="position: absolute; top: 0px; left: 0px; visibility: hidden; height: 0px; overflow: scroll; white-space: pre; font-size: 12px; font-family: OpenSans; font-weight: 400; font-style: normal; letter-spacing: normal; text-transform: none;"
                                                                                data-reactid="272">Ville ou code postal
                                                                            </div>
                                                                        </div>
                                                                    </span><span class="Select-arrow-zone"
                                                                        data-reactid="273"><span class="Select-arrow"
                                                                            data-reactid="274"></span></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="_3iU_B" data-reactid="275">
                                        <div class="_2bh4L trackable" data-qa-id="input-search_button"
                                            data-reactid="276"><button class="_2sNbI _1xIyN GXQkc _2xk2l"
                                                data-reactid="277">
                                                <!-- react-text: 278 -->Rechercher
                                                <!-- /react-text --></button></div>
                                        <div class="_2id4H" data-reactid="279">
                                            <div class="_19y-B" data-reactid="280">
                                                <div class="_3jAsY" data-reactid="281">
                                                    <div class="_3KcVT" data-reactid="282"><span class="_1vK7W"
                                                            name="notifoutline"><svg viewBox="0 0 24 24"
                                                                data-name="Calque 1" focusable="false">
                                                                <path
                                                                    d="M12 24a2.49 2.49 0 0 0 2.5-2.46h-5A2.48 2.48 0 0 0 12 24zM21.13 18.2l-1.62-1.58v-6.16c0-3.78-2.05-6.94-5.63-7.78v-.83a1.88 1.88 0 0 0-3.76 0v.83c-3.59.84-5.63 4-5.63 7.78v6.16L2.87 18.2a1.23 1.23 0 0 0 .88 2.11h16.49a1.23 1.23 0 0 0 .89-2.11zM17 17.85H7v-7.39c0-3.05 1.89-5.54 5-5.54s5 2.49 5 5.54z">
                                                                </path>
                                                            </svg></span></div>
                                                    <div class="_1MBDf" data-reactid="284"><span class="_3sPbC"
                                                            data-reactid="285">Sauvegarder la recherche</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <section class="_38ax3 wcucb" data-reactid="286">
                                    <div class="_3afM1" data-reactid="287">
                                        <div data-reactid="288">
                                            <div data-reactid="289"><span class="_2oGk4" data-reactid="290">Prix
                                                    entre</span>
                                                <div class="_1uP35" data-reactid="291"><select
                                                        data-qa-id="select-price_min" data-reactid="292">
                                                        <option data-reactid="293">Prix min</option>
                                                        <option value="" data-reactid="294">0</option>
                                                        <option value="250" data-reactid="295">250</option>
                                                        <option value="500" data-reactid="296">500</option>
                                                        <option value="750" data-reactid="297">750</option>
                                                        <option value="1000" data-reactid="298">1 000</option>
                                                        <option value="1500" data-reactid="299">1 500</option>
                                                        <option value="2000" data-reactid="300">2 000</option>
                                                        <option value="2500" data-reactid="301">2 500</option>
                                                        <option value="3000" data-reactid="302">3 000</option>
                                                        <option value="3500" data-reactid="303">3 500</option>
                                                        <option value="4000" data-reactid="304">4 000</option>
                                                        <option value="4500" data-reactid="305">4 500</option>
                                                        <option value="5000" data-reactid="306">5 000</option>
                                                        <option value="5500" data-reactid="307">5 500</option>
                                                        <option value="6000" data-reactid="308">6 000</option>
                                                        <option value="6500" data-reactid="309">6 500</option>
                                                        <option value="7000" data-reactid="310">7 000</option>
                                                        <option value="7500" data-reactid="311">7 500</option>
                                                        <option value="8000" data-reactid="312">8 000</option>
                                                        <option value="8500" data-reactid="313">8 500</option>
                                                        <option value="9000" data-reactid="314">9 000</option>
                                                        <option value="9500" data-reactid="315">9 500</option>
                                                        <option value="10000" data-reactid="316">10 000</option>
                                                        <option value="11000" data-reactid="317">11 000</option>
                                                        <option value="12000" data-reactid="318">12 000</option>
                                                        <option value="13000" data-reactid="319">13 000</option>
                                                        <option value="14000" data-reactid="320">14 000</option>
                                                        <option value="15000" data-reactid="321">15 000</option>
                                                        <option value="17500" data-reactid="322">17 500</option>
                                                        <option value="20000" data-reactid="323">20 000</option>
                                                        <option value="22500" data-reactid="324">22 500</option>
                                                        <option value="25000" data-reactid="325">25 000</option>
                                                        <option value="27500" data-reactid="326">27 500</option>
                                                        <option value="30000" data-reactid="327">30 000</option>
                                                        <option value="32500" data-reactid="328">32 500</option>
                                                        <option value="35000" data-reactid="329">35 000</option>
                                                        <option value="37500" data-reactid="330">37 500</option>
                                                        <option value="40000" data-reactid="331">40 000</option>
                                                        <option value="42500" data-reactid="332">42 500</option>
                                                        <option value="45000" data-reactid="333">45 000</option>
                                                        <option value="47500" data-reactid="334">47 500</option>
                                                        <option value="50000" data-reactid="335">50 000</option>
                                                    </select></div><span class="_2oGk4 XtGYX"
                                                    data-reactid="336">et</span>
                                                <div class="_1uP35" data-reactid="337"><select
                                                        data-qa-id="select-price_max" data-reactid="338">
                                                        <option data-reactid="339">Prix max</option>
                                                        <option value="250" data-reactid="340">250</option>
                                                        <option value="500" data-reactid="341">500</option>
                                                        <option value="750" data-reactid="342">750</option>
                                                        <option value="1000" data-reactid="343">1 000</option>
                                                        <option value="1500" data-reactid="344">1 500</option>
                                                        <option value="2000" data-reactid="345">2 000</option>
                                                        <option value="2500" data-reactid="346">2 500</option>
                                                        <option value="3000" data-reactid="347">3 000</option>
                                                        <option value="3500" data-reactid="348">3 500</option>
                                                        <option value="4000" data-reactid="349">4 000</option>
                                                        <option value="4500" data-reactid="350">4 500</option>
                                                        <option value="5000" data-reactid="351">5 000</option>
                                                        <option value="5500" data-reactid="352">5 500</option>
                                                        <option value="6000" data-reactid="353">6 000</option>
                                                        <option value="6500" data-reactid="354">6 500</option>
                                                        <option value="7000" data-reactid="355">7 000</option>
                                                        <option value="7500" data-reactid="356">7 500</option>
                                                        <option value="8000" data-reactid="357">8 000</option>
                                                        <option value="8500" data-reactid="358">8 500</option>
                                                        <option value="9000" data-reactid="359">9 000</option>
                                                        <option value="9500" data-reactid="360">9 500</option>
                                                        <option value="10000" data-reactid="361">10 000</option>
                                                        <option value="11000" data-reactid="362">11 000</option>
                                                        <option value="12000" data-reactid="363">12 000</option>
                                                        <option value="13000" data-reactid="364">13 000</option>
                                                        <option value="14000" data-reactid="365">14 000</option>
                                                        <option value="15000" data-reactid="366">15 000</option>
                                                        <option value="17500" data-reactid="367">17 500</option>
                                                        <option value="20000" data-reactid="368">20 000</option>
                                                        <option value="22500" data-reactid="369">22 500</option>
                                                        <option value="25000" data-reactid="370">25 000</option>
                                                        <option value="27500" data-reactid="371">27 500</option>
                                                        <option value="30000" data-reactid="372">30 000</option>
                                                        <option value="32500" data-reactid="373">32 500</option>
                                                        <option value="35000" data-reactid="374">35 000</option>
                                                        <option value="37500" data-reactid="375">37 500</option>
                                                        <option value="40000" data-reactid="376">40 000</option>
                                                        <option value="42500" data-reactid="377">42 500</option>
                                                        <option value="45000" data-reactid="378">45 000</option>
                                                        <option value="47500" data-reactid="379">47 500</option>
                                                        <option value="50000" data-reactid="380">50 000</option>
                                                        <option value="" data-reactid="381">Plus de 50 000</option>
                                                    </select></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_3afM1" data-reactid="382">
                                        <div data-reactid="383">
                                            <div data-reactid="384"><span class="_2oGk4" data-reactid="385">Année
                                                    entre</span>
                                                <div class="_1uP35" data-reactid="386"><select
                                                        data-qa-id="select-regdate_min" data-reactid="387">
                                                        <option data-reactid="388">Année min</option>
                                                        <option value="2019" data-reactid="389">2019</option>
                                                        <option value="2018" data-reactid="390">2018</option>
                                                        <option value="2017" data-reactid="391">2017</option>
                                                        <option value="2016" data-reactid="392">2016</option>
                                                        <option value="2015" data-reactid="393">2015</option>
                                                        <option value="2014" data-reactid="394">2014</option>
                                                        <option value="2013" data-reactid="395">2013</option>
                                                        <option value="2012" data-reactid="396">2012</option>
                                                        <option value="2011" data-reactid="397">2011</option>
                                                        <option value="2010" data-reactid="398">2010</option>
                                                        <option value="2009" data-reactid="399">2009</option>
                                                        <option value="2008" data-reactid="400">2008</option>
                                                        <option value="2007" data-reactid="401">2007</option>
                                                        <option value="2006" data-reactid="402">2006</option>
                                                        <option value="2005" data-reactid="403">2005</option>
                                                        <option value="2004" data-reactid="404">2004</option>
                                                        <option value="2003" data-reactid="405">2003</option>
                                                        <option value="2002" data-reactid="406">2002</option>
                                                        <option value="2001" data-reactid="407">2001</option>
                                                        <option value="2000" data-reactid="408">2000</option>
                                                        <option value="1999" data-reactid="409">1999</option>
                                                        <option value="1998" data-reactid="410">1998</option>
                                                        <option value="1997" data-reactid="411">1997</option>
                                                        <option value="1996" data-reactid="412">1996</option>
                                                        <option value="1995" data-reactid="413">1995</option>
                                                        <option value="1994" data-reactid="414">1994</option>
                                                        <option value="1993" data-reactid="415">1993</option>
                                                        <option value="1992" data-reactid="416">1992</option>
                                                        <option value="1991" data-reactid="417">1991</option>
                                                        <option value="1990" data-reactid="418">1990</option>
                                                        <option value="1989" data-reactid="419">1989</option>
                                                        <option value="1988" data-reactid="420">1988</option>
                                                        <option value="1987" data-reactid="421">1987</option>
                                                        <option value="1986" data-reactid="422">1986</option>
                                                        <option value="1985" data-reactid="423">1985</option>
                                                        <option value="1984" data-reactid="424">1984</option>
                                                        <option value="1983" data-reactid="425">1983</option>
                                                        <option value="1982" data-reactid="426">1982</option>
                                                        <option value="1981" data-reactid="427">1981</option>
                                                        <option value="1980" data-reactid="428">1980</option>
                                                        <option value="1979" data-reactid="429">1979</option>
                                                        <option value="1978" data-reactid="430">1978</option>
                                                        <option value="1977" data-reactid="431">1977</option>
                                                        <option value="1976" data-reactid="432">1976</option>
                                                        <option value="1975" data-reactid="433">1975</option>
                                                        <option value="1974" data-reactid="434">1974</option>
                                                        <option value="1973" data-reactid="435">1973</option>
                                                        <option value="1972" data-reactid="436">1972</option>
                                                        <option value="1971" data-reactid="437">1971</option>
                                                        <option value="1970" data-reactid="438">1970</option>
                                                        <option value="1969" data-reactid="439">1969</option>
                                                        <option value="1968" data-reactid="440">1968</option>
                                                        <option value="1967" data-reactid="441">1967</option>
                                                        <option value="1966" data-reactid="442">1966</option>
                                                        <option value="1965" data-reactid="443">1965</option>
                                                        <option value="1964" data-reactid="444">1964</option>
                                                        <option value="1963" data-reactid="445">1963</option>
                                                        <option value="1962" data-reactid="446">1962</option>
                                                        <option value="1961" data-reactid="447">1961</option>
                                                        <option value="1960" data-reactid="448">1960 ou avant</option>
                                                    </select></div><span class="_2oGk4 XtGYX"
                                                    data-reactid="449">et</span>
                                                <div class="_1uP35" data-reactid="450"><select
                                                        data-qa-id="select-regdate_max" data-reactid="451">
                                                        <option data-reactid="452">Année max</option>
                                                        <option value="2019" data-reactid="453">2019</option>
                                                        <option value="2018" data-reactid="454">2018</option>
                                                        <option value="2017" data-reactid="455">2017</option>
                                                        <option value="2016" data-reactid="456">2016</option>
                                                        <option value="2015" data-reactid="457">2015</option>
                                                        <option value="2014" data-reactid="458">2014</option>
                                                        <option value="2013" data-reactid="459">2013</option>
                                                        <option value="2012" data-reactid="460">2012</option>
                                                        <option value="2011" data-reactid="461">2011</option>
                                                        <option value="2010" data-reactid="462">2010</option>
                                                        <option value="2009" data-reactid="463">2009</option>
                                                        <option value="2008" data-reactid="464">2008</option>
                                                        <option value="2007" data-reactid="465">2007</option>
                                                        <option value="2006" data-reactid="466">2006</option>
                                                        <option value="2005" data-reactid="467">2005</option>
                                                        <option value="2004" data-reactid="468">2004</option>
                                                        <option value="2003" data-reactid="469">2003</option>
                                                        <option value="2002" data-reactid="470">2002</option>
                                                        <option value="2001" data-reactid="471">2001</option>
                                                        <option value="2000" data-reactid="472">2000</option>
                                                        <option value="1999" data-reactid="473">1999</option>
                                                        <option value="1998" data-reactid="474">1998</option>
                                                        <option value="1997" data-reactid="475">1997</option>
                                                        <option value="1996" data-reactid="476">1996</option>
                                                        <option value="1995" data-reactid="477">1995</option>
                                                        <option value="1994" data-reactid="478">1994</option>
                                                        <option value="1993" data-reactid="479">1993</option>
                                                        <option value="1992" data-reactid="480">1992</option>
                                                        <option value="1991" data-reactid="481">1991</option>
                                                        <option value="1990" data-reactid="482">1990</option>
                                                        <option value="1989" data-reactid="483">1989</option>
                                                        <option value="1988" data-reactid="484">1988</option>
                                                        <option value="1987" data-reactid="485">1987</option>
                                                        <option value="1986" data-reactid="486">1986</option>
                                                        <option value="1985" data-reactid="487">1985</option>
                                                        <option value="1984" data-reactid="488">1984</option>
                                                        <option value="1983" data-reactid="489">1983</option>
                                                        <option value="1982" data-reactid="490">1982</option>
                                                        <option value="1981" data-reactid="491">1981</option>
                                                        <option value="1980" data-reactid="492">1980</option>
                                                        <option value="1979" data-reactid="493">1979</option>
                                                        <option value="1978" data-reactid="494">1978</option>
                                                        <option value="1977" data-reactid="495">1977</option>
                                                        <option value="1976" data-reactid="496">1976</option>
                                                        <option value="1975" data-reactid="497">1975</option>
                                                        <option value="1974" data-reactid="498">1974</option>
                                                        <option value="1973" data-reactid="499">1973</option>
                                                        <option value="1972" data-reactid="500">1972</option>
                                                        <option value="1971" data-reactid="501">1971</option>
                                                        <option value="1970" data-reactid="502">1970</option>
                                                        <option value="1969" data-reactid="503">1969</option>
                                                        <option value="1968" data-reactid="504">1968</option>
                                                        <option value="1967" data-reactid="505">1967</option>
                                                        <option value="1966" data-reactid="506">1966</option>
                                                        <option value="1965" data-reactid="507">1965</option>
                                                        <option value="1964" data-reactid="508">1964</option>
                                                        <option value="1963" data-reactid="509">1963</option>
                                                        <option value="1962" data-reactid="510">1962</option>
                                                        <option value="1961" data-reactid="511">1961</option>
                                                        <option value="1960" data-reactid="512">1960</option>
                                                    </select></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_3afM1" data-reactid="513">
                                        <div data-reactid="514">
                                            <div data-reactid="515"><span class="_2oGk4"
                                                    data-reactid="516">Kilomètres</span>
                                                <div class="_1uP35" data-reactid="517"><select
                                                        data-qa-id="select-mileage_min" data-reactid="518">
                                                        <option data-reactid="519">Kilomètres min</option>
                                                        <option value="" data-reactid="520">0</option>
                                                        <option value="10000" data-reactid="521">10 000</option>
                                                        <option value="20000" data-reactid="522">20 000</option>
                                                        <option value="30000" data-reactid="523">30 000</option>
                                                        <option value="40000" data-reactid="524">40 000</option>
                                                        <option value="50000" data-reactid="525">50 000</option>
                                                        <option value="60000" data-reactid="526">60 000</option>
                                                        <option value="70000" data-reactid="527">70 000</option>
                                                        <option value="80000" data-reactid="528">80 000</option>
                                                        <option value="90000" data-reactid="529">90 000</option>
                                                        <option value="100000" data-reactid="530">100 000</option>
                                                        <option value="125000" data-reactid="531">125 000</option>
                                                        <option value="150000" data-reactid="532">150 000</option>
                                                        <option value="175000" data-reactid="533">175 000</option>
                                                        <option value="200000" data-reactid="534">200 000</option>
                                                        <option value="225000" data-reactid="535">225 000</option>
                                                        <option value="250000" data-reactid="536">250 000</option>
                                                    </select></div><span class="_2oGk4 XtGYX"
                                                    data-reactid="537">et</span>
                                                <div class="_1uP35" data-reactid="538"><select
                                                        data-qa-id="select-mileage_max" data-reactid="539">
                                                        <option data-reactid="540">Kilomètres max</option>
                                                        <option value="10000" data-reactid="541">10 000</option>
                                                        <option value="20000" data-reactid="542">20 000</option>
                                                        <option value="30000" data-reactid="543">30 000</option>
                                                        <option value="40000" data-reactid="544">40 000</option>
                                                        <option value="50000" data-reactid="545">50 000</option>
                                                        <option value="60000" data-reactid="546">60 000</option>
                                                        <option value="70000" data-reactid="547">70 000</option>
                                                        <option value="80000" data-reactid="548">80 000</option>
                                                        <option value="90000" data-reactid="549">90 000</option>
                                                        <option value="100000" data-reactid="550">100 000</option>
                                                        <option value="125000" data-reactid="551">125 000</option>
                                                        <option value="150000" data-reactid="552">150 000</option>
                                                        <option value="175000" data-reactid="553">175 000</option>
                                                        <option value="200000" data-reactid="554">200 000</option>
                                                        <option value="225000" data-reactid="555">225 000</option>
                                                        <option value="250000" data-reactid="556">250 000</option>
                                                        <option value="" data-reactid="557">Plus de 250 000</option>
                                                    </select></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_2ZcGP Aus1f" data-reactid="558">
                                        <div data-reactid="559">
                                            <div class="_3zYIQ" data-reactid="560"><select data-qa-id="select-brand"
                                                    data-reactid="561">
                                                    <option selected="" value="" data-reactid="562">Marque</option>
                                                    <option value="Audi" data-reactid="563">Audi</option>
                                                    <option value="Bmw" data-reactid="564">Bmw</option>
                                                    <option value="Citroen" data-reactid="565">Citroen</option>
                                                    <option value="Fiat" data-reactid="566">Fiat</option>
                                                    <option value="Ford" data-reactid="567">Ford</option>
                                                    <option value="Mercedes" data-reactid="568">Mercedes</option>
                                                    <option value="Opel" data-reactid="569">Opel</option>
                                                    <option value="Peugeot" data-reactid="570">Peugeot</option>
                                                    <option value="Renault" data-reactid="571">Renault</option>
                                                    <option value="Volkswagen" data-reactid="572">Volkswagen</option>
                                                    <option value="Abarth" data-reactid="573">Abarth</option>
                                                    <option value="Aleko" data-reactid="574">Aleko</option>
                                                    <option value="Alfa Romeo" data-reactid="575">Alfa Romeo</option>
                                                    <option value="Alpina" data-reactid="576">Alpina</option>
                                                    <option value="Aro" data-reactid="577">Aro</option>
                                                    <option value="Artega" data-reactid="578">Artega</option>
                                                    <option value="Aston Martin" data-reactid="579">Aston Martin
                                                    </option>
                                                    <option value="Autobianchi" data-reactid="580">Autobianchi</option>
                                                    <option value="Auverland" data-reactid="581">Auverland</option>
                                                    <option value="Bentley" data-reactid="582">Bentley</option>
                                                    <option value="Bertone" data-reactid="583">Bertone</option>
                                                    <option value="Bluecar Groupe Bollore" data-reactid="584">Bluecar
                                                        Groupe Bollore</option>
                                                    <option value="Buick" data-reactid="585">Buick</option>
                                                    <option value="Cadillac" data-reactid="586">Cadillac</option>
                                                    <option value="Chevrolet" data-reactid="587">Chevrolet</option>
                                                    <option value="Chrysler" data-reactid="588">Chrysler</option>
                                                    <option value="Corvette" data-reactid="589">Corvette</option>
                                                    <option value="Dacia" data-reactid="590">Dacia</option>
                                                    <option value="Daewoo" data-reactid="591">Daewoo</option>
                                                    <option value="Daihatsu" data-reactid="592">Daihatsu</option>
                                                    <option value="Dangel" data-reactid="593">Dangel</option>
                                                    <option value="De La Chapelle" data-reactid="594">De La Chapelle
                                                    </option>
                                                    <option value="Dodge" data-reactid="595">Dodge</option>
                                                    <option value="Donkervoort" data-reactid="596">Donkervoort</option>
                                                    <option value="Dr" data-reactid="597">Dr</option>
                                                    <option value="Ds" data-reactid="598">Ds</option>
                                                    <option value="Ferrari" data-reactid="599">Ferrari</option>
                                                    <option value="Fisker" data-reactid="600">Fisker</option>
                                                    <option value="Gme" data-reactid="601">Gme</option>
                                                    <option value="Honda" data-reactid="602">Honda</option>
                                                    <option value="Hummer" data-reactid="603">Hummer</option>
                                                    <option value="Hyundai" data-reactid="604">Hyundai</option>
                                                    <option value="Infiniti" data-reactid="605">Infiniti</option>
                                                    <option value="Innocenti" data-reactid="606">Innocenti</option>
                                                    <option value="Isuzu" data-reactid="607">Isuzu</option>
                                                    <option value="Iveco" data-reactid="608">Iveco</option>
                                                    <option value="Jaguar" data-reactid="609">Jaguar</option>
                                                    <option value="Jeep" data-reactid="610">Jeep</option>
                                                    <option value="Kia" data-reactid="611">Kia</option>
                                                    <option value="Lada" data-reactid="612">Lada</option>
                                                    <option value="Lamborghini" data-reactid="613">Lamborghini</option>
                                                    <option value="Lancia" data-reactid="614">Lancia</option>
                                                    <option value="Land Rover" data-reactid="615">Land Rover</option>
                                                    <option value="Lexus" data-reactid="616">Lexus</option>
                                                    <option value="Lotus" data-reactid="617">Lotus</option>
                                                    <option value="Mahindra" data-reactid="618">Mahindra</option>
                                                    <option value="Maruti" data-reactid="619">Maruti</option>
                                                    <option value="Maserati" data-reactid="620">Maserati</option>
                                                    <option value="Mastretta" data-reactid="621">Mastretta</option>
                                                    <option value="Maybach" data-reactid="622">Maybach</option>
                                                    <option value="Mazda" data-reactid="623">Mazda</option>
                                                    <option value="Mclaren" data-reactid="624">Mclaren</option>
                                                    <option value="Mega" data-reactid="625">Mega</option>
                                                    <option value="Mg" data-reactid="626">Mg</option>
                                                    <option value="Mia" data-reactid="627">Mia</option>
                                                    <option value="Mini" data-reactid="628">Mini</option>
                                                    <option value="Mitsubishi" data-reactid="629">Mitsubishi</option>
                                                    <option value="Morgan" data-reactid="630">Morgan</option>
                                                    <option value="Nissan" data-reactid="631">Nissan</option>
                                                    <option value="Pgo" data-reactid="632">Pgo</option>
                                                    <option value="Piaggio" data-reactid="633">Piaggio</option>
                                                    <option value="Polski/fso" data-reactid="634">Polski/fso</option>
                                                    <option value="Pontiac" data-reactid="635">Pontiac</option>
                                                    <option value="Porsche" data-reactid="636">Porsche</option>
                                                    <option value="Proton" data-reactid="637">Proton</option>
                                                    <option value="Rolls-royce" data-reactid="638">Rolls-royce</option>
                                                    <option value="Rover" data-reactid="639">Rover</option>
                                                    <option value="Saab" data-reactid="640">Saab</option>
                                                    <option value="Santana" data-reactid="641">Santana</option>
                                                    <option value="Seat" data-reactid="642">Seat</option>
                                                    <option value="Shuanghuan" data-reactid="643">Shuanghuan</option>
                                                    <option value="Skoda" data-reactid="644">Skoda</option>
                                                    <option value="Smart" data-reactid="645">Smart</option>
                                                    <option value="Ssangyong" data-reactid="646">Ssangyong</option>
                                                    <option value="Subaru" data-reactid="647">Subaru</option>
                                                    <option value="Suzuki" data-reactid="648">Suzuki</option>
                                                    <option value="Talbot" data-reactid="649">Talbot</option>
                                                    <option value="Tavria" data-reactid="650">Tavria</option>
                                                    <option value="Tesla" data-reactid="651">Tesla</option>
                                                    <option value="Toyota" data-reactid="652">Toyota</option>
                                                    <option value="Tvr" data-reactid="653">Tvr</option>
                                                    <option value="Venturi" data-reactid="654">Venturi</option>
                                                    <option value="Volvo" data-reactid="655">Volvo</option>
                                                    <option value="Autres" data-reactid="656">Autres</option>
                                                </select></div>
                                        </div>
                                    </div>
                                    <div class="_2ZcGP Aus1f _3AAP_ _340cw" data-reactid="657">
                                        <div data-reactid="658">
                                            <div class="_3zYIQ Aglkr" data-reactid="659"><select disabled=""
                                                    data-qa-id="select-model" data-reactid="660">
                                                    <option selected="" value="" data-reactid="661">Modèle</option>
                                                </select></div>
                                        </div>
                                    </div>
                                    <div class="_2ZcGP Aus1f" data-reactid="662">
                                        <div data-reactid="663">
                                            <div class="_3zYIQ" data-reactid="664"><select data-qa-id="select-fuel"
                                                    data-reactid="665">
                                                    <option selected="" value="" data-reactid="666">Energie</option>
                                                    <option value="1" data-reactid="667">Essence</option>
                                                    <option value="2" data-reactid="668">Diesel</option>
                                                    <option value="3" data-reactid="669">GPL</option>
                                                    <option value="4" data-reactid="670">Electrique</option>
                                                    <option value="5" data-reactid="671">Autre</option>
                                                    <option value="6" data-reactid="672">Hybride</option>
                                                </select></div>
                                        </div>
                                    </div>
                                    <div class="_2ZcGP Aus1f _3AAP_ _340cw" data-reactid="673">
                                        <div data-reactid="674">
                                            <div class="_3zYIQ" data-reactid="675"><select data-qa-id="select-gearbox"
                                                    data-reactid="676">
                                                    <option selected="" value="" data-reactid="677">Boîte de vitesse
                                                    </option>
                                                    <option value="1" data-reactid="678">Manuelle</option>
                                                    <option value="2" data-reactid="679">Automatique</option>
                                                </select></div>
                                        </div>
                                    </div>
                                    <div class="_2ZcGP Aus1f" data-reactid="680">
                                        <div data-reactid="681">
                                            <div class="_3zYIQ" data-reactid="682"><select
                                                    data-qa-id="select-vehicle_vsp" data-reactid="683">
                                                    <option selected="" value="" data-reactid="684">Permis</option>
                                                    <option value="avecpermis" data-reactid="685">Avec permis</option>
                                                    <option value="sanspermis" data-reactid="686">Sans permis</option>
                                                </select></div>
                                        </div>
                                    </div>
                                </section><!-- react-empty: 687 -->
                            </form>
                        </div>
                    </div>
                    <div class="apn-hbl apn-hb"><span id="hbl-s" class="teal-apn"></span></div>
                    <div class="l17WS bgMain" data-reactid="689">
                        <div data-reactid="690">
                            <div class="_36eyL" data-reactid="691">
                                <h1 data-reactid="692">Annonces Voitures occasion&nbsp;: Toute la France</h1>
                            </div>
                            <div class="apn-lt" data-reactid="693"><span id="lt-l" class="teal-apn"
                                    data-reactid="694"></span><span id="lt-xl" class="teal-apn"
                                    data-reactid="695"></span></div>
                            <div class="apn-b" data-reactid="696"><span id="b1-s" class="teal-apn"
                                    data-reactid="697"></span><span id="b1-m" class="teal-apn"
                                    data-reactid="698"></span><span id="b2-m" class="teal-apn"
                                    data-reactid="699"></span><span id="b1-l" class="teal-apn"
                                    data-reactid="700"></span><span id="b2-l" class="teal-apn"
                                    data-reactid="701"></span><span id="b3-l" class="teal-apn"
                                    data-reactid="702"></span><span id="b1-xl" class="teal-apn"
                                    data-reactid="703"></span><span id="b2-xl" class="teal-apn"
                                    data-reactid="704"></span><span id="b3-xl" class="teal-apn"
                                    data-reactid="705"></span><span id="b4-xl" class="teal-apn"
                                    data-reactid="706"></span>
                                <div style="clear:both;" data-reactid="707"></div>
                            </div>
                            <div class="apn-mb" data-reactid="708"><span id="mb-s" class="teal-apn"
                                    data-reactid="709"></span><span id="mb-m" class="teal-apn"
                                    data-reactid="710"></span><span id="mb-l" class="teal-apn"
                                    data-reactid="711"></span><span id="mb-xl" class="teal-apn"
                                    data-reactid="712"></span></div>
                            <div class="apn-lt" data-reactid="713"><span id="lt-s" class="teal-apn"
                                    data-reactid="714"></span><span id="lt-m" class="teal-apn"
                                    data-reactid="715"></span></div>
                            <div class="_2Njaz _3GLp9" data-reactid="716">
                                <div class="_358dQ" data-reactid="717">
                                    <div class="_2r1q3" data-reactid="718">
                                        <div data-reactid="719">
                                            <div class="_1uEY7" data-reactid="720">
                                                <p data-reactid="721"><span class="_2ilNG" data-reactid="722">824
                                                        928</span><!-- react-text: 723 --> Annonce
                                                    <!-- /react-text -->
                                                    <!-- react-text: 724 -->s
                                                    <!-- /react-text -->
                                                </p>
                                                <div data-reactid="725"><input type="checkbox" name="adlist_filter"
                                                        data-qa-id="result_part" id="result_part" value="private"
                                                        data-reactid="726" checked=""><label for="result_part"
                                                        data-reactid="727">
                                                        <!-- react-text: 728 -->Particuliers
                                                        <!-- /react-text --><span data-reactid="729"><span
                                                                class="_2ilNG" data-reactid="730">381
                                                                395</span></span></label></div>
                                                <div data-reactid="731"><input type="checkbox" name="adlist_filter"
                                                        data-qa-id="result_pro" id="result_pro" value="pro"
                                                        data-reactid="732" checked=""><label for="result_pro"
                                                        data-reactid="733">
                                                        <!-- react-text: 734 -->Professionnels
                                                        <!-- /react-text --><span data-reactid="735"><span
                                                                class="_2ilNG" data-reactid="736">443
                                                                533</span></span></label></div>
                                                <div class="selectWrapper" data-reactid="737"><select class="select"
                                                        data-reactid="738">
                                                        <option selected="" value="time-desc" data-reactid="739">Tri :
                                                            Plus récentes</option>
                                                        <option value="time-asc" data-reactid="740">Tri : Plus anciennes
                                                        </option>
                                                        <option value="price-asc" data-reactid="741">Tri : Prix
                                                            croissants</option>
                                                        <option value="price-desc" data-reactid="742">Tri : Prix
                                                            décroissants</option>
                                                    </select></div>
                                            </div>
                                            <div data-reactid="743">
                                                <ul class="undefined" data-reactid="744">
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="745">
                                                        <div data-reactid="746">
                                                            <div data-reactid="747">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="748">
                                                                    <div data-reactid="749">
                                                                        <div class="_3C4to" data-reactid="750">
                                                                            <div class="_3xQS8" data-reactid="751"><span
                                                                                    class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="753"></div>
                                                        </div><a title="Peugeot 308 GTI 1.6 THP 270 CV"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1632598019.htm/" data-reactid="754">
                                                            <div class="_3dPxM" data-reactid="755"><span class="_a3cT"
                                                                    data-reactid="756">
                                                                    <div class="LazyLoad is-visible" data-reactid="757">
                                                                        <img class=""
                                                                            src="https://img4.leboncoin.fr/ad-image/a6b11eb4755fbd0baa2fc2f464e5e0415f19685e.jpg"
                                                                            itemprop="image"
                                                                            content="https://img4.leboncoin.fr/ad-image/a6b11eb4755fbd0baa2fc2f464e5e0415f19685e.jpg"
                                                                            alt="Peugeot 308 GTI 1.6 THP 270 CV"></div>
                                                                </span><span class="_2lY3w" data-reactid="758"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="760">10</span></span></div>
                                                            <section class="_2EDA9" data-reactid="761">
                                                                <div data-reactid="762">
                                                                    <p class="_2tubl" data-reactid="763"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="764">Peugeot 308 GTI 1.6 THP
                                                                            270 CV</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="765">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="766"><span class="_1JRvz"
                                                                            data-reactid="767"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="768">
                                                                                <!-- react-text: 769 -->25 990
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 770 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="771">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="772"><span class="_1HeL0"
                                                                            data-reactid="773">(Pro)&nbsp;</span>
                                                                        <!-- react-text: 774 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location" data-reactid="775">
                                                                        Danjoutin 90400</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16" data-reactid="776">
                                                                        Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="777">
                                                            <div data-reactid="778"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_0" data-id="tooltip" data-reactid="779">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="780">
                                                        <div data-reactid="781">
                                                            <div data-reactid="782">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="783">
                                                                    <div data-reactid="784">
                                                                        <div class="_3C4to" data-reactid="785">
                                                                            <div class="_3F04q _3xQS8 _1fVXX"
                                                                                data-reactid="786"><span class="_1vK7W"
                                                                                    name="heart"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.88 6.88 0 0 0 0 7.58c-.15 4.84 4 8.72 10.26 14.64l.13.12a2.32 2.32 0 0 0 3.23 0l.12-.12C20 16.3 24.16 12.42 24 7.58a6.88 6.88 0 0 0-2.81-5.34z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="788"></div>
                                                        </div><a title="Karman ghia patina T14 de 1963"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1634611773.htm/" data-reactid="789">
                                                            <div class="_3dPxM" data-reactid="790"><span class="_a3cT"
                                                                    data-reactid="791">
                                                                    <div class="LazyLoad is-visible" data-reactid="792">
                                                                        <img class=""
                                                                            src="https://img5.leboncoin.fr/ad-image/cfb47c22cd9fa24eea87402b0c467656e7e03469.jpg"
                                                                            itemprop="image"
                                                                            content="https://img5.leboncoin.fr/ad-image/cfb47c22cd9fa24eea87402b0c467656e7e03469.jpg"
                                                                            alt="Karman ghia patina T14 de 1963"></div>
                                                                </span><span class="_2lY3w" data-reactid="793"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="795">3</span></span></div>
                                                            <section class="_2EDA9" data-reactid="796">
                                                                <div data-reactid="797">
                                                                    <p class="_2tubl" data-reactid="798"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="799">Karman ghia patina T14 de
                                                                            1963</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="800">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="801"><span class="_1JRvz"
                                                                            data-reactid="802"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="803">
                                                                                <!-- react-text: 804 -->19 500
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 805 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="806">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="807">
                                                                        <!-- react-text: 808 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location" data-reactid="809">
                                                                        Cognac 16100</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16" data-reactid="810">
                                                                        Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="811">
                                                            <div data-reactid="812"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_1" data-id="tooltip" data-reactid="813">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="814">
                                                        <div data-reactid="815">
                                                            <div data-reactid="816">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="817">
                                                                    <div data-reactid="818">
                                                                        <div class="_3C4to" data-reactid="819">
                                                                            <div class="_3xQS8" data-reactid="820"><span
                                                                                    class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.88 6.88 0 0 0 0 7.58c-.15 4.84 4 8.72 10.26 14.64l.13.12a2.32 2.32 0 0 0 3.23 0l.12-.12C20 16.3 24.16 12.42 24 7.58a6.88 6.88 0 0 0-2.81-5.34z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="822"></div>
                                                        </div><a title="Volkwagen lupo 2003" class="clearfix trackable"
                                                            rel="nofollow" href="/voitures/1634611437.htm/"
                                                            data-reactid="823">
                                                            <div class="_3dPxM" data-reactid="824"><span class="_a3cT"
                                                                    data-reactid="825">
                                                                    <div class="LazyLoad is-visible" data-reactid="826">
                                                                        <img class=""
                                                                            src="https://img7.leboncoin.fr/ad-image/635ae8efc83977387e83273074864a21b2a993b3.jpg"
                                                                            itemprop="image"
                                                                            content="https://img7.leboncoin.fr/ad-image/635ae8efc83977387e83273074864a21b2a993b3.jpg"
                                                                            alt="Volkwagen lupo 2003"></div>
                                                                </span><span class="_2lY3w" data-reactid="827"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="829">3</span></span></div>
                                                            <section class="_2EDA9" data-reactid="830">
                                                                <div data-reactid="831">
                                                                    <p class="_2tubl" data-reactid="832"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="833">Volkwagen lupo
                                                                            2003</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="834">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="835"><span class="_1JRvz"
                                                                            data-reactid="836"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="837">
                                                                                <!-- react-text: 838 -->1 900
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 839 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="840">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="841">
                                                                        <!-- react-text: 842 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location" data-reactid="843">
                                                                        Gisors 27140</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16" data-reactid="844">
                                                                        Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="845">
                                                            <div data-reactid="846"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_2" data-id="tooltip" data-reactid="847">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="848">
                                                        <div data-reactid="849">
                                                            <div data-reactid="850">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="851">
                                                                    <div data-reactid="852">
                                                                        <div class="_3C4to" data-reactid="853">
                                                                            <div class="_3xQS8" data-reactid="854"><span
                                                                                    class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="856"></div>
                                                        </div><a title="Kangoo 1.9d 65cv long"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1634611780.htm/" data-reactid="857">
                                                            <div class="_3dPxM" data-reactid="858"><span class="_a3cT"
                                                                    data-reactid="859">
                                                                    <div class="LazyLoad is-visible" data-reactid="860">
                                                                        <img class=""
                                                                            src="https://img4.leboncoin.fr/ad-image/cebbaf671888bbb1c58a356ba15aea055937a887.jpg"
                                                                            itemprop="image"
                                                                            content="https://img4.leboncoin.fr/ad-image/cebbaf671888bbb1c58a356ba15aea055937a887.jpg"
                                                                            alt="Kangoo 1.9d 65cv long"></div>
                                                                </span><span class="_2lY3w" data-reactid="861"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="863">3</span></span></div>
                                                            <section class="_2EDA9" data-reactid="864">
                                                                <div data-reactid="865">
                                                                    <p class="_2tubl" data-reactid="866"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="867">Kangoo 1.9d 65cv
                                                                            long</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="868">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="869"><span class="_1JRvz"
                                                                            data-reactid="870"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="871">
                                                                                <!-- react-text: 872 -->2 500
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 873 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="874">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="875">
                                                                        <!-- react-text: 876 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location" data-reactid="877">
                                                                        Cernay 68700</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16" data-reactid="878">
                                                                        Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="879">
                                                            <div data-reactid="880"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_3" data-id="tooltip" data-reactid="881">
                                                        </div>
                                                    </li>
                                                    <li data-reactid="882">
                                                        <div class="apn-na" data-reactid="883"><span id="na1-s"
                                                                class="teal-apn" data-reactid="884"></span><span
                                                                id="na1-m" class="teal-apn"
                                                                data-reactid="885"></span><span id="na1-l"
                                                                class="teal-apn" data-reactid="886"></span><span
                                                                id="na1-xl" class="teal-apn"
                                                                data-reactid="887"></span><span id="na3-s"
                                                                class="teal-apn" data-reactid="888"></span><span
                                                                id="na3-m" class="teal-apn"
                                                                data-reactid="889"></span><span id="na3-l"
                                                                class="teal-apn" data-reactid="890"></span><span
                                                                id="na3-xl" class="teal-apn" data-reactid="891"></span>
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="892">
                                                        <div data-reactid="893">
                                                            <div data-reactid="894">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="895">
                                                                    <div data-reactid="896">
                                                                        <div class="_3C4to" data-reactid="897">
                                                                            <div class="_3xQS8" data-reactid="898"><span
                                                                                    class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="900"></div>
                                                        </div><a title="807 HDi 2l 107 CV" class="clearfix trackable"
                                                            rel="nofollow" href="/voitures/1634611800.htm/"
                                                            data-reactid="901">
                                                            <div class="_3dPxM" data-reactid="902"><span class="_a3cT"
                                                                    data-reactid="903">
                                                                    <div class="LazyLoad is-visible" data-reactid="904">
                                                                        <img class=""
                                                                            src="https://img2.leboncoin.fr/ad-image/65ef4b80090733963b867e2124f2d2c25c723974.jpg"
                                                                            itemprop="image"
                                                                            content="https://img2.leboncoin.fr/ad-image/65ef4b80090733963b867e2124f2d2c25c723974.jpg"
                                                                            alt="807 HDi 2l 107 CV"></div>
                                                                </span><span class="_2lY3w" data-reactid="905"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="907">3</span></span></div>
                                                            <section class="_2EDA9" data-reactid="908">
                                                                <div data-reactid="909">
                                                                    <p class="_2tubl" data-reactid="910"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="911">807 HDi 2l 107 CV</span>
                                                                    </p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="912">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="913"><span class="_1JRvz"
                                                                            data-reactid="914"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="915">
                                                                                <!-- react-text: 916 -->850
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 917 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="918">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="919">
                                                                        <!-- react-text: 920 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location" data-reactid="921">
                                                                        Pau 64000</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16" data-reactid="922">
                                                                        Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="923">
                                                            <div data-reactid="924"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_4" data-id="tooltip" data-reactid="925">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="926">
                                                        <div data-reactid="927">
                                                            <div data-reactid="928">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="929">
                                                                    <div data-reactid="930">
                                                                        <div class="_3C4to" data-reactid="931">
                                                                            <div class="_3xQS8" data-reactid="932"><span
                                                                                    class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="934"></div>
                                                        </div><a title="Bmw 320d cabriolet" class="clearfix trackable"
                                                            rel="nofollow" href="/voitures/1634611547.htm/"
                                                            data-reactid="935">
                                                            <div class="_3dPxM" data-reactid="936"><span class="_a3cT"
                                                                    data-reactid="937">
                                                                    <div class="LazyLoad is-visible" data-reactid="938">
                                                                        <img class=""
                                                                            src="https://img0.leboncoin.fr/ad-image/a2e359ea403e9d72c83b78ba3fbcf1fa99fa9ef0.jpg"
                                                                            itemprop="image"
                                                                            content="https://img0.leboncoin.fr/ad-image/a2e359ea403e9d72c83b78ba3fbcf1fa99fa9ef0.jpg"
                                                                            alt="Bmw 320d cabriolet"></div>
                                                                </span><span class="_2lY3w" data-reactid="939"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="941">3</span></span></div>
                                                            <section class="_2EDA9" data-reactid="942">
                                                                <div data-reactid="943">
                                                                    <p class="_2tubl" data-reactid="944"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="945">Bmw 320d cabriolet</span>
                                                                    </p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="946">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="947"><span class="_1JRvz"
                                                                            data-reactid="948"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="949">
                                                                                <!-- react-text: 950 -->17 900
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 951 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="952">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="953">
                                                                        <!-- react-text: 954 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location" data-reactid="955">
                                                                        Wasquehal 59290</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16" data-reactid="956">
                                                                        Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="957">
                                                            <div data-reactid="958"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_5" data-id="tooltip" data-reactid="959">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="960">
                                                        <div data-reactid="961">
                                                            <div data-reactid="962">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="963">
                                                                    <div data-reactid="964">
                                                                        <div class="_3C4to" data-reactid="965">
                                                                            <div class="_3xQS8" data-reactid="966"><span
                                                                                    class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="968"></div>
                                                        </div><a title="Megane 3 phase 3 Limited"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1634611391.htm/" data-reactid="969">
                                                            <div class="_3dPxM" data-reactid="970"><span class="_a3cT"
                                                                    data-reactid="971">
                                                                    <div class="LazyLoad is-visible" data-reactid="972">
                                                                        <img class=""
                                                                            src="https://img0.leboncoin.fr/ad-image/022537bcd2cf3f2269a18110951c782a810a3088.jpg"
                                                                            itemprop="image"
                                                                            content="https://img0.leboncoin.fr/ad-image/022537bcd2cf3f2269a18110951c782a810a3088.jpg"
                                                                            alt="Megane 3 phase 3 Limited"></div>
                                                                </span><span class="_2lY3w" data-reactid="973"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="975">3</span></span></div>
                                                            <section class="_2EDA9" data-reactid="976">
                                                                <div data-reactid="977">
                                                                    <p class="_2tubl" data-reactid="978"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="979">Megane 3 phase 3
                                                                            Limited</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="980">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="981"><span class="_1JRvz"
                                                                            data-reactid="982"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="983">
                                                                                <!-- react-text: 984 -->9 600
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 985 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="986">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="987">
                                                                        <!-- react-text: 988 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location" data-reactid="989">
                                                                        Saint-Martin-de-Fontenay 14320</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16" data-reactid="990">
                                                                        Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="991">
                                                            <div data-reactid="992"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_6" data-id="tooltip" data-reactid="993">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="994">
                                                        <div data-reactid="995">
                                                            <div data-reactid="996">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="997">
                                                                    <div data-reactid="998">
                                                                        <div class="_3C4to" data-reactid="999">
                                                                            <div class="_3xQS8" data-reactid="1000">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1002"></div>
                                                        </div><a
                                                            title="Renault Laguna III 1.5DCi 110ch Black Edition DMS"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1634611909.htm/" data-reactid="1003">
                                                            <div class="_3dPxM" data-reactid="1004"><span class="_a3cT"
                                                                    data-reactid="1005">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1006"><img class=""
                                                                            src="https://img6.leboncoin.fr/ad-image/1d7242895ba5dc1ac1e6e3840e81859b16bc49bb.jpg"
                                                                            itemprop="image"
                                                                            content="https://img6.leboncoin.fr/ad-image/1d7242895ba5dc1ac1e6e3840e81859b16bc49bb.jpg"
                                                                            alt="Renault Laguna III 1.5DCi 110ch Black Edition DMS">
                                                                    </div>
                                                                </span><span class="_2lY3w" data-reactid="1007"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1009">5</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1010">
                                                                <div data-reactid="1011">
                                                                    <p class="_2tubl" data-reactid="1012"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1013">Renault Laguna III
                                                                            1.5DCi 110ch Black Edition DMS</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1014">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1015"><span class="_1JRvz"
                                                                            data-reactid="1016"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1017">
                                                                                <!-- react-text: 1018 -->5 390
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1019 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1020">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1021"><span class="_1HeL0"
                                                                            data-reactid="1022">(Pro)&nbsp;</span>
                                                                        <!-- react-text: 1023 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1024">Strasbourg 67100</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16"
                                                                        data-reactid="1025">Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1026">
                                                            <div data-reactid="1027"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_7" data-id="tooltip" data-reactid="1028">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1029">
                                                        <div data-reactid="1030">
                                                            <div data-reactid="1031">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1032">
                                                                    <div data-reactid="1033">
                                                                        <div class="_3C4to" data-reactid="1034">
                                                                            <div class="_3xQS8" data-reactid="1035">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1037"></div>
                                                        </div><a title="Transporter T5 Four Motions"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1631669750.htm/" data-reactid="1038">
                                                            <div class="_3dPxM" data-reactid="1039"><span class="_a3cT"
                                                                    data-reactid="1040">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1041"><img class=""
                                                                            src="https://img7.leboncoin.fr/ad-image/815a8481b988d061be68a1e032ad2e13fea14fd3.jpg"
                                                                            itemprop="image"
                                                                            content="https://img7.leboncoin.fr/ad-image/815a8481b988d061be68a1e032ad2e13fea14fd3.jpg"
                                                                            alt="Transporter T5 Four Motions"></div>
                                                                </span><span class="_2lY3w" data-reactid="1042"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1044">3</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1045">
                                                                <div data-reactid="1046">
                                                                    <p class="_2tubl" data-reactid="1047"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1048">Transporter T5 Four
                                                                            Motions</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1049">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1050"><span class="_1JRvz"
                                                                            data-reactid="1051"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1052">
                                                                                <!-- react-text: 1053 -->10 000
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1054 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1055">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1056">
                                                                        <!-- react-text: 1057 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1058">Argelès-Gazost 65400</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16"
                                                                        data-reactid="1059">Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1060">
                                                            <div data-reactid="1061"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_8" data-id="tooltip" data-reactid="1062">
                                                        </div>
                                                    </li><!-- react-empty: 1063 -->
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1064">
                                                        <div data-reactid="1065">
                                                            <div data-reactid="1066">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1067">
                                                                    <div data-reactid="1068">
                                                                        <div class="_3C4to" data-reactid="1069">
                                                                            <div class="_3xQS8" data-reactid="1070">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1072"></div>
                                                        </div><a title="Citroen xsara picasso hdi 90 cv"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1634611844.htm/" data-reactid="1073">
                                                            <div class="_3dPxM" data-reactid="1074"><span class="_a3cT"
                                                                    data-reactid="1075">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1076"><img class=""
                                                                            src="https://img4.leboncoin.fr/ad-image/3b6ed430bacc75d74ec1f1267d042e6dff5e148e.jpg"
                                                                            itemprop="image"
                                                                            content="https://img4.leboncoin.fr/ad-image/3b6ed430bacc75d74ec1f1267d042e6dff5e148e.jpg"
                                                                            alt="Citroen xsara picasso hdi 90 cv"></div>
                                                                </span><span class="_2lY3w" data-reactid="1077"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1079">3</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1080">
                                                                <div data-reactid="1081">
                                                                    <p class="_2tubl" data-reactid="1082"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1083">Citroen xsara picasso
                                                                            hdi 90 cv</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1084">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1085"><span class="_1JRvz"
                                                                            data-reactid="1086"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1087">
                                                                                <!-- react-text: 1088 -->2 900
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1089 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1090">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1091">
                                                                        <!-- react-text: 1092 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1093">Châlonvillars 70400</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16"
                                                                        data-reactid="1094">Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1095">
                                                            <div data-reactid="1096"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_9" data-id="tooltip" data-reactid="1097">
                                                        </div>
                                                    </li>
                                                    <li data-reactid="1098">
                                                        <div class="vl" data-reactid="1099"><span id="vl-s"
                                                                class="teal-apn" data-reactid="1100"></span><span
                                                                id="vl-m" class="teal-apn"
                                                                data-reactid="1101"></span><span id="vl-l"
                                                                class="teal-apn" data-reactid="1102"></span><span
                                                                id="vl-xl" class="teal-apn" data-reactid="1103"></span>
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1104">
                                                        <div data-reactid="1105">
                                                            <div data-reactid="1106">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1107">
                                                                    <div data-reactid="1108">
                                                                        <div class="_3C4to" data-reactid="1109">
                                                                            <div class="_3xQS8" data-reactid="1110">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1112"></div>
                                                        </div><a
                                                            title="MERCEDES C220 BlueTEC Fascination 7G-Tronic Plus"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1536081464.htm/" data-reactid="1113">
                                                            <div class="_3dPxM" data-reactid="1114"><span class="_a3cT"
                                                                    data-reactid="1115">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1116"><img class=""
                                                                            src="https://img0.leboncoin.fr/ad-image/29e7a269ed3a0f982f02c5708d4043fd6471a68d.jpg"
                                                                            itemprop="image"
                                                                            content="https://img0.leboncoin.fr/ad-image/29e7a269ed3a0f982f02c5708d4043fd6471a68d.jpg"
                                                                            alt="MERCEDES C220 BlueTEC Fascination 7G-Tronic Plus">
                                                                    </div>
                                                                </span><span class="_2lY3w" data-reactid="1117"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1119">10</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1120">
                                                                <div data-reactid="1121">
                                                                    <p class="_2tubl" data-reactid="1122"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1123">MERCEDES C220 BlueTEC
                                                                            Fascination 7G-Tronic Plus</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1124">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1125"><span class="_1JRvz"
                                                                            data-reactid="1126"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1127">
                                                                                <!-- react-text: 1128 -->24 990
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1129 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1130">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1131"><span class="_1HeL0"
                                                                            data-reactid="1132">(Pro)&nbsp;</span>
                                                                        <!-- react-text: 1133 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1134">Saint-Cyr-sur-Loire 37540
                                                                    </p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16"
                                                                        data-reactid="1135">Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1136">
                                                            <div data-reactid="1137"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_10" data-id="tooltip" data-reactid="1138">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1139">
                                                        <div data-reactid="1140">
                                                            <div data-reactid="1141">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1142">
                                                                    <div data-reactid="1143">
                                                                        <div class="_3C4to" data-reactid="1144">
                                                                            <div class="_3xQS8" data-reactid="1145">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1147"></div>
                                                        </div><a title="Fiat Punto ELX" class="clearfix trackable"
                                                            rel="nofollow" href="/voitures/1634588955.htm/"
                                                            data-reactid="1148">
                                                            <div class="_3dPxM" data-reactid="1149">
                                                                <div class="_3OW-W" data-reactid="1150"></div>
                                                                <!-- react-text: 1151 -->
                                                                <!-- /react-text -->
                                                            </div>
                                                            <section class="_2EDA9" data-reactid="1152">
                                                                <div data-reactid="1153">
                                                                    <p class="_2tubl" data-reactid="1154"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1155">Fiat Punto ELX</span>
                                                                    </p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1156">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1157"><span class="_1JRvz"
                                                                            data-reactid="1158"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1159">
                                                                                <!-- react-text: 1160 -->300
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1161 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1162">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1163">
                                                                        <!-- react-text: 1164 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1165">Fleurance 32500</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16"
                                                                        data-reactid="1166">Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1167">
                                                            <div data-reactid="1168"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_11" data-id="tooltip" data-reactid="1169">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1170">
                                                        <div data-reactid="1171">
                                                            <div data-reactid="1172">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1173">
                                                                    <div data-reactid="1174">
                                                                        <div class="_3C4to" data-reactid="1175">
                                                                            <div class="_3xQS8" data-reactid="1176">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1178"></div>
                                                        </div><a title="FIESTA V (2) 1.25 82 ch BLACK 5P + JANTES ALU"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1634611795.htm/" data-reactid="1179">
                                                            <div class="_3dPxM" data-reactid="1180"><span class="_a3cT"
                                                                    data-reactid="1181">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1182"><img class=""
                                                                            src="https://img2.leboncoin.fr/ad-image/6ca062703ae8c05f82947baf8867e56253832439.jpg"
                                                                            itemprop="image"
                                                                            content="https://img2.leboncoin.fr/ad-image/6ca062703ae8c05f82947baf8867e56253832439.jpg"
                                                                            alt="FIESTA V (2) 1.25 82 ch BLACK 5P + JANTES ALU">
                                                                    </div>
                                                                </span><span class="_2lY3w" data-reactid="1183"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1185">5</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1186">
                                                                <div data-reactid="1187">
                                                                    <p class="_2tubl" data-reactid="1188"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1189">FIESTA V (2) 1.25 82 ch
                                                                            BLACK 5P + JANTES ALU</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1190">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1191"><span class="_1JRvz"
                                                                            data-reactid="1192"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1193">
                                                                                <!-- react-text: 1194 -->9 990
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1195 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1196">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1197"><span class="_1HeL0"
                                                                            data-reactid="1198">(Pro)&nbsp;</span>
                                                                        <!-- react-text: 1199 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1200">Saint-Martin-de-Crau 13310
                                                                    </p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16"
                                                                        data-reactid="1201">Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1202">
                                                            <div data-reactid="1203"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_12" data-id="tooltip" data-reactid="1204">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1205">
                                                        <div data-reactid="1206">
                                                            <div data-reactid="1207">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1208">
                                                                    <div data-reactid="1209">
                                                                        <div class="_3C4to" data-reactid="1210">
                                                                            <div class="_3xQS8" data-reactid="1211">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1213"></div>
                                                        </div><a title="Mini COOPER D 116 red hot chili 15500 KM BVA"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1630734065.htm/" data-reactid="1214">
                                                            <div class="_3dPxM" data-reactid="1215"><span class="_a3cT"
                                                                    data-reactid="1216">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1217"><img class=""
                                                                            src="https://img6.leboncoin.fr/ad-image/9ea2635c96276100b5aedeb0ba7ba87e6d5a6d44.jpg"
                                                                            itemprop="image"
                                                                            content="https://img6.leboncoin.fr/ad-image/9ea2635c96276100b5aedeb0ba7ba87e6d5a6d44.jpg"
                                                                            alt="Mini COOPER D 116 red hot chili 15500 KM BVA">
                                                                    </div>
                                                                </span><span class="_2lY3w" data-reactid="1218"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1220">10</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1221">
                                                                <div data-reactid="1222">
                                                                    <p class="_2tubl" data-reactid="1223"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1224">Mini COOPER D 116 red
                                                                            hot chili 15500 KM BVA</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1225">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1226"><span class="_1JRvz"
                                                                            data-reactid="1227"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1228">
                                                                                <!-- react-text: 1229 -->19 490
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1230 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1231">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1232"><span class="_1HeL0"
                                                                            data-reactid="1233">(Pro)&nbsp;</span>
                                                                        <!-- react-text: 1234 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1235">Nice 06300</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16"
                                                                        data-reactid="1236">Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1237">
                                                            <div data-reactid="1238"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_13" data-id="tooltip" data-reactid="1239">
                                                        </div>
                                                    </li>
                                                    <li data-reactid="1240">
                                                        <div class="apn-na" data-reactid="1241"><span id="na2-s"
                                                                class="teal-apn" data-reactid="1242"></span><span
                                                                id="na2-m" class="teal-apn"
                                                                data-reactid="1243"></span><span id="na2-l"
                                                                class="teal-apn" data-reactid="1244"></span><span
                                                                id="na2-xl" class="teal-apn" data-reactid="1245"></span>
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1246">
                                                        <div data-reactid="1247">
                                                            <div data-reactid="1248">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1249">
                                                                    <div data-reactid="1250">
                                                                        <div class="_3C4to" data-reactid="1251">
                                                                            <div class="_3xQS8" data-reactid="1252">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1254"></div>
                                                        </div><a title="C3 1.4 hdi" class="clearfix trackable"
                                                            rel="nofollow" href="/voitures/1634588285.htm/"
                                                            data-reactid="1255">
                                                            <div class="_3dPxM" data-reactid="1256"><span class="_a3cT"
                                                                    data-reactid="1257">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1258"><img class=""
                                                                            src="https://img6.leboncoin.fr/ad-image/cd8d8d6c70e50f93d4dc1c323f0d10735aa62294.jpg"
                                                                            itemprop="image"
                                                                            content="https://img6.leboncoin.fr/ad-image/cd8d8d6c70e50f93d4dc1c323f0d10735aa62294.jpg"
                                                                            alt="C3 1.4 hdi"></div>
                                                                </span><span class="_2lY3w" data-reactid="1259"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1261">3</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1262">
                                                                <div data-reactid="1263">
                                                                    <p class="_2tubl" data-reactid="1264"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1265">C3 1.4 hdi</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1266">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1267"><span class="_1JRvz"
                                                                            data-reactid="1268"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1269">
                                                                                <!-- react-text: 1270 -->1 700
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1271 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1272">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1273">
                                                                        <!-- react-text: 1274 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1275">Lille 59000</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16"
                                                                        data-reactid="1276">Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1277">
                                                            <div data-reactid="1278"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_14" data-id="tooltip" data-reactid="1279">
                                                        </div>
                                                    </li><!-- react-empty: 1280 -->
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1281">
                                                        <div data-reactid="1282">
                                                            <div data-reactid="1283">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1284">
                                                                    <div data-reactid="1285">
                                                                        <div class="_3C4to" data-reactid="1286">
                                                                            <div class="_3xQS8" data-reactid="1287">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1289"></div>
                                                        </div><a title="HYUNDAI i20 1.4 75 Pack Clim"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1631166508.htm/" data-reactid="1290">
                                                            <div class="_3dPxM" data-reactid="1291"><span class="_a3cT"
                                                                    data-reactid="1292">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1293"><img class=""
                                                                            src="https://img7.leboncoin.fr/ad-image/bc8f84a601cc74bb83de47a60b6c420c30d16e28.jpg"
                                                                            itemprop="image"
                                                                            content="https://img7.leboncoin.fr/ad-image/bc8f84a601cc74bb83de47a60b6c420c30d16e28.jpg"
                                                                            alt="HYUNDAI i20 1.4 75 Pack Clim"></div>
                                                                </span><span class="_2lY3w" data-reactid="1294"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1296">5</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1297">
                                                                <div data-reactid="1298">
                                                                    <p class="_2tubl" data-reactid="1299"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1300">HYUNDAI i20 1.4 75 Pack
                                                                            Clim</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1301">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1302"><span class="_1JRvz"
                                                                            data-reactid="1303"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1304">
                                                                                <!-- react-text: 1305 -->5 900
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1306 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1307">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1308"><span class="_1HeL0"
                                                                            data-reactid="1309">(Pro)&nbsp;</span>
                                                                        <!-- react-text: 1310 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1311">Wasselonne 67310</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16"
                                                                        data-reactid="1312">Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1313">
                                                            <div data-reactid="1314"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_15" data-id="tooltip" data-reactid="1315">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1316">
                                                        <div data-reactid="1317">
                                                            <div data-reactid="1318">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1319">
                                                                    <div data-reactid="1320">
                                                                        <div class="_3C4to" data-reactid="1321">
                                                                            <div class="_3xQS8" data-reactid="1322">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1324"></div>
                                                        </div><a title="Opel Astra GTC 08/05 1.6 i 105CV 147000KM"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1634611699.htm/" data-reactid="1325">
                                                            <div class="_3dPxM" data-reactid="1326"><span class="_a3cT"
                                                                    data-reactid="1327">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1328"><img class=""
                                                                            src="https://img0.leboncoin.fr/ad-image/055433dc5bb738dbf2477fedc3a684815fc755ec.jpg"
                                                                            itemprop="image"
                                                                            content="https://img0.leboncoin.fr/ad-image/055433dc5bb738dbf2477fedc3a684815fc755ec.jpg"
                                                                            alt="Opel Astra GTC 08/05 1.6 i 105CV 147000KM">
                                                                    </div>
                                                                </span><span class="_2lY3w" data-reactid="1329"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1331">5</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1332">
                                                                <div data-reactid="1333">
                                                                    <p class="_2tubl" data-reactid="1334"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1335">Opel Astra GTC 08/05 1.6
                                                                            i 105CV 147000KM</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1336">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1337"><span class="_1JRvz"
                                                                            data-reactid="1338"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1339">
                                                                                <!-- react-text: 1340 -->3 999
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1341 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1342">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1343"><span class="_1HeL0"
                                                                            data-reactid="1344">(Pro)&nbsp;</span>
                                                                        <!-- react-text: 1345 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1346">Poulainville 80260</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16"
                                                                        data-reactid="1347">Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1348">
                                                            <div data-reactid="1349"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_16" data-id="tooltip" data-reactid="1350">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1351">
                                                        <div data-reactid="1352">
                                                            <div data-reactid="1353">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1354">
                                                                    <div data-reactid="1355">
                                                                        <div class="_3C4to" data-reactid="1356">
                                                                            <div class="_3xQS8" data-reactid="1357">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1359"></div>
                                                        </div><a title="Peugeot 106 1.1 original kid"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1634611704.htm/" data-reactid="1360">
                                                            <div class="_3dPxM" data-reactid="1361"><span class="_a3cT"
                                                                    data-reactid="1362">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1363"><img class=""
                                                                            src="https://img5.leboncoin.fr/ad-image/3e060e0a42018a6567017aba850fc02f3e15a0fe.jpg"
                                                                            itemprop="image"
                                                                            content="https://img5.leboncoin.fr/ad-image/3e060e0a42018a6567017aba850fc02f3e15a0fe.jpg"
                                                                            alt="Peugeot 106 1.1 original kid"></div>
                                                                </span><span class="_2lY3w" data-reactid="1364"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1366">3</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1367">
                                                                <div data-reactid="1368">
                                                                    <p class="_2tubl" data-reactid="1369"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1370">Peugeot 106 1.1 original
                                                                            kid</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1371">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1372"><span class="_1JRvz"
                                                                            data-reactid="1373"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1374">
                                                                                <!-- react-text: 1375 -->1 000
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1376 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1377">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1378">
                                                                        <!-- react-text: 1379 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1380">Bailly 78870</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16"
                                                                        data-reactid="1381">Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1382">
                                                            <div data-reactid="1383"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_17" data-id="tooltip" data-reactid="1384">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1385">
                                                        <div data-reactid="1386">
                                                            <div data-reactid="1387">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1388">
                                                                    <div data-reactid="1389">
                                                                        <div class="_3C4to" data-reactid="1390">
                                                                            <div class="_3xQS8" data-reactid="1391">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1393"></div>
                                                        </div><a title="Renault megane rs sport 2.0t 265 ch"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1634611678.htm/" data-reactid="1394">
                                                            <div class="_3dPxM" data-reactid="1395"><span class="_a3cT"
                                                                    data-reactid="1396">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1397"><img class=""
                                                                            src="https://img1.leboncoin.fr/ad-image/fc5ff56e26e0726b1e44858ac6d5b5c6d7c73539.jpg"
                                                                            itemprop="image"
                                                                            content="https://img1.leboncoin.fr/ad-image/fc5ff56e26e0726b1e44858ac6d5b5c6d7c73539.jpg"
                                                                            alt="Renault megane rs sport 2.0t 265 ch">
                                                                    </div>
                                                                </span><span class="_2lY3w" data-reactid="1398"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1400">4</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1401">
                                                                <div data-reactid="1402">
                                                                    <p class="_2tubl" data-reactid="1403"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1404">Renault megane rs sport
                                                                            2.0t 265 ch</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1405">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1406"><span class="_1JRvz"
                                                                            data-reactid="1407"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1408">
                                                                                <!-- react-text: 1409 -->18 000
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1410 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1411">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1412"><span class="_1HeL0"
                                                                            data-reactid="1413">(Pro)&nbsp;</span>
                                                                        <!-- react-text: 1414 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1415">Herrlisheim-près-Colmar
                                                                        68420</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16"
                                                                        data-reactid="1416">Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1417">
                                                            <div data-reactid="1418"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_18" data-id="tooltip" data-reactid="1419">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1420">
                                                        <div data-reactid="1421">
                                                            <div data-reactid="1422">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1423">
                                                                    <div data-reactid="1424">
                                                                        <div class="_3C4to" data-reactid="1425">
                                                                            <div class="_3xQS8" data-reactid="1426">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1428"></div>
                                                        </div><a title="Polo 4 phase 1" class="clearfix trackable"
                                                            rel="nofollow" href="/voitures/1634611683.htm/"
                                                            data-reactid="1429">
                                                            <div class="_3dPxM" data-reactid="1430"><span class="_a3cT"
                                                                    data-reactid="1431">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1432"><img class=""
                                                                            src="https://img7.leboncoin.fr/ad-image/2cce7be9c49102850facd0b8b5490d4513732a1d.jpg"
                                                                            itemprop="image"
                                                                            content="https://img7.leboncoin.fr/ad-image/2cce7be9c49102850facd0b8b5490d4513732a1d.jpg"
                                                                            alt="Polo 4 phase 1"></div>
                                                                </span><span class="_2lY3w" data-reactid="1433"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1435">1</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1436">
                                                                <div data-reactid="1437">
                                                                    <p class="_2tubl" data-reactid="1438"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1439">Polo 4 phase 1</span>
                                                                    </p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1440">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1441"><span class="_1JRvz"
                                                                            data-reactid="1442"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1443">
                                                                                <!-- react-text: 1444 -->1 900
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1445 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1446">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1447">
                                                                        <!-- react-text: 1448 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1449">Perpignan 66100</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16"
                                                                        data-reactid="1450">Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1451">
                                                            <div data-reactid="1452"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_19" data-id="tooltip" data-reactid="1453">
                                                        </div>
                                                    </li>
                                                    <li data-reactid="1454">
                                                        <div class="apn-autopromo_listing" data-reactid="1455"><span
                                                                id="autopromo_listing-s" class="teal-apn"
                                                                data-reactid="1456"></span><span
                                                                id="autopromo_listing-m" class="teal-apn"
                                                                data-reactid="1457"></span><span
                                                                id="autopromo_listing-l" class="teal-apn"
                                                                data-reactid="1458"></span><span
                                                                id="autopromo_listing-xl" class="teal-apn"
                                                                data-reactid="1459"></span></div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1460">
                                                        <div data-reactid="1461">
                                                            <div data-reactid="1462">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1463">
                                                                    <div data-reactid="1464">
                                                                        <div class="_3C4to" data-reactid="1465">
                                                                            <div class="_3xQS8" data-reactid="1466">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1468"></div>
                                                        </div><a title="New beetle cabriolet 1,9 TDI 105 carat"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1634611632.htm/" data-reactid="1469">
                                                            <div class="_3dPxM" data-reactid="1470"><span class="_a3cT"
                                                                    data-reactid="1471">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1472"><img class=""
                                                                            src="https://img7.leboncoin.fr/ad-image/9edb0f82705109b82111a3fc643d3595861adbfd.jpg"
                                                                            itemprop="image"
                                                                            content="https://img7.leboncoin.fr/ad-image/9edb0f82705109b82111a3fc643d3595861adbfd.jpg"
                                                                            alt="New beetle cabriolet 1,9 TDI 105 carat">
                                                                    </div>
                                                                </span><span class="_2lY3w" data-reactid="1473"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1475">3</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1476">
                                                                <div data-reactid="1477">
                                                                    <p class="_2tubl" data-reactid="1478"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1479">New beetle cabriolet 1,9
                                                                            TDI 105 carat</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1480">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1481"><span class="_1JRvz"
                                                                            data-reactid="1482"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1483">
                                                                                <!-- react-text: 1484 -->5 500
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1485 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1486">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1487">
                                                                        <!-- react-text: 1488 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1489">Anor 59186</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16"
                                                                        data-reactid="1490">Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1491">
                                                            <div data-reactid="1492"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_20" data-id="tooltip" data-reactid="1493">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1494">
                                                        <div data-reactid="1495">
                                                            <div data-reactid="1496">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1497">
                                                                    <div data-reactid="1498">
                                                                        <div class="_3C4to" data-reactid="1499">
                                                                            <div class="_3xQS8" data-reactid="1500">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1502"></div>
                                                        </div><a title="Fiat 500" class="clearfix trackable"
                                                            rel="nofollow" href="/voitures/1634611645.htm/"
                                                            data-reactid="1503">
                                                            <div class="_3dPxM" data-reactid="1504"><span class="_a3cT"
                                                                    data-reactid="1505">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1506"><img class=""
                                                                            src="https://img1.leboncoin.fr/ad-image/b2f4340c27b95babdcef5dfb486040770ec253a5.jpg"
                                                                            itemprop="image"
                                                                            content="https://img1.leboncoin.fr/ad-image/b2f4340c27b95babdcef5dfb486040770ec253a5.jpg"
                                                                            alt="Fiat 500"></div>
                                                                </span><span class="_2lY3w" data-reactid="1507"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1509">3</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1510">
                                                                <div data-reactid="1511">
                                                                    <p class="_2tubl" data-reactid="1512"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1513">Fiat 500</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1514">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1515"><span class="_1JRvz"
                                                                            data-reactid="1516"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1517">
                                                                                <!-- react-text: 1518 -->8 800
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1519 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1520">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1521">
                                                                        <!-- react-text: 1522 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1523">Chambéry 73000</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16"
                                                                        data-reactid="1524">Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1525">
                                                            <div data-reactid="1526"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_21" data-id="tooltip" data-reactid="1527">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1528">
                                                        <div data-reactid="1529">
                                                            <div data-reactid="1530">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1531">
                                                                    <div data-reactid="1532">
                                                                        <div class="_3C4to" data-reactid="1533">
                                                                            <div class="_3xQS8" data-reactid="1534">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1536"></div>
                                                        </div><a title="Grand modus 1.5l dci 82ch.Entierement révisé"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1632665587.htm/" data-reactid="1537">
                                                            <div class="_3dPxM" data-reactid="1538"><span class="_a3cT"
                                                                    data-reactid="1539">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1540"><img class=""
                                                                            src="https://img4.leboncoin.fr/ad-image/e7b205aa1f32d2e7a76c2387bd823016009657a8.jpg"
                                                                            itemprop="image"
                                                                            content="https://img4.leboncoin.fr/ad-image/e7b205aa1f32d2e7a76c2387bd823016009657a8.jpg"
                                                                            alt="Grand modus 1.5l dci 82ch.Entierement révisé">
                                                                    </div>
                                                                </span><span class="_2lY3w" data-reactid="1541"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1543">4</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1544">
                                                                <div data-reactid="1545">
                                                                    <p class="_2tubl" data-reactid="1546"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1547">Grand modus 1.5l dci
                                                                            82ch.Entierement révisé</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1548">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1549"><span class="_1JRvz"
                                                                            data-reactid="1550"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1551">
                                                                                <!-- react-text: 1552 -->3 990
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1553 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1554">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1555"><span class="_1HeL0"
                                                                            data-reactid="1556">(Pro)&nbsp;</span>
                                                                        <!-- react-text: 1557 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1558">Villeneuve-Tolosane 31270
                                                                    </p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:16"
                                                                        data-reactid="1559">Aujourd'hui, 16:16</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1560">
                                                            <div data-reactid="1561"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_22" data-id="tooltip" data-reactid="1562">
                                                        </div>
                                                    </li><!-- react-empty: 1563 -->
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1564">
                                                        <div data-reactid="1565">
                                                            <div data-reactid="1566">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1567">
                                                                    <div data-reactid="1568">
                                                                        <div class="_3C4to" data-reactid="1569">
                                                                            <div class="_3xQS8" data-reactid="1570">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1572"></div>
                                                        </div><a title="107 peugeot 1.0i faible kilométrage"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1634611196.htm/" data-reactid="1573">
                                                            <div class="_3dPxM" data-reactid="1574"><span class="_a3cT"
                                                                    data-reactid="1575">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1576"><img class=""
                                                                            src="https://img1.leboncoin.fr/ad-image/fc03de89b19ef175fae57c71ced4ba564d9023f4.jpg"
                                                                            itemprop="image"
                                                                            content="https://img1.leboncoin.fr/ad-image/fc03de89b19ef175fae57c71ced4ba564d9023f4.jpg"
                                                                            alt="107 peugeot 1.0i faible kilométrage">
                                                                    </div>
                                                                </span><span class="_2lY3w" data-reactid="1577"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1579">1</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1580">
                                                                <div data-reactid="1581">
                                                                    <p class="_2tubl" data-reactid="1582"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1583">107 peugeot 1.0i faible
                                                                            kilométrage</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1584">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1585"><span class="_1JRvz"
                                                                            data-reactid="1586"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1587">
                                                                                <!-- react-text: 1588 -->4 300
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1589 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1590">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1591">
                                                                        <!-- react-text: 1592 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1593"> 14700</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:15"
                                                                        data-reactid="1594">Aujourd'hui, 16:15</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1595">
                                                            <div data-reactid="1596"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_23" data-id="tooltip" data-reactid="1597">
                                                        </div>
                                                    </li>
                                                    <li data-reactid="1598">
                                                        <div class="apn-na" data-reactid="1599"><span id="na4-s"
                                                                class="teal-apn" data-reactid="1600"></span><span
                                                                id="na4-m" class="teal-apn"
                                                                data-reactid="1601"></span><span id="na4-l"
                                                                class="teal-apn" data-reactid="1602"></span><span
                                                                id="na4-xl" class="teal-apn" data-reactid="1603"></span>
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1604">
                                                        <div data-reactid="1605">
                                                            <div data-reactid="1606">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1607">
                                                                    <div data-reactid="1608">
                                                                        <div class="_3C4to" data-reactid="1609">
                                                                            <div class="_3xQS8" data-reactid="1610">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1612"></div>
                                                        </div><a title="Citroën c4 1,6 hdi club entreprise"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1634611082.htm/" data-reactid="1613">
                                                            <div class="_3dPxM" data-reactid="1614"><span class="_a3cT"
                                                                    data-reactid="1615">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1616"><img class=""
                                                                            src="https://img1.leboncoin.fr/ad-image/f378f83e728f8c2cdb96a3860de0828d2d61e230.jpg"
                                                                            itemprop="image"
                                                                            content="https://img1.leboncoin.fr/ad-image/f378f83e728f8c2cdb96a3860de0828d2d61e230.jpg"
                                                                            alt="Citroën c4 1,6 hdi club entreprise">
                                                                    </div>
                                                                </span><span class="_2lY3w" data-reactid="1617"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1619">3</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1620">
                                                                <div data-reactid="1621">
                                                                    <p class="_2tubl" data-reactid="1622"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1623">Citroën c4 1,6 hdi club
                                                                            entreprise</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1624">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1625"><span class="_1JRvz"
                                                                            data-reactid="1626"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1627">
                                                                                <!-- react-text: 1628 -->1 800
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1629 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1630">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1631">
                                                                        <!-- react-text: 1632 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1633">Nice 06200</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:15"
                                                                        data-reactid="1634">Aujourd'hui, 16:15</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1635">
                                                            <div data-reactid="1636"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_24" data-id="tooltip" data-reactid="1637">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1638">
                                                        <div data-reactid="1639">
                                                            <div data-reactid="1640">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1641">
                                                                    <div data-reactid="1642">
                                                                        <div class="_3C4to" data-reactid="1643">
                                                                            <div class="_3xQS8" data-reactid="1644">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1646"></div>
                                                        </div><a title="Polo 1.4 LIFE" class="clearfix trackable"
                                                            rel="nofollow" href="/voitures/1634611300.htm/"
                                                            data-reactid="1647">
                                                            <div class="_3dPxM" data-reactid="1648"><span class="_a3cT"
                                                                    data-reactid="1649">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1650"><img class=""
                                                                            src="https://img6.leboncoin.fr/ad-image/948b4a11e650501c329791e4ada67921c518cb47.jpg"
                                                                            itemprop="image"
                                                                            content="https://img6.leboncoin.fr/ad-image/948b4a11e650501c329791e4ada67921c518cb47.jpg"
                                                                            alt="Polo 1.4 LIFE"></div>
                                                                </span><span class="_2lY3w" data-reactid="1651"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1653">3</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1654">
                                                                <div data-reactid="1655">
                                                                    <p class="_2tubl" data-reactid="1656"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1657">Polo 1.4 LIFE</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1658">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1659"><span class="_1JRvz"
                                                                            data-reactid="1660"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1661">
                                                                                <!-- react-text: 1662 -->7 900
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1663 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1664">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1665">
                                                                        <!-- react-text: 1666 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1667">Pont-de-l'Isère 26600</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:15"
                                                                        data-reactid="1668">Aujourd'hui, 16:15</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1669">
                                                            <div data-reactid="1670"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_25" data-id="tooltip" data-reactid="1671">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1672">
                                                        <div data-reactid="1673">
                                                            <div data-reactid="1674">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1675">
                                                                    <div data-reactid="1676">
                                                                        <div class="_3C4to" data-reactid="1677">
                                                                            <div class="_3xQS8" data-reactid="1678">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1680"></div>
                                                        </div><a title="Citroen traction 11 bl 1938 avant guerre"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1634610995.htm/" data-reactid="1681">
                                                            <div class="_3dPxM" data-reactid="1682"><span class="_a3cT"
                                                                    data-reactid="1683">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1684"><img class=""
                                                                            src="https://img0.leboncoin.fr/ad-image/0ceaa66a1501d3b2f35eaf7e2173de2558d0ee45.jpg"
                                                                            itemprop="image"
                                                                            content="https://img0.leboncoin.fr/ad-image/0ceaa66a1501d3b2f35eaf7e2173de2558d0ee45.jpg"
                                                                            alt="Citroen traction 11 bl 1938 avant guerre">
                                                                    </div>
                                                                </span><span class="_2lY3w" data-reactid="1685"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1687">5</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1688">
                                                                <div data-reactid="1689">
                                                                    <p class="_2tubl" data-reactid="1690"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1691">Citroen traction 11 bl
                                                                            1938 avant guerre</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1692">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1693"><span class="_1JRvz"
                                                                            data-reactid="1694"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1695">
                                                                                <!-- react-text: 1696 -->19 500
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1697 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1698">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1699"><span class="_1HeL0"
                                                                            data-reactid="1700">(Pro)&nbsp;</span>
                                                                        <!-- react-text: 1701 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1702">Saint-Gaudens 31800</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:15"
                                                                        data-reactid="1703">Aujourd'hui, 16:15</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1704">
                                                            <div data-reactid="1705"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_26" data-id="tooltip" data-reactid="1706">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1707">
                                                        <div data-reactid="1708">
                                                            <div data-reactid="1709">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1710">
                                                                    <div data-reactid="1711">
                                                                        <div class="_3C4to" data-reactid="1712">
                                                                            <div class="_3xQS8" data-reactid="1713">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1715"></div>
                                                        </div><a title="Classe E Cabriolet 200 CGI BlueEfficiency"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1634609893.htm/" data-reactid="1716">
                                                            <div class="_3dPxM" data-reactid="1717"><span class="_a3cT"
                                                                    data-reactid="1718">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1719"><img class=""
                                                                            src="https://img0.leboncoin.fr/ad-image/a7eb030b8245ad10d0134d1f571368eb7903553b.jpg"
                                                                            itemprop="image"
                                                                            content="https://img0.leboncoin.fr/ad-image/a7eb030b8245ad10d0134d1f571368eb7903553b.jpg"
                                                                            alt="Classe E Cabriolet 200 CGI BlueEfficiency">
                                                                    </div>
                                                                </span><span class="_2lY3w" data-reactid="1720"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1722">3</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1723">
                                                                <div data-reactid="1724">
                                                                    <p class="_2tubl" data-reactid="1725"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1726">Classe E Cabriolet 200
                                                                            CGI BlueEfficiency</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1727">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1728"><span class="_1JRvz"
                                                                            data-reactid="1729"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1730">
                                                                                <!-- react-text: 1731 -->15 500
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1732 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1733">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1734">
                                                                        <!-- react-text: 1735 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1736">Montauban 82000</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:15"
                                                                        data-reactid="1737">Aujourd'hui, 16:15</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1738">
                                                            <div data-reactid="1739"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_27" data-id="tooltip" data-reactid="1740">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1741">
                                                        <div data-reactid="1742">
                                                            <div data-reactid="1743">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1744">
                                                                    <div data-reactid="1745">
                                                                        <div class="_3C4to" data-reactid="1746">
                                                                            <div class="_3xQS8" data-reactid="1747">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1749"></div>
                                                        </div><a title="Skoda Yeti 2.0 Tdi Adventure 4x2"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1634611478.htm/" data-reactid="1750">
                                                            <div class="_3dPxM" data-reactid="1751"><span class="_a3cT"
                                                                    data-reactid="1752">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1753"><img class=""
                                                                            src="https://img5.leboncoin.fr/ad-image/2f830334b5e98baa0573f35695056301c4f9a8f2.jpg"
                                                                            itemprop="image"
                                                                            content="https://img5.leboncoin.fr/ad-image/2f830334b5e98baa0573f35695056301c4f9a8f2.jpg"
                                                                            alt="Skoda Yeti 2.0 Tdi Adventure 4x2">
                                                                    </div>
                                                                </span><span class="_2lY3w" data-reactid="1754"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1756">3</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1757">
                                                                <div data-reactid="1758">
                                                                    <p class="_2tubl" data-reactid="1759"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1760">Skoda Yeti 2.0 Tdi
                                                                            Adventure 4x2</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1761">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1762"><span class="_1JRvz"
                                                                            data-reactid="1763"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1764">
                                                                                <!-- react-text: 1765 -->6 500
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1766 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1767">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1768">
                                                                        <!-- react-text: 1769 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1770">Montauban 82000</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:15"
                                                                        data-reactid="1771">Aujourd'hui, 16:15</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1772">
                                                            <div data-reactid="1773"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_28" data-id="tooltip" data-reactid="1774">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1775">
                                                        <div data-reactid="1776">
                                                            <div data-reactid="1777">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1778">
                                                                    <div data-reactid="1779">
                                                                        <div class="_3C4to" data-reactid="1780">
                                                                            <div class="_3xQS8" data-reactid="1781">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1783"></div>
                                                        </div><a title="VOLKSWAGEN PASSAT 110 CV 1.9TDI (5cv)"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1634611474.htm/" data-reactid="1784">
                                                            <div class="_3dPxM" data-reactid="1785"><span class="_a3cT"
                                                                    data-reactid="1786">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1787"><img class=""
                                                                            src="https://img1.leboncoin.fr/ad-image/2ed7090cdf2997718341da0670b57cb94fde9d71.jpg"
                                                                            itemprop="image"
                                                                            content="https://img1.leboncoin.fr/ad-image/2ed7090cdf2997718341da0670b57cb94fde9d71.jpg"
                                                                            alt="VOLKSWAGEN PASSAT 110 CV 1.9TDI (5cv)">
                                                                    </div>
                                                                </span><span class="_2lY3w" data-reactid="1788"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1790">3</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1791">
                                                                <div data-reactid="1792">
                                                                    <p class="_2tubl" data-reactid="1793"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1794">VOLKSWAGEN PASSAT 110 CV
                                                                            1.9TDI (5cv)</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1795">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1796"><span class="_1JRvz"
                                                                            data-reactid="1797"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1798">
                                                                                <!-- react-text: 1799 -->550
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1800 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1801">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1802">
                                                                        <!-- react-text: 1803 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1804">Montigny-le-Bretonneux 78180
                                                                    </p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:15"
                                                                        data-reactid="1805">Aujourd'hui, 16:15</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1806">
                                                            <div data-reactid="1807"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_29" data-id="tooltip" data-reactid="1808">
                                                        </div>
                                                    </li>
                                                    <li data-reactid="1809">
                                                        <div class="apn-na" data-reactid="1810"><span id="na5-s"
                                                                class="teal-apn" data-reactid="1811"></span><span
                                                                id="na5-m" class="teal-apn"
                                                                data-reactid="1812"></span><span id="na5-l"
                                                                class="teal-apn" data-reactid="1813"></span><span
                                                                id="na5-xl" class="teal-apn" data-reactid="1814"></span>
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1815">
                                                        <div data-reactid="1816">
                                                            <div data-reactid="1817">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1818">
                                                                    <div data-reactid="1819">
                                                                        <div class="_3C4to" data-reactid="1820">
                                                                            <div class="_3xQS8" data-reactid="1821">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1823"></div>
                                                        </div><a title="Fiat Panda 2005 135000km"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1634611457.htm/" data-reactid="1824">
                                                            <div class="_3dPxM" data-reactid="1825"><span class="_a3cT"
                                                                    data-reactid="1826">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1827"><img class=""
                                                                            src="https://img0.leboncoin.fr/ad-image/2207724e073c813c3ec9d5ca909ae90010b1d0f5.jpg"
                                                                            itemprop="image"
                                                                            content="https://img0.leboncoin.fr/ad-image/2207724e073c813c3ec9d5ca909ae90010b1d0f5.jpg"
                                                                            alt="Fiat Panda 2005 135000km"></div>
                                                                </span><span class="_2lY3w" data-reactid="1828"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1830">3</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1831">
                                                                <div data-reactid="1832">
                                                                    <p class="_2tubl" data-reactid="1833"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1834">Fiat Panda 2005
                                                                            135000km</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1835">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1836"><span class="_1JRvz"
                                                                            data-reactid="1837"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1838">
                                                                                <!-- react-text: 1839 -->2 000
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1840 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1841">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1842">
                                                                        <!-- react-text: 1843 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1844">Boulogne-Billancourt 92100
                                                                    </p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:15"
                                                                        data-reactid="1845">Aujourd'hui, 16:15</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1846">
                                                            <div data-reactid="1847"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_30" data-id="tooltip" data-reactid="1848">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1849">
                                                        <div data-reactid="1850">
                                                            <div data-reactid="1851">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1852">
                                                                    <div data-reactid="1853">
                                                                        <div class="_3C4to" data-reactid="1854">
                                                                            <div class="_3xQS8" data-reactid="1855">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1857"></div>
                                                        </div><a title="2008 1.6 blue hdi 75 active"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1627935458.htm/" data-reactid="1858">
                                                            <div class="_3dPxM" data-reactid="1859"><span class="_a3cT"
                                                                    data-reactid="1860">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1861"><img class=""
                                                                            src="https://img5.leboncoin.fr/ad-image/0b11d3b16f342ca4675046851420b8d8e8e2cb31.jpg"
                                                                            itemprop="image"
                                                                            content="https://img5.leboncoin.fr/ad-image/0b11d3b16f342ca4675046851420b8d8e8e2cb31.jpg"
                                                                            alt="2008 1.6 blue hdi 75 active"></div>
                                                                </span><span class="_2lY3w" data-reactid="1862"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1864">3</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1865">
                                                                <div data-reactid="1866">
                                                                    <p class="_2tubl" data-reactid="1867"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1868">2008 1.6 blue hdi 75
                                                                            active</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1869">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1870"><span class="_1JRvz"
                                                                            data-reactid="1871"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1872">
                                                                                <!-- react-text: 1873 -->13 500
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1874 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1875">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1876">
                                                                        <!-- react-text: 1877 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1878">Audincourt 25400</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:15"
                                                                        data-reactid="1879">Aujourd'hui, 16:15</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1880">
                                                            <div data-reactid="1881"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_31" data-id="tooltip" data-reactid="1882">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1883">
                                                        <div data-reactid="1884">
                                                            <div data-reactid="1885">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1886">
                                                                    <div data-reactid="1887">
                                                                        <div class="_3C4to" data-reactid="1888">
                                                                            <div class="_3xQS8" data-reactid="1889">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1891"></div>
                                                        </div><a
                                                            title="Nissan Qashqai 1.5 DCi 110 Ch Connect Édition Toit"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1634611367.htm/" data-reactid="1892">
                                                            <div class="_3dPxM" data-reactid="1893"><span class="_a3cT"
                                                                    data-reactid="1894">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1895"><img class=""
                                                                            src="https://img2.leboncoin.fr/ad-image/20145cd50da649d2ff6f03d7d97b64a982ace784.jpg"
                                                                            itemprop="image"
                                                                            content="https://img2.leboncoin.fr/ad-image/20145cd50da649d2ff6f03d7d97b64a982ace784.jpg"
                                                                            alt="Nissan Qashqai 1.5 DCi 110 Ch Connect Édition Toit">
                                                                    </div>
                                                                </span><span class="_2lY3w" data-reactid="1896"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1898">3</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1899">
                                                                <div data-reactid="1900">
                                                                    <p class="_2tubl" data-reactid="1901"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1902">Nissan Qashqai 1.5 DCi
                                                                            110 Ch Connect Édition Toit</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1903">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1904"><span class="_1JRvz"
                                                                            data-reactid="1905"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1906">
                                                                                <!-- react-text: 1907 -->7 200
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1908 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1909">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1910">
                                                                        <!-- react-text: 1911 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1912">Cheverny 41700</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:15"
                                                                        data-reactid="1913">Aujourd'hui, 16:15</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1914">
                                                            <div data-reactid="1915"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_32" data-id="tooltip" data-reactid="1916">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1917">
                                                        <div data-reactid="1918">
                                                            <div data-reactid="1919">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1920">
                                                                    <div data-reactid="1921">
                                                                        <div class="_3C4to" data-reactid="1922">
                                                                            <div class="_3xQS8" data-reactid="1923">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1925"></div>
                                                        </div><a title="FIAT GRANDE PUNTO 1.3 D Multijet 75 CV"
                                                            class="clearfix trackable" rel="nofollow"
                                                            href="/voitures/1603438523.htm/" data-reactid="1926">
                                                            <div class="_3dPxM" data-reactid="1927"><span class="_a3cT"
                                                                    data-reactid="1928">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1929"><img class=""
                                                                            src="https://img5.leboncoin.fr/ad-image/a911659f33073e41b4a27c30672fa6f9e928adce.jpg"
                                                                            itemprop="image"
                                                                            content="https://img5.leboncoin.fr/ad-image/a911659f33073e41b4a27c30672fa6f9e928adce.jpg"
                                                                            alt="FIAT GRANDE PUNTO 1.3 D Multijet 75 CV">
                                                                    </div>
                                                                </span><span class="_2lY3w" data-reactid="1930"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1932">5</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1933">
                                                                <div data-reactid="1934">
                                                                    <p class="_2tubl" data-reactid="1935"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1936">FIAT GRANDE PUNTO 1.3 D
                                                                            Multijet 75 CV</span></p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1937">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1938"><span class="_1JRvz"
                                                                            data-reactid="1939"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1940">
                                                                                <!-- react-text: 1941 -->3 199
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1942 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1943">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1944"><span class="_1HeL0"
                                                                            data-reactid="1945">(Pro)&nbsp;</span>
                                                                        <!-- react-text: 1946 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1947">Wittelsheim 68310</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:15"
                                                                        data-reactid="1948">Aujourd'hui, 16:15</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1949">
                                                            <div data-reactid="1950"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_33" data-id="tooltip" data-reactid="1951">
                                                        </div>
                                                    </li>
                                                    <li itemscope="" itemtype="http://schema.org/Offer" class="_3DFQ-"
                                                        data-qa-id="aditem_container" data-reactid="1952">
                                                        <div data-reactid="1953">
                                                            <div data-reactid="1954">
                                                                <div class="W5Mie" data-qa-id="listitem_save_ad"
                                                                    data-reactid="1955">
                                                                    <div data-reactid="1956">
                                                                        <div class="_3C4to" data-reactid="1957">
                                                                            <div class="_3xQS8" data-reactid="1958">
                                                                                <span class="_1vK7W"
                                                                                    name="heartoutline"><svg
                                                                                        viewBox="0 0 24 24"
                                                                                        data-name="Calque 1"
                                                                                        focusable="false">
                                                                                        <path
                                                                                            d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                                        </path>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_11VLn" data-reactid="1960"></div>
                                                        </div><a title="Fusion 160000 km" class="clearfix trackable"
                                                            rel="nofollow" href="/voitures/1634611319.htm/"
                                                            data-reactid="1961">
                                                            <div class="_3dPxM" data-reactid="1962"><span class="_a3cT"
                                                                    data-reactid="1963">
                                                                    <div class="LazyLoad is-visible"
                                                                        data-reactid="1964"><img class=""
                                                                            src="https://img1.leboncoin.fr/ad-image/f643061c85acc6d0883b461420ecdcb4886b3fe0.jpg"
                                                                            itemprop="image"
                                                                            content="https://img1.leboncoin.fr/ad-image/f643061c85acc6d0883b461420ecdcb4886b3fe0.jpg"
                                                                            alt="Fusion 160000 km"></div>
                                                                </span><span class="_2lY3w" data-reactid="1965"><span
                                                                        class="_1vK7W _1eOK1" name="camera"><svg
                                                                            height="22" width="24" viewBox="0 0 24 22"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                                fill="#000"></path>
                                                                        </svg></span><span
                                                                        data-reactid="1967">3</span></span></div>
                                                            <section class="_2EDA9" data-reactid="1968">
                                                                <div data-reactid="1969">
                                                                    <p class="_2tubl" data-reactid="1970"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="1971">Fusion 160000 km</span>
                                                                    </p>
                                                                    <div class="_2OJ8g" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="1972">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="1973"><span class="_1JRvz"
                                                                            data-reactid="1974"><span
                                                                                itemprop="priceCurrency" content="EUR"
                                                                                class="_1NfL7" data-reactid="1975">
                                                                                <!-- react-text: 1976 -->600
                                                                                <!-- /react-text -->
                                                                                <!-- react-text: 1977 -->&nbsp;€
                                                                                <!-- /react-text --></span></span></div>
                                                                </div>
                                                                <div data-reactid="1978">
                                                                    <p class="CZbT3" itemprop="alternateName"
                                                                        data-qa-id="aditem_category" content="Voitures"
                                                                        data-reactid="1979">
                                                                        <!-- react-text: 1980 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_2qeuk" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="1981">Lissieu 69380</p>
                                                                    <p class="mAnae" itemprop="availabilityStarts"
                                                                        data-qa-id="listitem_date"
                                                                        content="Aujourd'hui, 16:15"
                                                                        data-reactid="1982">Aujourd'hui, 16:15</p>
                                                                </div>
                                                            </section>
                                                        </a>
                                                        <div class="PTvXf" data-reactid="1983">
                                                            <div data-reactid="1984"></div>
                                                        </div>
                                                        <div class="__react_component_tooltip place-top type-dark "
                                                            id="toggleSavedAd_34" data-id="tooltip" data-reactid="1985">
                                                        </div>
                                                    </li>
                                                    <div class="_4cOP1" data-reactid="1986">
                                                        <!-- react-empty: 1987 --><button
                                                            class="_2sNbI _1xIyN _2xk2l _2B6ae _1Q7d5 _2qyUu"
                                                            data-reactid="1988"><span class="_1vK7W _1eOK1 QKFCn _2-_jT"
                                                                name="notifoutline"><svg viewBox="0 0 24 24"
                                                                    data-name="Calque 1" focusable="false">
                                                                    <path
                                                                        d="M12 24a2.49 2.49 0 0 0 2.5-2.46h-5A2.48 2.48 0 0 0 12 24zM21.13 18.2l-1.62-1.58v-6.16c0-3.78-2.05-6.94-5.63-7.78v-.83a1.88 1.88 0 0 0-3.76 0v.83c-3.59.84-5.63 4-5.63 7.78v6.16L2.87 18.2a1.23 1.23 0 0 0 .88 2.11h16.49a1.23 1.23 0 0 0 .89-2.11zM17 17.85H7v-7.39c0-3.05 1.89-5.54 5-5.54s5 2.49 5 5.54z">
                                                                    </path>
                                                                </svg></span><span class="_3bnUw"
                                                                data-reactid="1990">Sauvegarder la
                                                                recherche</span></button></div>
                                                </ul>
                                            </div>
                                        </div>
                                        <div data-reactid="1991"><ins id="pagesJaunesListingBas"
                                                data-reactid="1992"></ins></div>
                                        <div class="_1evK6" data-reactid="1993">
                                            <nav class="nMaRG" data-reactid="1994">
                                                <div data-reactid="1995">
                                                    <ul class="_25feg" data-reactid="1996">
                                                        <li class="_2zwVR" data-reactid="1997"><span
                                                                class="_1f-eo _8osi3" data-reactid="1998"><span
                                                                    class="_1vK7W K5CQx _Od24" name="chevronleft"><svg
                                                                        viewBox="0 0 24 24" data-name="Calque 1"
                                                                        focusable="false">
                                                                        <path
                                                                            d="M10.13 12l8.25-8.33a2.15 2.15 0 0 0 0-3 2.1 2.1 0 0 0-3 0l-9.76 9.82a2.14 2.14 0 0 0 0 3l9.76 9.86a2.1 2.1 0 0 0 3 0 2.2 2.2 0 0 0 0-3.05z">
                                                                        </path>
                                                                    </svg></span></span></li>
                                                        <li class="_2zwVR" data-reactid="2000"><span
                                                                class="_1f-eo _2nsY3" data-reactid="2001">1</span></li>
                                                        <li class="_2zwVR" data-reactid="2002"><a class="_1f-eo"
                                                                href="/voitures/offres/p-2/" data-reactid="2003">2</a>
                                                        </li>
                                                        <li class="_2zwVR" data-reactid="2004"><a class="_1f-eo"
                                                                href="/voitures/offres/p-3/" data-reactid="2005">3</a>
                                                        </li>
                                                        <li class="_2zwVR" data-reactid="2006"><a class="_1f-eo"
                                                                href="/voitures/offres/p-4/" data-reactid="2007">4</a>
                                                        </li>
                                                        <li class="_2zwVR" data-reactid="2008"><a class="_1f-eo"
                                                                href="/voitures/offres/p-5/" data-reactid="2009">5</a>
                                                        </li>
                                                        <li class="_2zwVR"><a class="_1f-eo"
                                                                href="/voitures/offres/p-6/">6</a></li>
                                                        <li class="_2zwVR"><a class="_1f-eo"
                                                                href="/voitures/offres/p-7/">7</a></li>
                                                        <li class="_2zwVR"><a class="_1f-eo"
                                                                href="/voitures/offres/p-8/">8</a></li>
                                                        <li class="_2zwVR"><a class="_1f-eo"
                                                                href="/voitures/offres/p-9/">9</a></li>
                                                        <li class="_2zwVR"><a class="_1f-eo"
                                                                href="/voitures/offres/p-10/">10</a></li>
                                                        <li class="_2zwVR"><a class="_1f-eo"
                                                                href="/voitures/offres/p-11/">11</a></li>
                                                        <li class="_2zwVR"><a class="_1f-eo"
                                                                href="/voitures/offres/p-12/">12</a></li>
                                                        <li class="_2zwVR"><a class="_1f-eo"
                                                                href="/voitures/offres/p-13/">13</a></li>
                                                        <li class="_2zwVR"><a class="_1f-eo"
                                                                href="/voitures/offres/p-14/">14</a></li>
                                                        <li class="_2zwVR"><a class="_1f-eo"
                                                                href="/voitures/offres/p-15/">15</a></li>
                                                        <li class="_2zwVR"><a class="_1f-eo"
                                                                href="/voitures/offres/p-16/">16</a></li>
                                                        <li class="_2zwVR"><a class="_1f-eo"
                                                                href="/voitures/offres/p-17/">17</a></li>
                                                        <li class="_2zwVR"><a class="_1f-eo"
                                                                href="/voitures/offres/p-18/">18</a></li>
                                                        <li class="_2zwVR"><a class="_1f-eo"
                                                                href="/voitures/offres/p-19/">19</a></li>
                                                        <li class="_2zwVR" data-reactid="2010"><a class="_1f-eo"
                                                                href="/voitures/offres/p-2/" data-reactid="2011"><span
                                                                    class="_1vK7W K5CQx _Od24" name="chevronright"><svg
                                                                        viewBox="0 0 24 24" data-name="Calque 1"
                                                                        focusable="false">
                                                                        <path
                                                                            d="M18.38 10.49L8.62.63a2.1 2.1 0 0 0-3 0 2.15 2.15 0 0 0 0 3L13.87 12l-8.25 8.32a2.2 2.2 0 0 0 0 3.05 2.1 2.1 0 0 0 3 0l9.76-9.86a2.14 2.14 0 0 0 0-3.02z">
                                                                        </path>
                                                                    </svg></span></a></li>
                                                    </ul>
                                                </div><!-- react-empty: 2013 -->
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="_2qwGs" data-reactid="2014">
                                    <div data-reactid="2015">
                                        <div class="_2_etK" data-reactid="2016">
                                            <ul data-reactid="2017">
                                                <li itemscope="" itemtype="http://schema.org/Offer" class="_3eDdy"
                                                    data-reactid="2018">
                                                    <div class="_3Zm0x" data-qa-id="listitem_save_ad"
                                                        data-reactid="2019">
                                                        <div data-reactid="2020">
                                                            <div class="_3C4to" data-reactid="2021">
                                                                <div class="" data-reactid="2022"><span class="_1vK7W"
                                                                        name="heartoutline"><svg viewBox="0 0 24 24"
                                                                            data-name="Calque 1" focusable="false">
                                                                            <path
                                                                                d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                            </path>
                                                                        </svg></span></div>
                                                            </div>
                                                        </div>
                                                    </div><a title="Citroën C3 Aircross BLUEHDI 100CH FEEL+JANTES D..."
                                                        class="_2fKRW" data-qa-id="aditem_container"
                                                        href="/voitures/1606745093.htm/" data-reactid="2024"><span
                                                            class="_1sbqp" data-reactid="2025">À LA UNE</span>
                                                        <div class="_2-jsN" data-reactid="2026">
                                                            <div class="LazyLoad is-visible" data-reactid="2027">
                                                                <div>
                                                                    <div class="_6ntGx"
                                                                        style="background-image: url(&quot;https://img0.leboncoin.fr/ad-image/e4035d9be05a8c765267f6bd636a057e70b6c9ab.jpg&quot;);">
                                                                    </div><img
                                                                        src="https://img0.leboncoin.fr/ad-image/e4035d9be05a8c765267f6bd636a057e70b6c9ab.jpg"
                                                                        itemprop="image"
                                                                        content="https://img0.leboncoin.fr/ad-image/e4035d9be05a8c765267f6bd636a057e70b6c9ab.jpg"
                                                                        alt="subject">
                                                                </div>
                                                            </div><span class="_3R0AG" data-reactid="2028"><span
                                                                    class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                        width="24" viewBox="0 0 24 22"
                                                                        focusable="false">
                                                                        <path
                                                                            d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                            fill="#000"></path>
                                                                    </svg></span><span
                                                                    data-reactid="2030">10</span></span>
                                                        </div>
                                                        <div class="_3beID" data-reactid="2031">
                                                            <section class="irAof" data-reactid="2032">
                                                                <div data-reactid="2033">
                                                                    <p class="_3ZfBw" data-reactid="2034"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="2035">Citroën C3 Aircross
                                                                            BLUEHDI 100CH FEEL+JANTES D...</span></p>
                                                                    <div class="CeFtS" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="2036">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="2037">
                                                                        <div class="CeFtS" itemprop="priceSpecification"
                                                                            itemscope=""
                                                                            itemtype="http://schema.org/PriceSpecification"
                                                                            data-qa-id="aditem_price"
                                                                            data-reactid="2038"><span class="_1_bNq"
                                                                                data-reactid="2039"><span
                                                                                    itemprop="price"
                                                                                    data-reactid="2040">14 990</span>
                                                                                <!-- react-text: 2041 -->&nbsp;€
                                                                                <!-- /react-text --></span></div>
                                                                    </div>
                                                                </div>
                                                                <div data-reactid="2042">
                                                                    <p class="_2a7dC" itemprop="alternateName"
                                                                        content="Voitures" data-qa-id="aditem_category"
                                                                        data-reactid="2043"><span class="_3IXZH"
                                                                            data-reactid="2044">(Pro)&nbsp;</span>
                                                                        <!-- react-text: 2045 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_1s5WJ" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="2046">Vitrolles 13127</p>
                                                                </div>
                                                            </section>
                                                            <div class="_3A9T7" data-reactid="2047"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li itemscope="" itemtype="http://schema.org/Offer" class="_3eDdy"
                                                    data-reactid="2048">
                                                    <div class="_3Zm0x" data-qa-id="listitem_save_ad"
                                                        data-reactid="2049">
                                                        <div data-reactid="2050">
                                                            <div class="_3C4to" data-reactid="2051">
                                                                <div class="" data-reactid="2052"><span class="_1vK7W"
                                                                        name="heartoutline"><svg viewBox="0 0 24 24"
                                                                            data-name="Calque 1" focusable="false">
                                                                            <path
                                                                                d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                            </path>
                                                                        </svg></span></div>
                                                            </div>
                                                        </div>
                                                    </div><a title="BMW X1 X-DRIVE 20DA BUSINESS 1°MAIN 4X4 xdrive"
                                                        class="_2fKRW" data-qa-id="aditem_container"
                                                        href="/voitures/1602463205.htm/" data-reactid="2054"><span
                                                            class="_1sbqp" data-reactid="2055">À LA UNE</span>
                                                        <div class="_2-jsN" data-reactid="2056">
                                                            <div class="LazyLoad is-visible" data-reactid="2057">
                                                                <div>
                                                                    <div class="_6ntGx"
                                                                        style="background-image: url(&quot;https://img6.leboncoin.fr/ad-image/511673448daf0b15cf3aa5580937513ee72a0f4c.jpg&quot;);">
                                                                    </div><img
                                                                        src="https://img6.leboncoin.fr/ad-image/511673448daf0b15cf3aa5580937513ee72a0f4c.jpg"
                                                                        itemprop="image"
                                                                        content="https://img6.leboncoin.fr/ad-image/511673448daf0b15cf3aa5580937513ee72a0f4c.jpg"
                                                                        alt="subject">
                                                                </div>
                                                            </div><span class="_3R0AG" data-reactid="2058"><span
                                                                    class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                        width="24" viewBox="0 0 24 22"
                                                                        focusable="false">
                                                                        <path
                                                                            d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                            fill="#000"></path>
                                                                    </svg></span><span
                                                                    data-reactid="2060">5</span></span>
                                                        </div>
                                                        <div class="_3beID" data-reactid="2061">
                                                            <section class="irAof" data-reactid="2062">
                                                                <div data-reactid="2063">
                                                                    <p class="_3ZfBw" data-reactid="2064"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="2065">BMW X1 X-DRIVE 20DA
                                                                            BUSINESS 1°MAIN 4X4 xdrive</span></p>
                                                                    <div class="CeFtS" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="2066">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="2067">
                                                                        <div class="CeFtS" itemprop="priceSpecification"
                                                                            itemscope=""
                                                                            itemtype="http://schema.org/PriceSpecification"
                                                                            data-qa-id="aditem_price"
                                                                            data-reactid="2068"><span class="_1_bNq"
                                                                                data-reactid="2069"><span
                                                                                    itemprop="price"
                                                                                    data-reactid="2070">28 500</span>
                                                                                <!-- react-text: 2071 -->&nbsp;€
                                                                                <!-- /react-text --></span></div>
                                                                    </div>
                                                                </div>
                                                                <div data-reactid="2072">
                                                                    <p class="_2a7dC" itemprop="alternateName"
                                                                        content="Voitures" data-qa-id="aditem_category"
                                                                        data-reactid="2073"><span class="_3IXZH"
                                                                            data-reactid="2074">(Pro)&nbsp;</span>
                                                                        <!-- react-text: 2075 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_1s5WJ" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="2076">Rodez 12000</p>
                                                                </div>
                                                            </section>
                                                            <div class="_3A9T7" data-reactid="2077"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li itemscope="" itemtype="http://schema.org/Offer" class="_3eDdy"
                                                    data-reactid="2078">
                                                    <div class="_3Zm0x" data-qa-id="listitem_save_ad"
                                                        data-reactid="2079">
                                                        <div data-reactid="2080">
                                                            <div class="_3C4to" data-reactid="2081">
                                                                <div class="" data-reactid="2082"><span class="_1vK7W"
                                                                        name="heartoutline"><svg viewBox="0 0 24 24"
                                                                            data-name="Calque 1" focusable="false">
                                                                            <path
                                                                                d="M21.19 2.24A6.76 6.76 0 0 0 12 3.61a6.76 6.76 0 0 0-9.19-1.37A6.89 6.89 0 0 0 0 7.58c-.16 4.84 4 8.72 10.26 14.66l.12.12a2.32 2.32 0 0 0 3.23 0l.13-.12C20 16.29 24.15 12.41 24 7.57a6.89 6.89 0 0 0-2.81-5.33zm-9.07 18.15l-.12.12-.12-.12C6.17 15 2.4 11.46 2.4 7.86a4.18 4.18 0 0 1 4.2-4.37 4.68 4.68 0 0 1 4.28 3h2.25a4.66 4.66 0 0 1 4.27-3 4.18 4.18 0 0 1 4.2 4.37c0 3.6-3.77 7.14-9.48 12.53z">
                                                                            </path>
                                                                        </svg></span></div>
                                                            </div>
                                                        </div>
                                                    </div><a title="VW T-Cross 1.0 TSI 115cv Style NEUF 0km SUREQUIPEE"
                                                        class="_2fKRW" data-qa-id="aditem_container"
                                                        href="/voitures/1618140879.htm/" data-reactid="2084"><span
                                                            class="_1sbqp" data-reactid="2085">À LA UNE</span>
                                                        <div class="_2-jsN" data-reactid="2086">
                                                            <div class="LazyLoad is-visible" data-reactid="2087">
                                                                <div>
                                                                    <div class="_6ntGx"
                                                                        style="background-image: url(&quot;https://img6.leboncoin.fr/ad-image/2bd1303c80196e3adb69e5404ca6a977a556ff95.jpg&quot;);">
                                                                    </div><img
                                                                        src="https://img6.leboncoin.fr/ad-image/2bd1303c80196e3adb69e5404ca6a977a556ff95.jpg"
                                                                        itemprop="image"
                                                                        content="https://img6.leboncoin.fr/ad-image/2bd1303c80196e3adb69e5404ca6a977a556ff95.jpg"
                                                                        alt="subject">
                                                                </div>
                                                            </div><span class="_3R0AG" data-reactid="2088"><span
                                                                    class="_1vK7W _1eOK1" name="camera"><svg height="22"
                                                                        width="24" viewBox="0 0 24 22"
                                                                        focusable="false">
                                                                        <path
                                                                            d="M12 8.556c1.988 0 3.6 1.642 3.6 3.667 0 2.024-1.612 3.666-3.6 3.666s-3.6-1.642-3.6-3.666c0-2.025 1.612-3.667 3.6-3.667zm0 9.778c3.313 0 6-2.738 6-6.111 0-3.375-2.687-6.112-6-6.112-3.312 0-6 2.737-6 6.112 0 3.373 2.688 6.11 6 6.11zm9.6-15.89c1.32 0 2.4 1.1 2.4 2.444v14.667C24 20.9 22.92 22 21.6 22H2.4C1.08 22 0 20.9 0 19.555V4.89c0-1.345 1.08-2.445 2.4-2.445h3.804L7.68.795A2.415 2.415 0 0 1 9.456 0h5.088c.672 0 1.32.294 1.764.794l1.488 1.65H21.6z"
                                                                            fill="#000"></path>
                                                                    </svg></span><span
                                                                    data-reactid="2090">10</span></span>
                                                        </div>
                                                        <div class="_3beID" data-reactid="2091">
                                                            <section class="irAof" data-reactid="2092">
                                                                <div data-reactid="2093">
                                                                    <p class="_3ZfBw" data-reactid="2094"><span
                                                                            itemprop="name" data-qa-id="aditem_title"
                                                                            data-reactid="2095">VW T-Cross 1.0 TSI 115cv
                                                                            Style NEUF 0km SUREQUIPEE</span></p>
                                                                    <div class="CeFtS" itemprop="priceSpecification"
                                                                        itemscope=""
                                                                        itemtype="http://schema.org/PriceSpecification"
                                                                        data-qa-id="aditem_price" data-reactid="2096">
                                                                        <meta itemprop="priceCurrency" content="EUR"
                                                                            data-reactid="2097">
                                                                        <div class="CeFtS" itemprop="priceSpecification"
                                                                            itemscope=""
                                                                            itemtype="http://schema.org/PriceSpecification"
                                                                            data-qa-id="aditem_price"
                                                                            data-reactid="2098"><span class="_1_bNq"
                                                                                data-reactid="2099"><span
                                                                                    itemprop="price"
                                                                                    data-reactid="2100">22 990</span>
                                                                                <!-- react-text: 2101 -->&nbsp;€
                                                                                <!-- /react-text --></span></div>
                                                                    </div>
                                                                </div>
                                                                <div data-reactid="2102">
                                                                    <p class="_2a7dC" itemprop="alternateName"
                                                                        content="Voitures" data-qa-id="aditem_category"
                                                                        data-reactid="2103"><span class="_3IXZH"
                                                                            data-reactid="2104">(Pro)&nbsp;</span>
                                                                        <!-- react-text: 2105 -->Voitures
                                                                        <!-- /react-text -->
                                                                    </p>
                                                                    <p class="_1s5WJ" itemprop="availableAtOrFrom"
                                                                        data-qa-id="aditem_location"
                                                                        data-reactid="2106">Ruaudin 72230</p>
                                                                </div>
                                                            </section>
                                                            <div class="_3A9T7" data-reactid="2107"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="advertisingSkyscraper" data-reactid="2108">
                                        <div class="initPosition" data-reactid="2109" style="height: 5348px;">
                                            <div class="_39t72" data-reactid="2110"
                                                style="width: 310px; height: 620px; position: relative;">
                                                <div class="apn-sk skyscraper _3beIN _3O6XM" data-reactid="2111"><span
                                                        id="sk-l" class="teal-apn" data-reactid="2112"></span><span
                                                        id="sk-xl" class="teal-apn" data-reactid="2113"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_2joc2 apn-sk skyscraper" data-reactid="2114"><span id="sk-m"
                                        class="teal-apn" data-reactid="2115"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="_-o_FS" data-reactid="2116">
                        <section class="_3f6Yo" data-reactid="2117">
                            <div class="_1AsHn _3-IRH" data-reactid="2118">
                                <div class="_3r6oA" data-reactid="2119">
                                    <ul data-reactid="2120">
                                        <li class="_2mlAz" data-reactid="2121">Voitures autres régions</li>
                                        <li data-reactid="2122"><a title="Voiture occasion en Ile-de-France"
                                                class="trackable" href="#"
                                                data-reactid="2123">Voiture occasion en Ile-de-France</a></li>
                                        <li data-reactid="2124"><a title="Voiture occasion dans le Rhône-Alpes"
                                                class="trackable" href="#"
                                                data-reactid="2125">Voiture occasion dans le Rhône-Alpes</a></li>
                                        <li data-reactid="2126"><a
                                                title="Voiture occasion en Provence Alpes Côte-d'Azur" class="trackable"
                                                href="#"
                                                data-reactid="2127">Voiture occasion en Provence Alpes Côte-d'Azur</a>
                                        </li>
                                        <li data-reactid="2128"><a title="Voiture occasion dans le Nord Pas-le-Calais"
                                                class="trackable" href="#"
                                                data-reactid="2129">Voiture occasion dans le Nord Pas-le-Calais</a></li>
                                    </ul>
                                </div>
                                <div class="_3r6oA" data-reactid="2130">
                                    <ul data-reactid="2131">
                                        <li class="_2mlAz" data-reactid="2132">Voitures autres départements</li>
                                        <li data-reactid="2133"><a title="Achat voiture dans le Nord" class="trackable"
                                        href="#"
                                                data-reactid="2134">Achat voiture dans le Nord</a></li>
                                        <li data-reactid="2135"><a title="Vente voiture dans le Rhône" class="trackable"
                                        href="#" data-reactid="2136">Vente
                                                voiture dans le Rhône</a></li>
                                        <li data-reactid="2137"><a title="Achat voiture dans les Bouches du Rhône"
                                                class="trackable"
                                                href="#"
                                                data-reactid="2138">Achat voiture dans les Bouches du Rhône</a></li>
                                        <li data-reactid="2139"><a title="Achat voiture en Gironde" class="trackable"
                                        href="#" data-reactid="2140">Achat
                                                voiture en Gironde</a></li>
                                    </ul>
                                </div>
                                <div class="_3r6oA" data-reactid="2141">
                                    <ul data-reactid="2142">
                                        <li class="_2mlAz" data-reactid="2143">Autres catégories</li>
                                        <li data-reactid="2144"><a title="Motos" class="trackable"  href="#"
                                                data-reactid="2145">Motos</a></li>
                                        <li data-reactid="2146"><a title="Equipement Moto" class="trackable"
                                        href="#" data-reactid="2147">Equipement Moto</a>
                                        </li>
                                        <li data-reactid="2148"><a title="Equipement Auto" class="trackable"
                                        href="#" data-reactid="2149">Equipement Auto</a>
                                        </li>
                                        <li data-reactid="2150"><a title="Utilitaires" class="trackable"
                                        href="#" data-reactid="2151">Utilitaires</a></li>
                                    </ul>
                                </div>
                                <div class="_3r6oA" data-reactid="2152">
                                    <ul data-reactid="2153">
                                        <li class="_2mlAz" data-reactid="2154">Autres univers</li>
                                        <li data-reactid="2155"><a title="Vehicules" class="trackable"
                                                href="#" data-reactid="2156">Vehicules</a></li>
                                        <li data-reactid="2157"><a title="Immobilier" class="trackable"
                                        href="#" data-reactid="2158">Immobilier</a></li>
                                        <li data-reactid="2159"><a title="Vacances" class="trackable"
                                        href="#" data-reactid="2160">Vacances</a></li>
                                        <li data-reactid="2161"><a title="Matériel pro" class="trackable"
                                        href="#" data-reactid="2162">Matériel
                                                pro</a></li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                    </div><!-- react-empty: 2163 -->
                    <!-- react-empty: 2164 -->
                </div>
                <footer class="_3mBNy bg-dark" data-reactid="503">
                    <div class="_1AsHn In37K" data-reactid="504">
                        <div data-reactid="505">
                            <div class="_3Qo_G" data-reactid="506">
                                <div class="_11PoU" data-reactid="507">
                                    <div class="_2OUWH" data-reactid="508">
                                        <div class="_2hBLN" data-reactid="509">
                                            <div data-reactid="510">
                                                <div class="_1et7J" data-reactid="511">à propos du boncoin</div>
                                                <ul data-reactid="512">
                                                    <li class="jU6hB" data-reactid="513"><a href="#" target="_blank"
                                                            rel="noopener" title="Qui sommes-nous ?" class="trackable"
                                                            data-reactid="514">Qui sommes-nous ?</a></li>
                                                    <li class="jU6hB" data-reactid="515"><a href="#"
                                                            title="Nous rejoindre" class="trackable"
                                                            data-reactid="516">Nous rejoindre</a></li>
                                                    <li class="jU6hB" data-reactid="517"><a href="#" target="_blank"
                                                            rel="noopener" title="Impact environnemental"
                                                            class="trackable" data-reactid="518">Impact
                                                            environnemental</a></li>
                                                </ul>
                                            </div>
                                            <div data-reactid="519">
                                                <div class="_1et7J" data-reactid="520">nos applications</div>
                                                <div class="_3OlaR" data-reactid="521">
                                                    <div class="Hu8DU" data-reactid="522"><a rel="nofollow noopener"
                                                            href="#" title="Télécharger l'application iOS"
                                                            data-reactid="523">
                                                            <div class="LazyLoad is-visible" data-reactid="524"><im
                                                                    alt="Télécharger l'application iOS"
                                                                    src="//static-rav.leboncoin.fr/9ab03c572ecbc7bf61468c7b044cbdb5.png">
                                                            </div>
                                                        </a></div>
                                                    <div class="Hu8DU" data-reactid="525"><a rel="nofollow noopener"
                                                            href="#" title="Télécharger l'application Android"
                                                            data-reactid="526">
                                                            <div class="LazyLoad is-visible" data-reactid="527"><img
                                                                    alt="Télécharger l'application Android"
                                                                    src="//static-rav.leboncoin.fr/45fc725d71c66e01477a6311ded6e1ea.png">
                                                            </div>
                                                        </a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_2hBLN" data-reactid="528">
                                            <div data-reactid="529">
                                                <div class="_1et7J" data-reactid="530">informations légales</div>
                                                <ul data-reactid="531">
                                                    <li class="jU6hB" data-reactid="532"><a rel="nofollow" href="#"
                                                            title="Conditions générales d'utilisation" class="trackable"
                                                            data-reactid="533">Conditions générales d’utilisation</a>
                                                    </li>
                                                    <li class="jU6hB" data-reactid="534"><a rel="nofollow" href="#"
                                                            title="Règles de diffusion, de référencement et de déréférencement"
                                                            class="trackable" data-reactid="535">Règles de diffusion, de
                                                            référencement et de déréférencement</a></li>
                                                    <li class="jU6hB" data-reactid="536"><a rel="nofollow" href="#"
                                                            title="Conditions générales de vente" class="trackable"
                                                            data-reactid="537">Conditions Générales de Vente</a></li>
                                                    <li class="jU6hB" data-reactid="538"><a rel="nofollow" href="#"
                                                            title="Vie privée / cookies" class="trackable"
                                                            data-reactid="539">Vie privée / cookies</a></li>
                                                    <li class="jU6hB" data-reactid="540"><a rel="nofollow" href="#"
                                                            title="Vos droits et obligations" class="trackable"
                                                            data-reactid="541">Vos droits et obligations</a></li>
                                                    <li class="jU6hB" data-reactid="542"><a rel="nofollow" href="#"
                                                            title="Critères de classement" class="trackable"
                                                            data-reactid="543">Critères de classement</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="_2hBLN" data-reactid="544">
                                            <div data-reactid="545">
                                                <div class="_1et7J" data-reactid="546">professionnels</div>
                                                <ul data-reactid="547">
                                                    <li class="jU6hB" data-reactid="548"><a href="#" title="Publicité"
                                                            class="trackable" data-reactid="549">Publicité</a></li>
                                                    <li class="jU6hB" data-reactid="550"><a rel="nofollow" href="#"
                                                            title="Professionnels de l'immobilier" class="trackable"
                                                            data-reactid="551">Professionnels de l’immobilier</a></li>
                                                    <li class="jU6hB" data-reactid="552"><a href="#"
                                                            title="Vos recrutements" class="trackable"
                                                            data-reactid="553">Vos
                                                            recrutements</a></li>
                                                    <li class="jU6hB" data-reactid="554"><a href="#" target="_blank"
                                                            rel="noopener" title="Toutes nos solutions pros"
                                                            class="trackable" data-reactid="555">Toutes nos solutions
                                                            pros</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="_2hBLN" data-reactid="556">
                                            <div data-reactid="557">
                                                <div class="_1et7J" data-reactid="558">des questions ?</div>
                                                <ul data-reactid="559">
                                                    <li class="jU6hB" data-reactid="560"><a href="#"" title=" Aide"
                                                            class="trackable" data-reactid="561">Aide</a></li>
                                                    <li class="jU6hB" data-reactid="562"><a rel="nofollow" href="#"
                                                            title="Nous contacter" class="trackable"
                                                            data-reactid="563">Nous contacter</a></li>
                                                </ul>
                                            </div>
                                            <!-- <div data-reactid="564">
                                    <div class="_1et7J" data-reactid="565">vous êtes à l’étranger ?</div>
                                    <div class="_3yAoU" data-reactid="566"><span class="_1vK7W" name="flag_fr"><svg
                                                height="336" width="512" viewBox="0 0 512 336" focusable="false">
                                                <g fill="none">
                                                    <path
                                                        d="M170.667 335.724H8.828A8.829 8.829 0 0 1 0 326.896V9.103A8.829 8.829 0 0 1 8.828.275h161.839v335.449z"
                                                        fill="#41479B"></path>
                                                    <path d="M170.67.276h170.67v335.448H170.67z" fill="#F5F5F5"></path>
                                                    <path
                                                        d="M503.172 335.724H341.333V.276h161.839A8.829 8.829 0 0 1 512 9.104v317.793a8.828 8.828 0 0 1-8.828 8.827z"
                                                        fill="#FF4B55"></path>
                                                </g>
                                            </svg></span>France
                              
                                        <div class="_1iQJ3" data-reactid="569"><span class="_1vK7W"
                                                name="chevrondown"><svg viewBox="0 0 24 24" data-name="Calque 1"
                                                    focusable="false">
                                                    <path
                                                        d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                    </path>
                                                </svg></span></div>
                                    </div>
                                </div> -->
                                        </div>
                                    </div>
                                    <div class="eSGyC" data-reactid="571">
                                        <div class="Dpc6O" data-reactid="572">
                                            <!-- react-text: 573 -->Partenaires :
                                            <!-- /react-text -->
                                            <div class="_2j8cI" data-reactid="574"><a href="#" target="_blank"
                                                    rel="noopener" title="Younited Credit" class="trackable"
                                                    data-reactid="575">Younited Credit</a></div>
                                            <div class="_2j8cI" data-reactid="576"><a href="#" target="_blank"
                                                    rel="noopener" title="leboncoin Emploi Cadres" class="trackable"
                                                    data-reactid="577">jamii Emploi Cadres</a></div>
                                            <div class="_2j8cI" data-reactid="578"><a href="#" target="_blank"
                                                    rel="noopener" title="Agriaffaires" class="trackable"
                                                    data-reactid="579">Agriaffaires</a></div>
                                            <div class="_2j8cI" data-reactid="580"><a href="#" target="_blank"
                                                    rel="noopener" title="MachineryZone" class="trackable"
                                                    data-reactid="581">MachineryZone</a></div>
                                            <div class="_2j8cI" data-reactid="582"><a href="#" target="_blank"
                                                    rel="noopener" title="leDénicheur" class="trackable"
                                                    data-reactid="583">leDénicheur</a></div>
                                            <div class="_2j8cI" data-reactid="584"><a href="#" target="_blank"
                                                    rel="noopener" title="AVendreALouer" class="trackable"
                                                    data-reactid="585">AVendreALouer</a></div>
                                            <div class="_2j8cI" data-reactid="586"><a href="#" target="_blank"
                                                    rel="noopener" title="leboncoin Immobilier Neuf" class="trackable"
                                                    data-reactid="587">jamii Immobilier Neuf</a></div>
                                            <div class="_2j8cI" data-reactid="588"><a href="#" target="_blank"
                                                    rel="noopener" title="Videdressing" class="trackable"
                                                    data-reactid="589">Videdressing</a></div>
                                            <div class="_2j8cI" data-reactid="590"><a href="#" target="_blank"
                                                    rel="noopener" title="Locasun - Les locations vacances"
                                                    class="trackable" data-reactid="591">Locasun</a></div>
                                            <div class="_2j8cI" data-reactid="592"><a href="#" target="_blank"
                                                    rel="noopener"
                                                    title="Locasun-vp - Ventes privées de locations vacances et weekends"
                                                    class="trackable" data-reactid="593">Locasun-vp</a></div>
                                            <div class="_2j8cI" data-reactid="594"><a href="#" target="_blank"
                                                    rel="noopener" title="Paycar" class="trackable"
                                                    data-reactid="595">Paycar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_29yTo" data-reactid="596">
                                    <div data-reactid="597">
                                        <!-- react-text: 598 -->jamii 2019 -
                                        <!-- /react-text -->
                                        <!-- react-text: 599 -->2030
                                        <!-- /react-text -->
                                    </div>
                                    <div class="_1eQmv" data-reactid="600">
                                        <div class="_11PoU" data-reactid="601">Retrouvez-nous sur</div><a
                                            class="_2j7FF trackable" href="#" rel="noopener nofollow"
                                            data-reactid="602"><span class="_1vK7W" name="facebook"><svg
                                                    viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                    <path
                                                        d="M22.68 0H1.32A1.32 1.32 0 0 0 0 1.32v21.36A1.32 1.32 0 0 0 1.32 24h11.51v-9.28H9.7v-3.63h3.13V8.41c0-3.1 1.88-4.79 4.65-4.79H18.87c.47 0 .93.06 1.4.11V7h-1.92a3 3 0 0 0-.71.07c-.87.21-1.07.84-1.07 1.69v2.31h3.6l-.47 3.63h-3.15V24h6.13A1.32 1.32 0 0 0 24 22.68V1.32A1.32 1.32 0 0 0 22.68 0z">
                                                    </path>
                                                </svg></span></a><a class="_2j7FF trackable" href="#"
                                            rel="noopener nofollow" data-reactid="604"><span class="_1vK7W"
                                                name="twitter"><svg viewBox="0 0 24 24" data-name="Calque 1"
                                                    focusable="false">
                                                    <path
                                                        d="M22.67 0H1.33A1.32 1.32 0 0 0 0 1.33v21.34A1.32 1.32 0 0 0 1.33 24h21.34A1.32 1.32 0 0 0 24 22.67V1.33A1.32 1.32 0 0 0 22.67 0zM18.4 8.78c-.11 5.53-3.6 9.38-8.9 9.62A8.77 8.77 0 0 1 4.33 17 6.4 6.4 0 0 0 9 15.64a3.25 3.25 0 0 1-3-2.29 4.84 4.84 0 0 0 1.32 0 3.27 3.27 0 0 1-2.51-3.25 2.42 2.42 0 0 0 1.32.36 3.55 3.55 0 0 1-1-4.33 9.5 9.5 0 0 0 6.65 3.37c-.78-3.37 3.74-5.17 5.54-2.89a8.17 8.17 0 0 0 2.05-.72 3.32 3.32 0 0 1-1.32 1.8 6.46 6.46 0 0 0 1.68-.48c-.12.61-.73 1.09-1.33 1.57z">
                                                    </path>
                                                </svg></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </main><!-- react-empty: 2268 -->
        <div class="_3kopx" data-reactid="2269"></div>
    </section>
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

</body>

</html>