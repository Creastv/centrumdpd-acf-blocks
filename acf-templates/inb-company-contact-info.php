<?php
$address = get_field('address');
$link = get_field('link_address');
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';

$telNumbers = get_field('numbers');
$titleNumbers = get_field('title_header_numbers');

$emails = get_field('email_addresses');
$titleEmails = get_field('title_header_email');

$displaySocialmedia = get_field('display_social_meldia');
$titleSocial = get_field('title_header_social_media');
//   social media
 if (get_locale() == 'pl_PL') { $display_sm  = get_theme_mod( 'd_social_media' ); } else { $display_sm  = get_theme_mod( 'd_social_media_en' ); }
 if (get_locale() == 'pl_PL') { $sm_title  = get_theme_mod( 'sm-desc' ); } else { $sm_title  = get_theme_mod( 'sm-desc_en' ); }
 if (get_locale() == 'pl_PL') { $linkiedin  = get_theme_mod( 'linkiedin' ); } else { $linkiedin  = get_theme_mod( 'linkiedin_en' ); }
 if (get_locale() == 'pl_PL') { $facebook  = get_theme_mod( 'facebook' ); } else { $facebook  = get_theme_mod( 'facebook_en' ); }
 if (get_locale() == 'pl_PL') { $twitter  = get_theme_mod( 'twitter' ); } else { $twitter  = get_theme_mod( 'twitter_en' ); }
 if (get_locale() == 'pl_PL') { $instagram  = get_theme_mod( 'instagram' ); } else { $instagram  = get_theme_mod( 'instagram_en' ); }
 if (get_locale() == 'pl_PL') { $pinterest  = get_theme_mod( 'pinterest' ); } else { $pinterest  = get_theme_mod( 'pinterest_en' ); }
 if (get_locale() == 'pl_PL') { $youtube  = get_theme_mod( 'youtube' ); } else { $youtube  = get_theme_mod( 'youtube_en' ); }

