
 <?php
 /**
  * The template for displaying all single posts
  *
  * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
  *
  * @package auaha
   * Template Name: blog
  */
 get_header(); ?>


<div class="container blog">

    <?php
        $args = array(
            'posts_per_page' => -1, // -1 Mostrar todos
            'order' => 'desc',
            'post_type' => 'post',
            'category_name' => 'blog'
        );

        $wp_query = new WP_Query($args);
        if ($wp_query->have_posts()) {
            while ($wp_query->have_posts()) {
                $wp_query->the_post();
                $texto = get_the_content();
                $texto = mb_strimwidth($texto, 0, 100, "...");
    ?>

        <div class="container--post">
            <div class="post--imagem"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_post_thumbnail(); ?></a></div>
            <div class="info-post">
                <div class="post--title"><a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a></div>
                <div class="description"><a href="<?php echo get_permalink($post->ID); ?>"><?php echo $texto; ?></a></div>
                <div class="dados-post">
                    <div class="data--coments">
                        <span><img src="<?php bloginfo('template_directory'); ?>/img/tempo.png"> <?php the_time('d/m/Y') ?></span>
                        <span class="last"><img src="<?php bloginfo('template_directory'); ?>/img/coments.png"> <?php comments_number('0', '1', '%'); ?> </span>
                    </div>
                    <div class="author"><?php $author = get_the_author(); echo "por ".$author;?></div>
                </div>
            </div>
        </div>

    <?php } } ?>
</div>
 <!-- Include newsletter -->
 <?php include('components/newsletter.php'); ?>
 <?php get_footer(); ?>
