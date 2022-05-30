<?php

// Create class attribute allowing for custom "className" and "align" values.
$id = 'paragraphWithAnimation-' . $block['id'];
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

$paragraphWithAnimation = get_field('paragraph_with_animation');
$paragraphWithAnimationColor = get_field('paragraph_with_animation_color');
$padding_top = get_field('padding_top');
$padding_bottom = get_field('padding_bottom');
$padding_top_mobile = get_field('padding_top_mobile');
$padding_bottom_mobile = get_field('padding_bottom_mobile');
$font_family = get_field('paragraph_font_family');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php if(!empty($font_family)){ echo $font_family; };?> paragraphWithAnimation position-relative d-none d-md-block " style="<?php if(!wp_is_mobile()){if(!empty($padding_top)){echo 'padding-top: '. $padding_top .'rem;';}?><?php if(!empty($padding_bottom)){echo 'padding-bottom: '. $padding_bottom .'rem;';}}else{if(!empty($padding_top_mobile)){echo 'padding-top: '. $padding_top_mobile .'rem;';}?><?php if(!empty($padding_bottom_mobile)){echo 'padding-bottom: '. $padding_bottom_mobile .'rem;';}}; ?>">
    <p <?php if(!empty($paragraphWithAnimationColor)){?>style="color:<?php echo $paragraphWithAnimationColor; ?>;"<?php };?> class="main-description <?php echo esc_attr($classes); ?>">
        <span class="d-block wow animate__animated animate__fadeInUp" data-wow-delay="1s"><?php echo $paragraphWithAnimation; ?></span>
    </p>
</div>