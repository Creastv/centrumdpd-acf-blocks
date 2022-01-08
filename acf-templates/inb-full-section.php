<?php
$image = get_field("image");
$size = 'full';

$uid = $block['id'];
$className = 'inb-full-section';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
?>

<section id="<?php echo $uid; ?>" class=" <?php echo esc_attr($className); ?>">
    <div class="entry-content enty-content--full enty-content---ext enty-content---icon">
        <div class="wraper">
            <div class="col">
                <div class="sticky">
                <div class="img">
                <?php if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                }?>
                </div>
                </div>
            </div>
            <div class="col">
                <InnerBlocks />
            </div>
        </div>
    </div>
</section>