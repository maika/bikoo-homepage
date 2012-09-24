<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Default Page
 * Description: Page template with a content container and right sidebar
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php query_posts($query_string . '&cat=projects,-uncategorized'); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="row">
  <div class="container">
   <?php if (function_exists('bootstrapwp_breadcrumbs')) bootstrapwp_breadcrumbs(); ?>
   </div><!--/.container -->
   </div><!--/.row -->
 <!--    <div class="row"> -->

      
 <!-- Masthead ================================================== -->
 <!--     <header class="jumbotron subhead" id="overview"> -->
 <!--       <h1><?php the_title();?></h1> -->
 <!--     </header> -->
         
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span9">
				<div class="row-fluid">
					<ul class="thumbnails">
						<li class="span3">
							<div class="thumbnail">
								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
								<img src="<?php echo $url ?>" />
								<h3>Thumbnail label</h3>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<?php endwhile;?>
			<div class="span3">
				<?php
				if ( function_exists('dynamic_sidebar')) dynamic_sidebar("home-right");
				?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>