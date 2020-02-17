<?php
/** 
 * Template name: cgc-reference
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CGC - Nos références</title>
  <?php wp_head(); ?>
</head>
<body>
  <div class="cgc-menu">
    <!-- <div class="cgc-trapeze"></div> -->
    <div class="cgc-menu-content container custom-container">
      <div class="row">
        <div class="col-sm-4 cgc-btn-menu text-dark" id="cgc-close-menu">
          <span style="display: inline-block">
            <p class="text-center" style="width: 10px;margin: 0">M</p>
            <p class="text-center" style="width: 10px;margin: 0">E</p>
            <p class="text-center" style="width: 10px;margin: 0">N</p>
            <p class="text-center" style="width: 10px;margin: 0">U</p>
          </span><br>
          <span class="cgc-bar-hb"></span>
        </div>
        <div class="col-sm-4 text-center" style="position:relative;left:20px" data-aos="fade-down"  data-aos-duration="700" data-aos-easing="ease-out-cubic">
          <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logob.png" height="25" alt="logo" srcset="">
        </div>
      </div>
      <ul class="cgc-list-menu mt-5">
        <li data-aos="fade-right" data-aos-delay="400"><a href="<?php echo site_url( '/index.php/accueil/'); ?>">ACCUEIL</a></li>
        <li data-aos="fade-right" data-aos-delay="600"><a href="<?php echo site_url( '/index.php/notre-metier/'); ?>">NOTRE MÉTIER</a></li>
        <li data-aos="fade-right" data-aos-delay="1000"><a href="<?php echo site_url( '/index.php/notre-equipe/'); ?>">NOTRE ÉQUIPE</a></li>
        <li data-aos="fade-right" data-aos-delay="800"><a href="<?php echo site_url( '/index.php/nos-references/'); ?>">NOS RÉFÉRENCES</a></li>
        <li data-aos="fade-right" data-aos-delay="1000"><a href="<?php echo site_url( '/index.php/nos-expertises/'); ?>">NOS EXPERTISES</a></li>
      </ul>
    </div>
  </div>

  <div class="cgc-header container pt-4" style="background: url('<?php echo get_bloginfo('template_directory'); ?>/images/home/home-header-slide.png');background-size: cover;">
    <div class="row cgc-menu-navbar pt-4 pl-4 pr-4">
      <div class="col-sm-4 cgc-btn-menu" id="cgc-open-menu" data-aos="fade-right" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <span style="display: inline-block">
          <p class="text-center" style="width: 10px;margin: 0">M</p>
          <p class="text-center" style="width: 10px;margin: 0">E</p>
          <p class="text-center" style="width: 10px;margin: 0">N</p>
          <p class="text-center" style="width: 10px;margin: 0">U</p>
        </span><br>
        <span class="cgc-bar-v"></span>
      </div>
      <div class="col-sm-4 text-center" data-aos="fade-down"  data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.png" height="25" alt="logo" srcset="">
      </div>
      <div class="col-sm-4" data-aos="fade-left" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <span class="float-right cgc-font-xb" style="font-size: 12px">EN ▾</span>
      </div>
    </div>

    <div class="cgc-header-carousel">
      <div id="cgc-carousel-header" class="carousel slide" data-ride="carousel" style="height:100%">

        <div class="carousel-inner" style="height:100%">
          <div class="carousel-item active"  data-interval="10000" style="height:100%">
            <div class="pt-4 pl-4 pr-4 cgc-carousel-item"  style="height:100%;background: url('<?php echo get_bloginfo('template_directory'); ?>/images/references/nos-refs-header2.png');background-size: cover;">
              <div class="row mt-5" data-aos="fade-up" data-aos-delay="700" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                <div class="col-md-6 col-lg-5 p-4 cgc-msg-header">
                  <a class="pb-2 mb-4 cgc-font-xb" href="#">NOS RÉFÉRENCES</a>
                  <h1 class="cgc-font-b mb-4">Nos clients actuels, quelques exemples de nos réalisations et les références dont nous sommes fiers.</h1>
                  <button class="btn btn-outline-light">DÉCOUVRIR NOS CAS CLIENTS</button>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item"  data-interval="10000" style="height:100%">
            <div class="pt-4 pl-4 pr-4 cgc-carousel-item"  style="height:100%;background: url('<?php echo get_bloginfo('template_directory'); ?>/images/references/nos-refs-header2.png');background-size: cover;">
              <div class="row mt-5" data-aos="fade-up" data-aos-delay="700" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                <div class="col-md-6 col-lg-5 p-4 cgc-msg-header">
                  <a class="pb-2 mb-4 cgc-font-xb" href="#">NOS RÉFÉRENCES</a>
                  <h1 class="cgc-font-b mb-4">Nos clients actuels, quelques exemples de nos réalisations et les références dont nous sommes fiers.</h1>
                  <button class="btn btn-outline-light">DÉCOUVRIR NOS CAS CLIENTS</button>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item"  data-interval="10000" style="height:100%">
            <div class="pt-4 pl-4 pr-4 cgc-carousel-item"  style="height:100%;background: url('<?php echo get_bloginfo('template_directory'); ?>/images/references/nos-refs-header2.png');background-size: cover;">
              <div class="row mt-5" data-aos="fade-up" data-aos-delay="700" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                <div class="col-md-6 col-lg-5 p-4 cgc-msg-header">
                  <a class="pb-2 mb-4 cgc-font-xb" href="#">NOS RÉFÉRENCES</a>
                  <h1 class="cgc-font-b mb-4">Nos clients actuels, quelques exemples de nos réalisations et les références dont nous sommes fiers.</h1>
                  <button class="btn btn-outline-light">DÉCOUVRIR NOS CAS CLIENTS</button>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item"  data-interval="10000" style="height:100%">
            <div class="pt-4 pl-4 pr-4 cgc-carousel-item"  style="height:100%;background: url('<?php echo get_bloginfo('template_directory'); ?>/images/references/nos-refs-header2.png');background-size: cover;">
              <div class="row mt-5" data-aos="fade-up" data-aos-delay="700" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                <div class="col-md-6 col-lg-5 p-4 cgc-msg-header">
                  <a class="pb-2 mb-4 cgc-font-xb" href="#">NOS RÉFÉRENCES</a>
                  <h1 class="cgc-font-b mb-4">Nos clients actuels, quelques exemples de nos réalisations et les références dont nous sommes fiers.</h1>
                  <button class="btn btn-outline-light">DÉCOUVRIR NOS CAS CLIENTS</button>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item"  data-interval="10000" style="height:100%">
            <div class="pt-4 pl-4 pr-4 cgc-carousel-item"  style="height:100%;background: url('<?php echo get_bloginfo('template_directory'); ?>/images/references/nos-refs-header2.png');background-size: cover;">
              <div class="row mt-5" data-aos="fade-up" data-aos-delay="700" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                <div class="col-md-6 col-lg-5 p-4 cgc-msg-header">
                  <a class="pb-2 mb-4 cgc-font-xb" href="#">NOS RÉFÉRENCES</a>
                  <h1 class="cgc-font-b mb-4">Nos clients actuels, quelques exemples de nos réalisations et les références dont nous sommes fiers.</h1>
                  <button class="btn btn-outline-light">DÉCOUVRIR NOS CAS CLIENTS</button>
                </div>
              </div>
            </div>
          </div>


          <div class="cgc-box-scroll-state1 float-right carousel-indicators" style="top: 80%">
            
            <div class="active cgc-carousel-position" data-target="#cgc-carousel-header" data-slide-to="0"></div>
            <div class="cgc-carousel-position"  data-target="#cgc-carousel-header" data-slide-to="1"></div>
            <div class="cgc-carousel-position" data-target="#cgc-carousel-header" data-slide-to="2"></div>
            <div class="cgc-carousel-position"  data-target="#cgc-carousel-header" data-slide-to="3"></div>
            <div class="cgc-carousel-position" data-target="#cgc-carousel-header" data-slide-to="4"></div>
          </div>
        </div>
        </div>
    </div>

    <div class="row cgc-carousel-state">
      <div class="offset-xs-4 offset-sm-4 col-xs-4 col-sm-4 text-center" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <div class="cgc-box-scroll text-center">
          <span class="cgc-font-b" style="display:inline-block;font-size: 10px">SCROLL</span>
          <span class="ti-mouse mt-1" id="cgc-mouse" style="display:inline-block;font-size: 25px"></span><br>
          <div class="cgc-bar-vll"></div>
        </div>
      </div>
      <div class="col-xs-4 col-sm-4 cgc-carousel-status" data-aos="fade-left" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <div class="cgc-box-scroll-state2 float-right carousel-indicators">
          <div class="cgc-bar-hll" style="position:relative;top:10px;"></div>
          <span class="cgc-font-b mr-5" style="position:relative;bottom:20px;font-size: 38px">01</span>
        </div>
      </div>
    </div>
  </div>



  <div class="container custom-container">

    <div class="cgc-carousel-04">
      <div class="row d-flex justify-content-center">
        <div class="col-6">
          <div class="row">
            <div class="col-3 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
              <img data-aos="fade-up" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo01.png" width="125" alt="" srcset="">
            </div>
            <div class="col-3 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
              <img data-aos="fade-up" data-aos-delay="600" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo02.png" width="125" alt="" srcset="">
            </div>
            <div class="col-3 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
              <img data-aos="fade-up" data-aos-delay="800" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo03.png" width="125" alt="" srcset="">
            </div>
            <div class="col-3 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
              <img data-aos="fade-up" data-aos-delay="1000" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo04.png" width="125" alt="" srcset="">
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            <div class="col-3 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
              <img data-aos="fade-up" data-aos-delay="1200" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo05.png" width="125" alt="" srcset="">
            </div>
            <div class="col-3 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
              <img data-aos="fade-up" data-aos-delay="1400" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo06.png" width="125" alt="" srcset="">
            </div>
            <div class="col-3 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
              <img data-aos="fade-up" data-aos-delay="1600" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo07.png" width="125" alt="" srcset="">
            </div>
            <div class="col-3 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
              <img data-aos="fade-up" data-aos-delay="1800" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo08.png" width="125" alt="" srcset="">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="row">
            <div class="col-3 border d-flex justify-content-center" style="border: 2px solid rgba(164, 50, 240, 0.349)">
              <img data-aos="fade-up" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo09.png" width="125" alt="" srcset="">
            </div>
            <div class="col-3 border d-flex justify-content-center" style="border: 2px solid rgba(164, 50, 240, 0.349)">
              <img data-aos="fade-up" data-aos-delay="600" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo10.png" width="125" alt="" srcset="">
            </div>
            <div class="col-3 border d-flex justify-content-center" style="border: 2px solid rgba(164, 50, 240, 0.349)">
              <img data-aos="fade-up" data-aos-delay="800" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo11.png" width="125" alt="" srcset="">
            </div>
            <div class="col-3 border d-flex justify-content-center" style="border: 2px solid rgba(164, 50, 240, 0.349)">
              <img data-aos="fade-up" data-aos-delay="1000" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo12.png" width="125" alt="" srcset="">
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            <div class="col-3 border d-flex justify-content-center" style="border: 2px solid rgba(164, 50, 240, 0.349)">
              <img data-aos="fade-up" data-aos-delay="1200" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo13.png" width="125" alt="" srcset="">
            </div>
            <div class="col-3 border d-flex justify-content-center" style="border: 2px solid rgba(164, 50, 240, 0.349)">
              <img data-aos="fade-up" data-aos-delay="1400" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo14.png" width="125" alt="" srcset="">
            </div>
            <div class="col-3 border d-flex justify-content-center" style="border: 2px solid rgba(164, 50, 240, 0.349)">
              <img data-aos="fade-up" data-aos-delay="1600" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo15.png" width="125" alt="" srcset="">
            </div>
            <div class="col-3 border d-flex justify-content-center" style="border: 2px solid rgba(164, 50, 240, 0.349)">
              <img data-aos="fade-up" data-aos-delay="1800" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo16.png" width="125" alt="" srcset="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container custom-container" id="cgc-reset-show-africa1">
    <div class="row" data-aos="fade-down" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
      <div class="col-lg-1">
        <div class="cgc-font-b cgc-title-section-header-l-01 float-left cgc-color-blue">INTERNATIONAL</div>
      </div>
    </div>
  </div>

  <div class="container custom-container">
    <br>
    <div class="row">
      <div class="offset-lg-2 col-lg-4"  data-aos="fade-left" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <h3 class="cgc-font-b row" style="font-size: 36px;display: inline-block;">
            <span class="col-xs-4 cgc-subtitle-section ml-2">
              NOS RÉALIDATIONS PAR TÉRRITOIRE
            </span>
            <span class="cgc-bar-hll bg-dark col-xs-4 cgc-bar-w-100 cgc-bar-subtitle"></span>
        </h3>
        <div class="row pt-2">
          <div class="col-sm-1">
            <div class="text-center" style="width: 50px">
              <span class="cgc-font-b" style="font-size: 25px">02.</span><br>
              <div class="cgc-bar-vll bg-primary" style="width: 3px"></div>
            </div>
          </div>
          <div class="col-sm-11">
            <p>
              <h5 id="cgc-afn"><span class="cgc-font-color-y">____</span> <span class="cgc-font-r">AFRIQUE DU NORD</span></h5>
              <p style="font-size: 12px" id="cgc-territoire1" class="cgc-territoire">
              AITEX EXPO, CAFTAN DU MAROC, CYFY AFRICA, EDF, FEDERATION ROYAL MAROCAINE DE FOOTBALL, INTELCIA, LA MAROCAINE DES JEUX ET DES SPORTS, TANGER MED, THE FORUM FOR PEACE
              </p>
            </p>
            <p>
              <h5 id="cgc-afo"><span class="cgc-font-color-o">____</span> <span class="cgc-font-r">AFRIQUE DE L’OUEST</span></h5>
              <p style="font-size: 12px" id="cgc-territoire2" class="cgc-territoire">
              72 HEURES DU LIVRE CONAKRY, AMBASSADE DU BENIN EN FRANCE, EDF PULSE AFRICA, EMERGENCE CAPITAL, ETS GLOBAL, GAINDE 2000, GLOVO, GROHE,  HAUSSMANN GROUP, INTELCIA, PHANES GROUP, SEDIS, YAHSAT.
              </p>
            </p>
            <p>
              <h5 id="cgc-afe"><span class="cgc-font-color-r">____</span> <span class="cgc-font-r">AFRIQUE DE L’EST</span></h5>
              <p style="font-size: 12px" id="cgc-territoire3" class="cgc-territoire">
              HAUSSMANN GROUP
              </p>
            </p>
            <p>
              <h5  id="cgc-afc"><span class="cgc-font-color-g">____</span> <span class="cgc-font-r">AFRIQUE CENTRALE</span></h5>
              <p style="font-size: 12px" id="cgc-territoire4" class="cgc-territoire">
              ADETIC TCHAD, BGFI BANK, CAISTAB GABON, CENI REPUBLIQUE DEMOCRATIQUE DU CONGO, EDF PULSE AFRICA, GROUPE OGAR, INTELCIA,  METALLON CAPITAL,  MINISTERE DU BUDGET ET DES COMPTES PUBLICS DU GABON, MINISTÈRE DE LA COMMUNICATION ET DE L’ECONOMIE NUMÉRIQUE DU GABON, WASSOULOR,
              </p>
            </p>
            <p>
              <h5 id="cgc-af-aus"><span class="cgc-font-color-g2">____</span> <span class="cgc-font-r">AFRIQUE AUSTRALE</span></h5>
              <p style="font-size: 12px" id="cgc-territoire5" class="cgc-territoire">
              INTELCIA
              </p>
            </p>
            <p>
              <h5 id="cgc-europe"><span class="cgc-font-color-b">____</span> <span class="cgc-font-r">EUROPE</span></h5>
              <p style="font-size: 12px" id="cgc-territoire6" class="cgc-territoire">
              AFROBYTES, AMBASSADE DU BENIN EN FRANCE, ATDA, BUSINESS FRANCE, CABINET NELLY WANDJI, CAFTAN DU MAROC, CLUB 2030 AFRIQUE, CONSEIL FRANCAIS DU CULTE MUSULMAN, CONSEIL PRESIDENTIEL POUR L’AFRIQUE, CONSEIL TURC DES RELATIONS ECONOMIQUES EXTERIEURES - DEIK, EBANO FINANCE, EDF, EUROMEDITERRANEE, FORUM DES DIASPORAS AFRICAINES, INSEAD, INTELCIA, IPEMED, JOURNEES NATIONALES DES DIASPORAS AFRICAINES BORDEAUX, MAZARS, MERCHUNIQ STUDIO, METALLON CAPITAL, REVELATIONS BIENNALE INTERNATIONALE METIERS D’ART & CREATION, TAG PAY
              </p>
            </p>
            <p>
              <h5 id="cgc-asia"><span class="cgc-font-color-gr">____</span> <span class="cgc-font-r">ASIE</span></h5>
              <p style="font-size: 12px" id="cgc-territoire7" class="cgc-territoire">
              PHANES GROUP, THE FORUM FOR PEACE, YAHSAT
              </p>
            </p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
          </div>
        </div>
      </div>
      <div class="offset-lg-1 col-lg-5" style="position: relative"  data-aos="fade-left" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <img class="cgc-rubband-image-r" style="box-shadow: none; top: 0" data-aos-delay="800" data-aos-duration="700" data-aos-easing="ease-out-cubic" data-aos="fade-up" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/nosreferences-post01.png" height="500" alt="city" srcset="">
      </div>
    </div>
  </div>
  <div class="container custom-container" id="cgc-reset-show-africa2">
    <div class="row" data-aos="fade-down" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
      <div class="offset-lg-11 col-lg-1">
        <div class="cgc-font-b cgc-title-section-footer float-right">AFRIQUE</div>
      </div>
    </div>
  </div>


  <div class="container custom-container">
    <div class="row">
      <div class="col-lg-4" style="position:relative" data-aos="fade-right" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
          <img class="cgc-rubband-image-l" style="box-shadow: none; top: 0" data-aos-delay="800" data-aos-duration="700" data-aos-easing="ease-out-cubic" data-aos="fade-up" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/nosreferences-post02.png" height="600" alt="city" srcset="">
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <div class="cgc-font-b row" style="font-size: 38px;display: inline-block;margin-left: 0%">
            <span class="col-xs-4 ml-2">
              NOS  RÉALISATIONS PAR SECTEUR
            </span>
            <span class="cgc-bar-hll bg-dark col-xs-4 cgc-bar-w-100 cgc-bar-subtitle-02"></span>
        </div>
        <div class="row pt-2">
          <div class="col-sm-11 p-5">
            <p>
              <h4 id="cgc-industry1" style="text-align: right;font-size: 16px;"><span class="cgc-font-b">INDUSTRIE TECHNOLOGIQUE ET INNOVATION</span> <span class="cgc-font-color-r">____</span></h4>
              <div id="cgc-industry1-content" class="cgc-industry-content">
                <p  style="font-size: 12px;text-align: right;line-height: 25px">
                  <ul style="text-align: right">
                    <li>AFROBYTES</li>
                    <li>ADETIC TCHAD</li>
                    <li>AITEX EXPO </li>
                    <li>ATDA</li>
                    <li>CYFY AFRICA</li>
                    <li>EDF</li>
                    <li>GAINDE 2000</li>
                    <li>GLOVO</li>
                    <li>PHANES GROUP</li>
                    <li>TAG PAY</li>
                    <li>YAHSAT</li>
                  </ul>
                </p>
              </div>
            </p>
            <p>
              <h4 id="cgc-industry2" style="text-align: right;font-size: 16px;"><span class="cgc-font-b">INDUSTRIE DE SERVICE </span> <span class="cgc-font-color-g">____</span></h4>
              <div id="cgc-industry2-content" class="cgc-industry-content">
                <p  style="font-size: 12px;text-align: right;line-height: 25px">
                 <ul style="text-align: right">
                    <li>72 HEURES DU LIVRE CONAKRY</li>
                    <li>BGFI BANK</li>
                    <li>ETS GLOBAL</li>
                    <li>GROHE</li>
                    <li>GROUPE OGAR</li>
                    <li>INSEAD</li>
                    <li>INTELCIA</li>
                    <li>LA MAROCAINE DES JEUX ET DES SPORTS</li>
                  </ul>
                </p>
              </div>
            </p>
            <p>
              <h4 id="cgc-industry3" style="text-align: right;font-size: 16px;"><span class="cgc-font-b">INDUSTRIE DE BIENS</span> <span class="cgc-font-color-gr">____</span></h4>
              <div id="cgc-industry3-content" class="cgc-industry-content">
                <p  style="font-size: 12px;text-align: right;line-height: 25px">
                  <ul style="text-align: right">
                    <li>CABINET NELLY WANDJI</li>
                    <li>CAFTAN DU MAROC</li>
                    <li>CAISTAB GABON</li>
                    <li>EUROMEDITERRANEE</li>
                    <li>METALLON CAPITAL</li>
                    <li>MERCHUNIQ STUDIO</li>
                    <li>REVELATIONS BIENNALE INTERNATIONALE METIERS D’ART & CREATION</li>
                    <li>SEDIS</li>
                    <li>TANGER MED</li>
                    <li>WASSOULOR</li>
                  </ul>
                </p>
              </div>
            </p>
            <p>
              <h4 id="cgc-industry4" style="text-align: right;font-size: 16px;"><span class="cgc-font-b">CONSEIL ET DIPLOMATIE</span> <span class="cgc-font-color-gr">____</span></h4>
              <div id="cgc-industry4-content" class="cgc-industry-content">
                <p  style="font-size: 12px;text-align: right;line-height: 25px">
                  <ul style="text-align: right">
                    <li>AMBASSADE DU BENIN EN FRANCE</li>
                    <li>BUSINESS FRANCE</li>
                    <li>CENI REPUBLIQUE DEMOCRATIQUE DU CONGO</li>
                    <li>CLUB 2030 AFRIQUE</li>
                    <li>CONSEIL FRANCAIS DU CULTE MUSULMAN</li>
                    <li>CONSEIL PRESIDENTIEL POUR L’AFRIQUE</li>
                    <li>CONSEIL TURC DES RELATIONS ECONOMIQUES EXTERIEURES - DEIK </li>
                    <li>EBANO FINANCE</li>
                    <li>EMERGENCE CAPITAL</li>
                    <li>FEDERATION ROYAL MAROCAINE DU FOOTBALL</li>
                    <li>FORUM DES DIASPORAS AFRICAINES</li>
                    <li>JOURNEES NATIONALES DES DIASPORAS AFRICAINES BORDEAUX</li>
                    <li>IPEMED</li>
                    <li>MAZARS</li>
                    <li>MINISTERE DU BUDGET ET DES COMPTES PUBLICS DU GABON</li>
                    <li>MINISTÈRE DE LA COMMUNICATION ET DE L’ECONOMIE NUMÉRIQUE DU GABON</li>
                    <li>THE FORUM FOR PEACE</li>
                  </ul>
                </p>
              </div>
            </p>
            <br>
          </div>
          <div class="col-sm-1">
            <div class="text-center" style="width: 50px">
              <span class="cgc-font-b" style="font-size: 25px">03.</span><br>
              <div class="cgc-bar-vll bg-primary" style="width: 3px"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container custom-container" id="cgc-reset-show-diplomatie"
    <div class="row" data-aos="fade-down" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
      <div class="col-lg-1">
        <div class="cgc-font-b cgc-title-section-footer float-left">DIPLOMATIE</div>
      </div>
    </div>
  </div>






  <div class="container custom-container" style="padding: 0">
    <div id="cgc-carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <div class="active cgc-carousel-position" data-slide-to="0" data-target="#cgc-carousel"></div>
        <div class="cgc-carousel-position"  data-slide-to="1" data-target="#cgc-carousel"></div>
        <div class="cgc-carousel-position"  data-slide-to="2" data-target="#cgc-carousel"></div>
        <div class="cgc-carousel-position"  data-slide-to="3" data-target="#cgc-carousel"></div>
        <div class="cgc-carousel-position"  data-slide-to="4" data-target="#cgc-carousel"></div>
        <div class="cgc-carousel-position"  data-slide-to="5" data-target="#cgc-carousel"></div>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item p-5 active text-light" data-interval="15000" style="background: url('<?php echo get_bloginfo('template_directory'); ?>/images/references/carousel1.png') no-repeat; background-size: cover">

          <div style="width: 100%;height: 928px">
            <div class="row">
              <div class="offset-lg-2 col-10">
                <h5 class="cgc-font-r">CAS CLIENT</h5>
                <h3 class="cgc-font-b">01. CONSEIL PRESIDENTIEL POUR L'AFRIQUE</h3>
                <div class="mt-5 mb-5 p-4 bg-light text-dark" style="width: 250px">
                  <span>CONSEIL PRÉSIDENTIEL</span><br>
                  <strong>POUR L'AFRIQUE</strong>
                </div>
              </div>
            </div>

            <div class="row">

              <div class="offset-lg-2 col-4">
                <h6 class="mb-4 cgc-font-r">LA MISSION</h6>
                <p>
                  <span class="cgc-font-b">Accompagner médiatiquement</span> et auprès des publics de la diaspora 
                  <span class="cgc-font-b">les premiers pas et prises de paroles du Conseil Présidentiel pour l'Afrique</span>. 
                  Une <span class="cgc-font-b">initiative innovante d'Emmanuel Macron</span>. Président de la république française, afin de donner 
                  <span class="cgc-font-b">un nouveau visage à la relation entre l'Afrique et la France</span>.
                </p>
                <h6 class="mb-4 cgc-font-r">LES SOLUTIONS DÉPLOYÉES</h6>
                <ul>
                  <li>Conseil en stratégie de communication, positionnenment et messages clés</li>
                  <li>Production de contenu éditorial pour animer la communication</li>
                  <li>Production de contenu pour le web (Wikipédia et soundCloud)</li>
                  <li>Relations presse auprès des médias en France et en Afrique</li>
                  <li>Organisation de la première conférence de presse et point presse à Addis Abeba (Éthiopie)</li>
                  <li>Organisation d'une soirée à Paris avec les influenceurs de la diaspora en France</li>
                </ul>
              </div>

              <div class="col-4">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/it3J0KFjiD0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>

            </div>
          </div>

        </div>
        
        <div class="carousel-item p-5 text-light" data-interval="15000"  style="background: url('<?php echo get_bloginfo('template_directory'); ?>/images/references/carousel1.png') no-repeat; background-size: cover">
          
          <div style="width: 100%;height: 928px">

            <div class="row">
              <div class="offset-lg-2 col-10">
                <h5 class="cgc-font-r">CAS CLIENT</h5>
                <h3 class="cgc-font-b">02. ATDA</h3>
              </div>
            </div>

            <div class="row">

              <div class="offset-lg-2 col-4">
                <h6 class="mb-4 cgc-font-r">LA MISSION</h6>
                <p>
                  <span class="cgc-font-b">
                  Assises de la Transformation Digitale en Afrique (ATDA) dans son rôle prescripteur auprès des professionnels et institutionnels du secteur numérique en Europe et en Afrique.
                  </span>
                </p>
                <h6 class="mb-4 cgc-font-r">LES SOLUTIONS DÉPLOYÉES</h6>
                <ul>
                  <li>Conseil en stratégie et positionnement</li>
                  <li>Production d’une plateforme de marque et de messages</li>
                  <li>Organisation et production des contenus pour les deux jours de conférence</li>
                  <li>Accompagnement en relation presse et partenariat médias</li>
                </ul>
              </div>

              <div class="col-4 mt-5">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/j0uv0fwOGVk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>

            </div>

          </div>
                
        </div>

        <div class="carousel-item p-5 text-light" data-interval="15000"  style="background: url('<?php echo get_bloginfo('template_directory'); ?>/images/references/carousel1.png') no-repeat; background-size: cover">
          
          <div style="width: 100%;height: 928px">
            <div class="row">
              <div class="offset-lg-2 col-10">
                <h5 class="cgc-font-r">CAS CLIENT</h5>
                <h3 class="cgc-font-b">04. GLOVO</h3>
              </div>
            </div>

            <div class="row">

              <div class="offset-lg-2 col-4">
                <h6 class="mb-4 cgc-font-r">LA MISSION</h6>
                <p>
                Installer Glovo Côte d’ivoire comme l’une entreprise ancrée sur le plan économique et sociale à l’environnement local. Accompagner médiatiquement le lancement de la marque en Côte d’Ivoire auprès des médias locaux et panafricains.
                </p>
                <h6 class="mb-4 cgc-font-r">LES SOLUTIONS DÉPLOYÉES</h6>
                <ul>
                  <li>Conseil en stratégie et positionnement </li>
                  <li>Conseil en communication de crise</li>
                  <li>Gestion des relations médias en Côte d’Ivoire et auprès des médias panafricains.</li>
                  <li>Mise en place et gestion des compagnes de communication avec les influenceurs locaux</li>
                  <li>Organisation d’entretiens avec les partenaires économiques ivoiriens</li>
                  <li>Organisation d’entretiens avec les partenaires institutionnels ivoiriens et panafricains</li>
                </ul>
              </div>

              <div class="col-4 mt-5">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xZ5O_BvqedU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
          </div>

          </div>
                
        </div>

        <div class="carousel-item p-5 text-light" data-interval="15000"  style="background: url('<?php echo get_bloginfo('template_directory'); ?>/images/references/carousel1.png') no-repeat; background-size: cover">
          
          <div style="width: 100%;height: 928px">
            <div class="row">
              <div class="offset-lg-2 col-10">
                <h5 class="cgc-font-r">CAS CLIENT</h5>
                <h3 class="cgc-font-b">03. DEIK</h3>
              </div>
            </div>

            <div class="row">

              <div class="offset-lg-2 col-4">
                <h6 class="mb-4 cgc-font-r">LA MISSION</h6>
                <p>
                  Les entreprises turques ont massivement développé leurs
                  <span class="cgc-font-b"> activités sur le marché africain </span>
                  depuis 2003 avec l’aide de la diplomatie économique de la Turquie, notamment par le biais du 
                  <span class="cgc-font-b">Conseil des Relations Economiques Extérieures (DEIK).</span><br>
                  Avec une hausse des investissements directs turcs en Afrique, passés de 100 M USD en 2003 à 6,5 Mds USD en 2017, 
                  <span class="cgc-font-b"> activités sur le marché africain </span>
                </p>
                <h6 class="mb-4 cgc-font-r">DEIK affirme sa volonté de poursuivre son engagement en Afrique en nouant d’avantager de partenariats avec des acteurs économiques engagés dans le développement du continent.</h6>
                <ul>
                  <li>Conseil en stratégie et positionnement  (messages clés)</li>
                  <li>Organisation et gestion d’une soirée de rencontres entre entrepreneurs turcs et des entreprises issues des diasporas africaines et  actives sur le continent</li>
                  <li>Sélection et invitation des participants à la rencontre</li>
                </ul>
              </div>

              <div class="col-4 mt-5">
                <iframe width="560" height="315" src="https://www.africanewsagency.fr/turquie-des-ambitions-affichees-et-reaffirmees-en-afrique/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
          </div>

          </div>
                
        </div>


        <div class="carousel-item p-5 text-light" data-interval="15000"  style="background: url('<?php echo get_bloginfo('template_directory'); ?>/images/references/carousel1.png') no-repeat; background-size: cover">
          
          <div style="width: 100%;height: 928px">
            <div class="row">
              <div class="offset-lg-2 col-10">
                <h5 class="cgc-font-r">CAS CLIENT</h5>
                <h3 class="cgc-font-b">05. INTELCIA</h3>
              </div>
            </div>

            <div class="row">

              <div class="offset-lg-2 col-4">
                <h6 class="mb-4 cgc-font-r">LA MISSION</h6>
                <p>
                Affirmer la position d’Intelcia, comme leader panafricain des métiers de la relation client. Promouvoir médiatiquement les valeurs et les engagements du groupe.
                </p>
                <h6 class="mb-4 cgc-font-r">LES SOLUTIONS DÉPLOYÉES</h6>
                <ul>
                  <li>Conseil en stratégie et positionnement </li>
                  <li>Production d’une plateforme de messages </li>
                  <li>Production des contenus (études, conférences,  )</li>
                  <li>Accompagnement en relation médias  et relations publiques en Europe et en Afrique</li>
                  <li>Organisation d’entretiens avec les partenaires économiques locaux en Afrique</li>
                  <li>Organisation d’entretiens avec les partenaires institutionnels locaux en Afrique</li>
                  <li>Organisation des rencontres avec les influenceurs de la diaspora africaine de France</li>
                </ul>
              </div>

              <div class="col-4 mt-5">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/2cd_i7n8kqY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
          </div>

          </div>
                
        </div>


        <div class="carousel-item p-5 text-light" data-interval="15000"  style="background: url('<?php echo get_bloginfo('template_directory'); ?>/images/references/carousel1.png') no-repeat; background-size: cover">
          
          <div style="width: 100%;height: 928px">
            <div class="row">
              <div class="offset-lg-2 col-10">
                <h5 class="cgc-font-r">CAS CLIENT</h5>
                <h3 class="cgc-font-b">06. METALLON CAPITAL</h3>
              </div>
            </div>

            <div class="row">

              <div class="offset-lg-2 col-4">
                <h6 class="mb-4 cgc-font-r">LA MISSION</h6>
                <p>
                Incarner médiatiquement la réussite de la compagnie Metallon Corporation à travers son Président Mzi Khumalo, business man sud-africain et symbole du rêve africain
                </p>
                <h6 class="mb-4 cgc-font-r">LES SOLUTIONS DÉPLOYÉES</h6>
                <ul>
                  <li>Conseil en stratégie et positionnement </li>
                  <li>Accompagnement en relation médias en Europe et en Afrique </li>
                  <li>Accompagnement en relations publiques à l’international</li>
                </ul>
              </div>

              <div class="col-4 mt-5">
              <iframe width="560" height="315" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/350113795&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
              </div>
          </div>

          </div>
                
        </div>


      </div>
      <a class="carousel-control-prev" href="#cgc-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#cgc-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>







  <footer class="container custom-container text-light p-5" style="background: rgb(7, 7, 7)">
    <div class="row">
      <div class="offset-sm-1 col-lg-10">
        <div class="row">

          <div class="col-lg-3">
              <p class="row">
                <span class="col-2 pr-5">
                  <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.png" style="display: inline-block" height="20" alt="" srcset="">
                </span>
                <span class="col-10 cgc-font-r">COMPAGNIE GENERALE DE COMMUNICATION</span>
              </p>
              <p class="mt-5">
                MENTION LEGAL
              </p>
              <p>© CGC 2019 </p>
          </div>
          <div class="col-lg-3">
            <ul class="cgc-list">
              <li><a href="<?php echo site_url( '/index.php/accueil/'); ?>">ACCUEIL</a></li>
              <li><a href="<?php echo site_url( '/index.php/notre-metier/'); ?>">NOTRE MÉTIER</a></li>
              <li><a href="<?php echo site_url( '/index.php/notre-equipe/'); ?>">NOTRE ÉQUIPE</a></li>
              <li><a href="<?php echo site_url( '/index.php/nos-references/'); ?>">NOS RÉFÉRENCES</a></li>
              <li><a href="<?php echo site_url( '/index.php/nos-expertises/'); ?>">NOS EXPERTISES</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
            <p>CONTACT</p>
            <ul class="cgc-list">
              <li>33 rue Réaumur</li> 
              <li>75003 Paris</li>
              <li>France</li>
              <li>T. : +33 1 42 71 84 38</li>
              <li>M. : hello@compagniegenerale.fr</li>
            </ul>
          </div>
          <div class="col-lg-3">
            <p>RESEAUX SOCIAUX</p>
            <p class="cgc-social">
              <a href="https://twitter.com/AgenceCGC?fbclid=IwAR2oSHN9quHRRmIBgj_UbP3183qxxTOACIsaa_Kv0SP6EoVE8pP2ZBNbuGI" class="ti-twitter-alt p-2 ml-1"></a>
              <a href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fcgc---compagnie-g%25C3%25A9n%25C3%25A9rale-de-communication%2Fabout%3Ffbclid%3DIwAR1bnYV_dnf0NSZO_VkdYhQ7FZEKcqy2m6YJqtWKb4zcNpaQKNeiUNn0wpc" class="ti-linkedin p-2 ml-1"></a>
              <a href="https://www.youtube.com/channel/UCViT2p24FGO_pHVr4wzJtSA?fbclid=IwAR3PuXJMqk8K3uZbVHlQQ-22hwl2H1GwyU8PN1rBlLXr4uPUARoPRTvAzVA" class="ti-youtube p-2 ml-1"></a>
            </p>
          </div>
        </div>

      </div>
    </div>
  </footer>

</body>
<?php wp_footer(); ?>
<script>
  AOS.init();
</script>
</html> 