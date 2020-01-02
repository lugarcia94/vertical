<div class="right--side">
            <div class="news__content">
                <div class="form__news"><?php echo do_shortcode('[wysija_form id="1"]'); ?></div>
                <img src="<?php bloginfo('template_directory'); ?>/img/bgnews.png" class="bg__news">
            </div>
            <div class="colunistas">
                <div class="colunista__flag">Nossos</div>
                <img src="<?php bloginfo('template_directory'); ?>/img/autores.png">

                <?php
                $args = array(
                'posts_per_page' => -1, 
                'orderby' => 'desc',
                'tax_query' => array(
                    array(
                    'taxonomy' => 'colunistas_category',
                    'field' => 'term_id',
                    'terms' => 23
                    )
                )
                );
                $wp_query = new WP_Query($args);
                if ($wp_query->have_posts()) {
                while ($wp_query->have_posts()) {
                    $wp_query->the_post();
                ?>

                <div class="colunista__post">
                    <div class="foto__colunita"><?php the_post_thumbnail(); ?></div>
                    <div class="info__colunista">
                        <div class="nome__colunista"><?php the_title(); ?></div>
                        <div class="desc__colunista"><?php the_field('descricao_curta'); ?></div>
                        <div class="social__colunista">

                        <?php 
                            $link = get_field('link_rede_social');
                            if( $link ): ?>
                                <a href="<?php echo $link['url']; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/in.png"></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="link__colunista">
                    <!-- <a href="<?php echo esc_url( get_permalink() ); ?>">Todos os posts de <?php the_title(); ?></a> -->
                </div>

                <?php } } ?>
            </div>

                    <div class="posts__lidos">
                    <span>Os posts mais lidos</span>
            <?php
                $args = array(
                'posts_per_page' => 3, 
                'order' => 'asc',
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
                

                <div class="post__info">
                    <div class="img_post">
                    <a href="<?php echo get_permalink($post->ID); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <div class="titulo_post">
                    <a href="<?php echo get_permalink($post->ID); ?>"><?php the_title(); ?></a>
                    </div>
                </div>
            </div>
            
            <?php 
                } }
            ?>

        </div>