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
<div class="social-block mx-auto <?php echo esc_attr($classes); ?>" style="<?php if(!wp_is_mobile()){if(!empty($padding_top)){echo 'padding-top: '. $padding_top .'rem;';}?><?php if(!empty($padding_bottom)){echo 'padding-bottom: '. $padding_bottom .'rem;';}}else{if(!empty($padding_top_mobile)){echo 'padding-top: '. $padding_top_mobile .'rem;';}?><?php if(!empty($padding_bottom_mobile)){echo 'padding-bottom: '. $padding_bottom_mobile .'rem;';}}; ?>">
    <div class="social-share">
        <ul>
            <li class="social-facebook"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fab fa-facebook-f"></i></a></li>
            <li class="social-twitter"><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>"><i class="fab fa-twitter"></i></a></li>
            <li class="social-pinterest"><a target="_blank" href="http://pinterest.com/pin/create/link/?url=<?php the_permalink(); ?>&description=<?php the_title(); ?>"><i class="fab fa-pinterest"></i></a></li>
            <li class="social-linkedin"><a target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>"><i class="fab fa-linkedin-in"></i></a></li>
            <li class="social-xing"><a target="_blank" href="https://www.xing.com/social/share/spi?url=<?php the_permalink(); ?>&image=undefined&title=<?php the_title(); ?>&summary="><i class="fab fa-xing"></i></a></li>
            <li class="social-paper-plane"><a target="_blank" href="mailto:type%20email%20address%20here?subject=I%20wanted%20to%20share%20this%20post%20with%20you%20from%20<?php bloginfo('name'); ?>&body=<?php the_title(); ?> - <?php the_permalink(); ?>"><i class="fa fa-paper-plane"></i></a></li>
        </ul>
    </div>
</div>
