<?php get_header();?>

<div class='content-wrapper'>
<div class='banner section section' id='banner'><div class='widget HTML' data-version='1' id='HTML19'>
<div class='widget-content'>
</div>
<div class='clear'></div>
<div class='clear'></div>
</div></div>


<div class='outerpic-wrapper'>
<div class='clear'></div>
<div class='outer-wrapper'>
<div class='main-wrapper'>
<div class='animated fadeInUp section' id='recent1'><div class='widget HTML' data-version='1' id='HTML103'>
<div class='widget-content'>
<div class='title'>Upcoming Phones</div>

<ul id="label_with_thumbs">
<?php
$catquery = new WP_Query( 'cat=18,13,15,20,16,7,4,21,8,24,14,22,32,26,17,12,19,29,11,31,28,25,6,1,10,3,5,9,34,33,14&posts_per_page=8' );
while($catquery->have_posts()) : $catquery->the_post();
?>
<li class="recent-box">
<div class="imageContainer">
<a href="<?php the_permalink(); ?>" target="_top">
<div class="label_thumb">
<?php
// Recent post thumbnail.

if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'thumbnail' );
}
else {
	echo '<img src="' . get_bloginfo( 'template_url' ) . '/images/noimage.png" class="attachment-thumbnail wp-post-image" alt="No image" />';
} ?>
</div>

</a>
</div>
<a class="label_title" href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
<div class="toe">
<a href="<?php the_permalink(); ?>" class="post-date"><?php echo human_time(); ?></a>
</div>
<?php endwhile; ?>
</li>
</ul>
</div>
</div></div>
<div class="animated fadeInUp section" id="adpost"><div class="widget HTML" data-version="1" id="HTML666">
</div></div>
<div class="clear"></div>


<div class='animated fadeInUp section' id='recent2'><div class='widget HTML' data-version='1' id='HTML104'>
<div class='widget-content'>
<div class='title'>Laptop</div>

<ul id="label_with_thumbs">
<?php
$catquery = new WP_Query( 'cat=35,36,37,38,39&posts_per_page=12' );
while($catquery->have_posts()) : $catquery->the_post();
?>
<li class="recent-box">
<div class="imageContainer">
<a href="<?php the_permalink(); ?>" target="_top">
<div class="label_thumb">
<?php
// Recent post thumbnail.

if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'thumbnail' );
}
else {
	echo '<img src="' . get_bloginfo( 'template_url' ) . '/images/noimage.png" class="attachment-thumbnail wp-post-image" alt="No image" />';
} ?>
</div>

</a>
</div>
<a class="label_title" href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
<div class="toe">
<a href="<?php the_permalink(); ?>" class="post-date"><?php echo human_time(); ?></a>
</div>
<?php endwhile; ?>
</li>
</ul>

</div>
</div></div>
<div class="animated fadeInUp section" id="adpost2"><div class="widget HTML" data-version="1" id="HTML668">
</div></div>
<div class="animated fadeInUp section" id="adpost3"><div class="widget HTML" data-version="1" id="HTML669">
</div></div>
<div class="clear"></div>
<div class='main section' id='main'><div class='widget HTML' data-version='1' id='HTML8'>
<div class='clear'></div>
<div class='clear'></div>
</div>



<div class='animated fadeInUp section' id='recent2'><div class='widget HTML' data-version='1' id='HTML104'>
<div class='widget HTML' data-version='1' id='HTML2'>
<div class='title' style='background:#3498DB;'>Latest Smartphone Feature</div>

<ul id="label_with_thumbs">
<?php
$catquery = new WP_Query( 'cat=18,13,15,20,16,7,4,21,8,24,14,22,32,26,17,12,19,29,11,31,28,25,6,1,10,3,5,9&posts_per_page=16' );
while($catquery->have_posts()) : $catquery->the_post();
?>
<li class="recent-box">
<div class="imageContainer">
<a href="<?php the_permalink(); ?>" target="_top">
<div class="label_thumb">
<?php
// Recent post thumbnail.

if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'thumbnail' );
}
else {
	echo '<img src="' . get_bloginfo( 'template_url' ) . '/images/noimage.png" class="attachment-thumbnail wp-post-image" alt="No image" />';
} ?>
</div>

</a>
</div>
<a class="label_title" href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a>
<div class="toe">
<a class='readmore2' href='<?php the_permalink(); ?>' title='<?php the_title(); ?>'><i class='fa fa-download'></i> Detail Specs</a>
</div>
<?php endwhile; ?>
</li>
</ul>
<div class='title' style='background:green;'>
<?php wp_pagenavi(); ?>
</div>
<div class="clear"></div>
</div>
</div>
</div></div>



<div class="animated fadeInUp section" id="adpost2"><div class="widget HTML" data-version="1" id="HTML668">
</div></div>
<div class="animated fadeInUp section" id="adpost3"><div class="widget HTML" data-version="1" id="HTML669">
</div></div>
<div class="clear"></div>
<div class='main section' id='main'><div class='widget HTML' data-version='1' id='HTML8'>
<div class='clear'></div>
<div class='clear'></div>
</div>



<div class='widget HTML' data-version='1' id='HTML5'>
<div class='widget-content'>
</div>
</div><div class='widget HTML' data-version='1' id='HTML300'>
</div><div class='widget HTML' data-version='1' id='HTML301'>
</div><div class='widget HTML' data-version='1' id='HTML201'>
</div><div class='widget HTML' data-version='1' id='HTML200'>
</div><div class='widget HTML' data-version='1' id='HTML10'>
<h2 class='title'>Declaration</h2>
<div class='widget-content'>
We do not claim information in this site is 100% correct. Market Price of Various Products always be changeable. There is always a chance of admitting mistake. We mostly collect information through manufacturers website and well reputed source from internet,and Various related Websites. When you find any mistake or link miss, please feel free to <a href="/contact-us/">Contact US</a> and inform us.
</div>
<div class='clear'></div>
<div class='clear'></div>
</div></div>
</div></div>
</div>

<?php get_sidebar();?>
<?php get_footer();?>