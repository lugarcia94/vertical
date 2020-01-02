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
 

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
                    <div class="post__container">
                    <div class="img__post">
                    <a href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>
                        <div class="container__post">
                            <div class="data--coments">
                                    <span><img src="<?php bloginfo('template_directory'); ?>/img/tempo.png"> <?php $post_date = get_the_date( 'd/m/Y' ); echo $post_date; ?></span>
                                    <span class="last"><img src="<?php bloginfo('template_directory'); ?>/img/coments.png"> <?php comments_number('0', '1', '%'); ?> </span>
                            </div>

                            <a href="<?php echo get_permalink($post->ID); ?>"><div class="title__post"><?php the_title(); ?></div></a>
                            <a href="<?php echo get_permalink($post->ID); ?>"><div class="desc__post"><?php the_field('descricao_curta'); ?></div></a>
                            <div class="tags__post">
                            <?php
                                if(get_the_tag_list()) {
                                echo get_the_tag_list('<ul><li>','</li><li>','</li></ul>');
                                }
                            ?>
                        </div>
                        </div>
                    </div>

                <?php endwhile; endif;?>
            </div>
        </main> 
    </div>
<?php get_footer(); ?>