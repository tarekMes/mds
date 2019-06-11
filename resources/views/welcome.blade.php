<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
 <link rel="stylesheet" type="text/css" href="{{'css/mainLG.css'}}">
    <link rel="stylesheet" type="text/css" href="{{'css/main.css'}}">
    <link rel="stylesheet" type="text/css" href="{{'css/mainS.css'}}">
    <link rel="stylesheet" type="text/css" href="{{'css/mainM.css'}}">

    <link rel="stylesheet" type="text/css" href="{{'css/mainMW.css'}}">
    <link rel="stylesheet" type="text/css" href="{{'css/startup.css'}}">
    <link rel="stylesheet" type="text/css" href="{{'css/fonts.css'}}">

    </head>
  <body>
    <div id="app">
        <header>

            <div id="headerContainer" class="headerContainer">

                <div class="headerMenu" @click="shownNavS()" v-if="!scrollingnav">
                    <div class="burgerContainer">
                        <div class="slash"></div>
                        <div class="slash"></div>
                        <div class="slash"></div>
                    </div>

                </div>

                <div class="toolnav" v-if="!scrollingnav">
                    <div class="social">
                        <a href="https://www.facebook.com/MeslameniDelivery" target="_blank"><img
                                src="{{'assessts/facebook.svg'}}" alt="facebook.com"></a>
                        <a href="https://www.linkedin.com/company/meslamenidelivery" target="_blank"><img
                                src="{{'assessts/linkedin.svg'}}" alt="linkedin.com"></a>
                    </div>
                    <div class="callInfo">
                        <p>
                            POUR PLUS DINFORMATIONS, CONTACTEZ NOUS AU (+216) 53106901
                        </p>
                    </div>
                </div>
                <div class="headerTitle">
                    <img src="{{'assessts/logoHero.jpg'}}" alt="">

                    <h1>Livraison à vos portes ,</h1>
                    <h1>Livraison à tous moyens confortes.</h1>
                </div>
                <div class="scroller">
                    <img src="{{'assessts/scroller.png'}}" alt="">
                </div>

            </div>

        </header>
        <!-- -------------------------------------------------------------------------------------- -->
        <transition name="fade">
            <nav v-if="scrollingnav">

                <div class="fixedScroll">

                    <img src="{{'assessts/logo.jpg'}}" alt="" v-if="!shownNav">
                    <div class="headerMenu" v-if="!shownNav" @click="shownNavS()">
                        <div class=" burgerContainer">
                            <div class="slash"></div>
                            <div class="slash"></div>
                            <div class="slash"></div>
                        </div>
                    </div>


                </div>
                <div class="shownNAv" v-if="shownNav">
                    <img src="{{'assessts/close.png'}}" alt="" class="close" @click="closenav()">
                    <ul>
                        <li><a href="#aPropos">A Propos</a></li>
                        <li><a href="#mainServices">Services</a></li>
                        <li><a href="#footer">CONTACTEZ NOUS</a></li>
                    </ul>
                    <div class="toolnav">
                        <div class="social">
                            <a href="https://www.facebook.com/MeslameniDelivery" target="_blank"><img
                                    src="{{'assessts/facebook.svg'}}" alt="facebook.com-mds"></a>
                            <a href="https://www.linkedin.com/company/meslamenidelivery" target="_blank"><img
                                    src="{{'assessts/linkedin.svg'}}" alt="linkedin.com - mds"></a>
                        </div>
                        <div class="callInfo">
                            <p>
                                POUR PLUS DINFORMATIONS, CONTACTEZ NOUS AU (+216) 53106901
                            </p>
                        </div>
                    </div>
                    <br>
                </div>

            </nav>
        </transition>

        <!-- -------------------------------------------------------------------------------------- -->

        <section class="aPropos" id="aPropos">
            <article class="aproposHead">
                <h1>A propos</h1>
                <img src="{{'assessts/seperateFullLength.svg'}}" alt="">
                <h2>Lorem ipsum dolor sit amet, con</h2>
            </article>
            <article class="aproposBody">

                <img src="{{'assessts/aproposHEro.jpg'}}" alt="MDS-A PROPOS">
                <div class="aproposbodydesc">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                        ut
                        laoreet
                        dolore
                        magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                        ullamcorper
                        suscipit
                        lobortis nisl
                        ut aliquip ex ea commodo consequat. Duis autem.</p>
                    <div class="explore">
                        <img src="{{'assessts/Explore.svg'}}" alt="">
                        <a href="#serviceIntro">Explore</a>
                    </div>

                </div>

            </article>

            <article class="aproposFooter">
                <!-- <hr> -->
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet
                    dolore
                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                    suscipit
                    lobortis nisl
                    ut aliquip ex ea commodo consequat. Duis autem.
                </p>
            </article>
        </section>

        <!-- -------------------------------------------------------------------------------------- -->

        <section id="serviceIntro">
            <article class="siHeadear">
                <div class="siHeaderSet">
                    <p>Explore Lorem ipsum</p>
                    <h1>suscipit lobortis nisl ut aliquip
                        ex ea commodo consequat. Duis autem.</h1>
                </div>

            </article>
            <article class="body">
                <div class="serviceHero">
                    <div class="imgContainer">
                        <img src="{{'assessts/si1.svg'}}" alt="">
                        <img src="{{'assessts/si2.svg'}}" alt="">
                        <img src="{{'assessts/si3.svg'}}" alt="">
                    </div>

                </div>
                <div class="serviceDescription">
                    <h1>24/7</h1>
                    <h2>Explore Lorem ipsum</h2>
                    <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut
                        laoreet</h3>
                </div>
            </article>
        </section>

        <!-- -------------------------------------------------------------------------------------- -->
        <section id="services">
            <article class="servicesContainer">
                <h1>A propos</h1>
                <img src="{{'assessts/sperateDark.png'}}">
                <h2>Lorem ipsum dolor sit amet, con</h2>
            </article>


        </section>

        <!-- -------------------------------------------------------------------------------------- -->

        <section id="mainServices">
            <article class="mainServicesContainer">
                <div class="msLeft">
                    <div class="msMenu">

                        <ul>
                            <li :class="{selected: mode=='M'}" @click="editMode('M')">FRET MARITIME</li>
                            <li :class="{selected: mode=='T'}" @click="editMode('T')">FRET TERRESTRE</li>
                            <li :class="{selected: mode=='A'}" @click="editMode('A')">FRET AERIEN</li>
                        </ul>
                    </div>
                    <div class="msDecs">
                        <!-- *---------vif -->
                        <div v-if="mode=='M'">
                            <h2>M Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt
                                ut
                                laoreet dolore
                                magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                ullamcorper
                                suscipit lobortis nisl
                                ut aliquip ex ea commodo consequat. Duis autem.
                            </p>
                        </div>

                        <!-- *---------vif -->
                        <div v-if="mode=='A'">
                            <h2>A Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt
                                ut
                                laoreet dolore
                                magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                ullamcorper
                                suscipit lobortis nisl
                                ut aliquip ex ea commodo consequat. Duis autem.
                            </p>
                        </div>

                        <!-- *---------vif -->
                        <div v-if=" mode=='T'">
                            <h2>T Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                tincidunt
                                ut
                                laoreet dolore
                                magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                ullamcorper
                                suscipit lobortis nisl
                                ut aliquip ex ea commodo consequat. Duis autem.
                            </p>
                        </div>

                    </div>

                </div>
                <div class="msright">

                    <div class="msrh">
                        <transition name="fade">

                            <img src="{{'assessts/Fm.png'}}" alt="FRET MARITIME" v-if="mode=='M'">
                            <img src="{{'assessts/FA.png'}}" alt="FRET AERIEN" v-if="mode=='A'">
                            <img src="{{'assessts/FT.png'}}" alt="FRET TERRESTRE" v-if=" mode=='T'">
                        </transition>
                        <div class="explore">
                            <img src="./assessts/ExploreL.svg" alt="get yoour quote">
                            <a href="#footer">Get Your Quote!</a>
                        </div>
                        <h2>GEt on with one click</h2>
                    </div>
                </div>
            </article>
        </section>

        <footer id="footer">
            <div class="footerContainer">

                <div class="footerTitle">
                    <h1>Contactez nous</h1>
                    <img src="{{'assessts/sperateDark.png'}}">
                    <h2>PARLONS DE VOS BESOINS, NOUS SOMMES ICI POUR VOUS AIDER!</h2>
                </div>
                <div class="contact">
                    <!-- --------------contactInfo------------- -->
                    <div class="contactInfo">
                        <!-- --------------------------- -->
                        <div class="ciCard">
                            <div class="cicTitle">
                                <h2>Adress</h2>
                            </div>
                            <div class="cicDesc">
                                <p>0, rue de Penthièvre,</p>
                                <p>75008 PARIS</p>
                                <p>FRANCE.</p>
                            </div>
                        </div>

                        <!-- --------------------------- -->
                        <div class="ciCard">
                            <div class="cicTitle">
                                <h2>Email</h2>
                            </div>
                            <div class="cicDesc">
                                <p>cs@mds-express.com</p>
                            </div>
                        </div>
                        <!-- --------------------------- -->
                        <div class="ciCard">
                            <div class="cicTitle">
                                <h2>Phone</h2>
                            </div>
                            <div class="cicDesc">
                                <p>
                                    +21653106901</p>
                            </div>
                        </div>
                    </div>

                    <!-- -------------contactForm-------------- -->
                    <div class="contactForm">
                        <input type="text" placeholder="Full name">
                        <input type="email" placeholder="Email">
                        <textarea name="" id="" cols="30" rows="70" placeholder="Subject"></textarea>
                        <button>SEND</button>
                    </div>
                </div>
                <div class="follow">
                    <h1>Follow Us</h1>
                    <a href="https://www.facebook.com/MeslameniDelivery" target="_blank"><img
                            src="{{'assessts/facebook.svg'}}" alt="facebook.com-mds"></a>
                    <a href="https://www.linkedin.com/company/meslamenidelivery" target="_blank"><img
                            src="{{'assessts/linkedin.svg'}}" alt="linkedin.com-mds"></a>
                </div>
                <hr>
                <div class="endinCo">
                    <p>
                        © 2019 MESLAMENI DELEVRY SERVICES. ALL RIGHTS RESERVED.
                    </p>
                </div>

            </div>
        </footer>
    </div>
    <!-- ---------------javascript-------------------------------- -->
    <script src="{{'js/vue.min.js'}}" type="text/javascript"></script>
    <script src="{{'js/main.js'}}" type="text/javascript"></script>
</body>
</html>
