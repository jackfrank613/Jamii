<section>
        <div class="back_admobe">
            <div class="_3ZAZw">
                <div class="_1OdoT">
                    <div class="_1AsHn">
                        <h1 class="_3MDJa dgtty title_margin">
                            <font style="vertical-align:inherit;">
                                <font style="vertical-align:inherit">
                                    Déposer une annonce
                                </font>
                            </font>
                        </h1>
                    </div>
                   
                    <div class="_14s_w tShLp " id="total_category">
                        <div class="UDd7g">
                            <div class="_2kY5F">
                                <div class="_1AsHn _2siHy _38NUf">
                                    <div class="_3Bswj">
                                        <div class="_3QHYd">
                                            <h3 class="_3MDJa _30A-8">Choisissez la catégorie</h3>
                                        </div>
                                        <div>
                                            <div class="_2Xqu9">
                                                <div class="_27rom" role="combobox" aria-expanded="false"
                                                    aria-haspopup="listbox" aria-labelledby="downshift-0-label">
                                                    <div class="_2m1Sh"><span class="_1vK7W _1eOK1" name="search"><svg
                                                                viewBox="0 0 24 24" data-name="Calque 1"
                                                                focusable="false">
                                                                <path
                                                                    d="M23.58 21.45l-7-7a9.42 9.42 0 0 0 1.62-6.87A9.13 9.13 0 0 0 10.34.07a9.25 9.25 0 0 0-2.81 18.27 9.25 9.25 0 0 0 7-1.76l7 7a1.54 1.54 0 0 0 2.11 0 1.56 1.56 0 0 0-.06-2.13zM9.22 15.5a6.37 6.37 0 1 1 6.33-6.37 6.33 6.33 0 0 1-6.33 6.37z">
                                                                </path>
                                                            </svg></span></div><input type="text"
                                                        aria-autocomplete="list" aria-labelledby="downshift-0-label"
                                                        autocomplete="off" value="" id="downshift-0-input"
                                                        name="searchCategory"
                                                        placeholder="Que proposez-vous aujourd’hui ?" class="_1hEog">
                                                </div>
                                            </div>
                                            <div class="CUS2Y">
                                                <div class="_1Zk_b">
                                                    @php
                                                    $categories = $data['categories'];
                                                    $subcategories = $data['subcategories'];
                                                    for($i = 0; $i < count($categories); $i+=2){ $cate=$categories[$i];
                                                        @endphp 
                                        
                                                        <div class="PHfT3 ">
                                                            <div class="_3ytUb subcategory_collapse" data-toggle="collapse"
                                                                data-target="#category{{$cate['id']}}">
                                                                <div class="_1clVx">
                                                                    <span class="_1vK7W" name="suitcase">
                                                                        <i class="fa {{$cate['icon']}}" ></i>
                                                                    </span>
                                                                </div>
                                                                <div class="_3MBji">{{$cate['c_name']}}</div>
                                                                <div class="cMK9S">
                                                                    <span class="_1vK7W" name="chevrondown">
                                                                        <svg viewBox="0 0 24 24" data-name="Calque 1"
                                                                            focusable="false">
                                                                            <path
                                                                                d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                                            </path>
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            @php
                                                            if(isset($subcategories[$cate['id']])){
                                                            @endphp
                                                            <div id="category{{$cate['id']}}" class="collapse">
                                                                @php
                                                                foreach($subcategories[$cate['id']] as $sub_cate){
                                                                @endphp

                                                                <div class="PXI8z">
                                                                    <div class="eILDV subcategory" data-subid = "{{$sub_cate['sub_id']}}">
                                                                        {{$sub_cate['s_name']}}
                                                                </div>
                                                                </div>
                                                                @php
                                                                }
                                                                @endphp
                                                            </div>
                                                            @php
                                                            }
                                                            @endphp
                                                        </div>
                                                </div>
                                                @php
                                                }
                                                @endphp
                                            </div>
                                            <div class="_1Zk_b">

                                                @php
                                                $categories = $data['categories'];
                                                $subcategories = $data['subcategories'];
                                                for($i = 1; $i < count($categories); $i+=2){ $cate=$categories[$i];
                                                    @endphp 
                                                    <div class="_3BIbD">
                                                     <div class="PHfT3 ">
                                                        <div class="_3ytUb subcategory_collapse" data-toggle="collapse"
                                                            data-target="#category{{$cate['id']}}">
                                                            <div class="_1clVx">
                                                                <span class="_1vK7W" name="suitcase">
                                                                <i class="fa {{$cate['icon']}}" ></i>
                                                                </span>
                                                            </div>
                                                            <div class="_3MBji">{{$cate['c_name']}}</div>
                                                            <div class="cMK9S">
                                                                <span class="_1vK7W" name="chevrondown">
                                                                    <svg viewBox="0 0 24 24" data-name="Calque 1"
                                                                        focusable="false">
                                                                        <path
                                                                            d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        @php
                                                        if(isset($subcategories[$cate['id']])){
                                                        @endphp
                                                        <div id="category{{$cate['id']}}" class="collapse">
                                                            @php
                                                            foreach($subcategories[$cate['id']] as $sub_cate){
                                                            @endphp

                                                            <div class="PXI8z">
                                                                <div class="eILDV subcategory" data-subid = "{{$sub_cate['sub_id']}}">
                                                                    {{$sub_cate['s_name']}}</div>
                                                            </div>
                                                            @php
                                                            }
                                                            @endphp
                                                        </div>
                                                        @php
                                                        }
                                                        @endphp
                                                    </div>
                                            @php
                                            }
                                            @endphp
                                        </div>
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
                                        <!-- react-text: 1646 -->Votre annonce sera trouvée plus facilement !
                                        <!-- /react-text --><br><br><!-- react-text: 1649 -->Vous aurez 50% de
                                        chances en plus d’être contacté si votre annonce est dans la bonne
                                        catégorie.
                                        <!-- /react-text --></span></div>
                            </div>
                        </div>  
                    </div>

                    <!-- </div> -->
                    <!-- </div> -->
                </div>
                
            </div>
            <div class="_1AsHn _2siHy _38NUf" id="choose_category" style="display:none" >
                        <div class="_3Bswj">
                            <div class="_3QHYd">
                                <h3 class="class=" _3MDJa _30A-8"">
                                    <font style="vertical-align:inherit;">
                                        Choisissez la catégorie
                                    </font>
                                </h3>
                            </div>
                            <form>
                                <div class="LzDnW">
                                    <div class="_3lCVd">
                                        <div class="_3bAPj">
                                            <font style="vertical-align:inherit;">Catégorie</font>
                                        </div>
                                        <div class="_1etKl">
                                            <div class="_26tGy"><span class="_1vK7W _2jG3V" name="chevrondown"><svg
                                                        viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                        <path
                                                            d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                        </path>
                                                    </svg></span></div>
                                            <div class="_2gTTZ">
                                                <div id="select_subcategory">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;" id="content_category">
                                                            motorcycles
                                                        </font>
                                                    </font>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_3lCVd">
                                        <div class="_3bAPj">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Type of news</font>
                                            </font>
                                        </div>
                                        <div class="_1rAJm">
                                            <div class="_1IpS7">
                                                <label class="_1fypT">
                                                    <input type="radio" value="sell" name="adType" class="_1L8pO">
                                                    <span class="T9pXm"><span
                                                            class="_3oEwn"></span><span>Offre</span></span>
                                                </label>
                                                <div class="_3b90f">Vous vendez une voiture.</div>
                                            </div>
                                            <div class="_1IpS7"><label class="_1fypT" data-qa-id="adType_demande"><input
                                                        type="radio" value="buy" name="adType" class="_1L8pO"><span
                                                        class="T9pXm"><span
                                                            class="_3oEwn"></span><span>Demande</span></span></label>
                                                <div class="_3b90f">Vous recherchez une voiture.</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="_2Qp5n"><button class="_2sNbI _1xIyN _2xk2l _3FcC9" type="submit"
                                        data-qa-id="newad-button-next-categories">
                                        <!-- react-text: 533 -->Continuer
                                        <!-- /react-text --></button></div>
                            </form>
                        </div>
                        <div class="_1aYAF">
                            <div class="_2BPbl">
                                <div class="o73DF"></div>
                                <div class="Hunbm"><span class="_1vK7W" name="lightbulboutline"><svg viewBox="0 0 24 24"
                                            data-name="Calque 1" focusable="false">
                                            <path
                                                d="M5.56 4.77l-.43-.42a1.09 1.09 0 0 0-1.53 0 1 1 0 0 0 0 1.47l.4.42a1 1 0 0 0 1.41 0 .92.92 0 0 0 .15-1.47zM2.18 11.48H1.09a1 1 0 1 0 0 2.09h1.09a1.07 1.07 0 0 0 1.09-1.05 1 1 0 0 0-1.09-1.04zM12 4a1 1 0 0 0 1.09-1v-.95a1.09 1.09 0 0 0-2.18 0V3.1A1.06 1.06 0 0 0 12 4zM20.51 4.35a1.09 1.09 0 0 0-1.53 0l-.43.42a1 1 0 0 0 0 1.47 1.07 1.07 0 0 0 1.52 0l.44-.42a1.22 1.22 0 0 0 0-1.47zM12.87 6.24a6.44 6.44 0 0 0-7.42 6.18 6.22 6.22 0 0 0 3.28 5.45V22a1.14 1.14 0 0 0 1.09 1h4.36a1.14 1.14 0 0 0 1.09-1v-4a6.24 6.24 0 0 0 3.17-6.39 6.36 6.36 0 0 0-5.57-5.37zm1.31 9.85l-1.09.62v4.19h-2.18v-4.19l-1.09-.62a4.21 4.21 0 0 1-2.18-3.67A4.29 4.29 0 0 1 12 8.23a4.29 4.29 0 0 1 4.36 4.19 4.21 4.21 0 0 1-2.18 3.67zM22.91 11.48h-1.09a1 1 0 1 0 0 2.09h1.09A1.08 1.08 0 0 0 24 12.52a1 1 0 0 0-1.09-1.04z">
                                            </path>
                                        </svg></span></div>
                                <div class="o73DF"></div>
                            </div>
                            <div>
                                <span>
                                    <!-- react-text: 161 -->Votre annonce sera trouvée plus facilement !
                                    <!-- /react-text --><br><br><!-- react-text: 164 -->Vous aurez 50% de chances en
                                    plus
                                    d’être contacté si votre annonce est dans la bonne catégorie.
                                    <!-- /react-text --></span>
                            </div>
                        </div>
                    </div>
        </div>

        <div class="_14s_w">
            <div class="_1AsHn _2siHy _38NUf _3aduF">
                <div class="_3Bswj">
                    <div class="_3QHYd">
                        <h3 class="_3MDJa _30A-8">Dites-nous en plus</h3>
                    </div>
                    <form>
                        <div class="_3KRvg">
                            <div class="zfCs0">
                                <div><label class="_2GeK6" for="brand">
                                        <!-- react-text: 545 -->Marque
                                        <!-- /react-text --></label>
                                    <div class="_1etKl">
                                        <div class="_26tGy"><span class="_1vK7W _2jG3V" name="chevrondown"><svg
                                                    viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                    <path
                                                        d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                    </path>
                                                </svg></span></div>
                                        <div class="_2gTTZ">
                                            <select data-qa-id="select_brand" name="brand">
                                                <option value="">«Choisissez»</option>
                                                <optgroup label="Marques courantes">
                                                    <option data-qa-id="select_brand_0" value="Audi">Audi</option>
                                                    <option data-qa-id="select_brand_1" value="Bmw">Bmw</option>
                                                    <option data-qa-id="select_brand_2" value="Citroen">Citroen
                                                    </option>
                                                    <option data-qa-id="select_brand_3" value="Fiat">Fiat</option>
                                                    <option data-qa-id="select_brand_4" value="Ford">Ford</option>
                                                    <option data-qa-id="select_brand_5" value="Mercedes">Mercedes
                                                    </option>
                                                    <option data-qa-id="select_brand_6" value="Opel">Opel</option>
                                                    <option data-qa-id="select_brand_7" value="Peugeot">Peugeot
                                                    </option>
                                                    <option data-qa-id="select_brand_8" value="Renault">Renault
                                                    </option>
                                                    <option data-qa-id="select_brand_9" value="Volkswagen">
                                                        Volkswagen</option>
                                                </optgroup>
                                                <optgroup label="Autres marques">
                                                    <option data-qa-id="select_brand_0" value="Abarth">Abarth
                                                    </option>
                                                    <option data-qa-id="select_brand_1" value="Aleko">Aleko</option>
                                                    <option data-qa-id="select_brand_2" value="Alfa Romeo">Alfa
                                                        Romeo</option>
                                                    <option data-qa-id="select_brand_3" value="Alpina">Alpina
                                                    </option>
                                                    <option data-qa-id="select_brand_4" value="Aro">Aro</option>
                                                    <option data-qa-id="select_brand_5" value="Artega">Artega
                                                    </option>
                                                    <option data-qa-id="select_brand_6" value="Aston Martin">Aston
                                                        Martin</option>
                                                    <option data-qa-id="select_brand_7" value="Autobianchi">
                                                        Autobianchi</option>
                                                    <option data-qa-id="select_brand_8" value="Auverland">Auverland
                                                    </option>
                                                    <option data-qa-id="select_brand_9" value="Bentley">Bentley
                                                    </option>
                                                    <option data-qa-id="select_brand_10" value="Bertone">Bertone
                                                    </option>
                                                    <option data-qa-id="select_brand_11" value="Bluecar Groupe Bollore">
                                                        Bluecar Groupe Bollore
                                                    </option>
                                                    <option data-qa-id="select_brand_12" value="Buick">Buick
                                                    </option>
                                                    <option data-qa-id="select_brand_13" value="Cadillac">Cadillac
                                                    </option>
                                                    <option data-qa-id="select_brand_14" value="Chevrolet">Chevrolet
                                                    </option>
                                                    <option data-qa-id="select_brand_15" value="Chrysler">Chrysler
                                                    </option>
                                                    <option data-qa-id="select_brand_16" value="Corvette">Corvette
                                                    </option>
                                                    <option data-qa-id="select_brand_17" value="Dacia">Dacia
                                                    </option>
                                                    <option data-qa-id="select_brand_18" value="Daewoo">Daewoo
                                                    </option>
                                                    <option data-qa-id="select_brand_19" value="Daihatsu">Daihatsu
                                                    </option>
                                                    <option data-qa-id="select_brand_20" value="Dangel">Dangel
                                                    </option>
                                                    <option data-qa-id="select_brand_21" value="De La Chapelle">De
                                                        La Chapelle</option>
                                                    <option data-qa-id="select_brand_22" value="Dodge">Dodge
                                                    </option>
                                                    <option data-qa-id="select_brand_23" value="Donkervoort">
                                                        Donkervoort</option>
                                                    <option data-qa-id="select_brand_24" value="Dr">Dr</option>
                                                    <option data-qa-id="select_brand_25" value="Ds">Ds</option>
                                                    <option data-qa-id="select_brand_26" value="Ferrari">Ferrari
                                                    </option>
                                                    <option data-qa-id="select_brand_27" value="Fisker">Fisker
                                                    </option>
                                                    <option data-qa-id="select_brand_28" value="Gme">Gme</option>
                                                    <option data-qa-id="select_brand_29" value="Honda">Honda
                                                    </option>
                                                    <option data-qa-id="select_brand_30" value="Hummer">Hummer
                                                    </option>
                                                    <option data-qa-id="select_brand_31" value="Hyundai">Hyundai
                                                    </option>
                                                    <option data-qa-id="select_brand_32" value="Infiniti">Infiniti
                                                    </option>
                                                    <option data-qa-id="select_brand_33" value="Innocenti">Innocenti
                                                    </option>
                                                    <option data-qa-id="select_brand_34" value="Isuzu">Isuzu
                                                    </option>
                                                    <option data-qa-id="select_brand_35" value="Iveco">Iveco
                                                    </option>
                                                    <option data-qa-id="select_brand_36" value="Jaguar">Jaguar
                                                    </option>
                                                    <option data-qa-id="select_brand_37" value="Jeep">Jeep</option>
                                                    <option data-qa-id="select_brand_38" value="Kia">Kia</option>
                                                    <option data-qa-id="select_brand_39" value="Lada">Lada</option>
                                                    <option data-qa-id="select_brand_40" value="Lamborghini">
                                                        Lamborghini</option>
                                                    <option data-qa-id="select_brand_41" value="Lancia">Lancia
                                                    </option>
                                                    <option data-qa-id="select_brand_42" value="Land Rover">Land
                                                        Rover</option>
                                                    <option data-qa-id="select_brand_43" value="Lexus">Lexus
                                                    </option>
                                                    <option data-qa-id="select_brand_44" value="Lotus">Lotus
                                                    </option>
                                                    <option data-qa-id="select_brand_45" value="Mahindra">Mahindra
                                                    </option>
                                                    <option data-qa-id="select_brand_46" value="Maruti">Maruti
                                                    </option>
                                                    <option data-qa-id="select_brand_47" value="Maserati">Maserati
                                                    </option>
                                                    <option data-qa-id="select_brand_48" value="Mastretta">Mastretta
                                                    </option>
                                                    <option data-qa-id="select_brand_49" value="Maybach">Maybach
                                                    </option>
                                                    <option data-qa-id="select_brand_50" value="Mazda">Mazda
                                                    </option>
                                                    <option data-qa-id="select_brand_51" value="Mclaren">Mclaren
                                                    </option>
                                                    <option data-qa-id="select_brand_52" value="Mega">Mega</option>
                                                    <option data-qa-id="select_brand_53" value="Mg">Mg</option>
                                                    <option data-qa-id="select_brand_54" value="Mia">Mia</option>
                                                    <option data-qa-id="select_brand_55" value="Mini">Mini</option>
                                                    <option data-qa-id="select_brand_56" value="Mitsubishi">
                                                        Mitsubishi</option>
                                                    <option data-qa-id="select_brand_57" value="Morgan">Morgan
                                                    </option>
                                                    <option data-qa-id="select_brand_58" value="Nissan">Nissan
                                                    </option>
                                                    <option data-qa-id="select_brand_59" value="Pgo">Pgo</option>
                                                    <option data-qa-id="select_brand_60" value="Piaggio">Piaggio
                                                    </option>
                                                    <option data-qa-id="select_brand_61" value="Polski/fso">
                                                        Polski/fso</option>
                                                    <option data-qa-id="select_brand_62" value="Pontiac">Pontiac
                                                    </option>
                                                    <option data-qa-id="select_brand_63" value="Porsche">Porsche
                                                    </option>
                                                    <option data-qa-id="select_brand_64" value="Proton">Proton
                                                    </option>
                                                    <option data-qa-id="select_brand_65" value="Rolls-royce">
                                                        Rolls-royce</option>
                                                    <option data-qa-id="select_brand_66" value="Rover">Rover
                                                    </option>
                                                    <option data-qa-id="select_brand_67" value="Saab">Saab</option>
                                                    <option data-qa-id="select_brand_68" value="Santana">Santana
                                                    </option>
                                                    <option data-qa-id="select_brand_69" value="Seat">Seat</option>
                                                    <option data-qa-id="select_brand_70" value="Shuanghuan">
                                                        Shuanghuan</option>
                                                    <option data-qa-id="select_brand_71" value="Skoda">Skoda
                                                    </option>
                                                    <option data-qa-id="select_brand_72" value="Smart">Smart
                                                    </option>
                                                    <option data-qa-id="select_brand_73" value="Ssangyong">Ssangyong
                                                    </option>
                                                    <option data-qa-id="select_brand_74" value="Subaru">Subaru
                                                    </option>
                                                    <option data-qa-id="select_brand_75" value="Suzuki">Suzuki
                                                    </option>
                                                    <option data-qa-id="select_brand_76" value="Talbot">Talbot
                                                    </option>
                                                    <option data-qa-id="select_brand_77" value="Tavria">Tavria
                                                    </option>
                                                    <option data-qa-id="select_brand_78" value="Tesla">Tesla
                                                    </option>
                                                    <option data-qa-id="select_brand_79" value="Toyota">Toyota
                                                    </option>
                                                    <option data-qa-id="select_brand_80" value="Tvr">Tvr</option>
                                                    <option data-qa-id="select_brand_81" value="Venturi">Venturi
                                                    </option>
                                                    <option data-qa-id="select_brand_82" value="Volvo">Volvo
                                                    </option>
                                                    <option data-qa-id="select_brand_83" value="Autres">Autres
                                                    </option>
                                                </optgroup>
                                            </select></div>
                                    </div><!-- react-text: 650 -->
                                    <!-- /react-text -->
                                </div>
                            </div>
                            <div class="zfCs0">
                                <div><label class="_2GeK6" for="model">
                                        <!-- react-text: 654 -->Modèle
                                        <!-- /react-text --></label>
                                    <div class="_1etKl">
                                        <div class="_26tGy"><span class="_1vK7W _2jG3V" name="chevrondown"><svg
                                                    viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                    <path
                                                        d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                    </path>
                                                </svg></span></div>
                                        <div class="_2gTTZ"><select data-qa-id="select_model" disabled="" name="model">
                                                <option value="">«Choisissez»</option>
                                            </select></div>
                                    </div><!-- react-text: 663 -->
                                    <!-- /react-text -->
                                </div>
                            </div>
                            <div class="zfCs0">
                                <div><label class="_2GeK6" for="regdate">
                                        <!-- react-text: 667 -->Année modèle
                                        <!-- /react-text -->
                                        <!-- react-text: 668 -->*
                                        <!-- /react-text --></label>
                                    <div class="_1etKl">
                                        <div class="_26tGy"><span class="_1vK7W _2jG3V" name="chevrondown"><svg
                                                    viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
                                                    <path
                                                        d="M23.37 5.62a2.15 2.15 0 0 0-3 0L12 13.87 3.68 5.62a2.2 2.2 0 0 0-3.05 0 2.1 2.1 0 0 0 0 3l9.86 9.76a2.14 2.14 0 0 0 3 0l9.86-9.76a2.1 2.1 0 0 0 .02-3z">
                                                    </path>
                                                </svg></span></div>
                                        <div class="_2gTTZ"><select data-qa-id="select_regdate" name="regdate">
                                                <option value="">«Choisissez»</option>
                                                <option data-qa-id="select_regdate_0" value="2019">2019</option>
                                                <option data-qa-id="select_regdate_1" value="2018">2018</option>
                                                <option data-qa-id="select_regdate_2" value="2017">2017</option>
                                                <option data-qa-id="select_regdate_3" value="2016">2016</option>
                                                <option data-qa-id="select_regdate_4" value="2015">2015</option>
                                                <option data-qa-id="select_regdate_5" value="2014">2014</option>
                                                <option data-qa-id="select_regdate_6" value="2013">2013</option>
                                                <option data-qa-id="select_regdate_7" value="2012">2012</option>
                                                <option data-qa-id="select_regdate_8" value="2011">2011</option>
                                                <option data-qa-id="select_regdate_9" value="2010">2010</option>
                                                <option data-qa-id="select_regdate_10" value="2009">2009</option>
                                                <option data-qa-id="select_regdate_11" value="2008">2008</option>
                                                <option data-qa-id="select_regdate_12" value="2007">2007</option>
                                                <option data-qa-id="select_regdate_13" value="2006">2006</option>
                                                <option data-qa-id="select_regdate_14" value="2005">2005</option>
                                                <option data-qa-id="select_regdate_15" value="2004">2004</option>
                                                <option data-qa-id="select_regdate_16" value="2003">2003</option>
                                                <option data-qa-id="select_regdate_17" value="2002">2002</option>
                                                <option data-qa-id="select_regdate_18" value="2001">2001</option>
                                                <option data-qa-id="select_regdate_19" value="2000">2000</option>
                                                <option data-qa-id="select_regdate_20" value="1999">1999</option>
                                                <option data-qa-id="select_regdate_21" value="1998">1998</option>
                                                <option data-qa-id="select_regdate_22" value="1997">1997</option>
                                                <option data-qa-id="select_regdate_23" value="1996">1996</option>
                                                <option data-qa-id="select_regdate_24" value="1995">1995</option>
                                                <option data-qa-id="select_regdate_25" value="1994">1994</option>
                                                <option data-qa-id="select_regdate_26" value="1993">1993</option>
                                                <option data-qa-id="select_regdate_27" value="1992">1992</option>
                                                <option data-qa-id="select_regdate_28" value="1991">1991</option>
                                                <option data-qa-id="select_regdate_29" value="1990">1990</option>
                                                <option data-qa-id="select_regdate_30" value="1989">1989</option>
                                                <option data-qa-id="select_regdate_31" value="1988">1988</option>
                                                <option data-qa-id="select_regdate_32" value="1987">1987</option>
                                                <option data-qa-id="select_regdate_33" value="1986">1986</option>
                                                <option data-qa-id="select_regdate_34" value="1985">1985</option>
                                                <option data-qa-id="select_regdate_35" value="1984">1984</option>
                                                <option data-qa-id="select_regdate_36" value="1983">1983</option>
                                                <option data-qa-id="select_regdate_37" value="1982">1982</option>
                                                <option data-qa-id="select_regdate_38" value="1981">1981</option>
                                                <option data-qa-id="select_regdate_39" value="1980">1980</option>
                                                <option data-qa-id="select_regdate_40" value="1979">1979</option>
                                                <option data-qa-id="select_regdate_41" value="1978">1978</option>
                                                <option data-qa-id="select_regdate_42" value="1977">1977</option>
                                                <option data-qa-id="select_regdate_43" value="1976">1976</option>
                                                <option data-qa-id="select_regdate_44" value="1975">1975</option>
                                                <option data-qa-id="select_regdate_45" value="1974">1974</option>
                                                <option data-qa-id="select_regdate_46" value="1973">1973</option>
                                                <option data-qa-id="select_regdate_47" value="1972">1972</option>
                                                <option data-qa-id="select_regdate_48" value="1971">1971</option>
                                                <option data-qa-id="select_regdate_49" value="1970">1970</option>
                                                <option data-qa-id="select_regdate_50" value="1969">1969</option>
                                                <option data-qa-id="select_regdate_51" value="1968">1968</option>
                                                <option data-qa-id="select_regdate_52" value="1967">1967</option>
                                                <option data-qa-id="select_regdate_53" value="1966">1966</option>
                                                <option data-qa-id="select_regdate_54" value="1965">1965</option>
                                                <option data-qa-id="select_regdate_55" value="1964">1964</option>
                                                <option data-qa-id="select_regdate_56" value="1963">1963</option>
                                                <option data-qa-id="select_regdate_57" value="1962">1962</option>
                                                <option data-qa-id="select_regdate_58" value="1961">1961</option>
                                                <option data-qa-id="select_regdate_59" value="1960">1960 ou avant
                                                </option>
                                            </select></div>
                                    </div><!-- react-text: 737 -->
                                    <!-- /react-text -->
                                </div>
                            </div>
                            <div class="zfCs0">
                                <div><label class="TMFen" for="issuance_date">
                                        <!-- react-text: 741 -->Date de première mise en circulation
                                        <!-- /react-text --></label>
                                    <div class="_2wuZK"><input type="text" class="_2erBM"
                                            data-qa-id="input_issuance_date" maxlength="7" placeholder="MM / AAAA"
                                            value="" name="issuance_date"></div>
                                </div>
                            </div>
                            <div class="zfCs0">
                                <div><label class="TMFen" for="mileage">
                                        <!-- react-text: 747 -->Kilométrage
                                        <!-- /react-text -->
                                        <!-- react-text: 748 -->*
                                        <!-- /react-text --></label>
                                    <div class="_2wuZK"><input type="text" class="_2erBM"
                                            data-qa-id="newad-input_mileage" maxlength="6" value="" name="mileage"><span
                                            class="_2x7fK">km</span></div>
                                </div>
                            </div>
                            <div class="_3GY3c">
                                <div><label class="_2GeK6" for="fuel">
                                        <!-- react-text: 755 -->Carburant
                                        <!-- /react-text -->
                                        <!-- react-text: 756 -->*
                                        <!-- /react-text --></label>
                                    <div class="BtHSu _2N99n" data-qa-id="select_toggle_fuel">
                                        <div class="uO-lw" data-qa-id="select_toggle_fuel_1" tabindex="0" value="1"
                                            name="fuel">Essence</div>
                                        <div class="uO-lw" data-qa-id="select_toggle_fuel_2" tabindex="0" value="2"
                                            name="fuel">Diesel</div>
                                        <div class="uO-lw" data-qa-id="select_toggle_fuel_6" tabindex="0" value="6"
                                            name="fuel">Hybride</div>
                                        <div class="uO-lw" data-qa-id="select_toggle_fuel_4" tabindex="0" value="4"
                                            name="fuel">Electrique</div>
                                        <div class="uO-lw" data-qa-id="select_toggle_fuel_3" tabindex="0" value="3"
                                            name="fuel">GPL</div>
                                        <div class="uO-lw" data-qa-id="select_toggle_fuel_5" tabindex="0" value="5"
                                            name="fuel">Autre</div>
                                    </div>
                                </div>
                            </div>
                            <div class="_3GY3c">
                                <div><label class="_2GeK6" for="gearbox">
                                        <!-- react-text: 767 -->Boîte de vitesse
                                        <!-- /react-text -->
                                        <!-- react-text: 768 -->*
                                        <!-- /react-text --></label>
                                    <div class="_3EcL2"><label class="_1fypT"><input type="radio" value="1"
                                                name="gearbox" class="_1L8pO"><span class="T9pXm"><span
                                                    class="_3oEwn"></span><span>Manuelle</span></span></label><label
                                            class="_1fypT"><input type="radio" value="2" name="gearbox"
                                                class="_1L8pO"><span class="T9pXm"><span
                                                    class="_3oEwn"></span><span>Automatique</span></span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="_3lDmP">
                            <div class="_39Nsm">
                                <div><button class="_2sNbI _1xIyN _2BP2c" type="button"
                                        data-qa-id="newad-button-prev-ad_params">
                                        <!-- react-text: 784 -->Retour
                                        <!-- /react-text --></button></div>
                                <div><button class="_2sNbI e943h" type="submit" data-qa-id="newad-button-next-ad_params"
                                        disabled="">
                                        <!-- react-text: 787 -->Continuer
                                        <!-- /react-text --></button></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="_1aYAF">
                    <div class="_2BPbl">
                        <div class="o73DF"></div>
                        <div class="Hunbm"><span class="_1vK7W" name="lightbulboutline"><svg viewBox="0 0 24 24"
                                    data-name="Calque 1" focusable="false">
                                    <path
                                        d="M5.56 4.77l-.43-.42a1.09 1.09 0 0 0-1.53 0 1 1 0 0 0 0 1.47l.4.42a1 1 0 0 0 1.41 0 .92.92 0 0 0 .15-1.47zM2.18 11.48H1.09a1 1 0 1 0 0 2.09h1.09a1.07 1.07 0 0 0 1.09-1.05 1 1 0 0 0-1.09-1.04zM12 4a1 1 0 0 0 1.09-1v-.95a1.09 1.09 0 0 0-2.18 0V3.1A1.06 1.06 0 0 0 12 4zM20.51 4.35a1.09 1.09 0 0 0-1.53 0l-.43.42a1 1 0 0 0 0 1.47 1.07 1.07 0 0 0 1.52 0l.44-.42a1.22 1.22 0 0 0 0-1.47zM12.87 6.24a6.44 6.44 0 0 0-7.42 6.18 6.22 6.22 0 0 0 3.28 5.45V22a1.14 1.14 0 0 0 1.09 1h4.36a1.14 1.14 0 0 0 1.09-1v-4a6.24 6.24 0 0 0 3.17-6.39 6.36 6.36 0 0 0-5.57-5.37zm1.31 9.85l-1.09.62v4.19h-2.18v-4.19l-1.09-.62a4.21 4.21 0 0 1-2.18-3.67A4.29 4.29 0 0 1 12 8.23a4.29 4.29 0 0 1 4.36 4.19 4.21 4.21 0 0 1-2.18 3.67zM22.91 11.48h-1.09a1 1 0 1 0 0 2.09h1.09A1.08 1.08 0 0 0 24 12.52a1 1 0 0 0-1.09-1.04z">
                                    </path>
                                </svg></span></div>
                        <div class="o73DF"></div>
                    </div>
                    <div><span>
                            <!-- react-text: 910 -->Mettez en valeur votre annonce !
                            <!-- /react-text --><br><br><!-- react-text: 913 -->Plus il y a de détails, plus votre
                            futur acheteur vous trouvera rapidement.
                            <!-- /react-text --></span></div>
                </div>
            </div>
        </div>
        <div class="_14s_w">
            <div class="_1AsHn _2siHy _38NUf _3aduF">
                <div class="_3Bswj">
                    <div class="_3QHYd">
                        <h3 class="_3MDJa _30A-8">Décrivez votre bien !</h3>
                    </div>
                    <form>
                        <div class="_3KRvg">
                            <div class="zfCs0 _2R7h7">
                                <div><label class="TMFen" for="subject">
                                        <!-- react-text: 800 -->Titre de l'annonce
                                        <!-- /react-text -->
                                        <!-- react-text: 801 -->*
                                        <!-- /react-text --></label>
                                    <div class="_2wuZK"><input type="text" class="_2erBM _2NUUb"
                                            data-qa-id="newad-input_subject" maxlength="100" value="" name="subject">
                                    </div>
                                    <div class="Z4c6m">
                                        <div class="_2rvyn _291qH">Veuillez donner un titre à votre annonce</div>
                                    </div>
                                    <div class="Z4c6m">
                                        <div class="_2Kpxj _3iULV _3K12h">
                                            <div><span>
                                                    <!-- react-text: 987 -->Votre annonce sera refusée si le titre
                                                    ne décrit pas précisément le produit que vous proposez.
                                                    <!-- /react-text --><br></span><span>
                                                    <!-- react-text: 990 -->Ne pas mentionner "Vente" ou "Achat"
                                                    dans le titre.
                                                    <!-- /react-text --><br></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="_3GY3c">
                                <div><label class="_2GeK6" for="body">
                                        <!-- react-text: 807 -->Description de l'annonce
                                        <!-- /react-text -->
                                        <!-- react-text: 808 -->*
                                        <!-- /react-text --></label><textarea maxlength="4000" name="body"
                                        class="_2qGx6 _2TtNy _1r9dn" data-qa-id="newad-text_body" cols="20"
                                        rows="30"></textarea>
                                    <div class="_2yACb">
                                        <div class="_2rvyn _291qH">Veuillez rédiger un texte d'annonce</div>
                                    </div>
                                    <div class="_2yACb">
                                        <div class="_2Kpxj _3iULV _3K12h">
                                            <div><span>
                                                    <!-- react-text: 976 -->Veuillez préciser le mois et l’année de
                                                    1ère mise en circulation, la marque, le modèle et le type
                                                    (berline, coupé, etc.) du véhicule.
                                                    <!-- /react-text --><br></span><span>
                                                    <!-- react-text: 979 -->Indiquez dans le texte de l’annonce si
                                                    vous proposez un droit de rétractation à l’acheteur. En
                                                    l’absence de toute mention, l’acheteur n’en bénéficiera pas et
                                                    ne pourra pas demander le remboursement ou l’échange du bien ou
                                                    service proposé.
                                                    <!-- /react-text --><br></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="_3lDmP">
                            <div class="_39Nsm">
                                <div><button class="_2sNbI _1xIyN _2BP2c" type="button"
                                        data-qa-id="newad-button-prev-description">
                                        <!-- react-text: 814 -->Retour
                                        <!-- /react-text --></button></div>
                                <div><button class="_2sNbI e943h" type="submit"
                                        data-qa-id="newad-button-next-description" disabled="">
                                        <!-- react-text: 817 -->Continuer
                                        <!-- /react-text --></button></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="_1aYAF">
                    <div class="_2BPbl">
                        <div class="o73DF"></div>
                        <div class="Hunbm"><span class="_1vK7W" name="lightbulboutline"><svg viewBox="0 0 24 24"
                                    data-name="Calque 1" focusable="false">
                                    <path
                                        d="M5.56 4.77l-.43-.42a1.09 1.09 0 0 0-1.53 0 1 1 0 0 0 0 1.47l.4.42a1 1 0 0 0 1.41 0 .92.92 0 0 0 .15-1.47zM2.18 11.48H1.09a1 1 0 1 0 0 2.09h1.09a1.07 1.07 0 0 0 1.09-1.05 1 1 0 0 0-1.09-1.04zM12 4a1 1 0 0 0 1.09-1v-.95a1.09 1.09 0 0 0-2.18 0V3.1A1.06 1.06 0 0 0 12 4zM20.51 4.35a1.09 1.09 0 0 0-1.53 0l-.43.42a1 1 0 0 0 0 1.47 1.07 1.07 0 0 0 1.52 0l.44-.42a1.22 1.22 0 0 0 0-1.47zM12.87 6.24a6.44 6.44 0 0 0-7.42 6.18 6.22 6.22 0 0 0 3.28 5.45V22a1.14 1.14 0 0 0 1.09 1h4.36a1.14 1.14 0 0 0 1.09-1v-4a6.24 6.24 0 0 0 3.17-6.39 6.36 6.36 0 0 0-5.57-5.37zm1.31 9.85l-1.09.62v4.19h-2.18v-4.19l-1.09-.62a4.21 4.21 0 0 1-2.18-3.67A4.29 4.29 0 0 1 12 8.23a4.29 4.29 0 0 1 4.36 4.19 4.21 4.21 0 0 1-2.18 3.67zM22.91 11.48h-1.09a1 1 0 1 0 0 2.09h1.09A1.08 1.08 0 0 0 24 12.52a1 1 0 0 0-1.09-1.04z">
                                    </path>
                                </svg></span></div>
                        <div class="o73DF"></div>
                    </div>
                    <div><span>
                            <!-- react-text: 966 -->Mettez en valeur votre annonce !
                            <!-- /react-text --><br><br><!-- react-text: 969 -->Plus il y a de détails, plus votre
                            annonce sera de qualité.
                            <!-- /react-text --><br><!-- react-text: 971 -->Dites-nous ici ce qui est important à
                            savoir et ajoutera de la valeur !
                            <!-- /react-text --></span></div>
                </div>
            </div>
        </div>
        <div class="_14s_w">
            <div class="_1AsHn _2siHy _38NUf _3aduF">
                <div class="_3Bswj">
                    <div class="_3QHYd">
                        <h3 class="_3MDJa _30A-8">Quel est votre prix ?</h3>
                    </div>
                    <form>
                        <div class="_3KRvg">
                            <div class="zfCs0">
                                <div><label class="TMFen" for="price">
                                        <!-- react-text: 830 -->Prix
                                        <!-- /react-text -->
                                        <!-- react-text: 831 -->*
                                        <!-- /react-text --></label>
                                    <div class="_2wuZK"><input type="text" class="_2erBM _2NUUb"
                                            data-qa-id="newad-input_price" maxlength="8" value="" name="price"><span
                                            class="_2x7fK">€</span></div>
                                    <div class="Z4c6m">
                                        <div class="_2rvyn _291qH">Veuillez indiquer le prix correspondant à votre
                                            annonce.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="_3lDmP">
                            <div class="_39Nsm">
                                <div><button class="_2sNbI _1xIyN _2BP2c" type="button"
                                        data-qa-id="newad-button-prev-price">
                                        <!-- react-text: 839 -->Retour
                                        <!-- /react-text --></button></div>
                                <div><button class="_2sNbI e943h" type="submit" data-qa-id="newad-button-next-price"
                                        disabled="">
                                        <!-- react-text: 842 -->Continuer
                                        <!-- /react-text --></button></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="_1aYAF">
                    <div class="_2BPbl">
                        <div class="o73DF"></div>
                        <div class="Hunbm"><span class="_1vK7W" name="lightbulboutline"><svg viewBox="0 0 24 24"
                                    data-name="Calque 1" focusable="false">
                                    <path
                                        d="M5.56 4.77l-.43-.42a1.09 1.09 0 0 0-1.53 0 1 1 0 0 0 0 1.47l.4.42a1 1 0 0 0 1.41 0 .92.92 0 0 0 .15-1.47zM2.18 11.48H1.09a1 1 0 1 0 0 2.09h1.09a1.07 1.07 0 0 0 1.09-1.05 1 1 0 0 0-1.09-1.04zM12 4a1 1 0 0 0 1.09-1v-.95a1.09 1.09 0 0 0-2.18 0V3.1A1.06 1.06 0 0 0 12 4zM20.51 4.35a1.09 1.09 0 0 0-1.53 0l-.43.42a1 1 0 0 0 0 1.47 1.07 1.07 0 0 0 1.52 0l.44-.42a1.22 1.22 0 0 0 0-1.47zM12.87 6.24a6.44 6.44 0 0 0-7.42 6.18 6.22 6.22 0 0 0 3.28 5.45V22a1.14 1.14 0 0 0 1.09 1h4.36a1.14 1.14 0 0 0 1.09-1v-4a6.24 6.24 0 0 0 3.17-6.39 6.36 6.36 0 0 0-5.57-5.37zm1.31 9.85l-1.09.62v4.19h-2.18v-4.19l-1.09-.62a4.21 4.21 0 0 1-2.18-3.67A4.29 4.29 0 0 1 12 8.23a4.29 4.29 0 0 1 4.36 4.19 4.21 4.21 0 0 1-2.18 3.67zM22.91 11.48h-1.09a1 1 0 1 0 0 2.09h1.09A1.08 1.08 0 0 0 24 12.52a1 1 0 0 0-1.09-1.04z">
                                    </path>
                                </svg></span></div>
                        <div class="o73DF"></div>
                    </div>
                    <div><span>Vous le savez, le prix est important, autant pour vous que pour l’acheteur. Soyez
                            juste, mais ayez en tête une marge de négociation si besoin.</span></div>
                </div>
            </div>
        </div>
        <div class="_14s_w">
            <div class="_1AsHn _2siHy">
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
                                                <div class="_35a0H"><span class="_1vK7W _1Dmcp" name="cameramore"><svg
                                                            viewBox="0 0 24 24" data-name="Calque 1" focusable="false">
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
                                            <div class="_2hSIh _26o9N ufciE">
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
                                    </div><input type="file" accept="image/jpeg, image/png, image/gif" multiple=""
                                        autocomplete="off" style="display: none;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="BB7X4">
                        <div class="_39Nsm">
                            <div><button class="_2sNbI e943h" type="button" data-qa-id="newad-button-prev-pictures"
                                    disabled="">
                                    <!-- react-text: 201 -->Retour
                                    <!-- /react-text --></button></div>
                            <div><button class="_2sNbI e943h" type="submit" data-qa-id="newad-button-next-pictures"
                                    disabled="">
                                    <!-- react-text: 204 -->Continuer
                                    <!-- /react-text --></button></div>
                        </div>
                    </div>
                </div>
                <div class="_1aYAF"></div>
            </div>
        </div>
        <div class="_14s_w">
            <div class="_1AsHn _2siHy _1emXg">
                <div class="_1NSYj"></div>
                <div class="_3Bswj">
                    <div class="_3QHYd">
                        <h3 class="_3MDJa _30A-8">Où se trouve votre bien ?</h3>
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
                                                        class="_1vK7W _1eOK1" name="geoloc"><svg viewBox="0 0 24 24"
                                                            data-name="Calque 1" focusable="false">
                                                            <path
                                                                d="M12 7.64A4.36 4.36 0 1 0 16.36 12 4.36 4.36 0 0 0 12 7.64zm9.75 3.27a9.8 9.8 0 0 0-8.66-8.66V1.09a1.09 1.09 0 1 0-2.18 0v1.16a9.8 9.8 0 0 0-8.66 8.66H1.09a1.09 1.09 0 0 0 0 2.18h1.16a9.8 9.8 0 0 0 8.66 8.66v1.16a1.09 1.09 0 0 0 2.18 0v-1.16a9.8 9.8 0 0 0 8.66-8.66h1.16a1.09 1.09 0 0 0 0-2.18zM12 19.64A7.64 7.64 0 1 1 19.64 12 7.64 7.64 0 0 1 12 19.64z">
                                                            </path>
                                                        </svg></span></div>
                                            </div><input type="text" aria-autocomplete="list"
                                                aria-labelledby="downshift-1-label" autocomplete="off" value=""
                                                id="downshift-1-input" class="input full address _2e58F" name="address"
                                                data-qa-id="newad-input_address"
                                                placeholder="Renseignez votre adresse ou votre ville"
                                                data-tip="Nous n’afficherons pas votre adresse sur l’annonce"
                                                data-place="bottom" disabled="" currentitem="false"><button
                                                class="_1SIJo" type="button" disabled=""><span class="_1vK7W _1eOK1"
                                                    name="search"><svg viewBox="0 0 24 24" data-name="Calque 1"
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
                                            <!-- react-empty: 238 -->
                                            <!-- react-empty: 239 -->
                                            <div class="leaflet-pane leaflet-map-pane"
                                                style="transform: translate3d(0px, 0px, 0px);">
                                                <div class="leaflet-pane leaflet-tile-pane">
                                                    <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                                                        <div class="leaflet-tile-container leaflet-zoom-animated"
                                                            style="z-index: 20; transform: translate3d(0px, 0px, 0px) scale(1);">
                                                            <img alt="" role="presentation"
                                                                src="https://proxytile-2.leboncoin.fr/maptile/2.1/maptile/newest/normal.day/6/31/22/256/png8?lg=fre"
                                                                class="leaflet-tile leaflet-tile-loaded"
                                                                style="width: 256px; height: 256px; transform: translate3d(48px, -14px, 0px); opacity: 1;"><img
                                                                alt="" role="presentation"
                                                                src="https://proxytile-3.leboncoin.fr/maptile/2.1/maptile/newest/normal.day/6/32/22/256/png8?lg=fre"
                                                                class="leaflet-tile leaflet-tile-loaded"
                                                                style="width: 256px; height: 256px; transform: translate3d(304px, -14px, 0px); opacity: 1;"><img
                                                                alt="" role="presentation"
                                                                src="https://proxytile-3.leboncoin.fr/maptile/2.1/maptile/newest/normal.day/6/31/23/256/png8?lg=fre"
                                                                class="leaflet-tile leaflet-tile-loaded"
                                                                style="width: 256px; height: 256px; transform: translate3d(48px, 242px, 0px); opacity: 1;"><img
                                                                alt="" role="presentation"
                                                                src="https://proxytile-4.leboncoin.fr/maptile/2.1/maptile/newest/normal.day/6/32/23/256/png8?lg=fre"
                                                                class="leaflet-tile leaflet-tile-loaded"
                                                                style="width: 256px; height: 256px; transform: translate3d(304px, 242px, 0px); opacity: 1;"><img
                                                                alt="" role="presentation"
                                                                src="https://proxytile-1.leboncoin.fr/maptile/2.1/maptile/newest/normal.day/6/30/22/256/png8?lg=fre"
                                                                class="leaflet-tile leaflet-tile-loaded"
                                                                style="width: 256px; height: 256px; transform: translate3d(-208px, -14px, 0px); opacity: 1;"><img
                                                                alt="" role="presentation"
                                                                src="https://proxytile-4.leboncoin.fr/maptile/2.1/maptile/newest/normal.day/6/33/22/256/png8?lg=fre"
                                                                class="leaflet-tile leaflet-tile-loaded"
                                                                style="width: 256px; height: 256px; transform: translate3d(560px, -14px, 0px); opacity: 1;"><img
                                                                alt="" role="presentation"
                                                                src="https://proxytile-2.leboncoin.fr/maptile/2.1/maptile/newest/normal.day/6/30/23/256/png8?lg=fre"
                                                                class="leaflet-tile leaflet-tile-loaded"
                                                                style="width: 256px; height: 256px; transform: translate3d(-208px, 242px, 0px); opacity: 1;"><img
                                                                alt="" role="presentation"
                                                                src="https://proxytile-1.leboncoin.fr/maptile/2.1/maptile/newest/normal.day/6/33/23/256/png8?lg=fre"
                                                                class="leaflet-tile leaflet-tile-loaded"
                                                                style="width: 256px; height: 256px; transform: translate3d(560px, 242px, 0px); opacity: 1;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="leaflet-pane leaflet-shadow-pane"></div>
                                                <div class="leaflet-pane leaflet-overlay-pane"></div>
                                                <div class="leaflet-pane leaflet-marker-pane"></div>
                                                <div class="leaflet-pane leaflet-tooltip-pane"></div>
                                                <div class="leaflet-pane leaflet-popup-pane"></div>
                                                <div class="leaflet-proxy leaflet-zoom-animated"></div>
                                            </div>
                                            <div class="leaflet-control-container">
                                                <div class="leaflet-top leaflet-left"></div>
                                                <div class="leaflet-top leaflet-right"></div>
                                                <div class="leaflet-bottom leaflet-left"></div>
                                                <div class="leaflet-bottom leaflet-right">
                                                    <div class="leaflet-control-zoom leaflet-bar leaflet-control"><a
                                                            class="leaflet-control-zoom-in" href="#" title="Zoom in"
                                                            role="button" aria-label="Zoom in">+</a><a
                                                            class="leaflet-control-zoom-out" href="#" title="Zoom out"
                                                            role="button" aria-label="Zoom out">−</a></div>
                                                    <div class="leaflet-control-attribution leaflet-control"><a
                                                            href="http://leafletjs.com"
                                                            title="A JS library for interactive maps">Leaflet</a> |
                                                        <a href="http://here.com/terms" target="_blank" rel="noopener"
                                                            tabindex="-1">© 2019 HERE</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="__react_component_tooltip place-top type-dark " data-id="tooltip"></div>
                            </div>
                            <div class="_4cwig">
                                <div class="_39Nsm">
                                    <div><button class="_2sNbI e943h" type="button"
                                            data-qa-id="newad-button-prev-undefined" disabled="">
                                            <!-- react-text: 231 -->Retour
                                            <!-- /react-text --></button></div>
                                    <div><button class="_2sNbI e943h" type="submit"
                                            data-qa-id="newad-button-next-undefined" disabled="">
                                            <!-- react-text: 234 -->Continuer
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
            <div class="_1AsHn _2siHy _38NUf _3aduF">
                <div class="_3Bswj">
                    <div class="_3QHYd">
                        <h3 class="_3MDJa _30A-8">Vos coordonnées</h3>
                    </div>
                    <form>
                        <div class="_3KRvg">
                            <div class="zfCs0">
                                <div><label class="TMFen" for="email">
                                        <!-- react-text: 855 -->Email
                                        <!-- /react-text -->
                                        <!-- react-text: 856 -->*
                                        <!-- /react-text --></label>
                                    <div class="_2wuZK"><input type="text" class="_2erBM QY7wN" disabled=""
                                            data-qa-id="newad-input_email" value="jackfrank613@gmail.com" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="zfCs0">
                                <div><label class="TMFen" for="phone">
                                        <!-- react-text: 862 -->Téléphone
                                        <!-- /react-text -->
                                        <!-- react-text: 863 -->*
                                        <!-- /react-text --></label>
                                    <div class="_2wuZK"><input type="tel" class="_2erBM _2NUUb"
                                            data-qa-id="newad-input_phone" maxlength="10" value="" name="phone">
                                    </div>
                                    <div class="Z4c6m">
                                        <div class="_2rvyn _291qH">Votre numéro de téléphone doit comporter 10
                                            chiffres, sans espace ni séparateur</div>
                                    </div>
                                </div>
                            </div>
                            <div class="_3GY3c _2f9Ri"><span class="ZwnLG">
                                    <div class="_3CYsw">
                                        <div class="JFVew">
                                            <div class="_2XsXm"></div>
                                        </div>
                                        <div class="z87OW">Masquer le numéro</div>
                                    </div>
                                </span></div>
                            <div class="_3GY3c _2f9Ri"><span class="ZwnLG">
                                    <div class="_3CYsw">
                                        <div class="JFVew kNNj_">
                                            <div class="_2XsXm kNNj_ _2OzK3"></div>
                                        </div>
                                        <div class="z87OW kNNj_">Refuser tout démarchage commercial</div>
                                    </div>
                                </span></div>
                        </div>
                        <div class="_3lDmP">
                            <div class="_3ixkI">En validant la diffusion de mon annonce, j’accepte les Règles de
                                diffusion et d’utilisation du site Leboncoin.fr et j’autorise Leboncoin.fr à
                                diffuser mon annonce.</div>
                            <div class="_39Nsm">
                                <div><button class="_2sNbI _1xIyN _2BP2c" type="button"
                                        data-qa-id="newad-button-prev-contact">
                                        <!-- react-text: 883 -->Retour
                                        <!-- /react-text --></button></div>
                                <div><button class="_2sNbI e943h" type="submit" data-qa-id="newad-button-next-contact"
                                        disabled="">
                                        <!-- react-text: 886 -->Continuer
                                        <!-- /react-text --></button></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="_1aYAF">
                    <div class="_2BPbl">
                        <div class="o73DF"></div>
                        <div class="Hunbm"><span class="_1vK7W" name="lightbulboutline"><svg viewBox="0 0 24 24"
                                    data-name="Calque 1" focusable="false">
                                    <path
                                        d="M5.56 4.77l-.43-.42a1.09 1.09 0 0 0-1.53 0 1 1 0 0 0 0 1.47l.4.42a1 1 0 0 0 1.41 0 .92.92 0 0 0 .15-1.47zM2.18 11.48H1.09a1 1 0 1 0 0 2.09h1.09a1.07 1.07 0 0 0 1.09-1.05 1 1 0 0 0-1.09-1.04zM12 4a1 1 0 0 0 1.09-1v-.95a1.09 1.09 0 0 0-2.18 0V3.1A1.06 1.06 0 0 0 12 4zM20.51 4.35a1.09 1.09 0 0 0-1.53 0l-.43.42a1 1 0 0 0 0 1.47 1.07 1.07 0 0 0 1.52 0l.44-.42a1.22 1.22 0 0 0 0-1.47zM12.87 6.24a6.44 6.44 0 0 0-7.42 6.18 6.22 6.22 0 0 0 3.28 5.45V22a1.14 1.14 0 0 0 1.09 1h4.36a1.14 1.14 0 0 0 1.09-1v-4a6.24 6.24 0 0 0 3.17-6.39 6.36 6.36 0 0 0-5.57-5.37zm1.31 9.85l-1.09.62v4.19h-2.18v-4.19l-1.09-.62a4.21 4.21 0 0 1-2.18-3.67A4.29 4.29 0 0 1 12 8.23a4.29 4.29 0 0 1 4.36 4.19 4.21 4.21 0 0 1-2.18 3.67zM22.91 11.48h-1.09a1 1 0 1 0 0 2.09h1.09A1.08 1.08 0 0 0 24 12.52a1 1 0 0 0-1.09-1.04z">
                                    </path>
                                </svg></span></div>
                        <div class="o73DF"></div>
                    </div>
                    <div><span>Pour plus de sécurité et faciliter vos échanges avec vos futurs contacts, merci
                            d’entrer un numéro de téléphone valide.</span></div>
                </div>
            </div>
            <div class="_14s_w">
                <div class="_1AsHn _2siHy _38NUf">
                    <div class="_3Bswj">
                        <div class="_26R2k" data-qa-id="cnil_container">
                            <p class="d1zJr">Information :</p>
                            <div>
                                <div class="_3Dg4T"><span class="TextLink-15wnQ">Le responsable de traitement, les
                                        destinataires et la finalité de la collecte des données.</span></div>
                                <div class="_3Dg4T"><span class="TextLink-15wnQ">En savoir plus sur vos droits, la
                                        durée de conservation de vos données et les moyens de nous contacter.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="_1aYAF"></div>
                </div>
            </div>
        </div>
        </div>
    </section>