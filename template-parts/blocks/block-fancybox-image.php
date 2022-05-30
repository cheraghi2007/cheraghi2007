<?php
$image = get_field('image');
if (!empty($image)) : ?>
  <a class="image fancygallery" href="<?php echo esc_url($image['url']); ?>" data-fancybox="newgallery">
    <figure class="wp-block-image">
      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="">
    </figure>
  </a>
<?php endif; ?>