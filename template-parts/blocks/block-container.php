<?php

// Create class attribute allowing for custom "className" and "align" values.
$id = 'container-' . $block['id'];
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

if( !empty($block['full_height']) ) {
    $classes .= sprintf( ' full_height', $block['full_height'] );
}

$width = get_field('container_width');
$padding_top = get_field('padding_top');
$padding_bottom = get_field('padding_bottom');
$padding_top_mobile = get_field('padding_top_mobile');
$padding_bottom_mobile = get_field('padding_bottom_mobile');
$bg = get_field('container_background_image');
$color = get_field('container_background_color');
$zoom = get_field('container_zoom');
$parallax = get_field('container_parallax');
$no_padding = get_field('no_padding');
$container_height = get_field('container_height');

?>
<div style="<?php if(!wp_is_mobile()){if(!empty($padding_top)){echo 'padding-top: '. $padding_top .'rem;';}?><?php if(!empty($padding_bottom)){echo 'padding-bottom: '. $padding_bottom .'rem;';}}else{if(!empty($padding_top_mobile)){echo 'padding-top: '. $padding_top_mobile .'rem;';}?><?php if(!empty($padding_bottom_mobile)){echo 'padding-bottom: '. $padding_bottom_mobile .'rem;';}}; ?><?php if(!empty($color)){?>background-color:<?php echo $color; ?>;<?php };?>" id="<?php echo esc_attr($id); ?>" class="mainContainer <?php if(!empty($parallax)){?>parallax<?php };?> <?php if(!empty($zoom)){?>container-with-zoom<?php }; ?><?php echo esc_attr($classes); ?> <?php echo $width; ?> <?php if(!empty($container_height)){ echo $container_height; };?> <?php if(!empty($no_padding)){?>p-0<?php };?>">

    <?php if($container_height==='full_heights' && !empty($bg)){?>
        <div class="background-element">
            <div class="background-wrapper <?php if(!empty($parallax)){?>parallax__class<?php };?>">
                <div class="background-inner <?php if(!empty($zoom)){?>zoom__class<?php };?>" style="background-image:url('<?php echo $bg ?>');"></div>
                <div class="block-bg-overlay"></div>
            </div>
        </div>
    <?php } ?>

    <?php if($container_height==='inherit_heights'  && !empty($bg)){?>
        <div class="background-element">
            <div class="background-wrapper <?php if(!empty($parallax)){?>parallax__class<?php };?>">
                <div class="background-inner <?php if(!empty($zoom)){?>zoom__class<?php };?>" style="background-image:url('<?php echo $bg ?>');"></div>
                <div class="block-bg-overlay"></div>
            </div>
        </div>
    <?php } ?>

    <?php if($container_height==='short_heights' && !empty($bg)){?>
        <div class="background-element">
            <div class="background-wrapper <?php if(!empty($parallax)){?>parallax__class<?php };?>">
                <div class="background-inner <?php if(!empty($zoom)){?>zoom__class<?php };?>" style="background-image:url('<?php echo $bg ?>');"></div>
                <div class="block-bg-overlay"></div>
            </div>
        </div>
    <?php } ?>
    <InnerBlocks />
</div>