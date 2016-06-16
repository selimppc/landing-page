<?php

/**
 * Template Name: Promotions Template
 */

if ( function_exists( 'ot_get_option' ) ) {
          $pest_photos_r = ot_get_option( 'pest_photos' );
          $main_content = ot_get_option( 'main_content' );
          $offers1 = ot_get_option( 'offers1' );
          $offers2 = ot_get_option( 'offers2' );
          $offers3 = ot_get_option( 'offers3' );
          $offers4 = ot_get_option( 'offers4' );
      }
 ?>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/promotions/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/promotions/style.css">
   <title>Pest Control Price Specials | Allrid Pest Services</title>
   <div class="header">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-4">

              <div id="logo">
                <a href="http://allridpests.com.au/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/promotions/logo.png"/></a>
              </div>

          </div>
          <div class="col-sm-8 col-md-8">

            <div class="to_address">
              
              <div class="top_guarantee_text">
                <div class="contacts">P: 8809 7945</div>
                <div class="contacts">M: 0414 467 981</div>
                <div class="contacts"> <a href="http://allridpests.com.au/">W: www.allridpests.com.au</a></div>
                <div class="location">Accredited - Insured - Lic: 15101 881 001 ABN: 80 269 124 164</div>

                <div class="top_gurantee_imgage">
                  <img class="guarantee" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/promotions/guarantee.png"/>
                </div>
              </div>

               

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="tagline-bar">
      <div class="container">
        <div class="col-sm-12 col-md-12">
           <h2>Are you suffering from pests in your home? Call now 02 8809 7945 or 0414 467 981</h2>
        </div>
      </div>
    </div>


    <div class="add_body">
      <div class="container">


        <div class="col-md-12">

            <?php

                if(!empty($pest_photos_r)):

                  foreach($pest_photos_r as $pest_photos):
            ?>

                      <div class="col-md-3 col-xs-6">
                          <div class="insect_photo">
                              <img src="<?php echo $pest_photos['image']; ?>" alt="<?php echo $pest_photos['title']; ?>">
                          </div>
                      </div>
            <?php
                    
                  endforeach;

                endif;


            ?>
           
        </div>

        <div class="col-md-12">
          <div class="body-text-container">
              
              <?php
                  if(!empty($main_content)):
                      echo $main_content;
                  endif;

              ?>

          </div>
        </div>

      </div>

      <div class="tagline-bar currentspecials">
        <div class="container">
          <div class="col-sm-12 col-md-12">
            <h2>Current Specials</h2>
          </div>
        </div>
      </div>


      <div class="container">

        <div class="col-md-12">
            <div class="col-md-3 col-xs-6 width100-360">
                <div class="offer_container">
                      <?php
                          if(!empty($offers1)):
                              echo $offers1;
                          endif;
                      ?>
                  </div>
            </div>

            <div class="col-md-3 col-xs-6 width100-360">
                <div class="offer_container">
                      <?php
                          if(!empty($offers2)):
                              echo $offers2;
                          endif;
                      ?>
                  </div>
            </div>

            <div class="col-md-3 col-xs-6 width100-360">
                <div class="offer_container">
                      <?php
                          if(!empty($offers3)):
                              echo $offers3;
                          endif;
                      ?>
                  </div>
            </div>

            <div class="col-md-3 col-xs-6 width100-360">
                <div class="offer_container">
                      <?php
                          if(!empty($offers4)):
                              echo $offers4;
                          endif;
                      ?>
                  </div>
            </div>
        </div>
 <div class="tagline-bar currentspecials">
        <div class="container">
          <div class="col-sm-12 col-md-12">
            <h2>Book Now 02 8809 7945 or 0414 467 981</h2>
          </div>
        </div>
      </div>
         <div class="col-md-12">
          <div class="body-text-container">
               <p class="text-align-center">Pests covered in treatment include: Native cockroaches, silverfih, spiders (inc Redbacks & Whitetails spiders), carpet beetles</p>

           
              <p class="text-align-center">
                Our pest control services are guaranteed
              </p>

              <p class="text-align-center footer">
                Warranty periods, unless stated otherwise- Ants 3 months, native cockroaches 12 months, German cockroaches 3 months, webbing spiders 6 months,
silverfih 6 months & carpet beetles 6 months.
              </p>

            </div>
        </div>

      </div>

    </div>


    </div>
    
