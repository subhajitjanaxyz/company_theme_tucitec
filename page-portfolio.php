<?php get_header();?>
<div class="container-fluid nemubarparents-parentxyasfd">
<?php get_template_part('template_part/menubar'); ?>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="nepostxcgfr">


        <?php
$query = new WP_Query(array(
    'post_type'      => 'post',
    'posts_per_page' => -1, // Show all posts
));

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); ?>
        
        <div class="date_show_dateyearofbirtthe
        text-center">Updated on <?php echo get_the_date('F j, Y'); ?> / <?php the_author(); ?></div>
        <div class="date_show_dateyearofbiyotitel text-center"><?php the_title(); ?></div>
        <div class="date_show_dateyearofexrfdbirtthe"><?php the_excerpt(); ?></div>
        <div class="date_show_datdfsdfeyearofbirtthe text-center">
            <a href="<?php the_permalink(); ?>">Read More</a>
        </div>
    
        <?php endwhile;
    wp_reset_postdata();
else :
    echo '<p>No posts found.</p>';
endif;
?>
    </div>
    </div>
</div>






<?php get_footer();?>




