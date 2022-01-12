<?php
$image = get_field('image');

$uid = $block['id'];
$className = 'hero';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
?>

<section id="<?php echo $uid; ?>" class=" <?php echo esc_attr($className); ?>">
    <div class="hero__wraper">
         <div class="col">
            <InnerBlocks />
        </div>
    </div>
    <div class="hero__space">
        <div class="wraper">
            <div class="col"></div>
            <div class="col">
                <?php if( $image ) { ?>
                <?php  echo wp_get_attachment_image( $image, $size ); ?>
                <?php } ?>
            </div>
        </div>
        <img class="world-hero" src="<?php echo get_template_directory_uri(); ?>/src/img/world.svg" alt="Centrum Dobrej Parktyki Dystrybucyjnej">
    </div>
</section>
