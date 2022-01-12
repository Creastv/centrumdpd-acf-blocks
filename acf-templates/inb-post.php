<?php

// $title = get_field('title');
$link = get_field('link');
$style = get_field("style");

$uid = $block['id'];

$className = 'inb-post';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
$grid = "";
if($style  == "extract" ){
$postPer = 2;
$grid = "half-grid";
} else {
$postPer = -1;
$grid = "full-grid";
}
$posts = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => $postPer,
    'order' => 'ASC'
));
?>

<div id="<?php echo $uid; ?>" class=" <?php echo esc_attr($className); ?>">
   <div class="posts-wrap <?php echo esc_attr($grid ); ?>">
      <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
      <article id="post-<?php the_ID(); ?>" class="post-content post-content--hover">
         <div class="wraper">
            <div class="col"></div>
            <div class="col">
               <a class="img" href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail(); ?>
                  <div class="entry-data mobile">
                     <div class="wraper-data">
                        <span><?php echo get_the_date('d') ?></span>
                        <small><?php echo get_the_date('M Y') ?></small>
                     </div>
                  </div>
               </a>
               <div class="flex-col">
                  <div class="entry-data desktop">
                     <div class="wraper-data">
                       <span><?php echo get_the_date('d') ?></span>
                       <small><?php echo get_the_date('M Y') ?></small>
                     </div>
                  </div>
                  <div class="entry-info">
                     <div class="author">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.367" height="18.2" viewBox="0 0 16.367 18.2">
                        <g id="Icon_feather-user" data-name="Icon feather-user" transform="translate(-5.15 -3.65)">
                        <path id="Path_12379" data-name="Path 12379" d="M20.667,28V26.167A3.667,3.667,0,0,0,17,22.5H9.667A3.667,3.667,0,0,0,6,26.167V28" transform="translate(0 -7)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"/>
                        <path id="Path_12380" data-name="Path 12380" d="M19.333,8.167A3.667,3.667,0,1,1,15.667,4.5,3.667,3.667,0,0,1,19.333,8.167Z" transform="translate(-2.333)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"/>
                        </g>
                        </svg>
                        <?php the_author(); ?>
                     </div>
                     <div class="cat">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.367" height="14.9" viewBox="0 0 16.367 14.9">
                        <path id="Icon_feather-folder" data-name="Icon feather-folder" d="M17.667,16.234A1.467,1.467,0,0,1,16.2,17.7H4.467A1.467,1.467,0,0,1,3,16.234V5.967A1.467,1.467,0,0,1,4.467,4.5H8.133L9.6,6.7h6.6a1.467,1.467,0,0,1,1.467,1.467Z" transform="translate(-2.15 -3.65)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"/>
                        </svg>
                        <?php the_category( ', ' ); ?>
                     </div>
                     <div class="coments-num">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                        <path id="Icon_material-chat_bubble_outline" data-name="Icon material-chat_bubble_outline" d="M16.5,3H4.5A1.5,1.5,0,0,0,3,4.5V18l3-3H16.5A1.5,1.5,0,0,0,18,13.5v-9A1.5,1.5,0,0,0,16.5,3Zm0,10.5H6L4.5,15V4.5h12Z" transform="translate(-3 -3)"/>
                        </svg>
                        <?php
                        $comment_count = get_comments_number();
                        $comment_count .= $comment_count > 1 ? esc_html__( ' Comments', 'aeroland' ) : esc_html__( ' Comment', 'aeroland' );
                        ?>
                        <span class="smooth-scroll-link"><?php echo esc_html( $comment_count ); ?></span>
                     </div>
                  </div>
               </div>
               <div class="entry">
                  <a href="<?php the_permalink(); ?>">
                     <?php the_title( '<h2>', '</h2>' ); ?>
                  </a>
                  <?php the_excerpt(); ?>
                  <a class="readmore" href="<?php the_permalink(); ?>">Czytaj więcej</a>
               </div>
            </div>
         </div>
         </article>
      <?php endwhile; wp_reset_query(); ?>
   </div>
   <?php if($style == "extract" && $link) { ?>
   <div class="load-more">
      <div class="btn-group">
      <?php if( $link ): 
         $link_url = $link['url'];
         $link_title = $link['title'];
         $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
         <a class="btn btn-main" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
      <?php endif; ?>
      </div>
   </div>
   <?php } ?>
</div>
