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

		<a class="post-image" href="##"><?php the_post_thumbnail(  ); ?></a>
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

<div class="trends">
	<header class="trends-header">
		<h2 class="header-title">today's trending</h2>
		<a href="##" class="header-action">View all</a>
	</header>

	<div class="slider-arrows">
		<a href="##" class="left-arrow">
		<svg 
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  class="arrow-hover"
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M7.85981 8.11673C7.6729 7.96109 7.36985 7.96109 7.18293 8.11673L2.14019 12.3158L2.084 12.3719C1.95329 12.53 1.97541 12.7488 2.14834 12.8861L7.19108 16.8899L7.25866 16.9347C7.44823 17.0386 7.70562 17.0181 7.86777 16.8765L7.92156 16.8202C8.04631 16.6624 8.02172 16.448 7.85166 16.313L3.67891 13H22.5238L22.6094 12.9919C22.8315 12.9496 23 12.7455 23 12.5C23 12.2239 22.7868 12 22.5238 12H3.87229L7.85981 8.68037L7.91519 8.62517C8.04442 8.46984 8.02596 8.25508 7.85981 8.11673Z"
                  fill="black"
                />
              </svg>
		</a>
		
		<a href="##" class="right-arrow">
		<svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  class="arrow-hover"
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M16.1402 8.11673C16.3271 7.96109 16.6302 7.96109 16.8171 8.11673L21.8598 12.3158L21.916 12.3719C22.0467 12.53 22.0246 12.7488 21.8517 12.8861L16.8089 16.8899L16.7413 16.9347C16.5518 17.0386 16.2944 17.0181 16.1322 16.8765L16.0784 16.8202C15.9537 16.6624 15.9783 16.448 16.1483 16.313L20.3211 13H1.97619L1.89059 12.9919C1.66845 12.9496 1.5 12.7455 1.5 12.5C1.5 12.2239 1.7132 12 1.97619 12H20.1277L16.1402 8.68037L16.0848 8.62517C15.9556 8.46984 15.974 8.25508 16.1402 8.11673Z"
                  fill="black"
                />
              </svg>
		</a>
	</div>

	<div class="trending-posts">
	<?php
$posts = get_posts( array(
	'tag'    => 'trending',
	'orderby'     => 'date',
) );

foreach( $posts as $post ){
	setup_postdata($post);
	?>
    <article class="trending-post">

		<a class="post-image" href="##"><?php the_post_thumbnail(  ); ?></a>
		<div class="post-data">			
			<p class="post-date"><?php the_time( 'F j' ); ?><span class="time-to-read">5 min read</span></p>			
			<p class="post-author">by <?php the_author(); ?></p>
		</div>
		
		<h1 class="post-title"><?php the_title(); ?></h1>

	</article>	

	<?php
}

wp_reset_postdata(); // сброс

?>

	</div>

</div>

<?php get_footer();?>


 <?php echo str_replace(array(" ", chr(0xC2).chr(0xA0)), " ", html_entity_decode(get_the_content())); ?> 