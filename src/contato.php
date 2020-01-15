
 <?php
 /**
  * The template for displaying all single posts
  *
  * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
  *
  * @package auaha
   * Template Name: contato
  */
 get_header(); ?>

<div class="content container container__full">
    <div class="left--posts">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php $my_postid = $post->ID; ?>
            <div class="title__single">
                <?php the_title(); ?>
            </div>

            <div class="sobre__text">
                <?php echo do_shortcode('[contact-form-7 id="72" title="Formulário de contato 1"]'); ?>
            </div>
        
        <?php endwhile; endif; ?>
    </div>
 

</div>
<?php get_footer(); ?>
