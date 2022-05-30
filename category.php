<?php get_header(); ?>
<div id="category-header" class="category-header mainContainer parallax container-with-zoom align_content-top container-fluid full_heights p-0">
  <div class="background-element">
      <div class="background-wrapper parallax__class">
          <div class="background-inner zoom__class" style="background-image:url('<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2022/05/image-placeholder-13-min.jpg');"></div>
          <div class="block-bg-overlay"></div>
      </div>
  </div>
  <div class="main-row mx-auto  align_content-center full_height" style="max-width:1200px;">
    <div id="headingWithAnimation-block_62303df83f5aa" class="headingWithAnimation position-relative">
      <h2 style="color:#ffffff;" class="main-title  aligncenter align_content-top">
        <span class="d-block wow animate__ animate__fadeInUp animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"><?php single_cat_title('', true); ?>
        </span>
      </h2>
    </div>
  </div>
</div>
<div class="category-content d-flex py-5">
  <div class="container-fluid">
    <div class="boxs-container d-flex flex-wrap">
      <?php
      $category = get_category(get_query_var('cat'));

      $cat_id = $category->cat_ID;
      $args = array(
        'posts_per_page' => 100, // we need only the latest post, so get that post only
        'cat' => $cat_id // Use the category id, can also replace with category_name which uses category slug
      );
      $posts = get_posts($args);
      foreach ($posts as $post) : ?>
        <?php //print_r($post); 
        ?>
        <?php $postdata = get_postdata($post->ID);
        $authorID = $postdata['Author_ID'];
        ?>
        <div class="box d-flex flex-column">
          <div class="box-img">
            <a class="hover-img" href="<?php echo get_permalink($post->ID) ?>">
              <figure>
                <i class="fa fa-plus plus-icon"></i>
                <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
              </figure>
            </a>
          </div>
          <div class="box-content">
            <div class="t-entry">
              <p class="t-entry-meta"><span class="t-entry-date"><?php echo get_the_date('j F, Y'); ?></span></p>
              <h3 class="t-entry-title font-762333 h5 fontspace-111509"><a href="<?php echo get_permalink($post->ID) ?>" target="_self"><?php echo $post->post_title ?></a></h3>
            </div>
            <hr class="separator-extra">
            <div class="author">
              <p class="t-entry-meta t-entry-author mb-0">
                <!--<a href="<?php echo get_author_posts_url($authorID); ?>" class="tmb-avatar-size-md">-->
                  <?php echo get_avatar($authorID, 40); ?>
                  <span class="tmb-username-wrap"><span class="tmb-username-text ml-2">by <?php echo get_the_author_meta('display_name',$post->post_author); ?></span><span class="tmb-user-qualification"></span></span>
                <!--</a>-->
              </p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

</div>
<?php get_footer(); ?>