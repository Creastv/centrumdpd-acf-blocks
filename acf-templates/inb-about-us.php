<?php

$images = get_field('galery');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

$uid = $block['id'];

$className = 'inb-about-us';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
?>

<div id="<?php echo $uid; ?>" class=" <?php echo esc_attr($className); ?>">
   <div class="wraper">
       <div class="col">
           <InnerBlocks />
        </div>
       <div class="col">
           <?php  if( $images ): ?>
                <div class="gallery" >
                    <!-- No more than 3 img-->
                     <?php
                     $i = 1;
                     foreach( $images as $image ): ?>
                        <?php if ($i == 1) { ?>
                        <div class="img">
                            <div class="img-wrap">
                                <?php echo wp_get_attachment_image( $image, $size ); ?>
                            </div>
                        </div>
                        <div class="img">
                            <div class="img-wrap">
                        <?php } ?>
                            <?php if ($i == 2) { ?>
                                <?php echo wp_get_attachment_image( $image, $size ); ?>
                            <?php } ?>
                            <?php if ($i == 3) { ?>
                                <?php echo wp_get_attachment_image( $image, $size ); ?>
                            <?php } ?>
                        <?php if ($i == 3) { ?>
                            </div>
                        </div>
                        <?php } ?>
                      
                    <?php $i++; endforeach; ?>
                </div>
            <?php endif; ?>
       </div>
   </div>
</div>
