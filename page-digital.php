<?php
/*
* Template Name: Digital Social Design
*/
get_header(); ?>
<?php the_post(); ?>
<?php
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$url = $thumb['0'];
?>
    <!-- Intro Header -->
    <header id="header" class="intro-project project-2" style="background: #3399db url(<?=$url?>) no-repeat bottom center scroll;   -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;">
        <div class="intro-body">
<div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div>
                        <img class="project-2-headline" src="<?php bloginfo('template_url');?>/img/project-2/digital-social-design.png" alt="">
                        <h2 class="post-subhead"><?php the_subtitle(); ?></h2>
                        <p class="meta"><?php the_date('F, Y'); ?></p>
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
              <?php the_content(); ?>
            </div><!-- /row -->
            <!-- Divider-->
          <div class="row">
          <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-8 col-lg-offset-2"> 
          <hr></hr>
          </div>
          </div>
          <!-- /Divider-->
          <div class="row"><!--Share -->
          <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-8 col-lg-offset-2"> 
          <h3>Love it?</h3>
          </div>
          <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-8 col-lg-offset-2"> 
          <a href="https://twitter.com/share?text=Check%20this%20out!&via=sammyschuckert" class="twitter popup btn btn-default btn-lg btn-share" title="Tweet on Twitter"><i class="fa fa-twitter fa-fw"></i> Tweet it</a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=" title="Share on Facebook" target="_blank" type="button" class="popup btn btn-default btn-lg btn-share"><i class="fa fa-facebook fa-fw"></i> Share it</a>
          <a href="<?php bloginfo('rss2_url'); ?>" type="button" class="btn btn-default btn-lg btn-share"><i class="fa fa-rss fa-fw"></i> Subscribe it</a>
          </div>
          </div><!--Share -->
                  <div class="row"><!--Comments -->
          <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-8 col-lg-offset-2"> 
          <h3>Or Discuss it!</h3>
          </div>
          <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-8 col-lg-offset-2"> 
          <!--Comments hier her -->
          <div id="disqus_thread"></div>
          <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'sammyschuckert';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
          </script>
          <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
          </div>
          </div><!--Comments -->
        </div>
        </div>
    </article>

<?php get_footer(); ?>