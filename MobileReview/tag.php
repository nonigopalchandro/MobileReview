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
<div class='title'>Tag - <?php single_tag_title(); ?></div>

<ul id="label_with_thumbs">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
<?php endwhile; else: ?>
<?php endif; ?>
</li>
</ul>
</div>
</div></div>
<div class="animated fadeInUp section" id="adpost"><div class="widget HTML" data-version="1" id="HTML666">
</div></div>
<div class="clear"></div>
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
<div class='clear'></div>
<div class='clear'></div>
</div></div>
</div></div>
</div>

<?php get_sidebar();?>
<?php get_footer();?>