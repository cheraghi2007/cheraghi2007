<?php get_header(); ?>
<main id="site-main"> 
    <div id="container-block" class="mainContainer  container-fluid regular_heights p-0">
        <div class="searchzoom" style="background-image:url('<?php echo THEME_DIR_URI; ?>/src/images/design/Agapi_boating_serach-scaled-uai.jpg');">
            <h1><?php  printf( esc_html__( 'Results For: %s', '_s' ),'<span class="search-word">' . get_search_query() . '</span>'); ?></h1>
        </div>
    </div>
    <div class="search-content row">
    <?php while ( have_posts() ) :the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="col-lg-3 col-md-6 col-xs-6 col-12">
            <div class="content-wrapper">
                <span><?php echo get_post_type( get_the_ID() );?></span>
                <h3><?php the_title(); ?></h3>
                <hr>
                <p><?php the_excerpt(); ?></p>
            </div>
        </a>
    <?php endwhile; ?>
    </div>
    <div class="paginations">
        <?php understrap_pagination();?>
    </div>
</main>
<?php get_footer(); ?>