<?php 
$title = get_field('title_ref');
$desc = get_field('desc_ref');

$link = get_field('link_ref');
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';

$icon = get_field('icon_ref');

$logos = get_field('logos_ref');

$id = $block['id'];

$className = 'ref-com';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}

?>
<section id="<?php echo $uid; ?>" class=" <?php echo esc_attr($className); ?>" >
    <div class="ref-com__wraper">
        <div class="col">
            <div class="ref-com__content">
                <?php if($title) { ?>
                <h2 class="ref-com__content--title"><?php echo $title; ?></h2>
                <?php } ?>
                <?php if($desc) { ?>
                <p><?php echo $desc; ?></p>
                <?php } ?>
                <?php if($link) { ?>
                <a class="btn btn-main" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php } ?>
            </div>
        </div>
        <div class="col">
            <?php if( $icon ) { ?>
              <?php echo wp_get_attachment_image( $icon, "full", "", ["class" => "ref-com__icon"] ); ?>
            <?php } ?>
            <!-- <img class="icon" src="http://localhost/centrumdpd/wp-content/uploads/2022/01/zaufali-nam-icon.png" alt=""> -->
            <div class="ref-com__logos">
               <?php if( have_rows('logos_ref') ): ?>
                    <ul>
                    <?php while( have_rows('logos_ref') ): the_row(); 
                        $logo = get_sub_field('logo');
                        $linkLogo = get_sub_field('link');
                        ?>
                        <li>
                            <?php if($linkLogo) { ?>
                            <a class="button" href="<?php echo esc_url( $linkLogo ); ?>">
                            <?php } ?>
                               <?php echo wp_get_attachment_image( $logo, 'full' ); ?>
                            <?php if($linkLogo) { ?>
                            </a>
                            <?php } ?>
                        </li>
                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="ref-space"><div class="ref-space__wraper"></div></div>
</section>