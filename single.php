<?php get_header(); ?>
  <article class="single-pst-pg-area p-l-15 p-r-15">
  <div class="featue-img text-center"><?php echo the_post_thumbnail(); ?></div>
                  <div class="container">

                    <div class="row">
                      <div class="col-md-8 col-sm-7">
                                <div class="single-pst-cont">
									  <?php
										// Start the loop.
										while ( have_posts() ) : the_post();
											?>
											 <h4><?php the_title(); ?></h4>
											<?php the_content(); ?>
											<?php
											

											// End the loop.
										endwhile;
										?>

                                  
                                </div><!-- end of "single-pst-cont" -->

                                <!-- <div class="single-home-feature">
                                    <h5>Bel Air Quick Facts:</h5>
                                    <ul>
                                        <li>Population of about 8,000 people</li>
                                        <li>10 square miles in size</li>
                                        <li>Represented by ZIP code 90077</li>
                                        <li>Split into Upper Bel Air and Lower Bel Air districts</li>
                                        <li>Bordered to the west by <a href="#">Brentwood</a>, to the south by Westwood, to the east by Beverly Hills Post Office and to the north by Sherman Oaks and the Santa Monica foothills</li>
                                    </ul>
                                </div> --><!-- end of "single-home-feature" -->

                      </div><!-- end of col-md-8 col-sm-7 -->


                      <div class="col-md-4 col-sm-5">
                        <aside class="blog-right-area">
                          <span><a href="#">View our newsletter</a></span>
                          <h3>Let’s Connect Over Social</h3>
                          <div class="blog-right-social-area blog-border">
                            <ul class="social-icon-list">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                          </div>
                          <h3>Recent Posts</h3>
                          <div class="recent-post-area blog-border">
                            <ul class="recent-post-list">
                              <li><a href="#">Denver Springtime Gardening Idea’s</a></li>
                              <li><a href="#">THANK YOU VARIETY MAGAZINE</a></li>
                              <li><a href="#">WATCH TONIGHT: HOMEGROWN: THE COUNTER-TERROR DILEMMA</a></li>
                              <li><a href="#">INTERVIEW OF A FREED IRANIAN PRISONER</a></li>
                              <li><a href="#">JUST LISTED: BEVERLY HILLS TROUSDALE ESTATE</a></li>
                            </ul>
                          </div>
                          <h3>Categories</h3>
                          <div class="categori-area blog-border">
                            <ul class="categori-list">
                              <li><a href="#">Activites in Denver</a></li>
                              <li><a href="#">Activites in Highlands</a></li>
                              <li><a href="#">Blog</a></li>
                              <li><a href="#">Highlands</a></li>
                              <li><a href="#">Highlands Real Estate</a></li>
                              <li><a href="#">Homes in the Highlands</a></li>
                              <li><a href="#">Neighborhoods</a></li>
                            </ul>
                          </div>
						  <?php dynamic_sidebar( 'sidebar_right_blog' ); ?>
                        </aside><!-- End of "blog-right-area" -->
                      </div>

                    </div><!-- end of "row" -->
                  </div><!-- end of "container-fluid" -->
                </article>
  <?php get_footer(); ?>