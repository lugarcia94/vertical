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

<div class="content container container__full" id="solucoes">
    <h2 class="post__title-header">Nossos serviços e soluções</h2>
    <span>As melhores soluções e para empresas de diversos segmentos:</span>

    <ul class="service__block">
        <li>
            <img src="data:image/png;base64,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"/>
            <h3>Facilities/manutenção</h3>
            <span> • Sistemas elétricos</span>
            <span> • Sistemas hidrossanitários</span>
            <span> • Civil • Ar condicionado</span>
            <span> • Automação predial / industrial</span>
            <span> • Jardinagem / paisagismo</span>
        </li> 

        <li>
            <img src="data:image/png;base64,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"/>
            <h3>Engenharia (obras):</h3>
            <span>• Instalações elétricas</span>
            <span>• Instalações hidrossanitárias</span>
            <span>• Sistemas Especiais</span>
            <span>• Automação predial / industrial</span>
        </li>
    </ul>

    <a class="seemore" href="/saiba-mais">Saiba mais</a>
</div>

<div class="content container container__full">
    <h2 class="post__title-header">Nossos projetos </h2>
    <div class="left--posts">
    
    <?php
            $args = array(
            'posts_per_page' => 4, 
            'orderby' => 'desc',
            'paged'=>$paged,
            'post_type' => 'post',
            'cat' => 3
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
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="post__itens">
                    <h3 class="title__post"><?php the_title(); ?></h3>
                </div>
            </div>

        <?php } } ?>
        </div>
        </div>
</div>


<div class="content container container__full">
    <h2 class="post__title-header">Diferencias</h2>
    <span>As melhores soluções e para empresas de diversos segmentos:<span>
    <div class="left--posts">
    
    <?php
            $args = array(
            'posts_per_page' => 4, 
            'orderby' => 'desc',
            'paged'=>$paged,
            'post_type' => 'post',
            'cat' => 4
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
                    <div class="short__text"><?php echo $texto ?></div>
                    <a class="more__post" href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title(); ?>">LER +</a>

                </div>
            </div>

        <?php } } ?>


        </div>

        </div>

</div>

<?php get_footer(); ?>
