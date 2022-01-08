<?php
$nameSurname = get_field('name_and_surname');
$position = get_field('position');

$uid = $block['id'];
$className = 'inb-contact-info';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
?>

<div class="<?php echo $uid; ?> <?php echo esc_attr($className); ?>">
    <?php if( have_rows('contact') ): ?>
    <?php if($nameSurname) { ?>
    <h3><?php echo $nameSurname; ?></h3>
    <?php } ?>
    <?php if ($position) { ?>
    <span><?php echo $position; ?></span>
    <?php } ?>
    <ul class="contacts">
        <?php while( have_rows('contact') ): the_row(); 
        $icon = get_sub_field('icon');
        $link = get_sub_field('link');
        ?>
        <li>
            <?php 
         if( $link ): 
         $link_url = $link['url'];
         $link_title = $link['title'];
         $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
            <a class="button" href="<?php echo esc_url( $link_url ); ?>"
                target="<?php echo esc_attr( $link_target ); ?>">
                <?php echo $icon; ?>
                <?php echo esc_html( $link_title ); ?>
            </a>
            <?php endif; ?>
        </li>
        <?php endwhile; ?>
    </ul>
    <?php endif; ?>
</div>