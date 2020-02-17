<?php
/** 
 * Template name: cgc-metier
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CGC - Notre métier</title>
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
            <div class="pt-4 pl-4 pr-4 cgc-carousel-item"  style="height:100%;background: url('<?php echo get_bloginfo('template_directory'); ?>/images/metier/slide-notre-metier.png');background-size: cover;">
              <div class="row mt-5" data-aos="fade-up" data-aos-delay="700" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                <div class="col-md-6 col-lg-5 p-4 cgc-msg-header">
                  <a class="pb-2 mb-4 cgc-font-xb" href="#">NOTRE MÉTIER</a>
                  <h1 class="cgc-font-b mb-4">Une réponse aux changements profonds que connait l’Afrique, induits par les nouveaux modes de consommation, d’information et d’expression.</h1>
                  <button class="btn btn-outline-light">NOUS CONTACTER</button>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item"  data-interval="10000" style="height:100%">
            <div class="pt-4 pl-4 pr-4 cgc-carousel-item"  style="height:100%;background: url('<?php echo get_bloginfo('template_directory'); ?>/images/metier/slide-notre-metier.png');background-size: cover;">
              <div class="row mt-5" data-aos="fade-up" data-aos-delay="700" data-aos-duration="700" data-aos-easing="ease-out-cubic"> 
                <div class="col-md-6 col-lg-5 p-4 cgc-msg-header">
                  <a class="pb-2 mb-4 cgc-font-xb" href="#">NOTRE MÉTIER</a>
                  <h1 class="cgc-font-b mb-4">Une réponse aux changements profonds que connait l’Afrique, induits par les nouveaux modes de consommation, d’information et d’expression.</h1>
                  <button class="btn btn-outline-light">NOUS CONTACTER</button>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item"  data-interval="10000" style="height:100%">
            <div class="pt-4 pl-4 pr-4 cgc-carousel-item"  style="height:100%;background: url('<?php echo get_bloginfo('template_directory'); ?>/images/metier/slide-notre-metier.png');background-size: cover;">
              <div class="row mt-5" data-aos="fade-up" data-aos-delay="700" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                <div class="col-md-6 col-lg-5 p-4 cgc-msg-header">
                  <a class="pb-2 mb-4 cgc-font-xb" href="#">NOTRE MÉTIER</a>
                  <h1 class="cgc-font-b mb-4">Une réponse aux changements profonds que connait l’Afrique, induits par les nouveaux modes de consommation, d’information et d’expression.</h1>
                  <button class="btn btn-outline-light">NOUS CONTACTER</button>
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




  <div class="container custom-container02">
      <div class="row" data-aos="fade-down" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <div class="col-lg-1">
          <div class="cgc-font-b cgc-title-section-header-l-01 float-left cgc-color-purple">ÉCOSYSTÈME</div>
        </div>
      </div>
    </div>
  
    <div class="container custom-container">
      <div class="row">
        <div class="offset-lg-4 col-lg-8" style="position: relative"  data-aos="fade-left" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
          <div class="cgc-rubband-r" style="left: 0"></div>
          <div class="row mt-5">
            <div class="offset-lg-1 col-6 mb-4">
            <h3 class="cgc-font-b text-light" style="font-size: 36px">NOTRE APPROCHE</h3>
            </div>
            <div class="col-2 mb-4">
              <div class="text-center" style="width: 50px">
                <div class="cgc-bar-vll bg-light" style="width: 3px"></div><br>
                <span class="cgc-font-b text-light" style="font-size: 25px">01.</span>
              </div>
            </div>
          </div>
          <div class="row text-light pl-4 pb-4">
            <div class="col-4">
              <p>
                Fondée par Benjamin Mampuya, la Compagnie Générale de Communication (CGC) est une agence de conseil en Stratégie de communication Corporate et d’influence.<br>
                <span class="cgc-font-b">
                Notre mission consiste à de développer l’influence des acteurs économiques et des leaders d’opinions actifs sur l’axe Afrique/Europe.
                </span>
              </p>
              <p>
                À la fois strtèges d'idées, créateurs d'émotions, agents d'image et d'hommes de réseaux, nous travaillons localement et nous pensons globalement pour démultiplier vos connexions sur le continent africain, del'Afrique vers Europe mais aussi vers le reste du monde.
              </p>
            </div>
            <div class="col-4">
              <p>
                Grâce à notre parfaite connaissance du terrain, notre réseau de professionnels, notre maitrise des leviers d’influence et d’opinion en Afrique et en Europe, nous assurons la réussite du positionnement de la marque de ses clients.
              </p>
              <p>
                Son sommes convaincus que l’influence ne se décrète pas, elle se construit par l’ adhésion de son écosystème, des prises de parole qualifiées et la production de contenus créatifs et engageants.
              </p>
              <p>
                C’est notre métier.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container custom-container02">
      <div class="row" data-aos="fade-down" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <div class="offset-lg-11 col-lg-1">
          <div class="cgc-font-b cgc-title-section-footer float-right">INFLUENCE</div>
        </div>
      </div>
    </div>



  <div class="container custom-container">
    <div class="row">
      <div class="col-lg-5" style="position:relative" data-aos="fade-right" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <div class="cgc-rubband-l cgc-bg-gb"></div>
        <img class="cgc-rubband-image-l" style="left: 25%;top: 7%" data-aos="fade-up" data-aos-delay="800" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/metier/africa.png" width="350" alt="city" srcset="">
      </div>
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <div class="cgc-font-b row" style="font-size: 42px;display: inline-block;margin-left: 0%">
            <span class="col-xs-4 ml-2">
              NOTRE CRÉDO
            </span>
            <span class="cgc-bar-hll bg-dark col-xs-4 cgc-bar-w-100 cgc-bar-subtitle-02"></span>
        </div>
        <div class="row pt-2">
          <div class="col-sm-10">
          <p style="text-align: right">Notre approche repose sur le principe suivant : il existe un modèle de développement économique et social propre au continent africain. Un modèle qui intègre l’humain comme pierre angulaire de toute les stratégies.</p>

          <p style="text-align: right">Aussi nous veillons pour chacune de nos recommandations à informer, former et fédérer l’ensemble des parties prenantes. Mais aussi tenter de s’absoudre du clivage anglophone et francophone.</p>
          </div>
        </div>
        <div class="cgc-font-b row" style="font-size: 42px;display: inline-block;margin-left: 0%">
            <span class="col-xs-4 ml-2">
              MÉTHODOLOGIE
            </span>
            <span class="cgc-bar-hll bg-dark col-xs-4 cgc-bar-w-100 cgc-bar-subtitle-02"></span>
        </div>
        <div class="row pt-2">
          <div class="col-sm-10">
            <h4 class="cgc-font-b pl-3" style="text-align: right;font-size: 16px;color: #14b6b9">
              1-CRÉER L'AUTHENTICITÉ
            </h4>
            <p style="text-align: right">
              par une vision stratégique adaptée africain
            </p>
            <h4 class="cgc-font-b pl-3" style="text-align: right;font-size: 16px;color: #14b6b9">
                2-ASSURER L'ADHÉSION
            </h4>
            <p style="text-align: right">
              par des solutions créatives et des contenus engageants
            </p>
            
            <br>
          </div>
          <div class="col-sm-2">
            <div class="text-center" style="width: 50px">
              <span class="cgc-font-b" style="font-size: 25px">02.</span><br>
              <div class="cgc-bar-vll" style="width: 3px;background: #14b6b9"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container custom-container02">
    <div class="row" data-aos="fade-down" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
      <div class="col-lg-1">
        <div class="cgc-font-b cgc-title-section-footer float-left cgc-color-gb">HUMAIN</div>
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
              <a href="" class="ti-linkedin p-2 ml-1"></a>
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