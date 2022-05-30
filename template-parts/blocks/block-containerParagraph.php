<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'containerParagraph-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'containerParagraph';
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
$withoutp =  get_field( 'containerParagraph_content' );
$font_family = get_field('containerParagraph_font_family');

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php if(!empty($font_family)){ echo $font_family; };?> <?php echo esc_attr($className); ?>" style="<?php if(!wp_is_mobile()){if(!empty($padding_top)){echo 'padding-top: '. $padding_top .'rem;';}?><?php if(!empty($padding_bottom)){echo 'padding-bottom: '. $padding_bottom .'rem;';}}else{if(!empty($padding_top_mobile)){echo 'padding-top: '. $padding_top_mobile .'rem;';}?><?php if(!empty($padding_bottom_mobile)){echo 'padding-bottom: '. $padding_bottom_mobile .'rem;';}}; ?>">
    <div class="wrapper">
        <?php echo $withoutp; ?>
    </div>
</section>