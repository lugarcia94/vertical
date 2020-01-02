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
            <div class="coments__date">
                <div class="data--coments">
                    <span><img src="<?php bloginfo('template_directory'); ?>/img/tempo.png"> <?php $post_date = get_the_date( 'd/m/Y' ); echo $post_date; ?></span>
                    <span class="last"><img src="<?php bloginfo('template_directory'); ?>/img/coments.png"> <?php comments_number('0', '1', '%'); ?> </span>
                </div>
 
                
                <div class="share">
                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ab2b1b5936742a9"></script>
                    <div class="addthis_inline_share_toolbox"></div>
                </div>
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
             
            <div class="comentarios__form">
                <h1>Comentários</h1>
                <?php comment_form(); ?>
                    <?php
                        $postID = $post->ID;
                        $comment_array = get_approved_comments($postID);
                        foreach ($comment_array as $comment) {
                            echo('<p class="coments-p">
                            <span class="comentario-autor">
                            <span class="autor-coment">' . $comment->comment_author . '</span>
                            <span class="date-coment">' . date('j-m-Y', strtotime($comment->comment_date)) . '</span> 
                            </span>
                            <span class="comentario-autor_text">' . $comment->comment_content . '</span></p>');
                        }
                    ?>
            </div>

        <?php endwhile; endif; ?>
    </div>
 

</div>

<?php get_footer(); ?>