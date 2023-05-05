<?php get_template_part( 'single-header' ); ?>

<div class='content-wrapper'>
<div class='banner section section' id='banner'><div class='widget HTML' data-version='1' id='HTML19'>
<div class='clear'></div>
<div class='clear'></div>
</div></div>


<div class='outerpic-wrapper'>
<div class='clear'></div>
<div class='outer-wrapper'>
<div class='main-wrapper'>
<div class='clear'></div>
<div class='main section' id='main'><div class='widget HTML' data-version='1' id='HTML8'>
<div class='clear'></div>
<div class='clear'></div>
</div>


<div class='widget Blog' data-version='1' id='Blog1'>
<div class='breadcrumbs' xmlns:v='http://rdf.data-vocabulary.org/#'>
<span typeof='v:Breadcrumb'>
<a href='http://mobilepricebd.info/' property='v:title' rel='v:url'>Home</a>
</span>
<i class='fa fa-chevron-right'></i>
<span typeof='v:Breadcrumb'><?php the_category( ' › ' ) ?></span>
<i class='fa fa-chevron-right'></i>
<span><?php the_title(); ?></span>
</div>

<div class='blog-posts hfeed'>
<div class="date-outer">
<div class="date-posts">
<div class='post-outer'>
<div class='post hentry'>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<h1 class='post-title entry-title'>
<a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
</h1>
<div class='post-header'>
<div class='post-header-line-1'></div>
</div>
<div class='post-body entry-content' id='post-body-3698430268305786734'>
<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>
<div style='clear: both;'></div>
</div>

<div class='sharepost'>
<ul>
<li><a class='twitter' href='http://twitter.com/share?url=<?php echo urlencode(get_permalink($post->ID)); ?>&via=mobilepricebd&count=horizontal' rel='nofollow' target='_blank' title='Twitter Tweet'><i class='fa fa-twitter'></i>Tweet</a></li>
<li><a class='facebook' href='http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>' rel='nofollow' target='_blank' title='Facebook Share'><i class='fa fa-facebook'></i>Share</a></li>
<li><a class='gplus' href='http://plus.google.com/share?url=<?php the_permalink(); ?>' rel='nofollow' target='_blank' title='Google Plus Share'><i class='fa fa-google-plus'></i>Share</a></li>
<li><a class='linkedin' href='http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>&amp;summary=' target='_blank'><i class='fa fa-linkedin'></i>Share</a></li>
<li><a class='pinterest' href='http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>' target='_blank'><i class='fa fa-pinterest'></i>Share</a></li>
</ul>
</div>
<div style='clear: both;'></div>
<div class='post-footer'>
<div class='post-footer-line post-footer-line-1'>
</div>
<div class='post-footer-line post-footer-line-2'>
</div>
<div class='post-footer-line post-footer-line-3'>
</div>
</div>
</div>

<?php get_template_part( 'includes/post-related' ); ?>
<?php comments_template( '', true ); ?>

<div class='clear'></div>
</div></div>
</div></div>
</div></div>
</div></div>
</div>



<?php get_sidebar();?>
<?php get_footer();?>