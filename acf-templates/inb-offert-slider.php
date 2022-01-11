<?php 
$title = get_field('title_offer');
$desc = get_field('desc_offer');
$link = get_field('link_offer');
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';

$id = $block['id'];

$className = 'offert-com';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}

$posts = new WP_Query( array(
    'post_type' => 'oferta',
    'posts_per_page' => -1,
    'order' => 'ASC'
));

?>
<section id="<?php echo $uid; ?>" class=" <?php echo esc_attr($className); ?>" >
    <div class="offert-com__wraper">
        <div class="col">
            <div class="offert-com__content">
                <?php if($title) { ?>
                <h2 class="offert-com__content--title"><?php echo $title; ?></h2>
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
            <div class="offert-com-slider">
                <!-- Swiper -->
                <div class="swiper offert">
                    <div class="swiper-wrapper">
                        <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                        <div class="swiper-slide">
                            <div class="item-offert">
                                <a href="<?php the_permalink(); ?>">
                                   <?php the_post_thumbnail(); ?>
                                   <h3> <?php the_title(); ?></h3>
                                </a>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                    <div class="arrows">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offert-space"><div class="offert-space__wraper"></div></div>
</section>