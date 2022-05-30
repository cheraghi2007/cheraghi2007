<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'main-wrapper-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'main-wrapper';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$main_wrapper_types = get_field('main_wrapper_types');

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> <?php echo $main_wrapper_types; ?> <?php the_field('image_right_or_left'); ?> <?php the_field('main_wrapper_type'); ?> <?php the_field('button_type'); ?>-type" style="background-color:<?php the_field('background_color'); ?>;">
    <div class="content-wrapper">
        <div class="content">
            <div class="main-content wow animate__animated animate__fadeInUp">
                <h2 class="main-title"><?php the_field('main_wrapper_main_title'); ?></h2>
                <p><?php the_field('main_wrapper_description'); ?></p>
                <?php 
                $link = get_field('main_wrapper_link');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <div class="<?php the_field('button_type'); ?>">
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <?php echo esc_html( $link_title ); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <a href="<?php the_field('main_wrapper_image'); ?>" data-fancybox class="image" >
            <img src="<?php the_field('main_wrapper_image'); ?>" alt="">
        </a>
    </div>
</section>