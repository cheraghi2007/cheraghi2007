<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'why-Agapi-Boat-Club-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'why-Agapi-Boat-Club';
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
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="<?php if(!wp_is_mobile()){if(!empty($padding_top)){echo 'padding-top: '. $padding_top .'rem;';}?><?php if(!empty($padding_bottom)){echo 'padding-bottom: '. $padding_bottom .'rem;';}}else{if(!empty($padding_top_mobile)){echo 'padding-top: '. $padding_top_mobile .'rem;';}?><?php if(!empty($padding_bottom_mobile)){echo 'padding-bottom: '. $padding_bottom_mobile .'rem;';}}; ?>">
    <div class="why-wrapper">
        <div class="boxes">
            <?php if( have_rows('why_box_1') ): ?>
                <?php while( have_rows('why_box_1') ): the_row(); 
                    $image      = get_sub_field('image');
                    $title      = get_sub_field('title');
                    $content    = get_sub_field('content');
                ?>
                    <div class="box text-center wow animate__animated animate__fadeInRight" data-wow-delay="0.25s">
                        <figure class="m-0">
                            <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" class="mx-auto" width="80" height="80">                    
                        </figure>
                        <div class="box-content">
                            <h3 class="main-title-why"><?php echo $title; ?></h3>
                            <div class="box-description">
                                <?php echo $content; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if( have_rows('why_box_2') ): ?>
                <?php while( have_rows('why_box_2') ): the_row(); 
                    $image2      = get_sub_field('image');
                    $title2      = get_sub_field('title');
                    $content2    = get_sub_field('content');
                ?>
                    <div class="box text-center wow animate__animated animate__fadeInRight" data-wow-delay="0.5s">
                        <figure class="m-0">
                            <img src="<?php echo $image2; ?>" class="mx-auto" alt="<?php echo $title2; ?>" width="80" height="80">
                        </figure>
                        <div class="box-content">
                            <h3 class="main-title-why"><?php echo $title2; ?></h3>
                            <div class="box-description">
                                <?php echo $content2; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if( have_rows('why_box_3') ): ?>
                <?php while( have_rows('why_box_3') ): the_row(); 
                    $image3      = get_sub_field('image');
                    $title3      = get_sub_field('title');
                    $content3    = get_sub_field('content');
                ?>
                    <div class="box text-center wow animate__animated animate__fadeInRight" data-wow-delay="0.75s">
                        <figure class="m-0">
                            <img src="<?php echo $image3; ?>" class="mx-auto" alt="<?php echo $title3; ?>" width="80" height="80">                    
                        </figure>
                        <div class="box-content">
                            <h3 class="main-title-why"><?php echo $title3; ?></h3>
                            <div class="box-description">
                                <?php echo $content3; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php 
        $link = get_field('why_link');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <div class="main-button">
                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            </div>
        <?php endif; ?>
    </div>
</section>