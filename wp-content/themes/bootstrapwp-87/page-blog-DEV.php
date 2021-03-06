<?php
/**
 * Template Name: Blog DEV Page
 * Description: Page template to display blog posts
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="container">
 <!-- Masthead
 ================================================== -->
 <header class="jumbotron subhead" id="pagehead">
  <h4><?php the_title();?></h4>
</header>

<div class="row content">
  <div class="span8">
    <?php the_content();
    endwhile;
           // end of the loop
    wp_reset_query();
          // resetting the loop
    ?>
    
     <hr />
  </div><!-- /.span8 -->

<div class="container-fluid">

  <div class="row-fluid">
    <div class="span9">
    <?php
              // Blog post query
      query_posts( array( 'post_type' => 'post', 'category_name'=> 'blog') );
      if (have_posts()) : while ( have_posts() ) : the_post(); ?>
        <div class="ContactBox">
          <div class="AboutThumb">
            <?php // Checking for a post thumbnail
            if ( has_post_thumbnail() ) ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_post_thumbnail('thumbnail');?></a>
          </div>
          <div class="AboutText">
      	    <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h4><?php the_title();?></h4></a>
      	    <p class="meta"><?php echo bootstrapwp_posted_on();?></p>
            <?php the_excerpt();?>
          </div>
            <br/>
            <hr/>
        </div>
        
     <?php endwhile; endif; wp_reset_query(); ?>
     </div>
     
    <div class="span3">
      <div class="NewsWidget">
      <h5>Latest News</h5>
      <?php
              // Blog post query
      query_posts( array( 'post_type' => 'post', 'category_name'=> 'news', 'showposts'=>8) );
      if (have_posts()) : while ( have_posts() ) : the_post(); ?>
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
</div><!-- /.container-fluid -->
<?php get_footer();?>