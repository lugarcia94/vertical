
 <?php
 /**
  * The template for displaying all single posts
  *
  * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
  *
  * @package auaha
   * Template Name: contato
  */
 get_header(); ?>
<div class="contato--page container">
   <div class="banner_topo"><img src="<?php bloginfo('template_directory'); ?>/img/contato.png"></div>
   <div class="conteudo_contato">

      <div class="left">
        <div class="maps__contato">
          <div class="mapa_left">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3693.447173304599!2d-49.95339698510997!3d-22.22310611941887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bfd7474440cdc7%3A0x4febdc1fd77cbb4a!2sRevista+D+Mar%C3%ADlia!5e0!3m2!1spt-BR!2sbr!4v1520804948600" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <div class="info_contato">
            <span class="title_contato">Quaisquer dúvidas sobre os conteúdos do
              site, entre em contato com nossa redação:
            </span>

            <span class="item1">3221-0780</span>
            <span class="item2">(redação / comercial / administração)</span>
            <span class="item3">E-mails: </span>
            <span class="item4"><b>rodrigo@revistad.com.br</b>(redação)</span>
            <span class="item5"><b>branca@revistad.com.br</b>(administração)</span>
            <span class="item6">Avenida Santo Antonio, 114</span>
            <span class="item7">Marília-SP</span>

          </div>

        </div>

        <div class="form__contato">
          <span>Entre em contato</span>

          <?php echo do_shortcode('[contact-form-7 id="100" title="Contato"]'); ?>
        </div>
      </div>

      <div class="right">
     <div class="right_single">
            <div class="revistas__div">
                <span>Revistas</span>
                <div class="revistas--overflow">
                 <?php
                    $args = array(
                    'posts_per_page' => -1, 
                    'orderby' => 'desc',
                    'post_type' => 'post',
                    'category_name' => 'revistas'
                    );
                    $wp_query = new WP_Query($args);
                    if ($wp_query->have_posts()) {
                    while ($wp_query->have_posts()) {
                        $wp_query->the_post();
                ?>
                    <div class="img__revistas">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php } } ?>
                    </div>
                    <div class="assinar__revista">
                        <a href="<?php echo get_permalink(get_page_by_path('revistas')); ?>">
                            Assinar
                        </a>
                    </div>
            </div>
        <div class="banner__home">
          <?php
          $args = array(
          'posts_per_page' => 1, 
          'orderby' => 'desc',
          'post_type' => 'banner',
          'p' => '61'
          );
          $wp_query = new WP_Query($args);
          if ($wp_query->have_posts()) {
          while ($wp_query->have_posts()) {
              $wp_query->the_post();
          ?>
          <?php
          $image = get_field('imagem_banner');
          if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
          <?php } } ?>
        </div>
        <div class="colunista">
            <span>Colunistas</span>
                <?php
                    $args = array(
                    'posts_per_page' => 4, 
                    'orderby' => 'desc',
                    'post_type' => 'colunista'
                    );
                    $wp_query = new WP_Query($args);
                    if ($wp_query->have_posts()) {
                    while ($wp_query->have_posts()) {
                        $wp_query->the_post();
                ?>
                    <div class="colunista__item">
                        <div class="colunista__img">
                            <?php
                            $image = get_field('foto_colunista');
                            if( !empty($image) ): ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="colunista__info">
                            <span class="colunista__nome"><?php the_title(); ?></span>
                            <div class="colunista__desc"><?php the_field('descricao_colunista'); ?></div>
                            <a href="#">Ver mais matérias de <?php the_title(); ?></a>
                        </div>
                    </div>  
                <?php } } ?>
        </div>
      </div>
    </div>

   </div>
</div>
    <div class="container insta__news">
        <div class="insta">
            <span><img src="<?php bloginfo('template_directory'); ?>/img/insta_footer.png"> Siga nosso Insta</span>
        </div>
        <div class="news">
            <span>Fique por dentro</span>
            <p>Cadastre-se e receba todas as novidades</p>

            <div class="news_form">
                <input type="text" class="news_text" placeholder="Digite o seu e-mail">
                <input type="button" value="OK" class="botao_news">
            </div>

        </div>
    </div>
<?php get_footer(); ?>
