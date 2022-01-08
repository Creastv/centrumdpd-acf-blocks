<?php
$profileImg = get_field("profile_img_person");
$size = 'full';
$profileImgPosition = get_field("profile_img_position");

$name = get_field("name_person");
$position = get_field("position_person");
$desc = get_field("short_description_person");
$link = get_field("link_person");

$id = $block['id'];

$className = 'inb-person';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}

// $order = "inb-person_img_left";
$order = "left";
if($profileImgPosition == false){
 $order = "right";
}
?>
<section id="<?php echo $id; ?>" class=" <?php echo esc_attr($className); ?>">
    <div class="wraper  <?php echo esc_attr($order); ?>">
        <div class="col inb-person_img">
            <?php if($profileImg){?>
                 <?php echo wp_get_attachment_image( $profileImg, $size ); ?>
            <?php } ?>
        </div>
        <div class="col inb-person_content">
            <?php if($profileImg){?>
            <h3><?php echo $name; ?></h3>
             <?php if($desc){?>
            <span><?php echo $position; ?></span>
            <?php } ?>
            <?php } ?>
            <?php if($desc){?>
            <p><?php echo $desc; ?></p>
             <?php } ?>
            <?php if( $link ) {
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
                <a class="btn btn-main" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php } ?>
        </div>
    </div>
</section>