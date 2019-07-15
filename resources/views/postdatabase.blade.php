<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jamii</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>

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


    <link type="text/css" rel="stylesheet" href="{{asset('public/css/mainpage.css')}}" />
    <!-- <link type="text/css" rel="stylesheet" href="{{asset('public/css/productionpage.css')}}" /> -->
    <!-- <link type="text/css" rel="stylesheet" href="{{asset('public/css/auth.css')}}" /> -->
    <link type="text/css" rel="stylesheet" href="{{asset('public/css/style.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('public/css/custom.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('public/css/header.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    @include('frontoffice.partials.headerpart')
    <section class="_1i0e0">
        <div class="_2iwtV">
            <div class="MoDD-">
                <form>
                    <div class="KcIeW">
                        <div class="_1mlgr">
                            <section>
                                <div class="_343br">
                                    <div class="_3giCl">
                                        <div class="_1O_Gw">
                                            <div class="pb209">
                                                <div class="_3dX7I">
                                                    <div class="_2a11n"><span class="_1vK7W K5CQx" name="close"><svg
                                                                viewBox="0 0 24 24" data-name="Calque 1" class="_3kNyr"
                                                                focusable="false">
                                                                <path
                                                                    d="M23.47 20.9l-8.9-8.9 8.9-8.9A1.81 1.81 0 0 0 20.9.55L12 9.43 3.1.53A1.82 1.82 0 0 0 .53 3.1l8.9 8.9-8.9 8.9a1.82 1.82 0 0 0 2.57 2.57l8.9-8.9 8.9 8.9a1.82 1.82 0 0 0 2.57-2.57z">
                                                                </path>
                                                            </svg></span></div>
                                                    <p>Que recherchez-vous ?</p>
                                                    <div class="_3H9gK">Effacer</div>
                                                </div>
                                                <div class="_1mfIX"><button class="_2sNbI _1xIyN GXQkc _2xk2l _1mgTv"
                                                        type="button">
                                                        <!-- react-text: 5852 -->Valider
                                                        <!-- /react-text --></button></div>
                                            </div>
                                            <div class="bVqYZ"><input class="_2erBM _20_tk "
                                                    data-qa-id="input-searchtext" value=""
                                                    placeholder="Que recherchez-vous ?" maxlength="500"
                                                    autocomplete="off"></div>
                                        </div>
                                    </div>
                                    <div class="AGP6T">
                                        <div>
                                            <div class="SiZLq">
                                                <div class="_1CJVw egIn7" data-qa-id="select-toggle_category">
                                                    <div class="_1etKl">
                                                        <div class="_26tGy"><span class="_1vK7W _2jG3V"
                                                                name="chevrondown"><svg viewBox="0 0 24 24"
                                                                    data-name="Calque 1" focusable="false">
                                                                    <path
                                                                        d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                                    </path>
                                                                </svg></span></div>
                                                        <div class="_2gTTZ"><select autocomplete="off">
                                                                <option value="">Toutes catégories</option>
                                                                <option data-qa-id="categorylist_cat_71" value="71"
                                                                    class="_1_1B4">-- EMPLOI --</option>
                                                                <option value="33" data-qa-id="categorylist_cat_33">
                                                                    Offres d'emploi</option>
                                                                <option data-qa-id="categorylist_cat_1" value="1"
                                                                    class="_1_1B4">-- VÉHICULES --</option>
                                                                <option value="2" data-qa-id="categorylist_cat_2">
                                                                    Voitures</option>
                                                                <option value="3" data-qa-id="categorylist_cat_3">Motos
                                                                </option>
                                                                <option value="4" data-qa-id="categorylist_cat_4">
                                                                    Caravaning</option>
                                                                <option value="5" data-qa-id="categorylist_cat_5">
                                                                    Utilitaires</option>
                                                                <option value="6" data-qa-id="categorylist_cat_6">
                                                                    Équipement auto</option>
                                                                <option value="44" data-qa-id="categorylist_cat_44">
                                                                    Équipement moto</option>
                                                                <option value="50" data-qa-id="categorylist_cat_50">
                                                                    Équipement caravaning</option>
                                                                <option value="7" data-qa-id="categorylist_cat_7">
                                                                    Nautisme</option>
                                                                <option value="51" data-qa-id="categorylist_cat_51">
                                                                    Équipement nautisme</option>
                                                                <option data-qa-id="categorylist_cat_8" value="8"
                                                                    class="_1_1B4">-- IMMOBILIER --</option>
                                                                <option value="9" data-qa-id="categorylist_cat_9">Ventes
                                                                    immobilières</option>
                                                                <option value="10" data-qa-id="categorylist_cat_10">
                                                                    Locations</option>
                                                                <option value="11" data-qa-id="categorylist_cat_11">
                                                                    Colocations</option>
                                                                <option value="13" data-qa-id="categorylist_cat_13">
                                                                    Bureaux &amp; Commerces</option>
                                                                <option data-qa-id="categorylist_cat_66" value="66"
                                                                    class="_1_1B4">-- VACANCES --</option>
                                                                <option value="12" data-qa-id="categorylist_cat_12">
                                                                    Locations &amp; Gîtes</option>
                                                                <option value="67" data-qa-id="categorylist_cat_67">
                                                                    Chambres d'hôtes</option>
                                                                <option value="68" data-qa-id="categorylist_cat_68">
                                                                    Campings</option>
                                                                <option value="69" data-qa-id="categorylist_cat_69">
                                                                    Hôtels</option>
                                                                <option value="70" data-qa-id="categorylist_cat_70">
                                                                    Hébergements insolites</option>
                                                                <option data-qa-id="categorylist_cat_14" value="14"
                                                                    class="_1_1B4">-- MULTIMÉDIA --</option>
                                                                <option value="15" data-qa-id="categorylist_cat_15">
                                                                    Informatique</option>
                                                                <option value="43" data-qa-id="categorylist_cat_43">
                                                                    Consoles &amp; Jeux vidéo</option>
                                                                <option value="16" data-qa-id="categorylist_cat_16">
                                                                    Image &amp; Son</option>
                                                                <option value="17" data-qa-id="categorylist_cat_17">
                                                                    Téléphonie</option>
                                                                <option data-qa-id="categorylist_cat_18" value="18"
                                                                    class="_1_1B4">-- MAISON --</option>
                                                                <option value="19" data-qa-id="categorylist_cat_19">
                                                                    Ameublement</option>
                                                                <option value="20" data-qa-id="categorylist_cat_20">
                                                                    Électroménager</option>
                                                                <option value="45" data-qa-id="categorylist_cat_45">Arts
                                                                    de la table</option>
                                                                <option value="39" data-qa-id="categorylist_cat_39">
                                                                    Décoration</option>
                                                                <option value="46" data-qa-id="categorylist_cat_46">
                                                                    Linge de maison</option>
                                                                <option value="21" data-qa-id="categorylist_cat_21">
                                                                    Bricolage</option>
                                                                <option value="52" data-qa-id="categorylist_cat_52">
                                                                    Jardinage</option>
                                                                <option data-qa-id="categorylist_cat_72" value="72"
                                                                    class="_1_1B4">-- MODE --</option>
                                                                <option value="22" data-qa-id="categorylist_cat_22">
                                                                    Vêtements</option>
                                                                <option value="53" data-qa-id="categorylist_cat_53">
                                                                    Chaussures</option>
                                                                <option value="47" data-qa-id="categorylist_cat_47">
                                                                    Accessoires &amp; Bagagerie</option>
                                                                <option value="42" data-qa-id="categorylist_cat_42">
                                                                    Montres &amp; Bijoux</option>
                                                                <option value="23" data-qa-id="categorylist_cat_23">
                                                                    Équipement bébé</option>
                                                                <option value="54" data-qa-id="categorylist_cat_54">
                                                                    Vêtements bébé</option>
                                                                <option data-qa-id="categorylist_cat_24" value="24"
                                                                    class="_1_1B4">-- LOISIRS --</option>
                                                                <option value="25" data-qa-id="categorylist_cat_25">DVD
                                                                    - Films</option>
                                                                <option value="26" data-qa-id="categorylist_cat_26">CD -
                                                                    Musique</option>
                                                                <option value="27" data-qa-id="categorylist_cat_27">
                                                                    Livres</option>
                                                                <option value="28" data-qa-id="categorylist_cat_28">
                                                                    Animaux</option>
                                                                <option value="55" data-qa-id="categorylist_cat_55">
                                                                    Vélos</option>
                                                                <option value="29" data-qa-id="categorylist_cat_29">
                                                                    Sports &amp; Hobbies</option>
                                                                <option value="30" data-qa-id="categorylist_cat_30">
                                                                    Instruments de musique</option>
                                                                <option value="40" data-qa-id="categorylist_cat_40">
                                                                    Collection</option>
                                                                <option value="41" data-qa-id="categorylist_cat_41">Jeux
                                                                    &amp; Jouets</option>
                                                                <option value="48" data-qa-id="categorylist_cat_48">Vins
                                                                    &amp; Gastronomie</option>
                                                                <option data-qa-id="categorylist_cat_56" value="56"
                                                                    class="_1_1B4">-- MATÉRIEL PROFESSIONNEL --</option>
                                                                <option value="57" data-qa-id="categorylist_cat_57">
                                                                    Matériel agricole</option>
                                                                <option value="58" data-qa-id="categorylist_cat_58">
                                                                    Transport - Manutention</option>
                                                                <option value="59" data-qa-id="categorylist_cat_59">BTP
                                                                    - Chantier gros-oeuvre</option>
                                                                <option value="60" data-qa-id="categorylist_cat_60">
                                                                    Outillage - Matériaux 2nd-oeuvre</option>
                                                                <option value="32" data-qa-id="categorylist_cat_32">
                                                                    Équipements industriels</option>
                                                                <option value="61" data-qa-id="categorylist_cat_61">
                                                                    Restauration - Hôtellerie</option>
                                                                <option value="62" data-qa-id="categorylist_cat_62">
                                                                    Fournitures de bureau</option>
                                                                <option value="63" data-qa-id="categorylist_cat_63">
                                                                    Commerces &amp; Marchés</option>
                                                                <option value="64" data-qa-id="categorylist_cat_64">
                                                                    Matériel médical</option>
                                                                <option data-qa-id="categorylist_cat_31" value="31"
                                                                    class="_1_1B4">-- SERVICES --</option>
                                                                <option value="34" data-qa-id="categorylist_cat_34">
                                                                    Prestations de services</option>
                                                                <option value="35" data-qa-id="categorylist_cat_35">
                                                                    Billetterie</option>
                                                                <option value="49" data-qa-id="categorylist_cat_49">
                                                                    Évènements</option>
                                                                <option value="36" data-qa-id="categorylist_cat_36">
                                                                    Cours particuliers</option>
                                                                <option value="65" data-qa-id="categorylist_cat_65">
                                                                    Covoiturage</option>
                                                                <option data-qa-id="categorylist_cat_37" value="37"
                                                                    class="_1_1B4">-- AUTRES --</option>
                                                                <option value="38" data-qa-id="categorylist_cat_38">
                                                                    Autres</option>
                                                            </select></div>
                                                    </div>
                                                </div>
                                                <div class="_3X-Yv" data-qa-id="select-toggle_category">
                                                    <div class="_1etKl">
                                                        <div class="_26tGy"><span class="_1vK7W _2jG3V"
                                                                name="chevrondown"><svg viewBox="0 0 24 24"
                                                                    data-name="Calque 1" focusable="false">
                                                                    <path
                                                                        d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                                    </path>
                                                                </svg></span></div>
                                                        <div class="_2gTTZ">
                                                            <div>Offres d'emploi</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- react-empty: 5947 -->
                                </div>
                            </section>
                        </div>
                        <div class="_3iU_B">
                            <div class="_2bh4L trackable" data-qa-id="input-search_button"><button
                                    class="_2sNbI _1xIyN GXQkc _2xk2l">
                                    <!-- react-text: 5951 -->Rechercher
                                    <!-- /react-text --></button></div>
                        </div>
                    </div>
                    <section class="_38ax3 wcucb">
                        <div class="_2ZcGP Aus1f">
                            <div>
                                <div class="_3zYIQ"><select data-qa-id="select-jobcontract">
                                        <option value="">Type de contrat</option>
                                        <option value="1">CDD</option>
                                        <option value="2">CDI</option>
                                        <option value="3">Intérim</option>
                                        <option value="4">Indépendant/Franchise</option>
                                        <option value="5">Stage/Alternance</option>
                                        <option value="6">Apprentissage</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="_2ZcGP Aus1f _3AAP_ _340cw">
                            <div>
                                <div class="_3zYIQ"><select data-qa-id="select-jobduty">
                                        <option value="">Fonction</option>
                                        <option value="1">Administration/Services généraux</option>
                                        <option value="2">Commercial/Vente</option>
                                        <option value="3">Comptabilité/Gestion/Finance</option>
                                        <option value="4">Conseil/Audit</option>
                                        <option value="5">Direction Générale</option>
                                        <option value="6">Sécurité/Défense/Gardiennage</option>
                                        <option value="7">Hôtellerie/Restauration</option>
                                        <option value="8">Informatique/Internet</option>
                                        <option value="9">Juridique</option>
                                        <option value="10">Logistique/Achat/Transport</option>
                                        <option value="11">Marketing/Communication</option>
                                        <option value="12">Ménage/Entretien</option>
                                        <option value="13">Ressources Humaines/Formation</option>
                                        <option value="14">Services à la personne</option>
                                        <option value="15">Formation/Education</option>
                                        <option value="16">Etudes/Recherches/Ingénieries</option>
                                        <option value="17">Ouvrier/Artisan</option>
                                        <option value="18">Médecine/Santé</option>
                                        <option value="19">Production/Opérations</option>
                                        <option value="20">Service Client/Accueil</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="_2ZcGP Aus1f">
                            <div>
                                <div class="_3zYIQ"><select data-qa-id="select-jobexp">
                                        <option value="">Expérience</option>
                                        <option value="1">0 à 2 ans</option>
                                        <option value="3">2 à 5 ans</option>
                                        <option value="5">5 ans et plus</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="_2ZcGP Aus1f _3AAP_ _340cw">
                            <div>
                                <div class="_3zYIQ"><select data-qa-id="select-jobfield">
                                        <option value="">Secteur d'activité</option>
                                        <option value="1">Agriculture</option>
                                        <option value="2">BTP/Construction</option>
                                        <option value="3">Commerce/Distribution</option>
                                        <option value="4">Banque/Assurance/Finance</option>
                                        <option value="5">Industrie/Environnement</option>
                                        <option value="6">Immobilier</option>
                                        <option value="7">Services publics/Administrations</option>
                                        <option value="8">Médecine/Santé</option>
                                        <option value="9">Services</option>
                                        <option value="10">Télécom/Internet/Médias</option>
                                        <option value="11">Tourisme</option>
                                        <option value="12">Transport/Logistique</option>
                                        <option value="13">Hôtellerie/Restauration</option>
                                        <option value="14">Textile/Mode/Luxe</option>
                                        <option value="15">Sport</option>
                                        <option value="16">Services à la personne</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="_2ZcGP Aus1f">
                            <div>
                                <div class="_3zYIQ"><select data-qa-id="select-jobstudy">
                                        <option value="">Niveau d'études</option>
                                        <option value="1">Sans diplôme</option>
                                        <option value="2">BEP/CAP</option>
                                        <option value="3">Employé/Ouvrier spécialisé/Bac</option>
                                        <option value="4">Technicien/Employé/Bac+2</option>
                                        <option value="5">Agent de maîtrise/Bac+3</option>
                                        <option value="6">Ingénieur/Cadre/Bac+5 ou plus</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="_2ZcGP Aus1f _3AAP_ _340cw">
                            <div>
                                <div class="_3zYIQ"><select data-qa-id="select-jobtime">
                                        <option value="">Temps plein/partiel</option>
                                        <option value="1">Temps plein</option>
                                        <option value="2">Temps partiel</option>
                                    </select></div>
                            </div>
                        </div>
                    </section><!-- react-empty: 5953 -->
                </form>
            </div>
        </div>
    </section>
    <!-- @include('frontoffice.partials.profilefooter') -->

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
    <script>
        $(document).ready(function () {
            var flag = true;

            var classname = document.getElementsByClassName("_Ctitle");
            $('#Tcslection').on('click', function () {
                //  console.log('test');
                if (flag) {
                    $('#Lclist').css("display", "flex");
                    flag = false;
                } else {
                    $('#Lclist').css("display", "none");
                    flag = true;
                }


            });
            $("#Trselect").on('click', function () {
                $('#Lclist').css("display", "none");
                $('._Cname').html("Toutes catégories");
            });

            var myFunction = function () {
                var attribute = this.getAttribute("data-id");
                // console.log(attribute);
                $('#Lclist').css("display", "none");
                $('._Cname').html(attribute);
            };
            for (var i = 0; i < classname.length; i++) {
                classname[i].addEventListener('click', myFunction, false);
            }

        });
    </script>

    @yield('after-script')

</body>

</html>