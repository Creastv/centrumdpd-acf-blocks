<?php
 $persons = get_field('person');

$uid = $block['id'];
$className = 'inb-contact-info';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
?>

<section class="<?php echo $uid; ?> <?php echo esc_attr($className); ?>">
<?php if( $persons ): ?>
    <ul>
        <?php foreach( $persons as $person ): 
            $permalink = get_permalink( $person->ID );
            $title = get_the_title( $person->ID );

            $img = get_field( 'img',  $person->ID );

            $position = get_post_meta( $person->ID, 'position', true);
            $linkiedin = get_post_meta($person->ID, 'linkiedin', true);
            $phone= get_post_meta($person->ID, 'phone', true);
            $email= get_post_meta($person->ID, 'email', true);
        ?>
        <li>
            <div class="img">
                <?php if( $img ) { echo wp_get_attachment_image( $img, "full"); } ?>
            </div>
            <div class="inf">
                <a href="<?php echo esc_url( $permalink ); ?>"><h3><?php echo esc_html( $title ); ?></h3></a>
                <span class="team__pos"><?php echo $position; ?></span>
                <?php if ($email) { ?>
                <a class="team__email" href="mailto:<?php echo $email; ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="14" viewBox="0 0 21 14">
                    <path id="Shape_21" data-name="Shape 21" d="M206.75,4156a1.752,1.752,0,0,1-1.75-1.75v-10.5a1.752,1.752,0,0,1,1.75-1.75h17.5a1.753,1.753,0,0,1,1.75,1.75v10.5a1.752,1.752,0,0,1-1.75,1.75Zm-.875-12.25v10.5a.876.876,0,0,0,.875.875h17.5a.876.876,0,0,0,.875-.875v-10.5a.876.876,0,0,0-.875-.875h-17.5A.876.876,0,0,0,205.875,4143.75Zm17.257,9.551-3.937-2.624a.438.438,0,1,1,.486-.728l3.937,2.624a.438.438,0,1,1-.486.728Zm-15.871-.121a.437.437,0,0,1,.121-.607l3.937-2.624a.437.437,0,1,1,.485.728l-3.937,2.624a.435.435,0,0,1-.606-.121Zm.563-6.875a.437.437,0,0,1,.476-.734l7.2,4.659,7.2-4.659a.437.437,0,1,1,.475.734l-7.675,4.967Z" transform="translate(-205 -4142)" fill="#3497db"/>
                    </svg>
                    <span><?php echo $email; ?></span>
                </a>
                <?php } ?>

                <?php if ($phone) { ?>
                <a class="team__phone" href="tel:<?php echo $phone; ?>" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16.878" height="17.269" viewBox="0 0 16.878 17.269">
                    <path id="Shape_20" data-name="Shape 20" d="M212.02,4121.422c-3.363-3.438-4.069-6.113-4.069-7.751a4.4,4.4,0,0,1,1.1-3.1l.351-.358,3.677,3.75-.644.659a.528.528,0,0,0,0,.717l5.536,5.66a.492.492,0,0,0,.7,0l.643-.659,3.675,3.757-.351.358a4.419,4.419,0,0,1-3.084,1.122C217.766,4125.58,215.233,4124.707,212.02,4121.422Zm8.281-2.093.433-.441a1.464,1.464,0,0,1,2.1,0l1.572,1.607a1.582,1.582,0,0,1,0,2.15l-.43.443Zm-9.907-10.128.428-.442a1.465,1.465,0,0,1,2.1,0l1.572,1.607a1.583,1.583,0,0,1,0,2.149l-.434.441Z" transform="translate(-207.951 -4108.312)" fill="#3497db"/>
                    </svg>
                <span> <?php echo $phone; ?></span>
                </a>
                <?php } ?>
            </div>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php endif; ?>
</section>