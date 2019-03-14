<?php
/*
 * Template Name: Custom Home Page
 * Description: A home page with featured slider and widgets.
 *
 * @package Formation
 * @since Formation 1.0
 */

get_header(); ?>
        
    <div class="flex-container">
              <div class="flexslider">
                <ul class="slides">
                <?php $the_query = new WP_Query(array(
				  'category_name' => 'featured', 'posts_per_page' => 3
				  ));
				?>
    			  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                  <li>
                    <?php the_post_thumbnail(); ?>
                    <div class="caption_wrap">
                    <div class="flex-caption">
                    <div class="flex-caption-title">
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                    </div>
                    <p><?php echo get_slider_excerpt(); ?>
                    <a href="<?php the_permalink() ?>">...</a></p>
                    </div>
                    </div>
                  </li>
                <?php
                    endwhile;
                ?>
                </ul>
              </div>
	</div>
    <div class="featuretext_middle">
    <div class="section group">
	<div class="col span_1_of_3">         
    <div class="featuretext">
      <?php if ( get_theme_mod( 'header-one-file-upload' ) ) : ?>
     		<a href="<?php echo esc_url( get_theme_mod( 'header_one_url' ) ); ?>"><img src="<?php echo esc_url( get_theme_mod( 'header-one-file-upload' ) ); ?>"  alt="feature one"></a>
      <?php else : ?>
      <?php echo '<h4>' . __('Insert Image', 'formation') . '</h4>'; ?>
      <?php endif; ?>
			 <h3><?php echo esc_html(get_theme_mod( 'featured_textbox_header_one' ) ); ?></h3>
             <p><?php echo esc_html(get_theme_mod( 'featured_textbox_text_one' ) ); ?></p>
	</div>
    </div>
    
    <div class="col span_1_of_3">         
     <div class="featuretext">
      <?php if ( get_theme_mod( 'header-two-file-upload' ) ) : ?>
     		<a href="<?php echo esc_url( get_theme_mod( 'header_two_url' ) ); ?>"><img src="<?php echo esc_url( get_theme_mod( 'header-two-file-upload' ) ); ?>"  alt="feature two"></a>
      <?php else : ?>
      <?php echo '<h4>' . __('Insert Image', 'formation') . '</h4>'; ?>
      <?php endif; ?>
			 <h3><?php echo esc_html(get_theme_mod( 'featured_textbox_header_two' ) ); ?></h3>
             <p><?php echo esc_html(get_theme_mod( 'featured_textbox_text_two' ) ); ?></p>
	</div>
    </div>
    
   <div class="col span_1_of_3">         
     <div class="featuretext">
      <?php if ( get_theme_mod( 'header-three-file-upload' ) ) : ?>
     		<a href="<?php echo esc_url( get_theme_mod( 'header_three_url' ) ); ?>"><img src="<?php echo esc_url( get_theme_mod( 'header-three-file-upload' ) ); ?>"  alt="feature three"></a>
      <?php else : ?>
      <?php echo '<h4>' . __('Insert Image', 'formation') . '</h4>'; ?>
      <?php endif; ?>
			 <h3><?php echo esc_html(get_theme_mod( 'featured_textbox_header_three' ) ); ?></h3>
             <p><?php echo esc_html(get_theme_mod( 'featured_textbox_text_three' ) ); ?></p>
	</div>
    </div>
    </div> 
    </div> 
    
     <div class="featuretext_top">
			 <h3><?php echo esc_html(get_theme_mod( 'featured_textbox' ) ); ?></h3>
             <p><?php echo esc_html(get_theme_mod( 'featured_textbox_text' ) ); ?></p>
	</div>  
        
        <div id="primary_home" class="content-area">
			<div id="content" class="fullwidth" role="main">
    
     <div class="section_thumbnails group">

  <?php $the_query = new WP_Query(array(
  'showposts' => 8,
  'post_type' => 'page',
  'meta_key' => 'home',
  'meta_value' => '1',
  'post__not_in' => get_option("sticky_posts"),
  ));
 ?>
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <div class="col span_1_of_4">
    <article class="recent">
    			<h2 class="recent_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                
                 <div class="view third-effect">
				<?php
			if ( has_post_thumbnail() ) {
    $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'featured' );
     echo '<img alt="post" class="imagerct" src="' . $image_src[0] . '">';
}
  			?>
            <div class="mask">  
   					 <a href="<?php the_permalink(); ?>" class="info">Full Image</a>  
 			</div>
    			 </div>
				<span class="fix-color"><?php echo content(9); ?></span>
                <div class="thumbs-more-link"><a href="<?php the_permalink() ?>"> Читать больше </a></div>
    </article>
    </div>	
		
	<?php endwhile; ?>
<style>
.fix-color p{color:#fff;}
</style>
    </div>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>

