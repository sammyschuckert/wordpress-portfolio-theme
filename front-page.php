<?php
get_header();
?>
<?php
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$headerimg = $thumb['0'];
?>
    <!-- Intro Header -->
    <header id="header" class="intro" style="background: #3399db url(<?=$headerimg?>) no-repeat bottom center scroll;   -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;">
        <div class="intro-body">
        <div class="scroll_down">
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                        </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                    <h2 class="intro-text">
                          I use methods like
                        </h2>
                            <h1 class="cd-headline letters type">
                            <span class="cd-words-wrapper waiting">
                              <b class="is-visible">Wireframing</b>
                              <b>UX-Maps</b>
                              <b>SWOT Analysis</b>
                              <b>Visual Thinking</b>
                              <b>Personas</b>
                              <b>Surveys</b>
                              <b>Prototyping</b>
                              <b>Sketching</b>
                              <b>Lean Startup</b>
                              <b>Storyboarding</b>
                              <b>Affinity Diagrams</b>
                              <b>Net Promoter Score</b>
                              <b>Scrum</b>
                              <b>Stakeholder Maps</b>
                              <b>Design Thinking</b>
                              <b>User Interviews</b>
                              <b>Observation</b>
                              <b>Usability Testing</b>
                              <b>BMC</b>
                              <b>Click Dummies</b>
                              <b>MVP</b>
                            </span>
                            </h1>

                        <h2 class="intro-text">
                          to solve problems
                        </h2>
                        </div>
                    </div>
                </div>
            </div>
    </header>

    <!-- About Section -->
    <section id="about" class="content-section">
    <div class="about-section">
    <div class="container">
        <div class="row">
              <div class="col-xs-12 col-sm-2"> 
                  <h3>About</h3>
              </div>
              <div class="col-xs-12 col-sm-10"> 
                <div class="row">
                  <div class="col-xs-12 col-sm-7">
                    <p>
                     Hi, I'm <a href="http://www.twitter.com/sammyschuckert" target="_blank">@sammyschuckert</a> a UX Designer at IBM, born and raised in Germany. I've made my M.A. in Strategic Design at the <a href="http://www.hfg-gmuend.de" target="_blank">HfG Schwäbisch Gmünd</a>, Germany (University of Applied Sciences).</p>
                      <p>I love Star Wars, Pixar and Disney movies, have a deep passion for technology and everything that's digital. I would describe myself as an advocate of the <a href="https://twitter.com/search?q=%23sharingeconomy" target="_blank">#sharingeconomy</a> and a part-time <a href="https://twitter.com/search?q=%23digitalnomad" target="_blank">#digitalnomad</a>.</p>
                      <p>My believe is that design methods have the ability to solve some of the biggest challenges we face in life.</p> 
                      <p>Current projects <a href="http://www.thangsapp.com/?utm_source=sammyschuckert_de&utm_medium=website" target="_blank">thangs – stuffsharing with friends</a> and <a href="https://www.dropsale.co/?utm_source=sammyschuckert_de&utm_medium=website" target="_blank">Dropsale</a>.
                    </p>
                  </div>
                  
                </div>
                <div class="row">
                <div class="col-xs-12 col-sm-12">
                <a href="http://www.sammyschuckert.de/download/sammy_schuckert_cv_161212.pdf" type="button" class="btn btn-default btn-lg" target="_blank"><i class="fa fa-file-pdf-o fa-fw"></i> Download CV</a>
                </div>
                </div>
              </div>  
          </div> <!-- /row -->
             </div>

              </div>  
    </section>

    <!-- Download Section -->
    <!-- Vita Section -->

 <section id="vita" class="content-section">
    <div class="vita-section">
      <div class="container">
             <div class="row">
              <div class="col-xs-12 col-sm-2"> 
                  <h3>Education</h3>
              </div>
              <div class="col-xs-12 col-sm-10"> 
                <div class="row">
                  <div class="col-xs-12 col-sm-7">
                    <h4 class="no-margin">
                      Master of Arts, Strategic Design
                    </h4>
                    <p>
                      <a href="http://www.hfg-gmuend.de/" target="_blank">Hochschule für Gestaltung Schwäbisch Gmünd</a>
                      <br>1.5 Years Course
                    </p>
                  </div>
                  <div class="col-xs-12 col-sm-5">
                    <p class="text-uppercase">March 2015 - February 2017<p>
                  </div>
                </div>
                  <div class="row">
                  <div class="col-xs-12 col-sm-7">
                    <h4>
                      Bachelor of Arts, Communication Design
                    </h4>
                    <p>
                      <a href="http://www.hfg-gmuend.de/" target="_blank">Hochschule für Gestaltung Schwäbisch Gmünd</a>
                      <br>3.5 Years Course
                    </p>
                  </div>
                  <div class="col-xs-12 col-sm-5">
                    <p class="text-uppercase date">October 2011 - February 2015<p>
                  </div>
                </div>

                  <div class="row">
                  <div class="col-xs-12 col-sm-7">
                    <h4>
                      Abitur (approximately equivalent to high school diploma)
                    </h4>
                    <p>
                      Technisches Gymnasium Wiesloch
                      <br>Vocational grammar school
                    </p>
                  </div>
                  <div class="col-xs-12 col-sm-5">
                    <p class="text-uppercase date">September 2007 - July 2010<p>
                  </div>
                </div>

                  <div class="row">
                  <div class="col-xs-12 col-sm-7">
                    <h4>
                      Mittlere Reife (approximately equivalent to secondary school leaving certificate)
                    </h4>
                    <p>
                      Realschule Wiesloch
                      <br>Scondary school
                    </p>
                  </div>
                  <div class="col-xs-12 col-sm-5">
                    <p class="text-uppercase date">September 2001 - July 2007<p>
                  </div>
                </div>

              </div>  
          </div> <!-- /row -->

          <!-- Divider-->
          <div class="row">
          <div class="col-xs-12 col-sm-12"> 
          <hr></hr>
          </div>
          </div>
          <!-- /Divider-->

          <div class="row">
              <div class="col-xs-12 col-sm-2"> 
                  <h3>Experience</h3>
              </div>
              <div class="col-xs-12 col-sm-10"> 
                <div class="row">
                  <div class="col-xs-12 col-sm-7">
                    <h4 class="no-margin">
                      UX Designer
                    </h4>
                    <a href="https://www.ibm.com/design/studio.shtml" target="_blank"><p>
                      IBM Deutschland Research & Development GmbH
                    </p></a>
                  </div>
                  <div class="col-xs-12 col-sm-5">
                    <p class="text-uppercase">March 2017 - TODAY<p>
                  </div>
                </div>
                  <div class="row">
                  <div class="col-xs-12 col-sm-7">
                    <h4 class="no-margin">
                      Co-Founder & CEO (Geschäftsführer)
                    </h4>
                    <a href="http://thangsapp.com" target="_blank"><p>
                      thangs GmbH – stuffsharing with friends
                    </p></a>
                  </div>
                  <div class="col-xs-12 col-sm-5">
                    <p class="text-uppercase">January 2016 - TODAY<p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-7">
                    <h4>
                      Internship, Communication Design
                    </h4>
                    <a href="http://echtweiss.de" target="_blank"><p>
                      echtweiß – Corporate & Editorial-Design
                    </p></a>
                  </div>
                  <div class="col-xs-12 col-sm-5">
                    <p class="text-uppercase date">September 2013 - February 2014<p>
                  </div>
                </div>

                   <div class="row">
                  <div class="col-xs-12 col-sm-7">
                    <h4>
                      Freelancer, Graphic Design
                    </h4>
                      <a href="http://die-wegmeister.com" target="_blank"><p>
                      die wegmeister gmbh
                    </p></a>
                  </div>
                  <div class="col-xs-12 col-sm-5">
                    <p class="text-uppercase date">October 2012 - July 2013<p>
                  </div>
                </div>

                  <div class="row">
                  <div class="col-xs-12 col-sm-7">
                    <h4>
                      Internship, Graphic Design
                    </h4>
                    <a href="http://die-wegmeister.com" target="_blank"><p>
                      die wegmeister gmbh
                    </p></a>
                  </div>
                  <div class="col-xs-12 col-sm-5">
                    <p class="text-uppercase date">June 2011 - July 2011<p>
                  </div>
                </div>

              </div>  
          </div> <!-- /row -->

                    <!-- Divider-->
          <div class="row">
          <div class="col-xs-12 col-sm-12"> 
          <hr></hr>
          </div>
          </div>
          <!-- /Divider-->


          <div class="row">

              <div class="col-xs-12 col-sm-2"> 
                  <h3>Awards</h3>
              </div>

              <div class="col-xs-12 col-sm-10"> 
                

                <div class="row">
                  <div class="col-xs-12 col-sm-7">
                  <a href="http://www.app-art-award.org/" target="_blank">
                    <img style="margin-bottom: 5px;" src="<?php bloginfo('template_url');?>/img/awards/AppArtAward_Logo2-sw.png">
                    </a>
                      
                    <h4 class="no-margin"><a href="http://www.rnz.de/nachrichten/wiesloch_artikel,-Der-Wieslocher-Sammy-Schuckert-holt-den-App-Art-Award-_arid,207586.html" target="_blank">
                      AppArtAward 2016 – Category Sharing</a>
                      </h4>
                      <p>
                      <a href="http://www.app-art-award.org/" target="_blank">ZKM Karlsruhe</a>
                    </p>
                  </div>
                  <div class="col-xs-12 col-sm-5">
                    <p class="no-margin text-uppercase date">July 2016<p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-7">
                  <a href="http://sharebw.de/share-economy-wettbewerb/" target="_blank">
                    <img style="margin-top:10px;" src="<?php bloginfo('template_url');?>/img/awards/logo_sharebw_s-sw.png">
                    </a>
                      
                    <h4 class="no-margin"><a href="http://sharebw.de/share-economy-wettbewerb/" target="_blank">
                       Landespreis – Impulsgeber für den digitalen Wandel</a></h4>
                      <p>
                      <a href="https://mwk.baden-wuerttemberg.de/fileadmin/redaktion/m-mwk/intern/dateien/Anlagen_PM/2015/103_PM_Preistraeger_Wettbewerb_Share_Economy.pdf" target="_blank">Ministerium für Wissenschaft, Forschung und Kunst</a>
                    </p>
                  </div>
                  <div class="col-xs-12 col-sm-5">
                    <p class="text-uppercase" style="margin-top: 10px;">November 2015<p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12 col-sm-7">
                  <a href="http://www.up.co/communities/germany/stuttgart" target="_blank">
                    <img style="margin-top:25px;" src="<?php bloginfo('template_url');?>/img/awards/sw-stgt-social-impact-2015-logo-sw.png">
                    </a>
                      
                    <h4 class="no-margin"><a href="https://www.facebook.com/100000480873382/posts/1103833682975984/" target="_blank">
                      Award for Best Pitch</a>
                      </h4>
                      <p>
                      <a href="http://www.up.co/communities/germany/stuttgart" target="_blank">Startup Weekend Stuttgart – Social Impact</a>
                    </p>
                  </div>
                  <div class="col-xs-12 col-sm-5">
                    <p class="text-uppercase date">March 2015<p>
                  </div>
                </div>

              </div>  
          </div> <!-- /row -->
      </div>  <!-- /container -->
  </div>
  </section>
  <!-- /Section Vita -->
  <!-- Section Porjects -->

