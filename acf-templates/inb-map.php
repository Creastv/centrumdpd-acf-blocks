<?php 
$location = get_field('map');
if( $location ): ?>
<div class="map">
    <div class="map__wraper" data-zoom="12">
       <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
    </div>
</div>
<?php endif; ?>
