<?php
$bgColor = get_field("background_color");

$uid = $block['id'];
$className = 'inb-background';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
?>

<div id="<?php echo $uid; ?>" class=" <?php echo esc_attr($className); ?>">
    <div class="full" style=" background-color: <?php echo $bgColor;?>">
        <div class="container-fluid">
            <InnerBlocks />
        </div>
    </div>
</div>