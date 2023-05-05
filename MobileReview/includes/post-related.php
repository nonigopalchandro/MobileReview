<div id="related_posts">
<div class="relhead">
<h4>You might also like </h4>
<div class="clear"></div>
<div class="relhead2">
<?php

$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 8, 'post__not_in' => array($post->ID) ) );
if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>
<ul id="relpost_img_sum">
<li class="news-title clearfix">
<a href="<?php the_permalink(); ?>" target="_top" title="<?php the_title(); ?>">
<div class="overlayb"></div>
<?php
// Feature post thumbnail.

if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'thumbnail' );
}
else {
	echo '<img src="';
 echo catch_that_image();
 echo '" alt="" />';
} ?>
</a>
<a class="relink" href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
</li>
</ul>
<?php } wp_reset_postdata(); ?>
</div>
</div>
</div>