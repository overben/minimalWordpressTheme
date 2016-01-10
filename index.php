<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>lecoinduweb</title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
<body>
  <div class="container">
      <div class="row">
        <div class="column grid-1 small-split-4 medium-split-4">
          <i class="fa fa-bars"></i>
        </div>
        <div class="column grid-10 small-split-2 medium-split-2">
          <h1 class="blog_title" ><?php bloginfo('title'); ?></h1>
          <h2 class="blog_description"><?php bloginfo('description'); ?></h2>
        </div>
        <div class="column grid-1 small-split-4 medium-split-4" style="text-align:right">
          <i class="fa fa-search"></i>
        </div>
      </div>
      
      <ul class="cat-menu clearfix">
        <?php wp_list_categories( array('title_li'=>"") ); ?>
      </ul>

      <?php
        //Get Latest Posts
        $args = array(
          'numberposts' => 6,
          'offset' => 0,
          'category' => 0,
          'orderby' => 'post_date',
          'order' => 'DESC',
          'post_type' => 'post',
          'suppress_filters' => true
        );
        $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
      ?>


    <!-- 3 Latest Posts -->

    <div class="row">
      <div class="column grid-6">
        <img class="post_image_first" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($recent_posts[0]["ID"])); ?>">
        <div class="post_text">
          <span class="post_category">
            <?php echo get_the_category($recent_posts[0]["ID"])[0]->name; ?>
          </span>
          <h3 class="post_title bigText">
            <?php echo $recent_posts[0]["post_title"]; ?>
          </h3>
          <p class="post_subheadline">
            <?php echo get_the_subheading($recent_posts[0]["ID"]); ?>
          </p>
        </div>
      </div>
      <div class="column grid-6 noPaddingTop">
        <div class="nested">
          <div class="column grid-6">
            <img class="post_image" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($recent_posts[1]["ID"])); ?>">
            <div class="post_text">
              <span class="post_category">
                <?php echo get_the_category($recent_posts[1]["ID"])[0]->name; ?>
              </span>
              <h3 class="post_title">
                <?php echo $recent_posts[1]["post_title"]; ?>
              </h3>
              <p class="post_subheadline">
                <?php echo get_the_subheading($recent_posts[1]["ID"]); ?>
              </p>
            </div>
          </div>
          <div class="column grid-6 newsletter-post">
            <img class="post_image" src="http://www.sketchappsources.com/resources/source-image/minimal-iphone-dark-flat.jpg"/>
            <div class="post_text">
              <span class="post_category">
                Newsletter
              </span>
              <button type="">Subscribe</button>
              <p >
                exclusive notifications and news
              </p>

            </div>
          </div>
        </div>
        <div class="nested">
          <div class="column grid-12 topMenuImageWide">
            <img class="post_image_wide" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($recent_posts[2]["ID"])); ?>">
            <div class="post_text">
              <span class="post_category">
                <?php echo get_the_category($recent_posts[2]["ID"])[0]->name; ?>
              </span>
              <h3 class="post_title">
                <?php echo $recent_posts[2]["post_title"]; ?>
              </h3>
              <p class="post_subheadline">
                <?php echo get_the_subheading($recent_posts[2]["ID"]); ?>
              </p>
            </div>
          </div>  
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
    <!-- 3 Latest Funny Videos -->
    Pas envie de lire ? Regarde ça:
    <div class="row">
      <div class="column grid-4"><img src="http://placehold.it/728x560"></div>
      <div class="column grid-4"><img src="http://placehold.it/728x560"></div>
      <div class="column grid-4"><img src="http://placehold.it/728x560"></div>

    </div>  
  </div>  
</body>
</html>