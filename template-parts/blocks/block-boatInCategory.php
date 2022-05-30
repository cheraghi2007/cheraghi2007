<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'boat-in-category-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'boat-in-category';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="boat-in-category-wrapper">
    <?php
        $terms = get_the_terms( $post->ID , 'boats_cat', '');
        $term_ids = wp_list_pluck($terms,'term_id');
        $second_query = new WP_Query( array(
            'post_type' => 'boats',
            'tax_query' => array(
                            array(
                                'taxonomy' => 'boats_cat',
                                'field' => 'id',
                                'terms' => $term_ids,
                                'operator'=> 'IN' //Or 'AND' or 'NOT IN'
                            )),
            'posts_per_page' => 4,
            'orderby' => 'rand',
            'post__not_in'=>array($post->ID)
        ) );

//Loop through posts and display...
    if($second_query->have_posts()) {
     while ($second_query->have_posts() ) : $second_query->the_post(); 
     $boat_size = get_field( 'boat_size', get_the_id() );
    ?>
      <div class="single_related">
        <div class="mixed">
                <a href="<?php the_permalink(); ?>">
                    <?php 
                    $image = get_field('boat_thumbnail',get_the_id());
                    if( !empty( $image ) ): ?>
                        <figure>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="" height="">
                        </figure>
                    <?php endif; ?>
                </a>
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
                <p><?php echo $boat_size; ?></p>
                <div class="gray-button">
                    <a href="<?php the_permalink(); ?>">
                    <?php echo 	pll_e('READ MORE'); ?>
                    </a>
                </div>
            </div>
       </div>
    <?php endwhile; wp_reset_query(); }?>
    </div>
</section>