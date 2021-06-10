<?php get_header();?>

<div class="container">
<article class="post">
		<a class="post-image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(  ); ?></a>
		<div class="post-data">			
			<p class="post-date"><?php the_time( 'F j' ); ?><span class="time-to-read">5 min read</span></p>			
			<p class="post-author">by <?php the_author(); ?></p>
		</div>
		
		<h1 class="post-title"><?php the_title(); ?></h1>
		<p><?php echo str_replace(array(" ", chr(0xC2).chr(0xA0)), " ", html_entity_decode(get_the_content())); ?></p>

	</article>	
</div>

<?php get_footer();?>