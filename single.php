<?php get_header(); ?>
<main id="site-main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div id="container-block_" class="mainContainer parallax  align_content-top container-fluid full_heights p-0">
                <div class="background-element">
                    <div class="background-wrapper parallax__class">
                        <div class="background-inner zoom__class" style="background-image:url('<?php the_post_thumbnail_url(); ?>');"></div>
                        <div class="block-bg-overlay"></div>
                    </div>
                </div>
                <div class="main-row mx-auto  align_content-center full_height" style="max-width:1200px;">
                    <div class="single-header mx-auto">
                        <div class="metaData"><?php the_date('m F, Y', '', ''); ?><span>|</span>IN <?php the_category(' ,', ''); ?><span>|</span><?php echo reading_time(); ?></div>
                        <h1><?php the_title(); ?></h1>
                        <?php
                        $auth_id = get_the_author_meta('ID'); //Get author ID.
                        $auth_name = get_the_author_meta('display_name'); // Get author name.
                        $auth_des = get_the_author_meta('description'); // Get author description.
                        $auth_img = get_avatar($auth_id); //If user uploaded avatar does not exist use gavatar.
                        ?>
                        <div class="content">
                            <?php echo $auth_img; ?>
                            <p>by <?php echo $auth_name; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
</main>
<?php get_footer(); ?>