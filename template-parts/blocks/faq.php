<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'faq-items-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'faq-items';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="faq-content">
        <?php
            $featured_posts = get_field('faq_list');
            if( $featured_posts ):
        ?>
        <div class="accordion" id="accordionFlushExample<?php echo esc_attr($id); ?>">
            <?php $numbers = range(1,1000); shuffle($numbers); $counter = 1; foreach( $featured_posts as $featured_post ): 
                $num = array_pop($numbers);
                $title   = get_the_title( $featured_post->ID );
                $content = get_field( 'answer', $featured_post->ID );
            ?>
            <div class="card">
                <div class="card-header p-0" id="heading<?php echo $num; ?>">
                    <h2 class="mb-0">
                        <button class="collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo $num; ?>" aria-expanded="true" aria-controls="collapse<?php echo $num; ?>">
                            <?php echo esc_html( $title ); ?>
                        </button>
                    </h2>
                </div>
                <div id="collapse<?php echo $num; ?>" class="collapse" aria-labelledby="heading<?php echo $num; ?>" data-parent="#accordionFlushExample<?php echo esc_attr($id); ?>">
                    <div class="card-body">
                        <?php echo  $content ; ?>
                    </div>
                </div>
            </div>

            <?php $counter++; endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>