<?php get_header(); ?> 
 <!-- Intro Header -->
    <header id="header" class="intro-blog">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading">
                            Some Thoughts
                            </h1>
                        <p class="intro-text">
                          on design and other stuff
                        </p>
                        </div>
                    </div>
                </div>
            </div>
    </header>

  <!-- Section Blog -->
    <section id="blog" class="content-section">
    <div class="blog-section">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-2"> 
                  <h3>Blogroll</h3>
              </div>
              <div class="col-xs-12 col-sm-10"> 
                    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
                <div class="row">
                  <div class="col-xs-12 col-md-9">
                    <a href="<?php the_permalink(); ?>"><h4 class="no-margin">
                      <?php the_title(); ?>
                    </h4>
                    <p>
                      <?php the_subtitle(); ?>
                    </p>
                    <div class="blog-text">
                    <?php the_excerpt(); ?>
              </div></a>
                  </div>
                  <div class="col-xs-12 col-md-3">
                    <p class="text-uppercase"><?php the_date('F j, Y'); ?><p>
                  </div>
                </div>
               <!-- Divider-->
          <div class="row">
          <div class="col-xs-12 col-sm-12"> 
          <hr></hr>
          </div>
          </div>
          <!-- /Divider-->
  <?php endwhile; ?>
  <?php endif; ?>              
                <!-- Pagination -->
                <div class="navigation">
                <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9">

<div><?php previous_posts_link( '<button type="button" class="btn btn-default btn-lg"><i class="fa fa-long-arrow-left fa-fw"></i> Newer posts </button>' ); ?></div>

      </div>
                <div class="col-xs-12 col-sm-3 older">
<div><?php next_posts_link( '<button type="button" class="btn btn-default btn-lg">Older posts <i class="fa fa-long-arrow-right fa-fw"></i></button>', '' ); ?></div>
                </div>
                </div>
                </div><!-- /Pagination -->
              </div>  
          </div> <!-- /row -->
      </div>  <!-- /container -->
  </div>
    </section><!-- /section blog -->

<?php get_footer(); ?>
