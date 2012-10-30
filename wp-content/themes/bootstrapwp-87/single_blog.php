<?php
/**
 * The template for displaying all posts.
 *
 * Blog Template
 *
 * Page template with a fixed 940px container and right sidebar layout
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="container">
<div class="row">
  <div class="container">
   <?php if (function_exists('bootstrapwp_breadcrumbs')) bootstrapwp_breadcrumbs(); ?>
   </div><!--/.container -->
   </div><!--/.row -->
   
   <div class="container-fluid">
     <div class="row-fluid">
       <div class="span1"></div>
       <div class="span8">
         <div class="blog-head">
           <?php the_post_thumbnail('bikoo-hero', array('onload' => "OnImageLoad(event);"));?>
         </div>
     <!-- Masthead
      ================================================== -->
         <header class="jumbotron subhead" id="singlehead">
            <h4><?php the_title();?></h4>
         </header>
         <p class="meta"><?php echo bootstrapwp_posted_on();?></p>
            <?php the_content();?>
            <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
			<?php endwhile; wp_reset_query(); // end of the loop reset query. ?>
		<hr />
			
            <?php related_links()?>
		    <?php comments_template(); ?>
       </div>
       <div class="span3">
         <div class="NewsWidget">
           <h5>Latest Posts</h5>
           <!--/awesome code to exclude current post from the query, delivering all posts from current category -->
           <?php
           global $wp_query;
           $cat_ID = get_the_category($post->ID);
           $cat_ID = $cat_ID[0]->cat_ID;
           $this_post = $post->ID;
           query_posts(array('cat' => $cat_ID, 'post__not_in' => array($this_post), 'showposts' => 8));
           if (have_posts()) : while ( have_posts() ) : the_post(); 
           ?>
           <div class="NewsSide">
             <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h6><?php the_title();?></h6></a>
             <?php echo shortcontent(30,80);?>
           </div>
           <div class="NewsTime">
             <p><?php echo bootstrapwp_posted_on();?></p>
           </div>
           <?php endwhile; endif; ?>
         </div>
       </div>
     </div>
   </div>
   <?php get_footer(); ?>