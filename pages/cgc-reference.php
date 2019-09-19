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
      </div>
      <ul class="cgc-list-menu mt-5">
        <li data-aos="fade-right" data-aos-delay="400"><a href="<?php echo site_url( '/index.php/accueil/'); ?>">ACCUEIL</a></li>
        <li data-aos="fade-right" data-aos-delay="600"><a href="<?php echo site_url( '/index.php/notre-metier/'); ?>">NOTRE MÉTIER</a></li>
        <li data-aos="fade-right" data-aos-delay="800"><a href="<?php echo site_url( '/index.php/nos-references/'); ?>">NOS RÉFÉRENCES</a></li>
        <li data-aos="fade-right" data-aos-delay="1000"><a href="<?php echo site_url( '/index.php/nos-expertises/'); ?>">NOS EXPERTISES</a></li>
        <li data-aos="fade-right" data-aos-delay="1200"><a href="<?php echo site_url( '/index.php/notre-equipe/'); ?>">NOTRE ÉQUIPE</a></li>
      </ul>
    </div>
  </div>
  <div class="cgc-header container pt-4 pl-4 pr-4" style="background: url('<?php echo get_bloginfo('template_directory'); ?>/images/references/nos-refs-header.jpg');background-size: cover;">
    <div class="row">
      <div id="cgc-open-menu" class="col-sm-4 cgc-btn-menu" data-aos="fade-right" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
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
    <div class="row mt-5" data-aos="fade-up" data-aos-delay="700" data-aos-duration="700" data-aos-easing="ease-out-cubic">
      <div class="col-md-6 col-lg-5 p-4 cgc-msg-header">
        <a class="pb-2 mb-4 cgc-font-xb" href="#">NOS PRÉFÉRENCES</a>
        <h1 class="cgc-font-b mb-4">
          Nos clients actuels, quelques exemples
            de nos réalisations et les références
            dont nous sommes fiers.
        </h1>
        <button class="btn btn-outline-light">Découvrir nos cas clients</button>
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
        <div class="cgc-box-scroll-state float-right">
          <div class="cgc-bar-hll"></div>
          <span class="cgc-font-b mr-5" style="font-size: 38px">01</span>
          <div class="active cgc-carousel-position"></div>
          <div class="cgc-carousel-position"></div>
          <div class="cgc-carousel-position"></div>
        </div>
      </div>
    </div>
  </div>


  <div class="container custom-container">
    <div class="cgc-carousel-04">
      <div class="row d-flex justify-content-center">
        <div class="col-1 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
          <img data-aos="fade-up" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo01.png" width="125" alt="" srcset="">
        </div>
        <div class="col-1 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
          <img data-aos="fade-up" data-aos-delay="600" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo02.png" width="125" alt="" srcset="">
        </div>
        <div class="col-1 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
          <img data-aos="fade-up" data-aos-delay="800" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo03.png" width="125" alt="" srcset="">
        </div>
        <div class="col-1 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
          <img data-aos="fade-up" data-aos-delay="1000" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo04.png" width="125" alt="" srcset="">
        </div>
        <div class="col-1 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
          <img data-aos="fade-up" data-aos-delay="1200" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo05.png" width="125" alt="" srcset="">
        </div>
        <div class="col-1 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
          <img data-aos="fade-up" data-aos-delay="1400" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo06.png" width="125" alt="" srcset="">
        </div>
        <div class="col-1 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
          <img data-aos="fade-up" data-aos-delay="1600" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo07.png" width="125" alt="" srcset="">
        </div>
        <div class="col-1 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
          <img data-aos="fade-up" data-aos-delay="1800" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo08.png" width="125" alt="" srcset="">
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-1 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
          <img data-aos="fade-up" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo09.png" width="125" alt="" srcset="">
        </div>
        <div class="col-1 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
          <img data-aos="fade-up" data-aos-delay="600" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo10.png" width="125" alt="" srcset="">
        </div>
        <div class="col-1 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
          <img data-aos="fade-up" data-aos-delay="800" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo11.png" width="125" alt="" srcset="">
        </div>
        <div class="col-1 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
          <img data-aos="fade-up" data-aos-delay="1000" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo12.png" width="125" alt="" srcset="">
        </div>
        <div class="col-1 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
          <img data-aos="fade-up" data-aos-delay="1200" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo13.png" width="125" alt="" srcset="">
        </div>
        <div class="col-1 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
          <img data-aos="fade-up" data-aos-delay="1400" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo14.png" width="125" alt="" srcset="">
        </div>
        <div class="col-1 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
          <img data-aos="fade-up" data-aos-delay="1600" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo15.png" width="125" alt="" srcset="">
        </div>
        <div class="col-1 border" style="border: 2px solid rgba(164, 50, 240, 0.349)">
          <img data-aos="fade-up" data-aos-delay="1800" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/references/logo16.png" width="125" alt="" srcset="">
        </div>
      </div>
    </div>
  </div>


  <div class="container custom-container">
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
              <h5><span class="cgc-font-color-y">____</span> <span class="cgc-font-r">AFRIQUE DU NORD</span></h5>
            </p>
            <p>
              <h5><span class="cgc-font-color-o">____</span> <span class="cgc-font-r">AFRIQUE DE L’OUEST</span></h5>
            </p>
            <p>
              <h5><span class="cgc-font-color-r">____</span> <span class="cgc-font-r">AFRIQUE DE L’EST</span></h5>
            </p>
            <p>
              <h5><span class="cgc-font-color-g">____</span> <span class="cgc-font-r">AFRIQUE CENTRALE</span></h5>
              <p style="font-size: 12px">
              BGFI BANK, CAISTAB GABON, CENI REPUBLIQUE DEMOCRATIQUE DU CONGO, EDF PULSE
              AFRICA, GROUPE OGAR, INTELCIA, METALLON CAPITAL, MINISTERE DU BUDGET ET DES
              COMPTES PUBLICS DU GABON, MINISTÈRE DE LA COMMUNICATION ET DE L’ECONOMIE
              NUMÉRIQUE DU GABON, WASSOULOR,
              </p>
            </p>
            <p>
              <h5><span class="cgc-font-color-g2">____</span> <span class="cgc-font-r">AFRIQUE AUSTRALE</span></h5>
            </p>
            <p>
              <h5><span class="cgc-font-color-b">____</span> <span class="cgc-font-r">EUROPE</span></h5>
            </p>
            <p>
              <h5><span class="cgc-font-color-gr">____</span> <span class="cgc-font-r">ASIE</span></h5>
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
  <div class="container custom-container">
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
      <div class="col-lg-5" data-aos="fade-up" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <div class="cgc-font-b row" style="font-size: 38px;display: inline-block;margin-left: 0%">
            <span class="col-xs-4 ml-2">
              NOS  RÉALISATIONS PAR SECTEUR
            </span>
            <span class="cgc-bar-hll bg-dark col-xs-4 cgc-bar-w-100 cgc-bar-subtitle-02"></span>
        </div>
        <div class="row pt-2">
          <div class="col-sm-10">
            <h4 style="text-align: right;font-size: 16px;"><span class="cgc-font-r">INDUSTRIE TECHNOLOGIQUE ET INNOVATION</span> <span class="cgc-font-color-r">____</span></h4>
            <h4 style="text-align: right;font-size: 16px;"><span class="cgc-font-r">INDUSTRIE DE SERVICE </span> <span class="cgc-font-color-g">____</span></h4>
            <h4 style="text-align: right;font-size: 16px;"><span class="cgc-font-r">INDUSTRIE DE BIENS</span> <span class="cgc-font-color-gr">____</span></h4>
            <h4 class="cgc-font-b pl-3" style="text-align: right;font-size: 16px;color: rgb(116, 35, 221)">CONSEIL ET DIPLOMATIE</h4>
            <p  style="font-size: 12px;text-align: right;line-height: 25px">
              AMBASSADE DU BENIN EN FRANCE
              CENI REPUBLIQUE DEMOCRATIQUE DU CONGO
              CLUB AFRIQUE DE LA PRESSE PARISIENNE
              CLUB 2030 AFRIQUE
              CONSEIL FRANCAIS DU CULTE MUSULMAN
              CONSEIL PRESIDENTIEL POUR L’AFRIQUE
              CONSEIL TURC DES RELATIONS ECONOMIQUES EXTERIEURES – DEIK
              EBANO FINANCE
              EMERGENCE CAPITAL
              FORUM DES DIASPORAS AFRICAINES
              JOURNEES NATIONALES DES DIASPORAS AFRICAINES BORDEAUX
              MAZARS
              MINISTERE DU BUDGET ET DES COMPTES PUBLICS DU GABON
              MINISTÈRE DE LA COMMUNICATION ET DE L’ECONOMIE NUMÉRIQUE DU GABON
              THE FORUM FOR PEACE
            </p>
            <br>
          </div>
          <div class="col-sm-2">
            <div class="text-center" style="width: 50px">
              <span class="cgc-font-b" style="font-size: 25px">03.</span><br>
              <div class="cgc-bar-vll bg-primary" style="width: 3px"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container custom-container">
    <div class="row" data-aos="fade-down" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
      <div class="col-lg-1">
        <div class="cgc-font-b cgc-title-section-footer float-left">DIPLOMATIE</div>
      </div>
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
              <li>ACCUEIL</li>
              <li>NOTRE METIER</li>
              <li>NOS REFERECENCES</li>
              <li>NOS EXPERTISES</li>
              <li>NOTRE EQUIPE</li>
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
              <span class="ti-twitter-alt p-2 ml-1"></span>
              <span class="ti-linkedin p-2 ml-1"></span>
              <span class="ti-youtube p-2 ml-1"></span>
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