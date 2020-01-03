<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package auaha
 */

?>
    <footer id="footer">
        <div class="newsletter">
            <div class="container">
                <h1>Assine nossa newsletter</h1>
                <h2>Cadastre seu e-mail e receba nossas novidades.</h2>
                <div class="form--news">
                    <?php echo do_shortcode('[wysija_form id="1"]'); ?>
                </div>
            </div>
        </div>
        <span>Sun Auaha © 2020 - Todos os direitos reservados</span>
    </footer>
	</div><!-- #content -->

	
</div><!-- #page -->

<?php wp_footer(); ?>
 
<script>
    var slidebar_width  = 300; //slidebar width + padding size
    var slide_bar       = $(".side-menu-wrapper"); //slidebar
    var slide_open_btn  = $(".slide-menu-open"); //slidebar close btn
    var slide_close_btn = $(".menu-close"); //slidebar close btn
    var overlay         = $(".side-menu-overlay"); //slidebar close btn

    slide_open_btn.click(function(e){
        e.preventDefault();
        slide_bar.css( {"left": "0px"}); //change to "right" for right positioned menu
        overlay.css({"opacity":"1", "width":"100%"});
    });
    slide_close_btn.click(function(e){
        e.preventDefault();
        slide_bar.css({"left": "-"+ slidebar_width + "px"}); //change to "right" for right positioned menu
        overlay.css({"opacity":"0", "width":"0"});
    });

    $('.fullbanner__wrapper').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true
    });


</script>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

</body>
</html>
