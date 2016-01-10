<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>lecoinduweb</title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

</head>
<body>
  <div class="container">
      <?php bloginfo('title'); ?><br/>

      <?php bloginfo('description'); ?>

      <?php
        $args = array(
          'title_li'     => ""
        );
      wp_list_categories( $args );
      ?>

    <br/><br/>
    <!-- 3 Latest Posts -->
    <div class="row">
      <div class="column grid-6">
        <img class="post_image" src="http://placehold.it/728x560">
        <div class="post_text">
          <span class="post_category">
            STYLE
          </span>
          <h3 class="post_title">
            NICK WOOSTER
          </h3>
          <p class="post_subheadline">
            Lorem ipsum dolor sit amet
          </p>
        </div>
      </div>
      <div class="column grid-6 noPaddingTop">
        <div class="nested">
          <div class="column grid-6"><img src="http://placehold.it/728x560"></div>
          <div class="column grid-6"><img src="http://placehold.it/728x560"></div>
        </div>
        <div class="nested">
          <div class="column grid-12"><img src="http://placehold.it/728x275"></div>  
        </div>
      </div>
    </div>
    <!-- 3 Best Posts -->
    <div class="row">
      <div class="column grid-4"><img src="http://placehold.it/728x560"></div>
      <div class="column grid-4"><img src="http://placehold.it/728x560"></div>
      <div class="column grid-4"><img src="http://placehold.it/728x560"></div>

    </div>

      <?php
        while(have_posts()){

          the_post();
          
          //Image of the post
          $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );
          echo "<br/><img width=\"200\" src=\"".$src[0]."\"/>";
          
          the_category(' ', '', $post_id);
          the_title( '<a href="' . esc_url( get_permalink() ) . '">', '</a>' );
          if (function_exists('the_subheading')) {
            the_subheading('<p>', '</p>');
          } 
        }
      ?>
  
  </div>  
</body>
</html>