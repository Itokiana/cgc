<?php
/** 
 * Template name: cgc-home
*/

?>
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
  <div class="cgc-header container pt-4 pl-4 pr-4" style="background: url('<?php echo get_bloginfo('template_directory'); ?>/images/slider.jpg');background-size: cover;">
    <div class="row">
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
    <div class="row mt-5" data-aos="fade-up" data-aos-delay="700" data-aos-duration="700" data-aos-easing="ease-out-cubic">
      <div class="col-md-6 col-lg-5 p-4 cgc-msg-header">
        <a class="pb-2 mb-4 cgc-font-xb" href="#">SUIVEZ-NOUS ...</a>
        <h1 class="cgc-font-b mb-4">Vivez une journee avec CGC en total immersion chez notre client Intelsia</h1>
        <button class="btn btn-outline-light"><span class="ti-control-play"></span> LIRE LA VIDEO</button>
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

  <div class="container custom-container p-4 cgc-mosaique">
    <div class="row text-center p-3">
      <div class="offset-sm-2 col-lg-8 p-5">
        <p class="cgc-font-b text-light" style="font-size: 32px;">Vos publics veulent de l'engagement,donc soyez authentiques, et ensemble faisons preuve d'audace</p>
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
            <p>Au delà de vouloir proposer les meilleures stratégies de communication, j’ai fondé une agence qui prend position pour l’Afrique.</p>
            <p>Résolument afro-optimiste, la Compagnie générale de Communication a pour ambition de donner de la résonnance aux acteurs qui participent à confirmer la place stratégique que l’Afrique occupe dans le paysage économique mondial. En accompagnant acteurs du privé et décideurs publics sur des problématiques d’influence, il s’agit, aussi pour nous, de mettre en lumière ces #Doers qui changent positivement la narrative du continent africain.</p>
            <p>Travailler aux liens entre l’Europe et l’Afrique résulte d’un choix stratégique, d’une sensibilité particulière et d’une profonde volonté d’écrire un nouveau récit autour des dynamiques des deux continents.</p>
            <p><i style="color: rgba(24, 100, 171, 1);">Benjamin MAMPUYA, CEO</i></p>
            <br>
            <a href="#" class="pb-3 cgc-job-link cgc-font-b mb-4">DECOUVREZ NOTRE METIER <span class="ti-arrow-right"></span></a>
            <br>
          </div>
        </div>
      </div>
      <div class="offset-lg-1 col-lg-5" style="position: relative"  data-aos="fade-left" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <div class="cgc-rubband-r" style="bottom: 15%"></div>
        <img class="cgc-rubband-image-r" data-aos-delay="800" data-aos-duration="700" data-aos-easing="ease-out-cubic" data-aos="fade-up" src="<?php echo get_bloginfo('template_directory'); ?>/images/post-img01.jpg" height="400" alt="city" srcset="">
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
      <div class="col-lg-4" style="position:relative" data-aos="fade-right" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <div class="cgc-rubband-l cgc-bg-pink"></div>
        <img class="cgc-rubband-image-l" data-aos="fade-up" data-aos-delay="800" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/post-img02.jpg" height="300" alt="city" srcset="">
      </div>
      <div class="col-lg-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <h3 class="cgc-font-b" style="font-size: 36px;display: inline-block;text-align: right">
            NOS CAMPAGNES EN AFRIQUE ET AILLEURS
        </h3>
        <div class="row pt-2">
          <div class="col-sm-10">
            <p style="text-align: right">
                Quelques exemples de nos réalisations de conseil en
                stratégie de communication, créations
                de contenu, relations presses et campagnes 
                de relations publiques.
            </p>
            <ul class="cgc-list cgc-font-r">
              <li style="text-align: right">CONSEIL PRESIDENTIEL POUR L’AFRIQUE ____</li>
              <li style="text-align: right">GLOVO ____</li>
              <li style="text-align: right">ATDA ____</li>
              <li style="text-align: right">DEIK ____</li>
              <li style="text-align: right">INTELCIA ____</li>
              <li style="text-align: right">METALLON CAPITAL ____</li>
            </ul>
            <br>
            <a href="#" class="pb-3 cgc-job-link cgc-font-b mb-4 float-right">DECOUVREZ NOS PREFERENCES <span class="ti-arrow-right"></span></a>
            <br>
          </div>
          <div class="col-sm-2">
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



  <div class="container custom-container02">
    <div class="row">
      <div class="offset-lg-10 col-lg-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <div class="cgc-font-b cgc-title-section-header-r float-right">NARATIVE</div>
      </div>
    </div>
  </div>
  <div class="container custom-container">
    <div class="row" data-aos="fade-left" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
      <div class="offset-lg-4 col-lg-8 pt-5 pb-5 pl-5" style="position:relative">
        <div class="cgc-rubband-r" style="left: 10px"></div>
        <div class="row">
          <div class="col-6 mb-4">
            <h3 class="cgc-font-b text-light" style="font-size: 36px">NOS DERNIERS ACTUALITES</h3>
          </div>
          <div class="col-2 mb-4">
            <div class="text-center" style="width: 50px">
              <div class="cgc-bar-vll bg-light" style="width: 3px"></div><br>
              <span class="cgc-font-b text-light" style="font-size: 25px">03.</span>
            </div>
          </div>
        </div>
        <div class="row">

          <div class="col-lg-4 text-light" data-aos="fade-up" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/caroussel01.jpg" height="200" alt="" srcset="">
            <h4 class="cgc-font-b mt-2" style="font-size: 18px">CUIMER vainqueur</h4>
            <span class="cgc-font-r">22/06/2019</span>
            <p class="cgc-font-r">
              Félicitation #cuimer vainqueur du prix
              #Afrique #10000startups @LaTribune<br>
              @LTAfrique
            </p>
          </div>
          <div class="col-lg-4 text-light" data-aos="fade-up" data-aos-delay="600" data-aos-duration="700" data-aos-easing="ease-out-cubic">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/caroussel03.jpg" height="200" alt="" srcset="">
            <h4 class="cgc-font-b mt-2" style="font-size: 18px">CUIMER vainqueur</h4>
            <span class="cgc-font-r">22/06/2019</span>
            <p class="cgc-font-r">
              Félicitation #cuimer vainqueur du prix
              #Afrique #10000startups @LaTribune<br>
              @LTAfrique
            </p>
          </div>

          <div class="col-lg-4 text-light" data-aos="fade-up" data-aos-delay="800" data-aos-duration="700" data-aos-easing="ease-out-cubic">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/caroussel01.jpg" height="200" alt="" srcset="">
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



  <div class="container custom-container02">
    <div class="row" data-aos="fade-up" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
      <div class="col-lg-1">
        <div class="cgc-font-b cgc-title-section-header-l float-left">EXPERTS</div>
      </div>
    </div>
  </div>
  <div class="container custom-container">
      <div class="row">
        <div class="col-lg-4" style="position:relative" data-aos="fade-right"data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic" >
          <div class="cgc-rubband-l"></div>
          <img class="cgc-rubband-image-c" data-aos-delay="800" data-aos-duration="700" data-aos-easing="ease-out-cubic" data-aos="fade-up" src="<?php echo get_bloginfo('template_directory'); ?>/images/post01.png" height="550" alt="city" srcset="">
        </div>
        <div class="col-lg-3" data-aos="fade-left" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
          <h3 class="cgc-font-b" style="font-size: 36px;display: inline-block;text-align: right">
              CONTACTEZ-NOUS
          </h3>
          <div class="row pt-2">
            <div class="col-sm-10">
                <h4 class="cgc-font-b" style="font-size: 16px;color: rgba(24, 100, 171, 1);text-align: right"> ____ +33 (0)1.42.71.84.38</h4><br>
              <p style="text-align: right">
                <span class="cgc-font-b">NOUS CONSULTER</span>
                <br>	
                hello@compagniegenerale.fr
              </p><br>
              <p style="text-align: right">
                <span class="cgc-font-b">NOUS REJOINDRE</span>
                <br>
                Job@compagniegenerale.fr
              </p><br>
              <p style="text-align: right">
                <span class="cgc-font-b">SUIVEZ-NOUS</span>
                <br>
                <span class="ti-twitter-alt p-2 ml-1"></span>
                <span class="ti-linkedin p-2 ml-1"></span>
                <span class="ti-youtube p-2 ml-1"></span>
              </p>
              <br>
              <br>
            </div>
            <div class="col-sm-2">
              <div class="text-center" style="width: 50px">
                <span class="cgc-font-b" style="font-size: 25px">04.</span><br>
                <div class="cgc-bar-vll bg-primary" style="width: 3px"></div>
              </div>
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