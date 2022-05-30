<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'postgallery-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'postgallery';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$padding_top = get_field('padding_top');
$padding_bottom = get_field('padding_bottom');
$padding_top_mobile = get_field('padding_top_mobile');
$padding_bottom_mobile = get_field('padding_bottom_mobile');
$type = get_field('type_post_gallery');

?>
<section style="<?php if(!wp_is_mobile()){if(!empty($padding_top)){echo 'padding-top: '. $padding_top .'rem;';}?><?php if(!empty($padding_bottom)){echo 'padding-bottom: '. $padding_bottom .'rem;';}}else{if(!empty($padding_top_mobile)){echo 'padding-top: '. $padding_top_mobile .'rem;';}?><?php if(!empty($padding_bottom_mobile)){echo 'padding-bottom: '. $padding_bottom_mobile .'rem;';}}; ?>" id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> <?php echo $type;?>">
    <?php 
    $images = get_field('postgallery');
    if( $images ): ?>
        <?php foreach( $images as $image ): ?>
            <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery">
                <figure class="m-0">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_url($image['alt']); ?>" />
                </figure>
            </a>
        <?php endforeach; ?>
    <?php endif; ?>
</section>