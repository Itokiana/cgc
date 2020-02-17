<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CGC</title>
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
            <div class="pt-4 pl-4 pr-4 cgc-carousel-item"  style="height:100%;background: url('<?php echo get_bloginfo('template_directory'); ?>/images/home/home-header-slide.png');background-size: cover;">
              <div class="row mt-5" data-aos="fade-up" data-aos-delay="700" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                <div class="col-md-6 col-lg-5 p-4 cgc-msg-header">
                  <a class="pb-2 mb-4 cgc-font-xb" href="#">SUIVEZ-NOUS ...</a>
                  <h1 class="cgc-font-b mb-4">Pour comprendre l'Afrique,<br>il faut du temps... <br>Ou une bonne raison.</h1>
                  <button class="btn btn-outline-light"><span class="ti-control-play"></span> LIRE LA VIDEO</button>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item"  data-interval="10000" style="height:100%">
            <div class="pt-4 pl-4 pr-4 cgc-carousel-item"  style="height:100%;background: url('<?php echo get_bloginfo('template_directory'); ?>/images/home/home-header-slide.png');background-size: cover;">
              <div class="row mt-5" data-aos="fade-up" data-aos-delay="700" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                <div class="col-md-6 col-lg-5 p-4 cgc-msg-header">
                  <a class="pb-2 mb-4 cgc-font-xb" href="#">SUIVEZ-NOUS ...</a>
                  <h1 class="cgc-font-b mb-4">Pour comprendre l'Afrique,<br>il faut du temps... <br>Ou une bonne raison.</h1>
                  <button class="btn btn-outline-light"><span class="ti-control-play"></span> LIRE LA VIDEO</button>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item"  data-interval="10000" style="height:100%">
            <div class="pt-4 pl-4 pr-4 cgc-carousel-item"  style="height:100%;background: url('<?php echo get_bloginfo('template_directory'); ?>/images/home/home-header-slide.png');background-size: cover;">
              <div class="row mt-5" data-aos="fade-up" data-aos-delay="700" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                <div class="col-md-6 col-lg-5 p-4 cgc-msg-header">
                  <a class="pb-2 mb-4 cgc-font-xb" href="#">SUIVEZ-NOUS ...</a>
                  <h1 class="cgc-font-b mb-4">Pour comprendre l'Afrique,<br>il faut du temps... <br>Ou une bonne raison.</h1>
                  <button class="btn btn-outline-light"><span class="ti-control-play"></span> LIRE LA VIDEO</button>
                </div>
              </div>
            </div>
          </div>


          <div class="cgc-box-scroll-state1 float-right carousel-indicators">
            
            <div class="active cgc-carousel-position" data-target="#cgc-carousel-header" data-slide-to="0"></div>
            <div class="cgc-carousel-position"  data-target="#cgc-carousel-header" data-slide-to="1"></div>
            <div class="cgc-carousel-position" data-target="#cgc-carousel-header" data-slide-to="2"></div>
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

  <div class="container custom-container p-4 cgc-mosaique">
    <div class="row text-center p-3">
      <div class="offset-sm-2 col-lg-8 p-5">
        <p class="cgc-font-b text-light" style="font-size: 32px;">Vos publics veulent de l'engagement,<br>donc soyez authentiques, <br>et ensemble faisons preuve d'audace</p>
      </div>
    </div>
  </div>

  <div class="container custom-container02">
    <div class="row" data-aos="fade-down" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
      <h2 class="cgc-font-b cgc-title-section float-left">ENGAGEMENT</h2>
    </div>
    <div class="row">
      <div class="offset-lg-1 col-lg-5"  data-aos="fade-left" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <h3 class="cgc-font-b row" style="font-size: 36px;display: inline-block;">
            <span class="col-xs-4 cgc-subtitle-section ml-2">
              UNE NOUVELLE NARRATIVE AFRICAINE
            </span>
            <span class="cgc-bar-hll bg-dark col-xs-4 cgc-bar-w-100 cgc-bar-subtitle"></span>
        </h3>
        <div class="row pt-2">
          <div class="col-sm-2">
            <div class="text-center" style="width: 50px">
              <span class="cgc-font-b" style="font-size: 25px">01.</span><br>
              <div class="cgc-bar-vll bg-primary" style="width: 3px"></div>
            </div>
          </div>
          <div class="col-sm-10">
            <h4 class="cgc-font-r" style="font-size: 16px;color: rgba(24, 100, 171, 1)"><span class="cgc-font-b">COMPAGNIE GENERALE DE COMMUNICATION</span><br> AGENCE CONSEIL EN STRATEGIE DE COMMUNICATION CORPORATE ET INFLUENCE</h4>
            <strong class="cgc-font-b" style="font-size: 12px">#CHANGENARRATIVE</strong>
            <p>Au delà de vouloir proposer les meilleures stratégies de communication, j’ai fondé une agence qui prend position pour l’ Afrique.</p>

            <p>Résolument afro-optimiste, la Compagnie générale de Communication a pour ambition de donner de la résonnance aux acteurs qui participent à confirmer la place stratégique que l’Afrique occupe dans le paysage économique mondial.</p>  

            <p>Travailler aux liens entre l’Afrique et le reste du monde résulte d’un choix stratégique, d’une sensibilité particulière et d’une profonde volonté d’écrire un nouveau récit autour des dynamiques de ce continent.</p> 
            
            <p><i style="color: rgba(24, 100, 171, 1);">Benjamin MAMPUYA, CEO</i></p>
            <br>
            <a href="<?php echo site_url( '/index.php/notre-metier/'); ?>" class="pb-3 cgc-job-link cgc-font-b mb-4">DECOUVREZ NOTRE METIER <span class="ti-arrow-right"></span></a>
            <br>
          </div>
        </div>
      </div>
      <div class="offset-lg-1 col-lg-5" style="position: relative"  data-aos="fade-left" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <div class="cgc-rubband-r" style="bottom: 15%"></div>
        <img class="cgc-rubband-image-r" data-aos-delay="800" data-aos-duration="700" data-aos-easing="ease-out-cubic" data-aos="fade-up" src="<?php echo get_bloginfo('template_directory'); ?>/images/home/audace.png" height="350" alt="city" srcset="">
      </div>
    </div>
  </div>
  <div class="container custom-container02">
    <div class="row" data-aos="fade-down" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
      <div class="offset-lg-11 col-lg-1">
        <div class="cgc-font-b cgc-title-section-footer float-right" style="bottom: 200px">AUDACE</div>
      </div>
    </div>
  </div>


  <div class="container custom-container">
    <div class="row">
      <div class="col-lg-6" style="position:relative" data-aos="fade-right" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <div class="cgc-rubband-l cgc-bg-pink"></div>
        <div class="cgc-rubband-image-l float-right" style="box-shadow: none" data-aos="fade-up" data-aos-delay="800" data-aos-duration="700" data-aos-easing="ease-out-cubic" height="350">
          <img class="cgc-img" style="box-shadow: -10px 10px 15px rgba(0, 0, 0, .5);" id="cgc-default-img" src="<?php echo get_bloginfo('template_directory'); ?>/images/post-img02.jpg" height="350" alt="city" srcset="">
          <img class="cgc-img" style="box-shadow: -10px 10px 15px rgba(0, 0, 0, .5);" id="cgc-atda" src="<?php echo get_bloginfo('template_directory'); ?>/images/home/ATDA.png" height="350" alt="city" srcset="">
          <img class="cgc-img" style="box-shadow: -10px 10px 15px rgba(0, 0, 0, .5);" id="cgc-deik" src="<?php echo get_bloginfo('template_directory'); ?>/images/home/DEIK.png" height="350" alt="city" srcset="">
          <img class="cgc-img" style="box-shadow: -10px 10px 15px rgba(0, 0, 0, .5);" id="cgc-glovo" src="<?php echo get_bloginfo('template_directory'); ?>/images/home/GIOVO.png" height="350" alt="city" srcset="">
          <img class="cgc-img" style="box-shadow: -10px 10px 15px rgba(0, 0, 0, .5);" id="cgc-intelcia" src="<?php echo get_bloginfo('template_directory'); ?>/images/home/intelcia.png" height="350" alt="city" srcset="">
          <img class="cgc-img" style="box-shadow: -10px 10px 15px rgba(0, 0, 0, .5);" id="cgc-mc" src="<?php echo get_bloginfo('template_directory'); ?>/images/home/metalon_capital.png" height="350" alt="city" srcset="">
        </div>
      </div>
      <div class="col-lg-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <h3 class="cgc-font-b" style="font-size: 36px;display: inline-block;text-align: right">
            NOS CAMPAGNES EN AFRIQUE ET AILLEURS
        </h3>
        <div class="row pt-2">
          <div class="col-sm-10">
            <p style="text-align: right">
              Quelques exemples de nos réalisations de conseil en stratégie de communication, créations de contenu et actions auprès des influenceurs
            </p>
            <ul class="cgc-list cgc-font-r">
              <li style="text-align: right">CONSEIL PRESIDENTIEL POUR L’AFRIQUE ____</li>
              <li style="text-align: right" id="cgc-glovo-target">GLOVO ____</li>
              <li style="text-align: right" id="cgc-atda-target">ATDA ____</li>
              <li style="text-align: right" id="cgc-deik-target">DEIK ____</li>
              <li style="text-align: right" id="cgc-intelcia-target">INTELCIA ____</li>
              <li style="text-align: right" id="cgc-mc-target">METALLON CAPITAL ____</li>
            </ul>
            <br>
            <a href="<?php echo site_url( '/index.php/nos-references/'); ?>" class="pb-3 cgc-job-link cgc-font-b mb-4 float-right">DECOUVREZ NOS REFERENCES <span class="ti-arrow-right"></span></a>
            <br>
          </div>
          <div class="col-sm-2" id="cgc-restart-img">
            <div class="text-center" style="width: 50px">
              <span class="cgc-font-b" style="font-size: 25px">02.</span><br>
              <div class="cgc-bar-vll bg-primary" style="width: 3px"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container custom-container02">
    <div class="row" data-aos="fade-down" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
      <div class="col-lg-1">
        <div class="cgc-font-b cgc-title-section-footer float-left cgc-color-pink">AUTHENTIQUE</div>
      </div>
    </div>
  </div>



  



  <div class="container custom-container mt-5">
    <div class="row">
      <div class="offset-lg-2 col-lg-4"  data-aos="fade-left" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <h3 class="cgc-font-b row" style="font-size: 36px;display: inline-block;">
            <span class="cgc-bar-hll bg-dark col-xs-1 cgc-bar-w-100 cgc-bar-subtitle"></span>
            <span class="col-xs-4 cgc-subtitle-section ml-2 pt-2">
              NOS EXPERTISES
            </span>
        </h3>
        <div class="row pt-2 mb-5">
          <div class="col-sm-1">
            <br>
            <br>
            <div class="text-center" style="width: 50px">
              <span class="cgc-font-b" style="font-size: 25px">03.</span><br>
              <div class="cgc-bar-vll bg-primary" style="width: 3px"></div>
            </div>
          </div>
          <div class="col-sm-11">
            <br>
            <br>
            <h4 class="cgc-font-b pl-3" style="font-size: 16px;color: rgb(23, 141, 219)">
            .CONSEIL STRATÉGIE
            </h4>
            <h4 class="cgc-font-b pl-3" style="font-size: 16px;color: rgb(23, 141, 219)">
            .CONTENU DE MARQUE
            </h4>
            <h4 class="cgc-font-b pl-3" style="font-size: 16px;color: rgb(23, 141, 219)">
            .RELATIONS INFLUENCEURS
            </h4>
            <br>
            <br>
            <br>
            
            <a href="<?php echo site_url( '/index.php/nos-expertises/'); ?>" class="pb-3 cgc-job-link cgc-font-b mb-4">DECOUVREZ NOS EXPERTISES  <span class="ti-arrow-right"></span></a>
            <br>
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
        <div class="cgc-rubband-r"></div>
        <img class="cgc-rubband-image-r" data-aos-delay="800" data-aos-duration="700" data-aos-easing="ease-out-cubic" data-aos="fade-up" src="<?php echo get_bloginfo('template_directory'); ?>/images/home/expertise.png" height="350" alt="city" srcset="">
      </div>
    </div>
  </div>








  <div class="container custom-container02">
    <div class="row">
      <div class="offset-lg-3 col-lg-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <div class="cgc-font-b cgc-title-section-header-r float-right">NARATIVE</div>
      </div>
    </div>
  </div>
  <div class="container custom-container">
    <div class="row" data-aos="fade-right" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
      <div class="col-lg-8 pt-5 pb-5 pl-5" style="position:relative">
        <div class="cgc-rubband-l" style="right: 10px"></div>
        <div class="row">
          <div class="col-6 mb-4">
            <h3 class="cgc-font-b text-light" style="font-size: 36px">NOS DERNIERS ACTUALITES</h3>
          </div>
          <div class="col-2 mb-4">
            <div class="text-center" style="width: 50px">
              <div class="cgc-bar-vll bg-light" style="width: 3px"></div><br>
              <span class="cgc-font-b text-light" style="font-size: 25px">04.</span>
            </div>
          </div>
        </div>
        <div class="row">

          <div class="col-lg-4 text-light" data-aos="fade-up" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/home/actu1.png" height="200" alt="" srcset="">
            <h4 class="cgc-font-b mt-2" style="font-size: 18px">CUIMER vainqueur</h4>
            <span class="cgc-font-r">22/06/2019</span>
            <p class="cgc-font-r">
              Félicitation #cuimer vainqueur du prix
              #Afrique #10000startups @LaTribune<br>
              @LTAfrique
            </p>
          </div>
          <div class="col-lg-4 text-light" data-aos="fade-up" data-aos-delay="600" data-aos-duration="700" data-aos-easing="ease-out-cubic">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/home/actu2.png" height="200" alt="" srcset="">
            <h4 class="cgc-font-b mt-2" style="font-size: 18px">CUIMER vainqueur</h4>
            <span class="cgc-font-r">22/06/2019</span>
            <p class="cgc-font-r">
              Félicitation #cuimer vainqueur du prix
              #Afrique #10000startups @LaTribune<br>
              @LTAfrique
            </p>
          </div>

          <div class="col-lg-4 text-light" data-aos="fade-up" data-aos-delay="800" data-aos-duration="700" data-aos-easing="ease-out-cubic">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/home/actu3.png" height="200" alt="" srcset="">
            <h4 class="cgc-font-b mt-2" style="font-size: 18px">CUIMER vainqueur</h4>
            <span class="cgc-font-r">22/06/2019</span>
            <p class="cgc-font-r">
              Félicitation #cuimer vainqueur du prix
              #Afrique #10000startups @LaTribune<br>
              @LTAfrique
            </p>
          </div>
        </div>
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
<script>
</script>
<?php wp_footer(); ?>
<script>
  AOS.init();
</script>
</html> 