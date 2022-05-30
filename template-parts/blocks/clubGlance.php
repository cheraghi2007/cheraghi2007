<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'club-glance-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'club-glance';
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
    <div class="club-glance-wrapper">
        <?php $delay = 1;if( have_rows('club_box') ): ?>
        <?php $row_count = count(get_field('club_box'));?>
        <div class="boxes <?php if($row_count==6){?>_6box<?php };if($row_count==5){?>_5box<?php };if($row_count==4){?>_4box<?php };if($row_count==3){?>_3box<?php };if($row_count==2){?>_2box<?php };if($row_count==1){?>_1box<?php };?>">
            <?php while( have_rows('club_box') ): the_row(); 
                $image          = get_sub_field('image');
                $title          = get_sub_field('title');
                $description    = get_sub_field('description');
            ?>
                <div class="box text-center  wow animate__animated animate__fadeInRight" data-wow-delay="<?php echo $delay/4; ?>s">
                <?php if ($image):?>
                    <figure class="m-0">
                        <img src="<?php echo $image; ?>" class="mx-auto" alt="<?php echo $title; ?>" width="60" height="60">
                    </figure>
                <?php endif;?>
                    <div class="box-content">
                        <h3 class="main-title-glance"><?php echo $title; ?></h3>
                        <div class="box-description">
                            <?php echo $description; ?>
                        </div>
                    </div>
                </div>
            <?php $delay++;endwhile; ?>
        </div>
        <?php endif; ?>
        <?php 
        $link = get_field('club_link');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <div class="main-button">
                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                    <?php echo esc_html( $link_title ); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>