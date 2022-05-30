<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'smart-facts-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'smart-facts';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="smart-facts-wrapper">
        <div class="content">
        <?php 
            $mainTitle = get_field('smart_facts_main_title');
            if($mainTitle){
        ?>
            <?php if($mainTitle){?>
                <h2 class="main-title text-center title">
                    <span class="d-block wow animate__animated animate__fadeInUp"><?php echo $mainTitle; ?></span>
                </h2>
            <?php };?>
        <?php 
            $mainDescription = get_field('smart_facts_main_description');
            if($mainDescription){
        ?>
            <?php if($mainDescription){?>
                <div class="wrapper containerParagraph">
                    <?php echo $mainDescription; ?>
                </div>
            <?php };?>
        <?php }; ?>
        <?php }; ?>
        </div>
        <?php if( have_rows('smart_facts_box') ): ?>
        <?php $row_count = count(get_field('smart_facts_box'));?>
        <div class="boxes <?php if($row_count==4){?>_4box<?php };if($row_count==3){?>_3box<?php };if($row_count==2){?>_2box<?php };if($row_count==1){?>_1box<?php };?>">
            <?php while( have_rows('smart_facts_box') ): the_row(); 
                $number         = get_sub_field('number');
                $percent        = get_sub_field('percent');
                $before        = get_sub_field('before');
                $title          = get_sub_field('title');
            ?>
                <div class="box text-center">
                    <div class="box-content">
                        <div id="counters_3">
                            <span class="numbers"><?php echo $before; ?></span>
                            <h3 class="counter numbers" data-TargetNum="<?php echo $number; ?>" data-Speed="1000">0</h3>
                            <div class="numbers d-none"><?php echo $number; ?></div>
                            <span class="numbers"><?php echo $percent; ?></span>
                        </div>
                        <h4 class="numbers-description">
                            <?php echo $title; ?>
                        </h4>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>