<?php 

$id = $block['id'];

$className = 'offert-com';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}

?>
<section id="<?php echo $uid; ?>" class=" <?php echo esc_attr($className); ?>" >
    <div class="offert-com__wraper">
        <div class="col">
            <div class="offert-com__content">
                <h2 class="offert-com__content--title">Poznaj naszą ofertę</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem enim cupiditate aspernatur, sapiente velit nemo optio illum commodi rem officiis magnam rerum accusantium? Cum aut dolore similique eum optio numquam!</p>
                <a href="#" class="btn btn-main">Czytaj więcej </a>
            </div>
        </div>
        <div class="col">
            <div class="offert-com-slider">
               <h2>slider</h2>
            </div>
        </div>
    </div>
    <div class="offert-space"><div class="offert-space__wraper"></div></div>
</section>