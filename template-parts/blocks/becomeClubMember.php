<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'become-club-member-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'become-club-member';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$link = get_field('boxes_link');
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php if( $link ): ?>has-links<?php endif;?> <?php echo esc_attr($className); ?>">
    <div class="become-club-member-wrapper">
        <?php 
            $mainTitle = get_field('become_club_member_main_title');
            if($mainTitle){
        ?>
            <div class="content">
            <?php if($mainTitle){?>
                <h1 class="main-title text-center">
                    <span class="d-block wow animate__animated animate__fadeInUp"><?php echo $mainTitle; ?></span>
                </h1>
            <?php }; ?>
            </div>
        <?php }; ?>
        <?php $counter = 1;$delay = 1; if( have_rows('become_club_member_box') ): ?>
        <?php $row_count = count(get_field('become_club_member_box'));?>
        <div class="boxes row <?php if($row_count==4){?>_4box<?php };if($row_count==3){?>_3box<?php };if($row_count==2){?>_2box<?php };if($row_count==1){?>_1box<?php };?>">
            <?php while( have_rows('become_club_member_box') ): the_row(); 
                $title          = get_sub_field('title');
                $description    = get_sub_field('description');
            ?>
                <div class="box overflow-hidden text-center <?php if($row_count==4){?>col-lg-3 col-md-4 col-sm-4 col-12<?php };if($row_count==3){?>col-md-4<?php };if($row_count==2){?>col-md-6<?php };if($row_count==1){?>col-md-12<?php };?> wow animate__animated animate__fadeInRight" data-wow-delay="<?php echo $delay/4; ?>s">
                    <div class="box-content">
                        <div class="numbers"><?php echo $counter; ?></div>
                        <h3 class="main-title"><?php echo $title; ?></h3>
                        <div class="box-description">
                            <?php echo $description; ?>
                        </div>
                    </div>
                </div>
            <?php $counter++;$delay++;endwhile; ?>
        </div>
        <?php endif; ?>
        <?php 
        
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <div class="main-button">
                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            </div>
        <?php endif; ?>
    </div>
</section>