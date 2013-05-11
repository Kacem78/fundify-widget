<?php
/**
 * Template Name: widget Page
 *
 * This should be used in conjunction with the Fundify plugin.
 *
 * @package Fundify
 * @since Fundify 1.0
 */
 
get_header('widget'); 

global $post;


$pageid = intval(get_query_var('pageid')); 
if (!isset($pageid)) exit();
			
$post = get_post($pageid);
if($post->post_type !== 'download') exit();

$campaign = atcf_get_campaign( $post );

$age = date( 'U' ) - get_post_time( 'U', true, $post );

// echo atcf_create_permalink( 'widget', get_permalink() );
 



?>
	<div id="content">
		<div class="container">
			<div id="projects">
				<section>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'item' ); ?>>
							<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'fundify' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark" target="_blank">
								<?php the_post_thumbnail( 'campaign' ); ?>
							</a>
	
							<h3 class="entry-title">
								<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'fundify' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark" target="_blank"><?php the_title(); ?></a>
							</h3>
	
								<div class="by_author"><?php printf( __( 'By %s', 'fundify' ), esc_attr( $campaign->author() ) ); ?></div>
	
							<?php echo get_excerpt_by_id($post->post_content); ?>

							<div class="post-meta campaign-meta">
									<div class="location"><?php echo $campaign->location(); ?></div>
							</div>

							<div class="digits">
								<ul>
									<li class="current_amount" ><?php printf( __( '<strong>%s</strong> Pledged', 'fundify' ), $campaign->current_amount() ); ?></li>
									<li class="percent_completed" ><?php printf( __( '<strong>%s</strong> Funded', 'fundify' ), $campaign->percent_completed() ); ?></li>
								</ul>
								<div class="bar"><span style="width: <?php echo $campaign->percent_completed(); ?>"></span></div>
								<ul>
									<li class="days_remaining"><?php printf( __( '<strong>%s</strong> Days to Go', 'fundify' ), $campaign->days_remaining() ); ?></li>
									<li class="backers_count"><?php printf( __( '<strong>%s</strong> Backers', 'fundify' ), $campaign->backers_count() ); ?></li>
								</ul>
							</div>
						</article>
					</section>
			</div>
		</div>
		<!-- / container -->
	</div>
	<!-- / content -->