$id = $block['id'];
$className = 'inb-company-contact-info';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
?>
<section id="<?php echo $id; ?>" class=" <?php echo esc_attr($className); ?>">
   <div class="full">
        <div class="wraper">
            <?php if($address) { ?>
            <div class="col">
               <div class="box">
                  <svg xmlns="http://www.w3.org/2000/svg" width="33.389" height="43.73" viewBox="0 0 33.389 43.73">
                  <path id="Shape_19" data-name="Shape 19" d="M225.695,4113.73S209,4093.767,209,4085.306,216.475,4070,225.695,4070s16.695,6.852,16.695,15.306S225.695,4113.73,225.695,4113.73Zm0-24.052a4.389,4.389,0,1,0-4.77-4.372A4.584,4.584,0,0,0,225.695,4089.678Z" transform="translate(-209 -4070)" fill="#3497db"/>
                  </svg>
                  <span><?php echo $address; ?></span>
                  <?php if( $link ) { ?>
                    <a class="btn btn-main" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                  <?php } ?>
               </div>
            </div>
            <?php } ?>
            <?php if($telNumbers) { ?>
            <div class="col">
               <div class="box">
                  <svg xmlns="http://www.w3.org/2000/svg" width="38.817" height="38.132" viewBox="0 0 38.817 38.132">
                  <path id="Shape_20" data-name="Shape 20" d="M217.309,4137.261c-7.735-7.592-9.357-13.5-9.357-17.115a9.507,9.507,0,0,1,2.519-6.838l.808-.791,8.457,8.281-1.482,1.456a1.133,1.133,0,0,0,0,1.583l12.731,12.5a1.148,1.148,0,0,0,.808.324,1.136,1.136,0,0,0,.805-.324l1.48-1.456,8.452,8.3-.808.792a10.375,10.375,0,0,1-7.092,2.477C230.523,4146.443,224.7,4144.515,217.309,4137.261Zm19.046-4.621,1-.974a3.465,3.465,0,0,1,4.835,0l3.615,3.548a3.393,3.393,0,0,1,0,4.747l-.989.979Zm-22.784-22.364.984-.978a3.466,3.466,0,0,1,4.839,0l3.615,3.548a3.4,3.4,0,0,1,0,4.745l-1,.975Z" transform="translate(-207.951 -4108.311)" fill="#3497db"/>
                  </svg>
                  <?php if($titleNumbers) { ?>
                  <small><?php echo $titleNumbers; ?></small>
                  <?php } ?>
                  <?php if( have_rows('numbers') ): ?>
                  <ul>
                  <?php while( have_rows('numbers') ): the_row(); 
                     $number = get_sub_field('number');
                     $numberLink = get_sub_field('link_number');
                  ?>
                     <li>
                        <?php if($numberLink) { ?>
                        <a href="<?php echo $numberLink; ?>">
                        <?php } ?>
                        <?php echo $number; ?>
                        <?php if($numberLink) { ?>
                        </a>
                        <?php } ?>
                     </li>
                  <?php endwhile; ?>
                  </ul>
                  <?php endif; ?>
               </div>
            </div>
            <?php } ?>

            <?php if($emails) { ?>
            <div class="col">
               <div class="box">
                  <svg xmlns="http://www.w3.org/2000/svg" width="43" height="29.001" viewBox="0 0 43 29.001">
                  <path id="Shape_21" data-name="Shape 21" d="M208.584,4171a3.607,3.607,0,0,1-3.584-3.625v-21.75a3.609,3.609,0,0,1,3.584-3.626h35.833a3.61,3.61,0,0,1,3.584,3.626v21.75a3.609,3.609,0,0,1-3.584,3.625Zm-1.792-25.375v21.75a1.8,1.8,0,0,0,1.792,1.813h35.833a1.8,1.8,0,0,0,1.792-1.812v-21.75a1.8,1.8,0,0,0-1.792-1.812H208.584A1.8,1.8,0,0,0,206.792,4145.626Zm35.335,19.784-8.062-5.436a.913.913,0,0,1-.248-1.258.889.889,0,0,1,1.243-.25l8.062,5.436a.911.911,0,0,1,.248,1.257.887.887,0,0,1-1.243.251Zm-32.5-.251a.911.911,0,0,1,.248-1.257l8.062-5.436a.889.889,0,0,1,1.243.25.915.915,0,0,1-.25,1.258l-8.062,5.436a.885.885,0,0,1-1.241-.251Zm1.153-14.242a.913.913,0,0,1-.265-1.253.889.889,0,0,1,1.239-.268l14.743,9.65,14.743-9.65a.89.89,0,0,1,1.239.268.911.911,0,0,1-.267,1.253L226.5,4161.205Z" transform="translate(-205 -4142)" fill="#3497db"/>
                  </svg>
                  <?php if($titleEmails) { ?>
                  <small><?php echo $titleEmails; ?></small>
                  <?php } ?>
                  <?php if( have_rows('email_addresses') ): ?>
                  <ul>
                  <?php while( have_rows('email_addresses') ): the_row(); 
                     $email = get_sub_field('email');
                     $emailLink = get_sub_field('link_email');
                  ?>
                     <li>
                        <?php if($emailLink) { ?>
                        <a href="<?php echo $emailLink; ?>">
                        <?php } ?>
                        <?php echo $email; ?>
                        <?php if($emailLink) { ?>
                        </a>
                        <?php } ?>
                     </li>
                  <?php endwhile; ?>
                  </ul>
                  <?php endif; ?>
               </div>
            </div>
            <?php } ?>
            <?php if($displaySocialmedia) { ?>
               <div class="col">
                  <div class="box">
                     <svg xmlns="http://www.w3.org/2000/svg" width="31.5" height="29.25" viewBox="0 0 31.5 29.25">
                     <path id="Icon_ionic-ios-star-outline" data-name="Icon ionic-ios-star-outline" d="M32.555,13.5H22.212L19.069,4.12a1.139,1.139,0,0,0-2.138,0L13.788,13.5H3.375A1.128,1.128,0,0,0,2.25,14.625a.827.827,0,0,0,.021.19,1.081,1.081,0,0,0,.471.795l8.5,5.991L7.98,31.085a1.128,1.128,0,0,0,.387,1.266A1.088,1.088,0,0,0,9,32.625a1.378,1.378,0,0,0,.7-.253L18,26.459l8.3,5.913a1.318,1.318,0,0,0,.7.253,1.01,1.01,0,0,0,.626-.274,1.114,1.114,0,0,0,.387-1.266L24.75,21.6l8.43-6.047.2-.176a1.18,1.18,0,0,0,.366-.752A1.191,1.191,0,0,0,32.555,13.5ZM23.611,20a1.975,1.975,0,0,0-.717,2.236l2.116,6.166a.282.282,0,0,1-.429.323l-5.442-3.881a1.965,1.965,0,0,0-1.146-.366,1.928,1.928,0,0,0-1.139.366l-5.442,3.874a.281.281,0,0,1-.429-.323L13.1,22.233a1.981,1.981,0,0,0-.724-2.25l-5.7-4.015a.283.283,0,0,1,.162-.513h6.94a1.966,1.966,0,0,0,1.863-1.343l2.081-6.2a.283.283,0,0,1,.534,0l2.081,6.2A1.966,1.966,0,0,0,22.2,15.455h6.841a.278.278,0,0,1,.162.506Z" transform="translate(-2.25 -3.375)" fill="#3496db"/>
                     </svg>
                     <?php if($titleSocial) { ?>
                     <small><?php echo $titleSocial; ?></small>
                     <?php } ?>
                     <ul class="social-media-list">
                        <?php if ($linkiedin) { ?>
                        <li><a href="<?php echo $linkiedin; ?>" target="_blank">
                           <svg xmlns="http://www.w3.org/2000/svg" width="14.68" height="14.679" viewBox="0 0 14.68 14.679">
                           <path id="Icon_awesome-linkedin-in" data-name="Icon awesome-linkedin-in" d="M3.286,14.68H.242v-9.8H3.286ZM1.763,3.542A1.771,1.771,0,1,1,3.525,1.763,1.777,1.777,0,0,1,1.763,3.542ZM14.676,14.68H11.639V9.909c0-1.137-.023-2.6-1.582-2.6-1.582,0-1.825,1.235-1.825,2.513V14.68H5.192v-9.8H8.111V6.216h.043a3.2,3.2,0,0,1,2.88-1.583c3.08,0,3.646,2.028,3.646,4.663V14.68Z" transform="translate(0 0)" fill="#3497db"/>
                           </svg>
                        </a></li>
                        <?php } ?>
                        <?php if ($facebook) { ?>
                        <li><a href="<?php echo $facebook; ?>" target="_blank">
                           <svg xmlns="http://www.w3.org/2000/svg" width="7.862" height="14.679" viewBox="0 0 7.862 14.679">
                           <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f" d="M8.956,8.257,9.364,5.6H6.815V3.877a1.328,1.328,0,0,1,1.5-1.435H9.471V.179A14.132,14.132,0,0,0,7.414,0,3.243,3.243,0,0,0,3.943,3.576V5.6H1.609V8.257H3.943v6.422H6.815V8.257Z" transform="translate(-1.609)" fill="#3497db"/>
                           </svg>
                        </a></li>
                        <?php } ?>
                        <?php if ($twitter) { ?>
                        <li><a href="<?php echo $twitter; ?>" target="_blank">
                           <svg xmlns="http://www.w3.org/2000/svg" width="18.074" height="14.679" viewBox="0 0 18.074 14.679">
                           <path id="Icon_awesome-twitter" data-name="Icon awesome-twitter" d="M16.216,7.039c.011.161.011.321.011.482A10.467,10.467,0,0,1,5.688,18.06,10.468,10.468,0,0,1,0,16.4a7.663,7.663,0,0,0,.895.046,7.418,7.418,0,0,0,4.6-1.583A3.711,3.711,0,0,1,2.03,12.291a4.671,4.671,0,0,0,.7.057,3.918,3.918,0,0,0,.975-.126A3.7,3.7,0,0,1,.734,8.587V8.541a3.73,3.73,0,0,0,1.674.47A3.71,3.71,0,0,1,1.261,4.057,10.529,10.529,0,0,0,8.9,7.934a4.182,4.182,0,0,1-.092-.849,3.708,3.708,0,0,1,6.411-2.534,7.293,7.293,0,0,0,2.351-.895A3.694,3.694,0,0,1,15.941,5.7a7.426,7.426,0,0,0,2.133-.573,7.963,7.963,0,0,1-1.858,1.915Z" transform="translate(0 -3.381)" fill="#3497db"/>
                           </svg>
                        </a></li>
                        <?php } ?>
                        <?php if ($instagram) { ?>
                        <li><a href="<?php echo $instagram; ?>" target="_blank">
                           <svg xmlns="http://www.w3.org/2000/svg" width="14.683" height="14.679" viewBox="0 0 14.683 14.679">
                           <path id="Icon_awesome-instagram" data-name="Icon awesome-instagram" d="M7.338,5.814A3.764,3.764,0,1,0,11.1,9.577,3.758,3.758,0,0,0,7.338,5.814Zm0,6.21A2.447,2.447,0,1,1,9.784,9.577,2.451,2.451,0,0,1,7.338,12.024Zm4.8-6.364a.878.878,0,1,1-.878-.878A.876.876,0,0,1,12.133,5.66Zm2.493.891A4.344,4.344,0,0,0,13.44,3.475a4.373,4.373,0,0,0-3.076-1.186c-1.212-.069-4.845-.069-6.056,0A4.367,4.367,0,0,0,1.232,3.472,4.358,4.358,0,0,0,.046,6.547c-.069,1.212-.069,4.845,0,6.056A4.344,4.344,0,0,0,1.232,15.68a4.378,4.378,0,0,0,3.076,1.186c1.212.069,4.845.069,6.056,0A4.344,4.344,0,0,0,13.44,15.68,4.373,4.373,0,0,0,14.626,12.6c.069-1.212.069-4.841,0-6.053ZM13.06,13.9a2.477,2.477,0,0,1-1.4,1.4,16.178,16.178,0,0,1-4.327.295A16.3,16.3,0,0,1,3.011,15.3a2.477,2.477,0,0,1-1.4-1.4A16.178,16.178,0,0,1,1.32,9.577,16.3,16.3,0,0,1,1.615,5.25a2.477,2.477,0,0,1,1.4-1.4A16.178,16.178,0,0,1,7.338,3.56a16.3,16.3,0,0,1,4.327.295,2.477,2.477,0,0,1,1.4,1.4,16.178,16.178,0,0,1,.295,4.327A16.168,16.168,0,0,1,13.06,13.9Z" transform="translate(0.005 -2.238)" fill="#3497db"/>
                           </svg>
                        </a></li>
                        <?php } ?>
                        <?php if ($pinterest) { ?>
                        <li><a href="<?php echo $pinterest; ?>" target="_blank">
                           <svg xmlns="http://www.w3.org/2000/svg" width="11.294" height="14.679" viewBox="0 0 11.294 14.679">
                           <path id="Icon_awesome-pinterest-p" data-name="Icon awesome-pinterest-p" d="M6,.457c-3.018,0-6,2.012-6,5.267C0,7.8,1.165,8.971,1.871,8.971c.291,0,.459-.812.459-1.041,0-.274-.7-.856-.7-1.994A3.975,3.975,0,0,1,5.762,1.9c2,0,3.485,1.138,3.485,3.229,0,1.562-.626,4.491-2.656,4.491A1.306,1.306,0,0,1,5.232,8.327c0-1.112.776-2.188.776-3.335,0-1.947-2.762-1.594-2.762.759a3.455,3.455,0,0,0,.282,1.491,32.194,32.194,0,0,0-1.235,6.15c0,.556.079,1.1.132,1.659.1.112.05.1.2.044,1.482-2.029,1.429-2.426,2.1-5.082a2.385,2.385,0,0,0,2.038,1.059c3.123,0,4.526-3.044,4.526-5.788C11.294,2.363,8.77.457,6,.457Z" transform="translate(0 -0.457)" fill="#3497db"/>
                           </svg>
                        </a></li>
                        <?php } ?>
                        <?php if ($youtube) { ?>
                        <li><a href="<?php echo $youtube; ?>" target="_blank">
                           <svg xmlns="http://www.w3.org/2000/svg" width="19.568" height="14.679" viewBox="0 0 19.568 14.679">
                           <path id="Icon_ionic-logo-youtube" data-name="Icon ionic-logo-youtube" d="M19.441,7.741a2.971,2.971,0,0,0-2.829-3.1c-2.118-.1-4.277-.138-6.483-.138H9.441c-2.2,0-4.365.038-6.483.138A2.978,2.978,0,0,0,.134,7.749C.038,9.11,0,10.471,0,11.832s.038,2.722.13,4.086a2.981,2.981,0,0,0,2.825,3.115c2.225.1,4.507.149,6.827.145s4.6-.038,6.827-.145a2.982,2.982,0,0,0,2.829-3.115c.092-1.365.134-2.725.13-4.09S19.533,9.106,19.441,7.741ZM7.912,15.581V8.07l5.543,3.754Z" transform="translate(0 -4.5)" fill="#3497db"/>
                           </svg>
                        </a></li>
                        <?php } ?>
                     </ul>
                  </div>
               </div>
            <?php } ?>
        </div>
   </div>
   <div class="comp-space"><div class="comp-space__wraper"></div></div>
</section>