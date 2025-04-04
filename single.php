<?php get_header();?>
<div class="container-fluid nemubarparents-parentxyasfd">
<?php get_template_part('template_part/menubar'); ?>
</div>


<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        
        <h2><?php the_title(); ?></h2>
        
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="text-center">
                <?php the_post_thumbnail('full'); ?> 
            </div>
        <?php endif; ?>
        
        <div class="">
            <?php the_content(); ?> 
        </div>

    <?php endwhile;
endif;
?>

<?php get_footer();?>
