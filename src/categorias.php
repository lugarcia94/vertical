<?php
 /**
  * The template for displaying all single posts
  *
  * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
  *
  * @package auaha
   * Template Name: Categorias
  */
 get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="left--posts">
                <?php
                    $args = array(
                    'posts_per_page' => -1, 
                    'orderby' => 'desc',
                    'post_type' => 'post',
                    'category__not_in' => array( 7 ),
                    );
                    $wp_query = new WP_Query($args);
                    if ($wp_query->have_posts()) {
                    while ($wp_query->have_posts()) {
                        $wp_query->the_post();
                        $texto = get_the_content();
                        $texto = mb_strimwidth($texto, 0, 100, "...");
                ?>
                <div class="post__container">

                    <div class="post__itens">
                    <div class="img__post">
                        <a href="<?php echo get_permalink($post->ID); ?>">
                            <?php 

                            $image = get_field('capa_post');

                            if( !empty($image) ): ?>

                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                            <?php endif; ?>
                        </a>
                    
                    
                    </div>   
                    </div>
                    <div class="container__post">
                        <div class="data--coments">
                                <span><img src="<?php bloginfo('template_directory'); ?>/img/tempo.png"> <?php $post_date = get_the_date('j F Y'); echo $post_date; ?></span>
                                <span class="last"><img src="<?php bloginfo('template_directory'); ?>/img/coments.png"> <?php comments_number('0', '1', '%'); ?> </span>
                        </div>

                        <a href="<?php echo get_permalink($post->ID); ?>"><div class="title__post"><?php the_title(); ?></div></a>
                        <a href="<?php echo get_permalink($post->ID); ?>"><div class="desc__post"><?php echo $texto; ?></div></a>
                        <div class="tags__post">
                        <ul>
                            <li>E-commerce</li>
                            <li>Melhorias</li>
                        </ul>
                    </div>
                    </div>
                </div>

                <?php } } ?>
            </div>
        </main>
        <?php include('components/abas.php'); ?>
    </div>
<?php get_footer(); ?>