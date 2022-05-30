<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'gallery-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'gallery';
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

?>
<section style="<?php if(!wp_is_mobile()){if(!empty($padding_top)){echo 'padding-top: '. $padding_top .'rem;';}?><?php if(!empty($padding_bottom)){echo 'padding-bottom: '. $padding_bottom .'rem;';}}else{if(!empty($padding_top_mobile)){echo 'padding-top: '. $padding_top_mobile .'rem;';}?><?php if(!empty($padding_bottom_mobile)){echo 'padding-bottom: '. $padding_bottom_mobile .'rem;';}}; ?>" id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
<?php 
$images = get_field('gallery');
if( $images ): ?>
    <div class="swiper gallerySwiper">
        <div class="swiper-wrapper">
        <?php foreach( $images as $image ): ?>
            <div class="swiper-slide">
                <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery">
                    <figure class="m-0">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="Thumbnail of <?php echo esc_url($image['alt']); ?>" />
                        <figcaption class="d-flex flex-column justify-content-center align-items-center">
                            <h4><?php echo esc_html($image['caption']); ?></h4>
                            <p><?php echo esc_html($image['description']); ?></p>
                        </figcaption>
                    </figure>
                </a>
            </div>
        <?php endforeach; ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<?php endif; ?>