<?php get_header();?>
    <section>
        <div class="container">
            <?php if(have_posts()):?>
                <?php while(have_posts()):?>
                    <?php the_post();?><!--essa linha defiine os posts-->

                    <!--verificando se o post possui alguma mniatura, se tiver irá ser exibido-->
                    <article>
                        <?php if(has_post_thumbnail()): ?>
                            <a href="<?php the_permalink(); ?>"><!--exibe o link do post-->
                                <?php the_post_thumbnail('full', array('class'=>'post_miniatura'));?><!--o full ta especifiacndo que qeuro usar a imagem original, porem pode se alterada(no link configuracao ->midia tem outros tamanhos), logo depois pode ser definindo uma classe-->
                            </a>
                        <?php endif;?>

                        <h2><!--exibe o titulo do post-->
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                    </article>
                    

                <?php endwhile;?>
            <?php endif;?>
        </div>
        <?php get_sidebar();?>
    </section>

<?php get_footer();?>