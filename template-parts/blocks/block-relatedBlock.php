<?php

// Create class attribute allowing for custom "className" and "align" values.
$classes = '';
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}
if( !empty($block['align']) ) {
    $classes .= sprintf( ' align%s', $block['align'] );
}

if( !empty($block['align_content']) ) {
    $classes .= sprintf( ' align_content-%s', $block['align_content'] );
}


if( !empty($block['full_height']) ) {
    $classes .= sprintf( ' full_height', $block['full_height'] );
}

$padding_top = get_field('padding_top');
$padding_bottom = get_field('padding_bottom');
$padding_top_mobile = get_field('padding_top_mobile');
$padding_bottom_mobile = get_field('padding_bottom_mobile');

?>
<div class="related-block mx-auto <?php echo esc_attr($classes); ?>" style="<?php if(!wp_is_mobile()){if(!empty($padding_top)){echo 'padding-top: '. $padding_top .'rem;';}?><?php if(!empty($padding_bottom)){echo 'padding-bottom: '. $padding_bottom .'rem;';}}else{if(!empty($padding_top_mobile)){echo 'padding-top: '. $padding_top_mobile .'rem;';}?><?php if(!empty($padding_bottom_mobile)){echo 'padding-bottom: '. $padding_bottom_mobile .'rem;';}}; ?>">
    <div class="category category-content d-flex py-5">
        <div class="container-fluid">
            <h5>RELATED POSTS</h4>
            <div class="boxs-container d-flex flex-wrap row">
                <?php
                $featured_posts = get_field('related_posts');
                if( $featured_posts ): ?>
                    <?php foreach( $featured_posts as $featured_post ): 
                        $permalink = get_permalink( $featured_post->ID );
                        $title = get_the_title( $featured_post->ID );
                        $imges = get_the_post_thumbnail($featured_post->ID);
                        $auth_id = get_the_author_meta($featured_post->ID); //Get author ID.
                        $auth_name = get_the_author_meta('display_name'); // Get author name.
                        $auth_des = get_the_author_meta('description'); // Get author description.
                        $auth_img = get_avatar( $auth_id ); //If user uploaded avatar does not exist use gavatar.
                    ?>
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="box d-flex flex-column">
                            <div class="box-img">
                                <a class="hover-img" href="<?php echo esc_url( $permalink ); ?>">
                                    <figure>
                                        <i class="fa fa-plus plus-icon"></i>
                                        <?php
                                            $locimg = get_field('location_thumbnail',$featured_post->ID);
                                            $boatimg = get_field('boat_thumbnail',$featured_post->ID);

                                            if ( has_post_thumbnail() ) {
                                                echo $imges;
                                            }
                                            if ( $locimg ) {
                                                echo '<img src="'. esc_url($locimg['url']) .'">';
                                            }
                                            if ( $boatimg ) {
                                                echo '<img src="'. esc_url($boatimg['url']) .'">';
                                            }
                                        ?>
                                    </figure>
                                </a>
                            </div>
                            <div class="box-content">
                                <div class="t-entry">
                                <p class="t-entry-meta"><span class="t-entry-date"><?php echo get_the_date('j F, Y'); ?></span></p>
                                <h3 class="t-entry-title font-762333 h5 fontspace-111509">
                                    <a href="<?php echo esc_url( $permalink ); ?>" target="_self"><?php echo esc_html( $title ); ?></a>
                                </h3>
                                </div>
                                <hr class="separator-extra">
                                <div class="author">
                                <p class="t-entry-meta t-entry-author mb-0">
                                    <!--<a href="<?php echo get_author_posts_url($featured_post->ID); ?>" class="tmb-avatar-size-md">-->
                                    <?php echo $auth_img; ?>
                                    <span class="tmb-username-wrap">
                                        <span class="tmb-username-text ml-2">
                                            by <?php echo $auth_name;?></span>
                                            <span class="tmb-user-qualification"></span>
                                        </span>
                                    <!--</a>-->
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>