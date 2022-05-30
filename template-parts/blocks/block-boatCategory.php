<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'boatCategory-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'boatCategory';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

    <div class="buttons">
        <?php 
            $terms = get_terms( 'boats_cat' );
            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                echo '<button type="button" data-filter="all">'. pll__('ALL BOATS') .'</button>';
                foreach ( $terms as $term ) {
                    echo '<button type="button" data-filter=".category-'. $term->term_id .'">' . $term->name . '</button>';
                }
            }
        ?>
    </div>


    <div class="containerr">
        <?php 
        global $post;
            $args = [
                'post_type' => 'boats',
                'posts_per_page'    => -1,
                'orderby'       => 'name',
                'order'     => 'ASC'
            ];

            $query = new WP_Query ($args);
            $terms = get_terms( 'boats_cat' );
            if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
            $get_terms = get_the_terms( $post->ID, 'boats_cat' );
            $boat_size = get_field( 'boat_size', get_the_id() );
        ?>
        <div class="mix <?php foreach ( $get_terms as $term ) {echo "category-" . $term->term_id;}?>">
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
        <?php endwhile;endif;wp_reset_query();?>
    </div>
</section>