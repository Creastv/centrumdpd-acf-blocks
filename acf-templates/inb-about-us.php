<?php

$image = get_field('image');

$uid = $block['id'];

$className = 'about-us';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
?>
<section id="<?php echo $uid; ?>" class=" <?php echo esc_attr($className); ?>">
    <div class="about-us__wraper">
        <div class="col">
            <?php if( $image ) { ?>
            <?php  echo wp_get_attachment_image( $image, $size ); ?>
            <?php } ?>
        </div>
        <div class="col">
            <InnerBlocks />
        </div>
    </div>
    <div class="about-us__space"><div class="wraper"></div></div>
</section>
