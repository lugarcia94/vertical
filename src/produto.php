
 <?php
 /**
  * The template for displaying all single posts
  *
  * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
  *
  * @package auaha
   * Template Name: produto
  */
 get_header(); ?>

 <div class="container showcase--full">
     <div class="row">
         <!-- Include showcase -->
         <div class="showcase--header">Nossos produtos</div>
             <div class="show-case--content">
                 <ul class="produto--estatica">

                     <?php
                             $args = array(
                                 'posts_per_page' => -1, // -1 Mostrar todos
                                 'orderby' => 'rand',
                                 'post_type' => 'produto'
                             );

                             $wp_query = new WP_Query($args);
                             if ($wp_query->have_posts()) {
                                 while ($wp_query->have_posts()) {
                                     $wp_query->the_post();
                     ?>

                     <li>

                         <div class="show-case_img">
                             <?php
                                 $image = get_field('foto_principal_do_produto');
                                 if( !empty($image) ): ?>
                                     <a href="<?php echo esc_url( get_permalink() ); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
                             <?php
                                 endif;
                             ?>
                         </div>

                         <div class="show-case_title">
                             <a href="<?php echo esc_url( get_permalink() ); ?>">
                                 <?php the_title(); ?>
                             </a>
                         </div>

                         <div class="show-case_short-description">
                             <a href="<?php echo esc_url( get_permalink() ); ?>">
                                 <?php the_field('descricao_curta'); ?>
                             </a>
                         </div>

                         <div class="show-case_button">
                             <?php
                             $link = get_field('link_externo');
                             if( $link ): ?>
                              <a href="<?php echo $link['url']; ?>" target="_blank">Comprar online</a>
                             <?php endif; ?>
                         </div>

                     </li>
                     <?php } } ?>

                 </ul>
                 <hr>

             </div>

     </div>
 </div>

 <!-- Include newsletter -->
 <?php include('components/newsletter.php'); ?>
 <?php get_footer(); ?>
