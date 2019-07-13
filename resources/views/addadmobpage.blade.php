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
    <!-- Header -->
    @include('partials.header')
    <!-- /Header -->

    <!-- Home Section -->
    <section class="_33KQ9">
        <!-- react-empty: 1089 -->
        <div class="iD56L">
            <div class="_3ZAZw">
                <div class="_1OdoT">
                    <div class="_1i0e0">
                        <h1 class="_3MDJa dgtty">Déposer une annonce</h1>
                    </div>
                </div>
                <div>
                    <div class="_14s_w tShLp">
                        <div class="UDd7g">
                            <div class="_2kY5F">
                                <div class="_1i0e0 _2siHy _38NUf">
                                    <div class="_3Bswj">
                                        <div class="_3QHYd">
                                            <h3 class="_3MDJa _30A-8">Choisissez la catégorie</h3>
                                        </div>
                                        <form>
                                            <div class="LzDnW">
                                                <div class="_3lCVd">
                                                    <div class="_3bAPj">Catégorie</div>
                                                    <div class="_1etKl">
                                                        <div class="_26tGy"><span class="_1vK7W _2jG3V"
                                                                name="chevrondown"><svg viewBox="0 0 24 24"
                                                                    data-name="Calque 1" focusable="false">
                                                                    <path
                                                                        d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                                    </path>
                                                                </svg></span></div>
                                                        <div class="_2gTTZ">
                                                            <div data-qa-id="newad-select_category">Équipement auto
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="_3lCVd">
                                                    <div class="_3bAPj">Type d’annonce</div>
                                                    <div class="_1rAJm">
                                                        <div class="_1IpS7"><label class="_1fypT"
                                                                data-qa-id="adType_offre"><input type="radio"
                                                                    value="sell" name="adType" class="_1L8pO"><span
                                                                    class="T9pXm"><span
                                                                        class="_3oEwn"></span><span>Offre</span></span></label>
                                                            <div class="_3b90f">Vous vendez un équipement auto.</div>
                                                        </div>
                                                        <div class="_1IpS7"><label class="_1fypT"
                                                                data-qa-id="adType_demande"><input type="radio"
                                                                    value="buy" name="adType" class="_1L8pO"><span
                                                                    class="T9pXm"><span
                                                                        class="_3oEwn"></span><span>Demande</span></span></label>
                                                            <div class="_3b90f">Vous recherchez un équipement auto.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_2Qp5n"><button class="_2sNbI _1xIyN _2xk2l _3FcC9"
                                                    type="submit" data-qa-id="newad-button-next-categories">
                                                    <!-- react-text: 2967 -->Continuer
                                                    <!-- /react-text --></button></div>
                                        </form>
                                    </div>
                                    <div class="_1aYAF">
                                        <div class="_2BPbl">
                                            <div class="o73DF"></div>
                                            <div class="Hunbm"><span class="_1vK7W" name="lightbulboutline"><svg
                                                        viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                        <path
                                                            d="M5.56 4.77l-.43-.42a1.09 1.09 0 0 0-1.53 0 1 1 0 0 0 0 1.47l.4.42a1 1 0 0 0 1.41 0 .92.92 0 0 0 .15-1.47zM2.18 11.48H1.09a1 1 0 1 0 0 2.09h1.09a1.07 1.07 0 0 0 1.09-1.05 1 1 0 0 0-1.09-1.04zM12 4a1 1 0 0 0 1.09-1v-.95a1.09 1.09 0 0 0-2.18 0V3.1A1.06 1.06 0 0 0 12 4zM20.51 4.35a1.09 1.09 0 0 0-1.53 0l-.43.42a1 1 0 0 0 0 1.47 1.07 1.07 0 0 0 1.52 0l.44-.42a1.22 1.22 0 0 0 0-1.47zM12.87 6.24a6.44 6.44 0 0 0-7.42 6.18 6.22 6.22 0 0 0 3.28 5.45V22a1.14 1.14 0 0 0 1.09 1h4.36a1.14 1.14 0 0 0 1.09-1v-4a6.24 6.24 0 0 0 3.17-6.39 6.36 6.36 0 0 0-5.57-5.37zm1.31 9.85l-1.09.62v4.19h-2.18v-4.19l-1.09-.62a4.21 4.21 0 0 1-2.18-3.67A4.29 4.29 0 0 1 12 8.23a4.29 4.29 0 0 1 4.36 4.19 4.21 4.21 0 0 1-2.18 3.67zM22.91 11.48h-1.09a1 1 0 1 0 0 2.09h1.09A1.08 1.08 0 0 0 24 12.52a1 1 0 0 0-1.09-1.04z">
                                                        </path>
                                                    </svg></span></div>
                                            <div class="o73DF"></div>
                                        </div>
                                        <div><span>
                                                <!-- react-text: 1611 -->Votre annonce sera trouvée plus facilement !
                                                <!-- /react-text --><br><br><!-- react-text: 1614 -->Vous aurez 50% de
                                                chances en plus d’être contacté si votre annonce est dans la bonne
                                                catégorie.
                                                <!-- /react-text --></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="_14s_w">
                        <div class="_1i0e0 _2siHy _3aduF">
                            <div class="_1NSYj"></div>
                            <div class="_3Bswj">
                                <div class="_3QHYd">
                                    <h3 class="_3MDJa _30A-8">Décrivez vous</h3>
                                </div>
                                <form>
                                    <div class="_3KRvg">
                                        <div class="zfCs0 _2R7h7">
                                            <div><label class="TMFen" for="subject">
                                                    <!-- react-text: 1406 -->Poste recherché
                                                    <!-- /react-text -->
                                                    <!-- react-text: 1407 -->*
                                                    <!-- /react-text --></label>
                                                <div class="_2wuZK"><input type="text" class="_2erBM QY7wN"
                                                        data-qa-id="newad-input_subject" maxlength="100"
                                                        value="good house" name="subject" disabled=""><span
                                                        class="_2x7fK">H/F</span></div>
                                                <div class="Z4c6m">
                                                    <div class="_2Kpxj _3iULV _3K12h">
                                                        <div><span>
                                                                <!-- react-text: 1502 -->Votre annonce sera refusée si
                                                                le titre ne décrit pas précisément le type de poste que
                                                                vous recherchez.
                                                                <!-- /react-text --><br></span><span>
                                                                <!-- react-text: 1505 -->Ne pas mentionner "Recherche"
                                                                dans le titre.
                                                                <!-- /react-text --><br></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_3GY3c">
                                            <div><label class="_2GeK6" for="body">
                                                    <!-- react-text: 1414 -->Description de vos expériences
                                                    <!-- /react-text -->
                                                    <!-- react-text: 1415 -->*
                                                    <!-- /react-text --></label><textarea maxlength="4000" name="body"
                                                    class="_2qGx6 _2TtNy" data-qa-id="newad-text_body" cols="20"
                                                    rows="30" disabled="">hjhjhjhjhjhjhklklklklk</textarea>
                                                <div class="_2yACb">
                                                    <div class="_2Kpxj _3iULV _3K12h">
                                                        <div><span>
                                                                <!-- react-text: 1511 -->La loi interdit toute mention
                                                                discriminatoire, en particulier sur le sexe, l'âge,
                                                                l'état de santé et la nationalité.
                                                                <!-- /react-text --><br></span><span>
                                                                <!-- react-text: 1514 -->Seul le travail déclaré est
                                                                autorisé.
                                                                <!-- /react-text --><br></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_3lDmP">
                                        <div class="_39Nsm">
                                            <div><button class="_2sNbI e943h" type="button"
                                                    data-qa-id="newad-button-prev-description" disabled="">
                                                    <!-- react-text: 1421 -->Retour
                                                    <!-- /react-text --></button></div>
                                            <div><button class="_2sNbI e943h" type="submit"
                                                    data-qa-id="newad-button-next-description" disabled="">
                                                    <!-- react-text: 1424 -->Continuer
                                                    <!-- /react-text --></button></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="_1aYAF"></div>
                        </div>
                    </div>
                    <div class="_14s_w">
                        <div class="_1i0e0 _2siHy">
                            <div class="_1NSYj"></div>
                            <div class="_3Bswj">
                                <div class="_3QHYd">
                                    <h3 class="_3MDJa _30A-8">Ajoutez des photos</h3>
                                </div>
                                <div class="_2NSAq">
                                    <div>
                                        <div class="_1nB62">
                                            <div class="TpVkZ _1znw4" aria-disabled="false">
                                                <div class="l1Oku">
                                                    <div class="_11wrr">
                                                        <div class="_2hSIh _2858t _26o9N" data-qa-id="newad-add_photos">
                                                            <div class="_35a0H"><span class="_1vK7W _1Dmcp"
                                                                    name="cameramore"><svg viewBox="0 0 24 24"
                                                                        data-name="Calque 1" focusable="false">
                                                                        <path
                                                                            d="M21.15 6.4H19a.8.8 0 0 1-.58-.26L17 4.58a.77.77 0 0 0-.58-.26h-5.14a1 1 0 1 0 0 2.08h4.22a.79.79 0 0 1 .58.25l1.43 1.57a.79.79 0 0 0 .58.25h3.06a.78.78 0 0 1 .78.79v10.88a.78.78 0 0 1-.78.78h-15a.78.78 0 0 1-.78-.78v-7.82a1 1 0 1 0-2.07 0v7.82A2.86 2.86 0 0 0 6.16 23h15A2.86 2.86 0 0 0 24 20.14V9.26a2.86 2.86 0 0 0-2.85-2.86z">
                                                                        </path>
                                                                        <path
                                                                            d="M15.06 19.7a5.09 5.09 0 0 0 3.58-3.59 5.19 5.19 0 0 0-6.39-6.41 5.07 5.07 0 0 0-3.58 3.59 5.2 5.2 0 0 0 6.39 6.41zm-4.34-6a3 3 0 0 1 1.92-1.92 3.12 3.12 0 0 1 3.95 4 3.06 3.06 0 0 1-1.91 1.93 3.13 3.13 0 0 1-3.96-4.04zM3.31 8.68a1 1 0 1 0 2.07 0V6.4h2.28a1 1 0 0 0 0-2.08H5.38V2a1 1 0 1 0-2.07 0v2.32H1A1 1 0 0 0 1 6.4h2.31z">
                                                                        </path>
                                                                    </svg></span>
                                                                <p id="refDrop">Ajouter des photos</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="_11wrr">
                                                        <div class="_2hSIh _26o9N"><img alt="products"
                                                                src="https://img7.leboncoin.fr/ad-image/bdf4d717667dfa32679eb356b084677d5299c703.jpg"><span
                                                                data-qa-id="newad-remove-image" class="_26mZh"><span
                                                                    class="_1vK7W" name="close"><svg viewBox="0 0 24 24"
                                                                        data-name="Calque 1" focusable="false">
                                                                        <path
                                                                            d="M23.47 20.9l-8.9-8.9 8.9-8.9A1.81 1.81 0 0 0 20.9.55L12 9.43 3.1.53A1.82 1.82 0 0 0 .53 3.1l8.9 8.9-8.9 8.9a1.82 1.82 0 0 0 2.57 2.57l8.9-8.9 8.9 8.9a1.82 1.82 0 0 0 2.57-2.57z">
                                                                        </path>
                                                                    </svg></span></span>
                                                            <div class="_35a0H"><span class="_1vK7W _3p-rd"
                                                                    name="cameraoutline"><svg viewBox="0 0 24 24"
                                                                        data-name="Calque 1" focusable="false">
                                                                        <path
                                                                            d="M21.6 3.54h-3.8L15.6 1.1H8.4L6.2 3.54H2.4A2.43 2.43 0 0 0 0 6v14.66a2.43 2.43 0 0 0 2.4 2.44h19.2a2.43 2.43 0 0 0 2.4-2.44V6a2.43 2.43 0 0 0-2.4-2.46zm0 17.12H2.4V6h4.86l2.2-2.45h5.08L16.74 6h4.86zM12 7.21a6.11 6.11 0 1 0 6 6.11 6.06 6.06 0 0 0-6-6.11zM12 17a3.67 3.67 0 1 1 3.6-3.67A3.65 3.65 0 0 1 12 17z">
                                                                        </path>
                                                                    </svg></span>
                                                                <p>Photo n°1</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="_11wrr">
                                                        <div class="_2hSIh _26o9N ufciE">
                                                            <div class="_35a0H"><span class="_1vK7W _3p-rd"
                                                                    name="cameraoutline"><svg viewBox="0 0 24 24"
                                                                        data-name="Calque 1" focusable="false">
                                                                        <path
                                                                            d="M21.6 3.54h-3.8L15.6 1.1H8.4L6.2 3.54H2.4A2.43 2.43 0 0 0 0 6v14.66a2.43 2.43 0 0 0 2.4 2.44h19.2a2.43 2.43 0 0 0 2.4-2.44V6a2.43 2.43 0 0 0-2.4-2.46zm0 17.12H2.4V6h4.86l2.2-2.45h5.08L16.74 6h4.86zM12 7.21a6.11 6.11 0 1 0 6 6.11 6.06 6.06 0 0 0-6-6.11zM12 17a3.67 3.67 0 1 1 3.6-3.67A3.65 3.65 0 0 1 12 17z">
                                                                        </path>
                                                                    </svg></span>
                                                                <p>Photo n°2</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="_11wrr">
                                                        <div class="_2hSIh _26o9N ufciE">
                                                            <div class="_35a0H"><span class="_1vK7W _3p-rd"
                                                                    name="cameraoutline"><svg viewBox="0 0 24 24"
                                                                        data-name="Calque 1" focusable="false">
                                                                        <path
                                                                            d="M21.6 3.54h-3.8L15.6 1.1H8.4L6.2 3.54H2.4A2.43 2.43 0 0 0 0 6v14.66a2.43 2.43 0 0 0 2.4 2.44h19.2a2.43 2.43 0 0 0 2.4-2.44V6a2.43 2.43 0 0 0-2.4-2.46zm0 17.12H2.4V6h4.86l2.2-2.45h5.08L16.74 6h4.86zM12 7.21a6.11 6.11 0 1 0 6 6.11 6.06 6.06 0 0 0-6-6.11zM12 17a3.67 3.67 0 1 1 3.6-3.67A3.65 3.65 0 0 1 12 17z">
                                                                        </path>
                                                                    </svg></span>
                                                                <p>Photo n°3</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><input type="file" accept="image/jpeg, image/png, image/gif"
                                                    multiple="" autocomplete="off" style="display: none;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="BB7X4">
                                    <div class="_39Nsm">
                                        <div><button class="_2sNbI e943h" type="button"
                                                data-qa-id="newad-button-prev-pictures" disabled="">
                                                <!-- react-text: 1272 -->Retour
                                                <!-- /react-text --></button></div>
                                        <div><button class="_2sNbI e943h" type="submit"
                                                data-qa-id="newad-button-next-pictures" disabled="">
                                                <!-- react-text: 1275 -->Continuer
                                                <!-- /react-text --></button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="_1aYAF"></div>
                        </div>
                    </div>
                    <div class="_14s_w">
                        <div class="_1i0e0 _2siHy _1emXg">
                            <div class="_1NSYj"></div>
                            <div class="_3Bswj">
                                <div class="_3QHYd">
                                    <h3 class="_3MDJa _30A-8">Où vous situez-vous ?</h3>
                                </div>
                                <div class="_2-T4y">
                                    <form>
                                        <div>
                                            <div class="n0W59">
                                                <div role="combobox" aria-expanded="false" aria-haspopup="listbox"
                                                    aria-labelledby="downshift-1-label">
                                                    <div class="_3jQxT">
                                                        <div class="_326Lx">
                                                            <div class="_2sDcJ" data-tip="" data-place="right"
                                                                data-scroll-hide="true" currentitem="false"><span
                                                                    class="_1vK7W _1eOK1" name="geoloc"><svg
                                                                        viewBox="0 0 24 24" data-name="Calque 1"
                                                                        focusable="false">
                                                                        <path
                                                                            d="M12 7.64A4.36 4.36 0 1 0 16.36 12 4.36 4.36 0 0 0 12 7.64zm9.75 3.27a9.8 9.8 0 0 0-8.66-8.66V1.09a1.09 1.09 0 1 0-2.18 0v1.16a9.8 9.8 0 0 0-8.66 8.66H1.09a1.09 1.09 0 0 0 0 2.18h1.16a9.8 9.8 0 0 0 8.66 8.66v1.16a1.09 1.09 0 0 0 2.18 0v-1.16a9.8 9.8 0 0 0 8.66-8.66h1.16a1.09 1.09 0 0 0 0-2.18zM12 19.64A7.64 7.64 0 1 1 19.64 12 7.64 7.64 0 0 1 12 19.64z">
                                                                        </path>
                                                                    </svg></span></div>
                                                        </div><input type="text" aria-autocomplete="list"
                                                            aria-labelledby="downshift-1-label" autocomplete="off"
                                                            value="Paris (75001)" id="downshift-1-input"
                                                            class="input full address _2e58F" name="address"
                                                            data-qa-id="newad-input_address"
                                                            placeholder="Renseignez votre adresse ou votre ville"
                                                            data-tip="Nous n’afficherons pas votre adresse sur l’annonce"
                                                            data-place="bottom" currentitem="false" disabled=""><button
                                                            class="_1SIJo" type="button" disabled=""><span
                                                                class="_1vK7W _1eOK1" name="search"><svg
                                                                    viewBox="0 0 24 24" data-name="Calque 1"
                                                                    focusable="false">
                                                                    <path
                                                                        d="M23.58 21.45l-7-7a9.42 9.42 0 0 0 1.62-6.87A9.13 9.13 0 0 0 10.34.07a9.25 9.25 0 0 0-2.81 18.27 9.25 9.25 0 0 0 7-1.76l7 7a1.54 1.54 0 0 0 2.11 0 1.56 1.56 0 0 0-.06-2.13zM9.22 15.5a6.37 6.37 0 1 1 6.33-6.37 6.33 6.33 0 0 1-6.33 6.37z">
                                                                    </path>
                                                                </svg></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_15M3j">
                                                <div class="sF8mr" data-qa-id="locationMap_container">
                                                    <div class="leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                                                        tabindex="-1">
                                                        <!-- react-empty: 1311 -->
                                                        <!-- react-empty: 1312 -->
                                                        <!-- react-empty: 1554 -->
                                                        <div class="leaflet-pane leaflet-map-pane"
                                                            style="transform: translate3d(39px, 98px, 0px);">
                                                            <div class="leaflet-pane leaflet-tile-pane">
                                                                <div class="leaflet-layer "
                                                                    style="z-index: 1; opacity: 1;">
                                                                    <div class="leaflet-tile-container leaflet-zoom-animated"
                                                                        style="z-index: 19; transform: translate3d(-1362px, -309px, 0px) scale(2);">
                                                                    </div>
                                                                    <div class="leaflet-tile-container leaflet-zoom-animated"
                                                                        style="z-index: 20; transform: translate3d(-454px, -103px, 0px) scale(1);">
                                                                        <img alt="" role="presentation"
                                                                            src="https://proxytile-1.leboncoin.fr/maptile/2.1/maptile/newest/normal.day/8/129/87/256/png8?lg=fre"
                                                                            class="leaflet-tile leaflet-tile-loaded"
                                                                            style="width: 256px; height: 256px; transform: translate3d(652px, -90px, 0px); opacity: 1;"><img
                                                                            alt="" role="presentation"
                                                                            src="https://proxytile-2.leboncoin.fr/maptile/2.1/maptile/newest/normal.day/8/130/87/256/png8?lg=fre"
                                                                            class="leaflet-tile leaflet-tile-loaded"
                                                                            style="width: 256px; height: 256px; transform: translate3d(908px, -90px, 0px); opacity: 1;"><img
                                                                            alt="" role="presentation"
                                                                            src="https://proxytile-2.leboncoin.fr/maptile/2.1/maptile/newest/normal.day/8/129/88/256/png8?lg=fre"
                                                                            class="leaflet-tile leaflet-tile-loaded"
                                                                            style="width: 256px; height: 256px; transform: translate3d(652px, 166px, 0px); opacity: 1;"><img
                                                                            alt="" role="presentation"
                                                                            src="https://proxytile-3.leboncoin.fr/maptile/2.1/maptile/newest/normal.day/8/130/88/256/png8?lg=fre"
                                                                            class="leaflet-tile leaflet-tile-loaded"
                                                                            style="width: 256px; height: 256px; transform: translate3d(908px, 166px, 0px); opacity: 1;"><img
                                                                            alt="" role="presentation"
                                                                            src="https://proxytile-4.leboncoin.fr/maptile/2.1/maptile/newest/normal.day/8/128/87/256/png8?lg=fre"
                                                                            class="leaflet-tile leaflet-tile-loaded"
                                                                            style="width: 256px; height: 256px; transform: translate3d(396px, -90px, 0px); opacity: 1;"><img
                                                                            alt="" role="presentation"
                                                                            src="https://proxytile-3.leboncoin.fr/maptile/2.1/maptile/newest/normal.day/8/131/87/256/png8?lg=fre"
                                                                            class="leaflet-tile leaflet-tile-loaded"
                                                                            style="width: 256px; height: 256px; transform: translate3d(1164px, -90px, 0px); opacity: 1;"><img
                                                                            alt="" role="presentation"
                                                                            src="https://proxytile-1.leboncoin.fr/maptile/2.1/maptile/newest/normal.day/8/128/88/256/png8?lg=fre"
                                                                            class="leaflet-tile leaflet-tile-loaded"
                                                                            style="width: 256px; height: 256px; transform: translate3d(396px, 166px, 0px); opacity: 1;"><img
                                                                            alt="" role="presentation"
                                                                            src="https://proxytile-4.leboncoin.fr/maptile/2.1/maptile/newest/normal.day/8/131/88/256/png8?lg=fre"
                                                                            class="leaflet-tile leaflet-tile-loaded"
                                                                            style="width: 256px; height: 256px; transform: translate3d(1164px, 166px, 0px); opacity: 1;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="leaflet-pane leaflet-shadow-pane"></div>
                                                            <div class="leaflet-pane leaflet-overlay-pane"><svg
                                                                    pointer-events="none" class="leaflet-zoom-animated"
                                                                    width="979" height="312" viewBox="-121 -124 979 312"
                                                                    style="transform: translate3d(-121px, -124px, 0px);">
                                                                    <g>
                                                                        <path class="leaflet-interactive"
                                                                            stroke="#4183d7" stroke-opacity="1"
                                                                            stroke-width="3" stroke-linecap="round"
                                                                            stroke-linejoin="round" fill="#4183d7"
                                                                            fill-opacity="0.2" fill-rule="evenodd"
                                                                            d="M347 82L349 77L356 75L364 69L378 69L382 81L381 88L383 86L382 85L385 86L387 84L392 87L389 92L379 89L373 92L367 92L360 90L358 88L355 89L355 87L354 88L352 84L347 82z">
                                                                        </path>
                                                                    </g>
                                                                </svg></div>
                                                            <div class="leaflet-pane leaflet-marker-pane"></div>
                                                            <div class="leaflet-pane leaflet-tooltip-pane"></div>
                                                            <div class="leaflet-pane leaflet-popup-pane"></div>
                                                            <div class="leaflet-proxy leaflet-zoom-animated"
                                                                style="transform: translate3d(33195px, 22497px, 0px) scale(128);">
                                                            </div>
                                                        </div>
                                                        <div class="leaflet-control-container">
                                                            <div class="leaflet-top leaflet-left"></div>
                                                            <div class="leaflet-top leaflet-right"></div>
                                                            <div class="leaflet-bottom leaflet-left"></div>
                                                            <div class="leaflet-bottom leaflet-right">
                                                                <div
                                                                    class="leaflet-control-zoom leaflet-bar leaflet-control">
                                                                    <a class="leaflet-control-zoom-in" href="#"
                                                                        title="Zoom in" role="button"
                                                                        aria-label="Zoom in">+</a><a
                                                                        class="leaflet-control-zoom-out" href="#"
                                                                        title="Zoom out" role="button"
                                                                        aria-label="Zoom out">−</a></div>
                                                                <div
                                                                    class="leaflet-control-attribution leaflet-control">
                                                                    <a href="http://leafletjs.com"
                                                                        title="A JS library for interactive maps">Leaflet</a>
                                                                    | <a href="http://here.com/terms" target="_blank"
                                                                        rel="noopener" tabindex="-1">© 2019 HERE</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="msT1Z">
                                                <div class="_2Q3N2">
                                                    <div class="_3LdYy">
                                                        <div class="_2Kpxj _3iULV _3K12h">
                                                            <div>Complétez votre adresse et les personnes utilisant la
                                                                recherche autour de soi trouveront plus facilement votre
                                                                annonce. Si vous ne souhaitez pas renseigner votre
                                                                adresse exacte, indiquez votre rue sans donner le
                                                                numéro. Cette information ne sera conservée que le temps
                                                                de la publication de votre annonce.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="__react_component_tooltip place-bottom type-dark pKipl"
                                                data-id="tooltip" style="left: 660px; top: 182px;">Nous n’afficherons
                                                pas votre adresse sur l’annonce</div>
                                        </div>
                                        <div class="_4cwig">
                                            <div class="_39Nsm">
                                                <div><button class="_2sNbI e943h" type="button"
                                                        data-qa-id="newad-button-prev-undefined" disabled="">
                                                        <!-- react-text: 1304 -->Retour
                                                        <!-- /react-text --></button></div>
                                                <div><button class="_2sNbI e943h" type="submit"
                                                        data-qa-id="newad-button-next-undefined" disabled="">
                                                        <!-- react-text: 1307 -->Continuer
                                                        <!-- /react-text --></button></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="_1aYAF"></div>
                        </div>
                    </div>
                    <div class="_14s_w">
                        <div class="_1i0e0 _2siHy _3aduF">
                            <div class="_1NSYj"></div>
                            <div class="_3Bswj">
                                <div class="_3QHYd">
                                    <h3 class="_3MDJa _30A-8">Vos coordonnées</h3>
                                </div>
                                <form>
                                    <div class="_3KRvg">
                                        <div class="zfCs0">
                                            <div><label class="TMFen" for="email">
                                                    <!-- react-text: 1437 -->Email
                                                    <!-- /react-text -->
                                                    <!-- react-text: 1438 -->*
                                                    <!-- /react-text --></label>
                                                <div class="_2wuZK"><input type="text" class="_2erBM QY7wN" disabled=""
                                                        data-qa-id="newad-input_email" value="jackfrank613@gmail.com"
                                                        name="email"></div>
                                            </div>
                                        </div>
                                        <div class="zfCs0">
                                            <div><label class="TMFen" for="phone">
                                                    <!-- react-text: 1444 -->Téléphone
                                                    <!-- /react-text -->
                                                    <!-- react-text: 1445 -->*
                                                    <!-- /react-text --></label>
                                                <div class="_2wuZK"><input type="tel" class="_2erBM QY7wN"
                                                        data-qa-id="newad-input_phone" maxlength="10" value=""
                                                        name="phone" disabled=""></div>
                                            </div>
                                        </div>
                                        <div class="_3GY3c _2f9Ri"><span class="ZwnLG">
                                                <div class="_3CYsw _3p4-c">
                                                    <div class="JFVew _3p4-c">
                                                        <div class="_2XsXm"></div>
                                                    </div>
                                                    <div class="z87OW">Masquer le numéro</div>
                                                </div>
                                            </span></div>
                                        <div class="_3GY3c _2f9Ri"><span class="ZwnLG">
                                                <div class="_3CYsw _3p4-c">
                                                    <div class="JFVew kNNj_ _3p4-c">
                                                        <div class="_2XsXm kNNj_ _2OzK3"></div>
                                                    </div>
                                                    <div class="z87OW kNNj_">Refuser tout démarchage commercial</div>
                                                </div>
                                            </span></div>
                                    </div>
                                    <div class="_3lDmP">
                                        <div class="_3ixkI">En validant la diffusion de mon annonce, j’accepte les
                                            Règles de diffusion et d’utilisation du site Leboncoin.fr et j’autorise
                                            Leboncoin.fr à diffuser mon annonce.</div>
                                        <div class="_39Nsm">
                                            <div><button class="_2sNbI e943h" type="button"
                                                    data-qa-id="newad-button-prev-contact" disabled="">
                                                    <!-- react-text: 1465 -->Retour
                                                    <!-- /react-text --></button></div>
                                            <div><button class="_2sNbI e943h" type="submit"
                                                    data-qa-id="newad-button-next-contact" disabled="">
                                                    <!-- react-text: 1468 -->Continuer
                                                    <!-- /react-text --></button></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="_1aYAF"></div>
                        </div>
                        <div class="_14s_w">
                            <div class="_1i0e0 _2siHy">
                                <div class="_1NSYj"></div>
                                <div class="_3Bswj">
                                    <div class="_26R2k" data-qa-id="cnil_container">
                                        <p class="d1zJr">Information :</p>
                                        <div>
                                            <div class="_3Dg4T"><span class="TextLink-15wnQ">Le responsable de
                                                    traitement, les destinataires et la finalité de la collecte des
                                                    données.</span></div>
                                            <div class="_3Dg4T"><span class="TextLink-15wnQ">En savoir plus sur vos
                                                    droits, la durée de conservation de vos données et les moyens de
                                                    nous contacter.</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_1aYAF"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Home Section -->

    <!-- Footer Section -->

    <!-- /Footer Section -->

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
