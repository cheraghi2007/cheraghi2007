<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'boatsRelation-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'boatsRelation';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$button_type = get_field('relation_button_type');

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> <?php echo $button_type; ?>">

<?php
$featured_posts = get_field('boats_relation');
if( $featured_posts ): ?>
    <div class="boats-relation-wrapper">
    <?php foreach( $featured_posts as $featured_post ): 
        $permalink = get_permalink( $featured_post->ID );
        $title = get_the_title( $featured_post->ID );
        $boat_size = get_field( 'boat_size', $featured_post->ID );
        $boat_thumbnail = get_field( 'boat_thumbnail', $featured_post->ID );
        $location_size = get_field( 'location_size', $featured_post->ID );
        $location_thumbnail = get_field( 'location_thumbnail', $featured_post->ID );
        ?>
        <div class="single_related">
            <div class="mixed">
                <a href="<?php echo esc_url( $permalink ); ?>">
                    <?php if( !empty( $boat_thumbnail ) ): ?>
                        <figure>
                            <img src="<?php echo esc_url($boat_thumbnail['url']); ?>" alt="<?php echo esc_attr($boat_thumbnail['alt']); ?>" width="" height="">
                        </figure>
                    <?php endif; ?>
                    <?php if( !empty( $location_thumbnail ) ): ?>
                        <figure>
                            <img src="<?php echo esc_url($location_thumbnail['url']); ?>" alt="<?php echo esc_attr($location_thumbnail['alt']); ?>" width="" height="">
                        </figure>
                    <?php endif; ?>
                </a>
                <a href="<?php echo esc_url( $permalink ); ?>">
                    <h3><?php echo esc_html( $title ); ?></h3>
                </a>
                <?php if( !empty( $boat_size ) ): ?>
                <p><?php echo esc_html( $boat_size ); ?></p>
                <?php endif; ?>
                <?php if( !empty( $location_size ) ): ?>
                <p><?php echo esc_html( $location_size ); ?></p>
                <?php endif; ?>
                <div class="gray-button">
                    <a href="<?php echo esc_url( $permalink ); ?>">
                    <?php echo 	pll_e('READ MORE'); ?>
                    </a>
                </div>
            </div>
       </div>
    <?php endforeach; ?>
    </div>
<?php endif; ?>

</section>