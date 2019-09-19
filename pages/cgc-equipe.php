<?php
/** 
 * Template name: cgc-equipe
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CGC - Notre équipe</title>
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
  <div class="cgc-header container pt-4 pl-4 pr-4" style="background: url('<?php echo get_bloginfo('template_directory'); ?>/images/equipes/notre-equipe-slide-01.jpg');background-size: cover;">
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
      <div class="col-md-6 col-lg-6 p-4 cgc-msg-header">
        <a class="pb-2 mb-4 cgc-font-xb" href="#">NOTRE EQUIPE</a>
        <h1 class="cgc-font-b mb-4">
          Agence independante, humaine, rassemblant des personnalites d'horizons
          differentes, notre sensibilite est panafricaine
          et notre terrain de jeu est international.
        </h1>
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



  <div class="container custom-container02">
    <div class="row" data-aos="fade-down" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
      <div class="col-lg-1">
        <div class="cgc-font-b cgc-title-section-header-l-01 float-left">HUMAINE</div>
      </div>
    </div>
  </div>

  <div class="container custom-container">
    <div class="row">
      <div class="offset-lg-2 col-lg-10"  data-aos="fade-left" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <div class="cgc-font-b row" style="font-size: 42px;display: inline-block;">
            <span class="cgc-bar-hll bg-dark col-xs-4 cgc-bar-w-100 cgc-bar-subtitle"></span>
            <span class="col-xs-4 cgc-subtitle-section ml-2">
              NOTRE EQUIPE OPERATIONNELLE
            </span>
        </div>
        <div class="row pt-2">
          <div class="col-sm-1">
            <div class="text-center" style="width: 50px">
              <span class="cgc-font-b" style="font-size: 25px">01.</span><br>
              <div class="cgc-bar-vll bg-primary" style="width: 3px"></div>
            </div>
          </div>
          <div class="col-sm-11">
            <div class="cgc-rubband-r cgc-bg-purple"></div>
            <div class="row pt-5 pb-5">
              <div class="col-12 cgc-carousel-02">
                <div class="cgc-carousel-02-content text-center">
                    <div class="card m-1 float-left shadow-lg" style="width: 20rem;" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                      <img src="<?php echo get_bloginfo('template_directory'); ?>/images/equipes/001-BENJ.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title cgc-font-b">Benjamin Mampuya</h5>
                        <h6 class="cgc-font-r">Directeur - Fondateur</h6>
                        <p class="card-text">
                          Toujours disponible pour echanger sur votre 
                          marche et definir les strategies de
                          communications les plus adaptes
                        </p>
                      </div>
                    </div>
                    <div class="card m-1 float-left shadow-lg" style="width: 20rem;" data-aos="fade-up" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                      <img src="<?php echo get_bloginfo('template_directory'); ?>/images/equipes/002-2.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title cgc-font-b">Evelyne Espacia</h5>
                        <h6 class="cgc-font-r">Directrice Administrative et Financiere</h6>
                        <p class="card-text">
                          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi excepturi reprehenderit volu  
                        </p>
                      </div>
                    </div>
                    <div class="card m-1 float-left shadow-lg" style="width: 20rem;" data-aos="fade-up" data-aos-delay="600" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                      <img src="<?php echo get_bloginfo('template_directory'); ?>/images/equipes/003-2.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title cgc-font-b">Jessica Malemba</h5>
                        <h6 class="cgc-font-r">Consultante editoriale et brand content</h6>
                        <p class="card-text">
                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus neque provident optio doloremque dolor.
                        </p>
                      </div>
                    </div>
                    <div class="card m-1 float-left shadow-lg" style="width: 20rem;" data-aos="fade-up" data-aos-delay="800" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                      <img src="<?php echo get_bloginfo('template_directory'); ?>/images/equipes/004-1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title cgc-font-b">Fanny Moscatelli</h5>
                        <h6 class="cgc-font-r">Fanny Moscatelli, Consultante RP et Influence</h6>
                        <p class="card-text">
                          Je vous trouve les meilleurs opportunites de press
                        </p>
                      </div>
                    </div>
                    <div class="card m-1 float-left shadow-lg" style="width: 20rem;" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                      <img src="<?php echo get_bloginfo('template_directory'); ?>/images/equipes/005-1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title cgc-font-b">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container custom-container02">
    <div class="row" data-aos="fade-down" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
      <div class="offset-lg-11 col-lg-1">
        <div class="cgc-font-b cgc-title-section-footer float-right">PROCHE</div>
      </div>
    </div>
  </div>






  <div class="container custom-container">
    <div class="row">
      <div class="col-lg-10"  data-aos="fade-right" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <div class="cgc-font-b row" style="font-size: 42px;display: inline-block;margin-left: 50%">
            <span class="col-xs-4 ml-2">
              NOS EXPERTS
            </span>
            <span class="cgc-bar-hll bg-dark col-xs-4 cgc-bar-w-100 cgc-bar-subtitle-02"></span>
        </div>
        <div class="row pt-2">
          
          <div class="col-sm-11" style="position: relative">
            <div class="cgc-rubband-l cgc-bg-pink"></div>
            <div class="row pt-5 pb-5">
              <div class="col-12 cgc-carousel-03">
                <div class="cgc-carousel-03-content text-center">
                  <div class="card m-1 float-right shadow-lg" style="width: 20rem;" data-aos="fade-up" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                    <div class="card-body">
                      <h5 class="card-title cgc-font-xb" style="color:#f3295f">AFFAIRE PUBLIQUES ET LOBBYING</h5>
                      <span class="cgc-bar-hll" style="background: #f3295f"></span>
                      <h6 class="cgc-font-b">Annie Mutamba</h6>
                      <span class="cgc-font-r">MERIDIA PARTNERS</span><br>
                      <span class="cgc-font-n"  style="color:#f3295f">Collaboratrice</span>
                      <p class="card-text">
                        Agence de conseil base a Bruxelles et
                          specialise dans les realisations institutionnelles
                          entre l'Europe et l'Afrique
                      </p>
                    </div>
                  </div>

                  <div class="card m-1 float-right shadow-lg" style="width: 20rem;" data-aos="fade-up" data-aos-delay="600" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                    <div class="card-body">
                      <h5 class="card-title cgc-font-xb" style="color:#f3295f">POLITIQUE AFRICAINE</h5>
                      <span class="cgc-bar-hll" style="background: #f3295f"></span>
                      <h6 class="cgc-font-b">Louis Keunayou</h6>
                      <span class="cgc-font-r">CLUB DE L'INFORMATION AFRICAINE</span><br>
                      <span class="cgc-font-n"  style="color:#f3295f">President</span>
                      <p class="card-text">
                        Plus de 20ans d'experience en journalisme
                        tele, radio et presse ecrite.
                        Ancien fondateur de l'association de la presse 
                        panafricaine.
                      </p>
                    </div>
                  </div>

                  <div class="card m-1 float-right shadow-lg" style="width: 20rem;" data-aos="fade-up" data-aos-delay="800" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                    <div class="card-body">
                      <h5 class="card-title cgc-font-xb" style="color:#f3295f">ECONOMIE INTERNATIONALE</h5>
                      <span class="cgc-bar-hll" style="background: #f3295f"></span>
                      <h6 class="cgc-font-b">Alfred Mignot des Campani</h6>
                      <span class="cgc-font-r">AFRICA PRESSE PARIS</span><br>
                      <span class="cgc-font-n"  style="color:#f3295f">Directeur</span>
                      <p class="card-text">
                        Plus de 30 ans d'experience en journalisme. 
                        Ancien redac chef de la Tribune Hebdo, Courier
                        International, Paris Diplomate, VoxLatina.
                      </p>
                    </div>
                  </div>

                  <div class="card m-1 float-right shadow-lg" style="width: 20rem;" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="700" data-aos-easing="ease-out-cubic">
                    <div class="card-body">
                      <h5 class="card-title cgc-font-xb" style="color:#f3295f">AFFAIRE PUBLIQUES ET LOBBYING</h5>
                      <span class="cgc-bar-hll" style="background: #f3295f"></span>
                      <h6 class="cgc-font-b">Annie Mutamba</h6>
                      <span class="cgc-font-r">MERIDIA PARTNERS</span><br>
                      <span class="cgc-font-n"  style="color:#f3295f">Collaboratrice</span>
                      <p class="card-text">
                        Agence de conseil base a Bruxelles et
                          specialise dans les realisations institutionnelles
                          entre l'Europe et l'Afrique
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-1">
            <div class="text-center" style="width: 50px">
              <span class="cgc-font-b" style="font-size: 25px">02.</span><br>
              <div class="cgc-bar-vll" style="width: 3px;background: #f3295f"></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="container custom-container02">
    <div class="row" data-aos="fade-down" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
      <div class="col-lg-1">
        <div class="cgc-font-b cgc-title-section-footer float-left cgc-color-pink">EXPERTISE</div>
      </div>
    </div>
  </div>




  <div class="container custom-container">
    <div class="row pl-5 mb-5">
      <div class="col-lg-6"  data-aos="fade-right" data-aos-delay="400" data-aos-duration="700" data-aos-easing="ease-out-cubic">
        <h3 class="cgc-font-b row" style="font-size: 36px;display: inline-block;">
            <span class="col-xs-4 cgc-subtitle-section ml-2">
              NOS PARTENAIRES
            </span>
            <span class="cgc-bar-hll bg-dark col-xs-4 cgc-bar-w-100 cgc-bar-subtitle"></span>
        </h3>
        <div class="row pt-2">
          <div class="col-sm-2">
            <div class="text-center" style="width: 50px">
              <span class="cgc-font-b" style="font-size: 25px">03.</span><br>
              <div class="cgc-bar-vll bg-primary" style="width: 3px"></div>
            </div>
          </div>
          <div class="col-sm-10">
            <p>La compagnie Generale de communication deploie ses actions dans plus de 21 pays d'Afrique, grace 
              ses representants locaux et des agences independantes partenaires.
            </p>
            <p style="color: blueviolet">
              Afrique du Sud - Algerie - Angola - Benin - Burkina Faso - Cameroun - 
              Cote d'Ivoire - Gabon - Guinee - Kenya - Madagascar - Maroc - Maurice - 
              Nigeria - Republique du Congo - Rwanda - Senegal - Tchad - Togo - Tunisie
            </p>
            <p>
              L'agence a egalement constitue un reseau <strong style="color: blueviolet">#ChangeNarrative</strong>, regroupant des professionnels des entreprises,
              des chercheurs, des professeurs, des artistes, etudiants, etc. Des hommes et des femmes de qualite 
              , experts dans leurs domaines, base en Europe et en Afrique et qui partage notre vision, nos valeurs
              et notre volonte de promouvoir une narrative positive de l'Afrique et des personnes qui la represente.
            </p>
            <br>
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