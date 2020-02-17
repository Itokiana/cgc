<?php
/** 
 * Template name: cgc-expertise
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CGC - Nos expertises</title>
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
  <div class="cgc-header cgc-header-xp container pt-4 pl-4 pr-4">
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
    <div class="row mt-5 d-flex justify-content-center text-center" data-aos="fade-up" data-aos-delay="700" data-aos-duration="700" data-aos-easing="ease-out-cubic">
      <div class="col-md-12 col-lg-12 p-4 cgc-msg-header" style="margin-top: 0">
        <a class="pb-2 mb-4 cgc-font-xb mb-5" href="#" style="font-size: 20px">NOS EXPERTISES</a><br>
        <img class="mt-5" src="<?php echo get_bloginfo('template_directory'); ?>/images/expertises/visuel_rond.png" style="display: inline-block" height="150"  alt="" srcset="">
        <div class="row">
          <div class="col-3">
            <div class="rounded-circle bg-light" width="75" height="75"></div>
          </div>
          <div class="col-3">
            <div class="rounded-circle bg-light" width="75" height="75"></div>
          </div>
          <div class="col-3">
            <div class="rounded-circle bg-light" width="75" height="75"></div>
          </div>
          <div class="col-3">
            <div class="rounded-circle bg-light" width="75" height="75"></div>
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
    </div>
  </div>


  <div class="container custom-container">
    <div class="row" data-aos="fade-down" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
      <div class="col-lg-1">
        <div class="cgc-font-b cgc-title-section-header-l-01 float-left cgc-color-blue">NOTORIETE</div>
      </div>
    </div>
  </div>

  <div class="container custom-container" style="overflow: unset">
    <div class="row">
      <div class="offset-lg-2 col-lg-4"  data-aos="fade-left" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <h3 class="cgc-font-b row" style="font-size: 36px;display: inline-block;">
            <span class="col-xs-4 cgc-subtitle-section ml-2">
              CONSEIL ET STRATÉGIE
            </span>
            <span class="cgc-bar-hll bg-dark col-xs-4 cgc-bar-w-100 cgc-bar-subtitle"></span>
        </h3>
        <div class="row pt-2">
          <div class="col-sm-1">
            <div class="text-center" style="width: 50px">
              <span class="cgc-font-b" style="font-size: 25px">01.</span><br>
              <div class="cgc-bar-vll bg-primary" style="width: 3px"></div>
            </div>
          </div>
          <div class="col-sm-11">
            <h4 class="cgc-font-b pl-3" style="font-size: 16px;color: rgb(23, 141, 219)">"POSITIONNER VOTRE MARQUE ET RÉVÉLER SA SINGULARITÉ AUPRÈS DE VOS PUBLICS"</h4>
            <ul>
              <li>Conseil et stratégie de communication</li>
              <li>Définir votre positionnement et vos engagements</li>
              <li>Étude et analyse de votre positionnement</li>
              <li>Rédiger votre plateforme de messages et vos éléments de langage</li>
              <li>Concevoir votre ligne éditoriale</li>
              <li>Identifier les cibles, préscripteurs et influenceurs de votre écosystème</li>
              <li>Construire votre plan d'action 360°</li>
              <li>Séléctionner votre outils de communication les plus adaptés et pertinents</li>
              <li>Coordonner l'ensemble de vos actions de communication</li>
              <li>Anticiper et gestion de crise</li>
            </ul>
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
        <img class="cgc-rubband-image-r" data-aos-delay="800" data-aos-duration="700" data-aos-easing="ease-out-cubic" data-aos="fade-up" src="<?php echo get_bloginfo('template_directory'); ?>/images/expertises/pic5.png" width="500" alt="city" srcset="">
      </div>
    </div>
  </div>
  <div class="container custom-container">
    <div class="row" data-aos="fade-down" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
      <div class="offset-lg-11 col-lg-1">
        <div class="cgc-font-b cgc-title-section-footer float-right">SINGULARITÉ</div>
      </div>
    </div>
  </div>


  <div class="container custom-container">
    <div class="row">
      <div class="col-lg-6" style="position:relative" data-aos="fade-right" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <div class="cgc-rubband-l cgc-bg-pink"></div>
        <img class="cgc-rubband-image-l" style="left: 50%;top: 5%" data-aos="fade-up" data-aos-delay="800" data-aos-duration="700" data-aos-easing="ease-out-cubic" src="<?php echo get_bloginfo('template_directory'); ?>/images/expertises/pic3.png" width="300" alt="city" srcset="">
      </div>
      <div class="col-lg-5" data-aos="fade-up" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <div class="cgc-font-b row" style="font-size: 42px;display: inline-block;margin-left: 0%">
            <span class="col-xs-4 ml-2">
              CONTENU DE MARQUE
            </span>
            <span class="cgc-bar-hll bg-dark col-xs-4 cgc-bar-w-100 cgc-bar-subtitle-02"></span>
        </div>
        <div class="row pt-2">
          <div class="col-sm-10">
            <h4 class="cgc-font-b pl-3" style="text-align: right;font-size: 16px;color: rgb(224, 65, 145)">"PRODUIRE LES CONTENUS QUI DONNENT DU SENS ET RENFORCENT LE POSITIONNEMENT DE VOTRE MARQUE"</h4>
            <ul style="text-align: right" class="cgc-container-list">
                <li><b></b>Un storytelling unique et une plate-forme de messages forts.</li>
                <li><b></b>Réaliser votre étude, rapport, infographie, ou baromètre</li>               
                <li><b></b>Média-training et coaching en prise de parole</li>                
                <li><b></b>Formuler vos messages pour la presse</li>               
                <li><b></b>Produire des dossiers spéciaux rédactionnels</li>              
                <li><b></b>Traduction « natives  et techniques »  des contenus anglais, arabe, français et portugais </li>               
                <li><b></b>Améliorer votre identité et présence numérique (médias sociaux et media online) </li>              
                <li><b></b>Installer votre marque au coeur des conversations sur les réseaux sociaux </li>             
                <li><b></b>Créer des contenus multiformats pour tous vos supports de communication : graphisme, photo, vidéo, site web, etc.</li>
            </ul>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
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
  <div class="container custom-container">
    <div class="row" data-aos="fade-down" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
      <div class="col-lg-1">
        <div class="cgc-font-b cgc-title-section-footer float-left cgc-color-pink">CRÉATIVITÉ</div>
      </div>
    </div>
  </div>








  <div class="container custom-container" style="overflow: unset">
    <div class="row">
      <div class="offset-lg-2 col-lg-4"  data-aos="fade-left" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <h3 class="cgc-font-b row" style="font-size: 36px;display: inline-block;">
            <span class="col-xs-4 cgc-subtitle-section ml-2">
              RELATIONS INFLUENCEURS
            </span>
            <span class="cgc-bar-hll bg-dark col-xs-4 cgc-bar-w-100 cgc-bar-subtitle"></span>
        </h3>
        <div class="row pt-2">
          <div class="col-sm-1">
            <div class="text-center" style="width: 50px">
              <span class="cgc-font-b" style="font-size: 25px">03.</span><br>
              <div class="cgc-bar-vll bg-primary" style="width: 3px"></div>
            </div>
          </div>
          <div class="col-sm-11">
            <h4 class="cgc-font-b pl-3" style="font-size: 16px;color: rgb(238, 157, 34)">
            TOUCHER VOS PUBLICS EN ACTIVANT LES RELAIS D'OPINION DE VOTRE ÉCOSYSTÈME
            </h4>
            <ul style="text-align: left">
              <li>Animer et coordonner vos prises de paroles dans les médias</li>
              <li>Organiser vos rencontres institutionnelles et politiques</li>
              <li>Créer et encadrer vos évènements de relation presse et relations publiques</li>
              <li>Promouvoir vos prises de positions et engagements auprès des personnalités publiques influentes</li>
            </ul>
            <a href="<?php echo site_url( '/index.php/nos-references/'); ?>" class="pb-3 cgc-job-link cgc-font-b mb-4 float-right">DECOUVREZ NOS REFERENCES <span class="ti-arrow-right"></span></a>
            <br>
            <br>
            <br>
            <br>
            <br>
          </div>
        </div>
      </div>
      <div class="offset-lg-1 col-lg-5" style="position: relative"  data-aos="fade-left" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <div class="cgc-rubband-r  cgc-bg-orange"></div>
        <img class="cgc-rubband-image-r" data-aos-delay="800" data-aos-duration="700" data-aos-easing="ease-out-cubic" data-aos="fade-up" src="<?php echo get_bloginfo('template_directory'); ?>/images/expertises/pic4.png" height="300" alt="city" srcset="">
      </div>
    </div>
  </div>
  <div class="container custom-container">
    <div class="row" data-aos="fade-down" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
      <div class="offset-lg-11 col-lg-1">
        <div class="cgc-font-b cgc-title-section-footer float-right cgc-color-orange">OPINION</div>
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