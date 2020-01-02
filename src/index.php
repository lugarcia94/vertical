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
<div class="full__banner">
    <?php 
    $args = array( 'post_type' => 'banners', 'posts_per_page' => 5 );
    $loop = new WP_Query( $args );
    ?>
    <div class="fullbanner__wrapper">
    <?php
        while ( $loop->have_posts() ) : $loop->the_post();
 
            ?>
            <a href="<?php the_field('link') ?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail();?>
            </a>
            
        <?php endwhile; ?>
    </div>
</div>
<div class="content container container__full">
    <h2 class="post__title-header">Destaques</h2>
    <div class="left--posts">
    
    <?php
            $args = array(
            'posts_per_page' => 4, 
            'orderby' => 'desc',
            'paged'=>$paged,
            'post_type' => 'post',
            'cat' => 25
            );
            $wp_query = new WP_Query($args);
            if ($wp_query->have_posts()) {
            while ($wp_query->have_posts()) {
                $wp_query->the_post();
                $texto = get_the_content();
                $texto = mb_strimwidth($texto, 0, 100, "...");
        ?>
            <div class="post__container">
                <div class="img__post">
                    <a href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>
                <div class="post__itens">
                    <a href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title(); ?>"><h3 class="title__post"><?php the_title(); ?></h3></a>
                    <a href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title(); ?>"><div class="desc__post"><?php the_field('descricao_curta'); ?></div></a>
                    <div class="tags__post">
                    <?php
                        if(get_the_tag_list()) {
                            echo get_the_tag_list('<ul><li>','</li><li>','</li></ul>');
                        }
                    ?>
                    </div>
                    
                    <div class="data--coments">
                        <span><img src="<?php bloginfo('template_directory'); ?>/img/tempo.png"> <?php $post_date = get_the_date( 'd/m/Y' ); echo $post_date; ?></span>
                        <span class="last"><img src="<?php bloginfo('template_directory'); ?>/img/coments.png"> <?php comments_number('0', '1', '%'); ?> </span>
                    </div>

                </div>
            </div>

        <?php } } ?>
        </div>
        </div>
</div>


<div class="content container container__full">
    <h2 class="post__title-header">Últimas postagens</h2>
    <div class="left--posts">
    
    <?php
            $args = array(
            'posts_per_page' => 4, 
            'orderby' => 'desc',
            'paged'=>$paged,
            'post_type' => 'post'
            );
            $wp_query = new WP_Query($args);
            if ($wp_query->have_posts()) {
            while ($wp_query->have_posts()) {
                $wp_query->the_post();
                $texto = get_the_content();
                $texto = mb_strimwidth($texto, 0, 100, "...");
        ?>
            <div class="post__container">
                <div class="img__post">
                    <a href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>
                <div class="post__itens">
                    <a href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title(); ?>"><h3 class="title__post"><?php the_title(); ?></h3></a>
                    <a href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title(); ?>"><div class="desc__post"><?php the_field('descricao_curta'); ?></div></a>
                    <div class="tags__post">
                    <?php
                        if(get_the_tag_list()) {
                            echo get_the_tag_list('<ul><li>','</li><li>','</li></ul>');
                        }
                    ?>
                    </div>
                    
                    <div class="data--coments">
                        <span><img src="<?php bloginfo('template_directory'); ?>/img/tempo.png"> <?php $post_date = get_the_date( 'd/m/Y' ); echo $post_date; ?></span>
                        <span class="last"><img src="<?php bloginfo('template_directory'); ?>/img/coments.png"> <?php comments_number('0', '1', '%'); ?> </span>
                    </div>

                </div>
            </div>

        <?php } } ?>
 

        </div>
 
        </div>

</div>

<?php get_footer(); ?>