<section id="projects" class="content-section">
    <div class="projects-section">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-12"> 
                  <h3>Projects</h3>
              </div>
            </div>
           <div class="row">
           <?php
$i=0;
$projects = array(
  'posts_per_page' => 9,
  'post_type' => 'page',
  'post_parent' => 13,
);
$posts = get_posts($projects);
foreach ( $posts as $post ) : setup_postdata( $post );
?>
<?php
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
$projectimg = $thumb['0'];
?>
<div id="project_no_<?php echo $i;?>" class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="display:none;">
                <div class="project_card">
                <a href="<?php the_permalink(); ?>">
                  <div class="img-container">
                    <img src="<?=$projectimg?>">
                  </div>
                  <div class="text-center">
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_subtitle(); ?></p>
                  </div>
                </a></div>
              </div>
          <?php
          $i++;
          endforeach;
          wp_reset_postdata();
          ?>
          <script type="text/javascript">
          	var max_projects=<?php echo sizeof($posts);?>
          </script> 
            </div><!-- /row --> 
                <div class="row">
                <div class="col-xs-12 col-sm-12">
                <button id="loadprojects" type="button" class="btn btn-default btn-lg center-block" data-toggle="alert">More Projects</button>
                </div>
                </div>
      </div>  <!-- /container -->
      </div>
    </section>
  <!-- /Section Projects -->

  <!-- Section Blog -->
    <section id="blog" class="content-section">
    <div class="blog-section">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-2"> 
                  <h3>Blogroll</h3>
              </div>
              <div class="col-xs-12 col-sm-10"> 
<?php
$i=0;
$posts = get_posts ( 'posts_per_page=2' );
foreach ( $posts as $post ) : setup_postdata( $post );
?>

                <div class="row">
                  <div class="col-xs-12 col-sm-7">
                    <a href="<?php the_permalink(); ?>"><h4 class="no-margin">
                      <?php the_title(); ?>
                    </h4>
                    <p>
                      <?php the_subtitle(); ?>
                    </p>
                    <div class="blog-text"><?php the_excerpt(); ?>
              </div></a>
                  </div>
                  <div class="col-xs-12 col-sm-5">
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

          <?php
          $i++;
          endforeach;
          wp_reset_postdata();
          ?> 
                <div class="row">
                <div class="col-xs-12 col-sm-12">
                <a href="/blog/"><button type="button" class="btn btn-default btn-lg">Read More</button></a>
                </div>
                </div>
              </div>  
          </div> <!-- /row -->
      </div>  <!-- /container -->
  </div>
    </section><!-- /section blog -->

<?php
get_footer();
?>