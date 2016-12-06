<?php
/*
* Template Name: Privacy
*/
get_header();
?>
<?php the_post(); ?>
<?php
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$url = $thumb['0'];
?>
    <!-- Intro Header -->
    <header id="header" class="intro-project" style="background: #3399db url(<?=$url?>) no-repeat bottom center scroll;   -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;">
        <div class="intro-body">
<div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div>
                        <h1 class="post-heading"><?php the_title(); ?></h1>
                        
                    </div>
                </div>
            </div>
        </div>
            </div>
    </header>

  <!-- Post Content -->
    <article>
    <div id="post" class="article-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?php the_content(); ?>
                </div>
            </div><!-- /row -->

        </div>
        </div>
    </article>

<?php get_footer(); ?>