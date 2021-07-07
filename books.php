<?php 
/*
Template Name: BooksPage
*/
?>

<?php get_header(); ?>

<?php 
    $booksQuery = new WP_Query(array(
        'post_type' => array('books'),
        'meta-key' => 'price',
        'orderby' => 'meta_value_num',
        'order' => 'ASC'
    ))
?>

<div class="container">
    <h1 class="page-title">books</h1>
    <p class="page-subtitle">bestsellers of the month</p>
     <ul class="books-block">

        <?php
            while($booksQuery->have_posts()) :
                $booksQuery->the_post();
        ?>

        <li class="book">
            <div class="book-image-block">
            <?php the_post_thumbnail();?>
            </div>
            <div class="book-info-block">
                <p class="book-author">by <?php echo get_post_meta(get_the_ID(), 'author', true); ?></p>
                <h2 class="book-title"><?php the_title();?></h2>                
                <p class="book-description"><?php echo get_the_content();?></p>
                <p class="book-price">$<?php echo get_post_meta(get_the_ID(), 'price', true);?></p>
                <a href="##" class="book-purchase-button action-button">shop now</a>
            </div>
        </li>

          <?php

            endwhile;

         ?>

     </ul>
</div>



<?php get_footer(); ?>