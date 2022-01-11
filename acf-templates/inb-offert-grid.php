<?php
$postsObjects = get_field('offerts');

$id = $block['id'];
$className = 'inb-offert-grid';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
?>
<section id="<?php echo $id; ?>" class=" <?php echo esc_attr($className); ?>">
<?php if( $postsObjects ): ?>
    <ul>
    <?php foreach( $postsObjects as $postObject ):
        $thumb = get_the_post_thumbnail( $postObject->ID, 'thumbnail' ); 
        $exc = get_the_excerpt($postObject->ID);
        $permalink = get_permalink( $postObject->ID );
        $title = get_the_title( $postObject->ID );
        ?>
        <li>
            <div class="item-offert">
                <a href="<?php echo esc_url( $permalink ); ?>">
                    <?php echo $thumb; ?>
                   <h3> <?php echo esc_html( $title ); ?></h3>
                </a>
                <p><?php echo esc_html( $exc); ?></p>
            </div>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php  wp_reset_postdata(); ?>
<?php endif; ?>
</section>