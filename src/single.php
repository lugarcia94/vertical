<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package auaha
 */

get_header(); ?>
<div class="content container container__full">
    <div class="left--posts">
        <div class="tags__post">
        <?php
            if(get_the_tag_list()) {
                echo get_the_tag_list('<ul><li>','</li><li>','</li></ul>');
            }
        ?>
        </div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php $my_postid = $post->ID; ?>
            <div class="title__single">
                <?php the_title(); ?>
            </div>
 

            <div class="sobre__text">
                <?php  
                    $content_post = get_post($my_postid);
                    $content = $content_post->post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
                ?>
            </div>
        

        <?php endwhile; endif; ?>
    </div>
 

</div>

<?php get_footer(); ?>