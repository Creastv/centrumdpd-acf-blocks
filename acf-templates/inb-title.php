<?php

$title = get_field('title');
$tag = get_field('tag');
$color = get_field("text_color");

$uid = $block['id'];

$className = 'inb-title-block';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
?>

<div id="<?php echo $uid; ?>" class=" <?php echo esc_attr($className); ?>">
    <div class="inb-title-wraper">
        <<?php echo $tag; ?> class="inb-title"><?php echo $title; ?></<?php echo $tag; ?>>
    </div>
</div>
<?php if($color) { ?>
<style>
    #<?php echo $uid; ?> .inb-title{
        color: <?php echo $color;?>
    }
</style>
<?php } ?>