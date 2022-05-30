<?php

// Create class attribute allowing for custom "className" and "align" values.
$id = 'headingWithAnimation-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

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

$heading_with_animation_title = get_field('heading_with_animation_title');
$heading_with_animation_color = get_field('heading_with_animation_color');
$padding_top = get_field('padding_top');
$padding_bottom = get_field('padding_bottom');
$padding_top_mobile = get_field('padding_top_mobile');
$padding_bottom_mobile = get_field('padding_bottom_mobile');



?>
<div id="<?php echo esc_attr($id); ?>" class="headingWithAnimation position-relative" style="<?php if(!wp_is_mobile()){if(!empty($padding_top)){echo 'padding-top: '. $padding_top .'rem;';}?><?php if(!empty($padding_bottom)){echo 'padding-bottom: '. $padding_bottom .'rem;';}}else{if(!empty($padding_top_mobile)){echo 'padding-top: '. $padding_top_mobile .'rem;';}?><?php if(!empty($padding_bottom_mobile)){echo 'padding-bottom: '. $padding_bottom_mobile .'rem;';}}; ?>">
    <h2 <?php if(!empty($heading_with_animation_color)){?>style="color:<?php echo $heading_with_animation_color; ?>;"<?php };?> class="main-title <?php echo esc_attr($classes); ?>">
        <span class="d-block wow animate__animated animate__fadeInUp" data-wow-delay="0.5s"><?php echo $heading_with_animation_title; ?></span>
    </h2>
</div>