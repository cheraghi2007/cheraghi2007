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
<div class="authur-block mx-auto <?php echo esc_attr($classes); ?>" style="<?php if(!wp_is_mobile()){if(!empty($padding_top)){echo 'padding-top: '. $padding_top .'rem;';}?><?php if(!empty($padding_bottom)){echo 'padding-bottom: '. $padding_bottom .'rem;';}}else{if(!empty($padding_top_mobile)){echo 'padding-top: '. $padding_top_mobile .'rem;';}?><?php if(!empty($padding_bottom_mobile)){echo 'padding-bottom: '. $padding_bottom_mobile .'rem;';}}; ?>">
    <?php
        $auth_id = get_the_author_meta('ID'); //Get author ID.
        $auth_name = get_the_author_meta('display_name'); // Get author name.
        $auth_des = get_the_author_meta('description'); // Get author description.
        $auth_img = get_avatar( $auth_id ); //If user uploaded avatar does not exist use gavatar.
    ?>
    <div class="content">
        <?php echo $auth_img; ?>
        <h5><?php echo $auth_name;?></h5>
    </div>
</div>