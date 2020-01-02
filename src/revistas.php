 <?php
 /**
  * The template for displaying all single posts
  *
  * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
  *
  * @package auaha
   * Template Name: Revistas
  */
 get_header(); ?>


    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <div class="container">
                <div class="row">
                    <div class="category__page">

			<div class="container " style="margin-top: 50px;">
            <div class="row search-page revista__lista">
	             <?php
	                $args = array(
	                'posts_per_page' => -1, 
	                'order' => 'asc',
	                'post_type' => 'post',
	                'category_name' => 'revistas'
	                );
	                $wp_query = new WP_Query($args);
	                if ($wp_query->have_posts()) {
	                while ($wp_query->have_posts()) {
	                    $wp_query->the_post();
	            ?>
                    <div class="conteudo-post">
                        <div class="foto-conteudo-post"><a
                                    href="<?php echo get_permalink($post->ID); ?>"><?php the_post_thumbnail(); ?></a>
                        </div>
                        <div class="titulo-conteudo-post"><p><a
                                        href="<?php echo get_permalink($post->ID); ?>"><? the_title(); ?></a>
                      		</p>
                   	 	</div>
               	 	</div>
                    
                <?php } } ?>
            



        </main>
    </div>

 <?php get_footer(); ?>