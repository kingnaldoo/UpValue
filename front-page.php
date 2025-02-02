<?php get_header();?>

<main>
    <!------------------
    | Banner Inicial
    |------------------>
    <?php
        $args = array(
            'post_type' => 'textos_da_home',
            'name'      => 'banner-inicial',
        );
        $postr = new WP_Query($args);
        if($postr->have_posts()) : while ($postr->have_posts()) : $postr->the_post();
    ?>
    
    <section class="d-flex flex-column justify-content-center" id="banner">
        <div class="container mb-5">
            <div class="w-100">
                <h1 class="mb-3 f-neutral w-100"><?php echo get_field('tituloo'); ?></h1>
                <h4 class="mb-5 f-neutral"><?php echo get_field('subtitulo'); ?></h4>
                <a href="#contact">
                    <button class="neutral"><?php echo get_field('botao_cta'); ?></button>
                </a>
            </div>
        </div>
    </section>
    <?php endwhile; else: endif; wp_reset_postdata();?>
    

    <!------------------
    | Quem Somos
    |------------------>
    <?php
        $args = array(
            'post_type' => 'textos_da_home',
            'name'      => 'quem-somos',
        );
        $postr = new WP_Query($args);
        if($postr->have_posts()) : while ($postr->have_posts()) : $postr->the_post();
    ?>
    <section id="about">
        <div class="container py-5">
            <div class="row mb-5" id="info-about">
                <div class="col-12 col-md-6" id="info">
                    <div class="mb-3" id="category">
                        <div class="d-flex align-items-center">
                            <h4 class="me-3"><?php echo get_field('categoria_quem_somos'); ?></h4>
                            <hr class="w-25"> 
                        </div>
                    </div>

                    <h3 class="mb-4" id="title"><?php echo get_field('titulo_quem_somos'); ?></h3>

                    <p class="body">
                        <?php echo get_field('corpo_quem_somos'); ?>
                    </p>
                </div>

                <div class="col-12 col-md-6 p-3 d-flex justify-content-center justify-content-xl-end" id="image"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/team.jpg" alt="Equipe imagem">
                </div>
            </div>

            <div class="row text-center" id="concepts">
                <div class="col-12 col-md-4">
                    <div class="card-concepts pt-3 px-4 rounded-3">
                        <h4 class="mb-3 f-neutral">Missão</h4>
                        <p class="body-2 f-neutral">
                            <?php echo get_field('missao'); ?>
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card-concepts pt-3 px-4 rounded-3">
                        <h4 class="mb-3 f-neutral">Visão</h4>
                        <p class="body-2 f-neutral">
                            <?php echo get_field('visao'); ?>
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card-concepts pt-3 px-4 rounded-3">
                        <h4 class="mb-3 f-neutral">Valores</h4>
                        <ul class="row p-0">
                            <div class="col-6 col-md-12 col-xl-6 mb-0 d-flex flex-column align-items-start">
                                <li class="body-2 f-neutral"><?php echo get_field('valor1'); ?></li>
                                <li class="body-2 f-neutral"><?php echo get_field('valor2'); ?></li>
                            </div>

                            <div class="col-6 col-md-12 col-xl-6 d-flex flex-column align-items-start">
                                <li class="body-2 f-neutral"><?php echo get_field('valor3'); ?></li>
                                <li class="body-2 f-neutral"><?php echo get_field('valor4'); ?></li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; else: endif; wp_reset_postdata();?>


    <!------------------
    | Soluções
    |------------------>
    <?php
        $args = array(
            'post_type' => 'textos_da_home',
            'name'      => 'nossas-solucoes',
        );
        $postr = new WP_Query($args);
        if($postr->have_posts()) : while ($postr->have_posts()) : $postr->the_post();
    ?>
    <section id="solutions">
        <div class="container py-5">
            <div class="mb-5" id="category">
                <div class="d-flex align-items-center w-75">
                    <h4 class="me-3 f-neutral"><?php echo get_field('categoria_nossas_solucoes'); ?></h4>
                    <hr class="w-25 neutral"> 
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h3 class="mb-5 f-neutral" id="title"><?php echo get_field('titulo_nossas_solucoes'); ?></h3>
                </div>
            </div>

            <ul class="nav nav-tabs d-flex flex-column align-items-center flex-md-row justify-content-md-center mb-4 border-0" id="solutions-tab" role="tablist">
                <li class="nav-item d-flex justify-content-center border-0 mb-2" role="presentation">
                    <button class="nav-link border-0 rounded-0 active" id="varejo-tab" data-bs-toggle="tab" data-bs-target="#combos-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><h4>Varejo</h4></button>
                </li>

                <li class="nav-item d-flex justify-content-center border-0 mb-2" role="presentation">
                    <button class="nav-link border-0 rounded-0" id="distribuidoras-tab" data-bs-toggle="tab" data-bs-target="#process-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"><h4>Distribuidoras</h4></button>
                </li>

                <li class="nav-item d-flex justify-content-center border-0 mb-2" role="presentation">
                    <button class="nav-link border-0 rounded-0" id="telecom-tab" data-bs-toggle="tab" data-bs-target="#indicators-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false"><h4>ISP Telecom</h4></button>
                </li>
            </ul>

            <div class="tab-content" id="solutions-tab-content">
                <div class="tab-pane fade show active" id="combos-tab-pane" role="tabpanel" aria-labelledby="tab de combos" tabindex="0">
                    <div class="swiper swiper-solutions">
                        <div class="swiper-wrapper d-flex mb-2">
                            <div class="swiper-slide d-flex justify-content-center w-100">
                                <div class="card-solutions bg-neutral d-flex flex-column align-items-center text-center px-3 w-100 rounded-3">
                                    <div class="my-2 py-2  d-flex flex-column align-items-center">
                                        <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/process.svg" alt="">
                                        <h4>Processos</h4>
                                    </div>
                                    
                                    <div class="mb-2 ps-0">
                                        <p class="body-2"><?php echo get_field('varejo_processos'); ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide d-flex justify-content-center w-100">
                                <div class="card-solutions bg-neutral d-flex flex-column align-items-center text-center px-3 w-100 rounded-3">
                                    <div class="my-2 py-2  d-flex flex-column align-items-center">
                                        <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/up-combos.svg" alt="">
                                        <h4>UP Combos</h4>
                                    </div>

                                    <div class="mb-2 ps-0">
                                        <p class="body-2"><?php echo get_field('varejo_upcombos'); ?></p>
                                        <div class="collapse" id="varejo">
                                            <p class="body-2">
                                            <?php
                                                $varejo_combos = get_field('varejo_combos');
                                                if( $varejo_combos ): 
                                            ?>
                                            <?php foreach( $varejo_combos as $combo ): ?>
                                                <br><?php echo $combo; ?>
                                            <?php endforeach; ?> <?php endif; ?>
                                            </p>
                                        </div>
                                    </div>

                                    <button class="accordion-button shadow-none collapsed d-flex justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#varejo" aria-expanded="false" aria-controls="collapse">
                                        <p class="caption">Exibir mais</p>
                                    </button>
                                </div>
                            </div>

                            <div class="swiper-slide d-flex justify-content-center w-100">
                                <div class="card-solutions bg-neutral d-flex flex-column align-items-center text-center px-3 w-100 rounded-3">
                                    <div class="my-2 py-2  d-flex flex-column align-items-center">
                                        <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/indicators.svg" alt="">
                                        <h4>Gestão de indicadores</h4>
                                    </div>
                                    
                                    <div class="mb-2 ps-0">
                                        <p class="body-2"><?php echo get_field('varejo_gestao_de_indicadores'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-navigation w-100 d-flex justify-content-end d-xl-none">
                            <div class="swiper-button-prev me-3">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/prev.svg" alt="">
                            </div>
                            <div class="swiper-button-next">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/next.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="process-tab-pane" role="tabpanel" aria-labelledby="tab de processos" tabindex="0">
                    <div class="swiper swiper-solutions">
                        <div class="swiper-wrapper d-flex mb-2">
                            <div class="swiper-slide d-flex justify-content-center w-100">
                                <div class="card-solutions bg-neutral d-flex flex-column align-items-center text-center px-3 w-100 rounded-3">
                                    <div class="my-2 py-2  d-flex flex-column align-items-center">
                                        <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/process.svg" alt="">
                                        <h4>Processos</h4>
                                    </div>
                                    
                                    <div class="mb-2 ps-0">
                                        <p class="body-2"><?php echo get_field('distribuidoras_processos'); ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide d-flex justify-content-center w-100">
                                <div class="card-solutions bg-neutral d-flex flex-column align-items-center text-center px-3 w-100 rounded-3">
                                    <div class="my-2 py-2  d-flex flex-column align-items-center">
                                        <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/up-combos.svg" alt="">
                                        <h4>UP Combos</h4>
                                    </div>

                                    <div class="mb-2 ps-0">
                                        <p class="body-2"><?php echo get_field('distribuidoras_upcombos'); ?></p>
                                        <div class="collapse" id="varejo">
                                            <p class="body-2">
                                            <?php
                                                $distribuidora_combos = get_field('distribuidora_combos');
                                                if( $distribuidora_combos ): 
                                            ?>
                                            <?php foreach( $distribuidora_combos as $combo ): ?>
                                                <br><?php echo $combo; ?>
                                            <?php endforeach; ?> <?php endif; ?>
                                            </p>
                                        </div>
                                    </div>

                                    <button class="accordion-button shadow-none collapsed d-flex justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#varejo" aria-expanded="false" aria-controls="collapse">
                                        <p class="caption">Exibir mais</p>
                                    </button>
                                </div>
                            </div>

                            <div class="swiper-slide d-flex justify-content-center w-100">
                                <div class="card-solutions bg-neutral d-flex flex-column align-items-center text-center px-3 w-100 rounded-3">
                                    <div class="my-2 py-2  d-flex flex-column align-items-center">
                                        <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/indicators.svg" alt="">
                                        <h4>Gestão de indicadores</h4>
                                    </div>
                                    
                                    <div class="mb-2 ps-0">
                                        <p class="body-2"><?php echo get_field('distribuidoras_gestao_de_indicadores'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-navigation w-100 d-flex justify-content-end d-xl-none">
                            <div class="swiper-button-prev me-3">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/prev.svg" alt="">
                            </div>
                            <div class="swiper-button-next">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/next.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="indicators-tab-pane" role="tabpanel" aria-labelledby="tab de indicadores" tabindex="0">
                    <div class="swiper swiper-solutions">
                        <div class="swiper-wrapper d-flex mb-2">
                            <div class="swiper-slide d-flex justify-content-center w-100">
                                <div class="card-solutions bg-neutral d-flex flex-column align-items-center text-center px-3 w-100 rounded-3">
                                    <div class="my-2 py-2  d-flex flex-column align-items-center">
                                        <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/process.svg" alt="">
                                        <h4>Processos</h4>
                                    </div>
                                    
                                    <div class="mb-2 ps-0">
                                        <p class="body-2"><?php echo get_field('isp_telecom_processos'); ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide d-flex justify-content-center w-100">
                                <div class="card-solutions bg-neutral d-flex flex-column align-items-center text-center px-3 w-100 rounded-3">
                                    <div class="my-2 py-2  d-flex flex-column align-items-center">
                                        <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/up-combos.svg" alt="">
                                        <h4>UP Combos</h4>
                                    </div>

                                    <div class="mb-2 ps-0">
                                        <p class="body-2"><?php echo get_field('isp_telecom_upcombos'); ?></p>
                                        <div class="collapse" id="varejo">
                                            <p class="body-2">
                                            <?php
                                                $isp_telecom_combos = get_field('isp_telecom_combos');
                                                if( $isp_telecom_combos ): 
                                            ?>
                                            <?php foreach( $isp_telecom_combos as $combo ): ?>
                                                <br><?php echo $combo; ?>
                                            <?php endforeach; ?> <?php endif; ?>
                                            </p>
                                        </div>
                                    </div>

                                    <button class="accordion-button shadow-none collapsed d-flex justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#varejo" aria-expanded="false" aria-controls="collapse">
                                        <p class="caption">Exibir mais</p>
                                    </button>
                                </div>
                            </div>

                            <div class="swiper-slide d-flex justify-content-center w-100">
                                <div class="card-solutions bg-neutral d-flex flex-column align-items-center text-center px-3 w-100 rounded-3">
                                    <div class="my-2 py-2  d-flex flex-column align-items-center">
                                        <img class="mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/indicators.svg" alt="">
                                        <h4>Gestão de indicadores</h4>
                                    </div>
                                    
                                    <div class="mb-2 ps-0">
                                        <p class="body-2"><?php echo get_field('isp_telecom_gestao_de_indicadores'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-navigation w-100 d-flex justify-content-end d-xl-none">
                            <div class="swiper-button-prev me-3">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/prev.svg" alt="">
                            </div>
                            <div class="swiper-button-next">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/next.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; else: endif; wp_reset_postdata();?>
    

    <!------------------
    | Como atuamos
    |------------------>
    <?php
        $args = array(
            'post_type' => 'textos_da_home',
            'name'      => 'como-atuamos',
        );
        $postr = new WP_Query($args);
        if($postr->have_posts()) : while ($postr->have_posts()) : $postr->the_post();
    ?>
    <section class="position-relative" id="our-processes">
        <img class="position-absolute" id="pattern-roxo" src="<?php echo get_template_directory_uri(); ?>/assets/icons/pattern-roxo.svg"/>

        <div class="container py-5">
            <div class="row mb-3 justify-content-between" id="info-about">
                <div class="col-12 col-md-7" id="info">
                    <div class="mb-3" id="category">
                        <div class="d-flex align-items-center">
                            <h4 class="me-3"><?php echo get_field('categoria_como_atuamos'); ?></h4>
                            <hr class="w-25"> 
                        </div>
                    </div>

                    <h3 class="mb-3" id="title"><?php echo get_field('titulo_como_atuamos'); ?></h3>

                    <p class="body">
                        <?php echo get_field('corpo_como_atuamos'); ?>
                    </p>
                </div>

                <div class="col-12 col-md-5 col-xl-5 p-3 text-center d-flex justify-content-center justify-content-xl-end" id="image"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/processes.svg" alt="Nosso processo">
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; else: endif; wp_reset_postdata();?>
    

    <!------------------
    | Nossos parceiros
    |------------------>
    <?php
        $args = array(
            'post_type' => 'textos_da_home',
            'name'      => 'nossos-parceiros',
        );
        $postr = new WP_Query($args);
        if($postr->have_posts()) : while ($postr->have_posts()) : $postr->the_post();
    ?>
    <?php $args = array (
        'post_type' => 'parceiros',
        'orderby' => 'title',
        'order' => 'ASC',
    );
    $partners_query = new WP_Query($args); 
    if($partners_query->have_posts()) : ?>
        <section id="partners">
            <div class="container py-5">
                <div class="mb-4" id="category">
                    <div class="d-flex align-items-center">
                        <h4 class="me-3 f-neutral"><?php echo get_field('categoria_nossos_parceiros'); ?></h4>
                        <hr class="w-25 neutral"> 
                    </div>
                </div>

                <h3 class="mb-5 f-neutral" id="title"><?php echo get_field('titulo_nossos_parceiros'); ?></h3>

                <div class="swiper swiper-partners w-100 mb-3">
                    <div class="swiper-wrapper d-flex">
                        <?php while ($partners_query->have_posts()) : $partners_query->the_post(); ?>
                                <div class="swiper-slide d-flex justify-content-center">
                                    <?php 
                                        includeFile('components/card-partners.php', array(
                                            'imgUrl' => get_the_post_thumbnail_url($post->ID),
                                            'partner' => get_the_title($post->ID)
                                        ))
                                    ?>
                                </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php endwhile; else: endif; wp_reset_postdata();?>

    
    <!------------------
    | Nossos clientes - depoimentos
    |------------------>
    <?php
        $args = array(
            'post_type' => 'textos_da_home',
            'name'      => 'nossos-clientes',
        );
        $postr = new WP_Query($args);
        if($postr->have_posts()) : while ($postr->have_posts()) : $postr->the_post();
    ?>
    <?php $args = array (
        'post_type' => 'depoimentos',
        'orderby' => 'title',
        'order' => 'ASC',
    );
    $testimonial_query = new WP_Query($args);
    if($testimonial_query->have_posts()) : ?>
        <section class="position-relative" id="clients">
            <img class="position-absolute" id="pattern-azul" src="<?php echo get_template_directory_uri(); ?>/assets/icons/pattern-azul.svg"/>

            <div class="container py-5">
                <div class="row">
                    <div class="col-12 col-md-6" id="info-clients">
                        <div class="mb-4" id="category">
                            <div class="d-flex align-items-center">
                                <h4 class="me-3 "><?php echo get_field('categoria_nossos_clientes'); ?></h4>
                                <hr class="w-25"> 
                            </div>
                        </div>
                        <h3 class="mb-4" id="title"><?php echo get_field('titulo_dos_depoimentos'); ?></h3>
                    </div>
                </div>

                <div class="swiper swiper-testimonial w-100">
                    <div class="swiper-wrapper d-flex">
                        
                            <?php while ($testimonial_query->have_posts()) : $testimonial_query->the_post(); ?>
                                <div class="swiper-slide d-flex justify-content-center p-3">
                                    <?php 
                                        includeFile('components/card-testimonial.php', array(
                                            'testimonial' => get_the_content($post->ID),
                                            'imgUrl' => get_the_post_thumbnail_url($post->ID),
                                            'person' => get_the_title($post->ID),
                                            'location' => get_the_excerpt($post->ID)
                                        ))
                                    ?>
                                </div>
                        <?php endwhile; ?>
                        
                    </div>
                    <div class="swiper-pagination">

                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php endwhile; else: endif; wp_reset_postdata();?>

    
    <!------------------
    | Contato
    |------------------>
    <?php
        $args = array(
            'post_type' => 'textos_da_home',
            'name'      => 'contato',
        );
        $postr = new WP_Query($args);
        if($postr->have_posts()) : while ($postr->have_posts()) : $postr->the_post();
    ?>
    <section id="contact">
        <div class="container py-5">
            <div class="mb-4" id="category">
                <div class="w-50 d-flex align-items-center">
                    <h4 class="me-3 f-neutral"><?php echo get_field('categoria_contato'); ?></h4>
                    <hr class="w-25 neutral"> 
                </div>
            </div>

            <div class="row w-100 justify-content-center">
                <div class="col-12 col-lg-5" id="info-contact">
                    <h3 class="mb-4 f-neutral" id="title"><?php echo get_field('titulo_contato'); ?></h3>

                    <p class="body mb-5 f-neutral">
                        <?php echo get_field('corpo_contato'); ?>
                    </p>

                    <div class="w-100 px-0 ps-5">
                        <div class="d-flex justify-content-evenlyn">
                            <?php includeFile('assets/icons/Fornecedores.svg', array()); ?>

                            <?php includeFile('assets/icons/Inovação.svg', array()); ?>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-lg-7 d-flex justify-content-center px-0 ps-4" id="form">
                    <?php echo do_shortcode('[contact-form-7 id="7" title="Formulário de contato"]');?>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; else: endif; wp_reset_postdata();?>


    <script>
        $('.wpcf7-select').change(() => { 
            const segment = $('select[name="segment"]').val();
            const system = $('input[name="system"]').val();
            $('textarea').val(`Olá, sou uma empresa de ${segment}, utilizo um sistema ${system} e gostaria de realizar um orçamento`);
        });

        $("textarea").bind("input", function(e) {
            while( $(this).outerHeight() < this.scrollHeight +
                                        parseFloat($(this).css("borderTopWidth")) +
                                        parseFloat($(this).css("borderBottomWidth"))
                && $(this).height() < 100 // Altura máxima
            ) {
                $(this).height($(this).height()+1);
            };
        });
    </script>


    <!------------------
    | Blog
    |------------------>
    <?php
        $args = array(
            'post_type' => 'textos_da_home',
            'name'      => 'blog',
        );
        $postr = new WP_Query($args);
        if($postr->have_posts()) : while ($postr->have_posts()) : $postr->the_post();
    ?>
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
    );
    $relate_query = new WP_Query($args);
    if($relate_query->have_posts()) : ?>
        <section class="position-relative" id="blog">
            <img class="position-absolute" id="pattern-roxo" src="<?php echo get_template_directory_uri(); ?>/assets/icons/pattern-roxo.svg"/>

            <div class="container py-5">
                <div class="row" id="info-blog">
                    <div class="col-12 mb-4" id="info">
                        <div class="mb-4" id="category">
                            <div class="d-flex align-items-center">
                                <h4 class="me-3"><?php echo get_field('categoria_blog'); ?></h4>
                                <hr class="w-25"> 
                            </div>
                        </div>


                        <div class="w-100 d-flex flex-wrap">
                            <div class="col-12 col-md-8">
                                <h3 id="title"><?php echo get_field('titulo_blog'); ?></h3>
                            </div>

                            <div class="col-12 col-md-4 d-flex justify-content-end align-items-end">
                                <a href="<?php echo get_home_url(); ?>/category/geral" class="fw-normal">
                                    Acesse nosso Blog  >
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row gx-3 mt-3 ms-2" id="cards-blog"> 
                    <?php while ($relate_query->have_posts()) : $relate_query->the_post(); ?>
                        <div class="col-12 col-md-6 col-xl-4 pb-4 p-0">
                            <a href="<?php echo get_permalink();?>">
                                <?php 
                                    $titulo = '';
                                    if (strlen($post->post_title) > 36) {
                                        $titulo = substr(the_title($before = '', $after = '', FALSE), 0, 36) . '...'; } 
                                    else {
                                        $titulo= esc_html( get_the_title() );
                                    }

                                    /*------------------
                                    | Tempo de leitura
                                    |------------------*/
                                    $tempo = '';
                                    $content = get_post_field( 'post_content', $post->ID );
                                    $quantidade_palavras = str_word_count( strip_tags( $content ) );
                                    $tempo_leitura = ceil($quantidade_palavras / 250);
                                    if($tempo_leitura == 1){
                                        $tempo = $tempo_leitura." min de leitura";
                                    }
                                    else{
                                        $tempo = strval($tempo_leitura)." min de leitura";
                                    }

                                    includeFile('components/card-blog.php', array(
                                        'imgUrl' => $post->ID,
                                        'title' => $titulo,
                                        'author' => esc_html( get_the_author() ),
                                        'date' => get_the_date('d-m-Y'),
                                        'readingTime' => $tempo,
                                        'color' => '',
                                        'class' => 'dif'
                                    ));
                                ?>
                            </a>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif;?>
    <?php endwhile; else: endif; wp_reset_postdata();?>
</main>

<?php get_footer(); ?>