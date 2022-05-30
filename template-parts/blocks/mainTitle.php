<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'mainTitle-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'mainTitle';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <?php $newTitle = get_field('titles'); if($newTitle){?>
    <h2 class="main-title text-center title wow animate__animated animate__fadeInUp"><?php echo $newTitle;?></h2>
    <?php };?>
</section>