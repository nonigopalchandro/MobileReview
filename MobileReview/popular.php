<div class='widget HTML' data-version='1' id='HTML4'>
<div class='clear'></div>
<div class='clear'></div>
</div><div class='widget PopularPosts' data-version='1' id='PopularPosts1'>
<h2>Popular Phone & Laptop</h2>
<div class='widget-content popular-posts'>
<ul>
<?php
$popularpost = new WP_Query( array( 'posts_per_page' => 14,
                                    'meta_key' => 'post_views_count',
                                    'orderby' => 'meta_value_num',
                                    'post__not_in' => get_option('sticky_posts'),
                                    'order' => 'DESC'  ) ); ?>
<?php  while ($popularpost->have_posts()) : $popularpost->the_post(); ?>
<?php $count = '';?>
<li>
<div class='item-content'>
<div class='item-thumbnail'>
<a href='<?php the_permalink(); ?>' target='_blank'>
<?php
// Recent post thumbnail.

if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'thumbnail' );
}
else {
	echo '<img width="60" height="60" src="' . get_bloginfo( 'template_url' ) . '/images/noimage.png" class="attachment-thumbnail wp-post-image" alt="No image" />';
} ?>
</a>
</div>
<div class='item-title'><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></div>
<div class='item-snippet'><?php the_excerpt('10'); ?></div>
</div>
<div style='clear: both;'></div>
</li>
<?php endwhile; ?>
</ul>
<div class='clear'></div>
<div class='clear'></div>
</div>
</div>