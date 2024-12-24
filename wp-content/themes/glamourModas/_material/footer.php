<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Tema_Dev_Gamb
 * @since Tema Dev-Gamb 1.0
 */

?>

</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->
<!-- <div class="faixaCorSecundaria"></div> -->

<footer class="site-footer" id="contato">
    <div class="container contato">
        <div class="row mb-0 d-flex align-items-start">


            <div class="gridIconsContatos col-grid col-xxl-5 col-xl-5 col-lg-12 col-md-12 col-sm-12 text-xl-start text-md-start text-center text-white">

                <?php $args = array(
                    'post_type' => 'conteudo',
                    'posts_per_page' => 1,
                    'order' => 'date',
                    'oderby' => 'DESC'
                );
                ?>
                <?php query_posts($args); ?>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post();
                    ?>
                        <h4 class="pb-2 fw-semibold"><?php echo wp_kses_post(get_field('titulo_esq_footer')); ?></h4>
                        <p class="py-2"><?php echo wp_kses_post(get_field('texto_antes_endereco')); ?></p>

                        <a class="py-2 d-flex align-items-center" target="_blank" href="<?php echo wp_kses_post(get_field('linkTelefone')); ?>">
                            <i class="fa-solid fa-headset"></i>
                            <?php echo wp_kses_post(get_field('numeroTelefone')); ?>
                        </a>
                        <!-- <a class="py-2 d-flex align-items-center" target="_blank" href="< ?php echo wp_kses_post(get_field('linkTelefone_2')); ?>">
                            < ?php echo wp_kses_post(get_field('numeroTelefone_2')); ?>
                        </a> -->
                        <a class="py-2 d-flex align-items-center" target="_blank" href="<?php echo wp_kses_post(get_field('linkWhatsapp')); ?>">
                            <i class="fab fa-whatsapp"></i>
                            <?php echo wp_kses_post(get_field('numeroWhatsapp')); ?>
                        </a>

                        <a class="py-2 d-flex align-items-center" target="_blank" href="mailto:<?php echo wp_kses_post(get_field('e-mail')); ?>">
                            <i class="far fa-envelope"></i>
                            <?php echo wp_kses_post(get_field('e-mail')); ?>
                        </a>
                        <a class="py-2 d-flex align-items-center w-80" target="_blank" href="<?php echo wp_kses_post(get_field('link-endereco')); ?>">
                            <i class="fa-regular fa-map"></i>
                            <?php echo wp_kses_post(get_field('endereco')); ?>
                        </a>



            </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            <div class="col-grid col-xxl-4 col-xl-3 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">

                <p><?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'footer',
                            'menu_class'      => 'menu-footer',
                            'container_class' => 'primary-menu-container',
                            'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
                            'fallback_cb'     => false,
                        )
                    );
                    ?>
                </p>

            </div>
                    <?php $args = array(
                        'post_type' => 'conteudo',
                        'posts_per_page' => 1,
                        'order' => 'date',
                        'oderby' => 'DESC'
                    );
                    ?>
                    <?php query_posts($args); ?>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post();
                        ?>
            <div class="col-grid col-xxl-3 col-xl-3 col-lg-12 col-md-12 col-sm-12 logoFooter">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo wp_kses_post(get_field('logomarca_rodape')); ?>" />
                </a>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>

                <?php get_template_part('template-parts/content/arquivo-redes-sociais'); ?>

            </div>
                    <?php $args = array(
                        'post_type' => 'conteudo',
                        'posts_per_page' => 1,
                        'order' => 'date',
                        'oderby' => 'DESC'
                    );
                    ?>
                    <?php query_posts($args); ?>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post();
                        ?>
                            <a class="btnWhatsAppFooter" target="_blank" href="<?php echo wp_kses_post(get_field('linkWhatsapp')); ?>">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a class="btnTop" href="#top">
                                <i class="fa-solid fa-arrow-up"></i>
                            </a>

        </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
    </div>
</footer>




</div>
<!-- #page -->




<div class="footerDesenvolvedor">
    <a href="<?php echo esc_url(home_url('/')); ?>"><?php echo get_bloginfo('name'); ?></a> | Copyright © 2024 - Todos os direitos reservados |
    Desenvolvido por <a href="https://gamberine.com.br" target="_blank">Gamberine Comunicação Digital</a>
</div>

<!-- <div class="modal fade modalTop">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
           
        </div>
	</div>
</div> -->
<?php wp_footer(); ?>

</body>

</html>