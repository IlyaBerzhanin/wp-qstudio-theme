<?php get_header();?>

<div class="main-posts">

<?php
$posts = get_posts( array(
	'numberposts' => 3,
	'tag'    => 'latest',
	'orderby'     => 'date',
) );

foreach( $posts as $post ){
	setup_postdata($post);
	?>
    <article class="post">
		<a class="post-image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(  ); ?></a>
		<div class="post-data">			
			<p class="post-date"><?php the_time( 'F j' ); ?><span class="time-to-read">5 min read</span></p>			
			<p class="post-author">by <?php the_author(); ?></p>
		</div>
		
		<h1 class="post-title"><?php the_title(); ?></h1>
		<p><?php echo str_replace(array(" ", chr(0xC2).chr(0xA0)), " ", html_entity_decode(get_the_excerpt())); ?></p>

	</article>	

	<?php
	
}

wp_reset_postdata(); // сброс

?>

</div>



<?php require 'components/trends.php'; ?>
<?php require 'components/subscribe.php'; ?>

<?php get_footer();?>

 <?php echo str_replace(array(" ", chr(0xC2).chr(0xA0)), " ", html_entity_decode(get_the_content())); ?> 