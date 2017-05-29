<?php get_header(); 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 */

?>
  <!-- End Header Section -->
			<div class="post-area">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-8 col-sm-7">
                        
						<?php if ( have_posts() ) : ?>

							<?php if ( is_home() && ! is_front_page() ) : ?>
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>
							<?php endif; ?>

							<?php
							// Start the loop.
							while ( have_posts() ) : the_post();
								?>
									<div class="single-post single-post-full">
									  <div class="post-desk">
										<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										<span>Posted on <?php the_time('F jS, Y') ?> by <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a></span>
										<div class="post-social-area">
										  <ul class="post-social-list">
												  <li>
												  
												  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( get_the_permalink() )?>" target="_blank" class="pst-facebook share-btn facebook">
													<i class="fa fa-facebook"></i>
												  </a>
												  </li>
												  <li>
												  <a href="https://twitter.com/home?status=<?php echo esc_url( get_the_permalink() )?>" target="_blank" class="pst-twitter share-btn twitter">
													<i class="fa fa-twitter"></i>
												  </a>
												  </li>
												  <li>
												  <a href="https://plus.google.com/share?url=<?php echo esc_url( get_the_permalink() )?>" target="_blank" class="pst-google-plus share-btn google">
													<i class="fa fa-google-plus"></i>
												  </a>
												  </li>
												  <li>
												  <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url( get_the_permalink() )?>" target="_blank" class="pst-linkedin share-btn linkedin">
													<i class="fa fa-linkedin"></i>
												  </a>
												  </li>
											  </ul>
										</div><!-- end of "post-social-area" -->
									  </div><!-- end of "post-desk" -->
									  <div class="row">
										<figure class="col-lg-12 post-img">
										  <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail(); ?></a>
										</figure>
										<div class="col-lg-12 post-body">
										  <?php the_content(); ?>
										</div>
									  </div><!-- end of "row" -->
									</div><!-- end of "single-post" -->
							<nav>
                  <ul class="pagination">		
						<?php
							// End the loop.
							endwhile;

							// Previous/next page navigation.
							the_posts_pagination( array(
								'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
								'next_text'          => __( 'Next page', 'twentyfifteen' ),
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
							) );

						// If no content, include the "No posts found" template.


						endif;
						?>
						</ul>
                </nav>
                        

                      </div>
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
                </div>

    <!-- Start Footer Section -->
 <?php get_footer(); ?>