<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>lecoinduweb</title>
  <link rel="stylesheet" href="">
</head>
<body>
  <?php bloginfo('title'); ?><br/>

  <?php bloginfo('description'); ?>
<br/><br/>

  <?php
    while(have_posts()){

      the_post();
      $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );
      echo "<br/><img width=\"200\" src=\"".$src[0]."\"/>";
      echo "<br/>";
      the_date();
      echo "<br/>";
      the_category(' ', '', $post_id);
      echo "<br/>";
      the_title( '<a href="' . esc_url( get_permalink() ) . '">', '</a>' );
      echo "<hr/>";
 if (function_exists('the_subheading')) { the_subheading('<p>', '</p>'); } 
    }
  ?>
</body>
</html>