<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package auaha
 */

get_header(); ?>

   <div class="content container container__full">

    <div class="left--posts">
    <?php
           if (have_posts()) : ?>
           <?php

           while (have_posts()) : the_post(); ?>
            <div class="post__container">
                <div class="img__post">
                <a href="<?php echo get_permalink($post->ID); ?>"><?php the_post_thumbnail(); ?></a>
                </div>
                <div class="post__itens">
                    <a href="<?php echo get_permalink($post->ID); ?>"><div class="title__post"><?php the_title(); ?></div></a> 
                    <a href="<?php echo get_permalink($post->ID); ?>"><div class="desc__post"><?php echo $texto; ?></div></a>
                    <div class="tags__post">
                    <?php
                        if(get_the_tag_list()) {
                            echo get_the_tag_list('<ul><li>','</li><li>','</li></ul>');
                        }
                    ?>
                    </div>
                    <div class="data--coments">
                            <span><img src="<?php bloginfo('template_directory'); ?>/img/tempo.png"> <?php $post_date = get_the_date('j F Y'); echo $post_date; ?></span>
                            <span class="last"><img src="<?php bloginfo('template_directory'); ?>/img/coments.png"> <?php comments_number('0', '1', '%'); ?> </span>
                    </div>
                </div>
            </div>

       <?php endwhile; ?>
            <?php else : ?>
            <div class="sorry"><p>Desculpe, não encontramos o que você procura =( </p></div>
            <?php endif; ?>
        </div>
 
        </div>

</div>
</div>

<?php
get_footer();
