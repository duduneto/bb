<?php require_once('header.php') ?>
<?php require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php'; ?>
<!-- <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?> -->
    <header class='header' style='background-image: url("<?php echo( get_header_image() ); ?>");' >
    <!-- <header class='header'> -->
        
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top main-navbar" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/"><span class='meulink' >Home</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#quem-somos"><span class='meulink' >Quem Somos</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?php echo(get_template_directory_uri()) ?>/blog"><span class='meulink' >Blog</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?php echo(get_template_directory_uri()) ?>/Contato"><span class='meulink' >Contato</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section id='home' class='container block-header'>
        
        <?php require_once('get-contents-functions.php'); ?>
            <div class="block text-center">
                <div class="block-body">
                    <h1 class="block-title"><?php echo getContentHeaderByPostTitle($arrayOfConteudoLoop,'main_header'); ?></h1>
                    <p class="block-text"><?php echo getContentHeaderByPostTitle($arrayOfConteudoLoop,'sub_header'); ?></p>
                    <p class="block-text"><?php echo getContentHeaderByPostTitle($arrayOfConteudoLoop,'sub_header_2'); ?></p>
                    <?php if(getContentHeaderByPostTitle($arrayOfConteudoLoop,'btn_simulacao')): ?>
                    <a href="#" class="btn btn-primary"><?php echo getContentHeaderByPostTitle($arrayOfConteudoLoop,'btn_simulacao'); ?></a>
                    <?php endif ?>
                </div>
            </div>
        </section>
    
        <!-- <section class="menu-area">
                <div class="container">
                    <nav class="main-navbar">
                        <div class="row">
                            <section class="logo col-md-2 col-12 text-center">Logo</section>
                            <nav class="menu col-md-10 text-right"><?php wp_nav_menu(
                            array(
                                'theme_location' => 'my_main_menu'
                            ) 
                            ); ?>
                            </nav>
                        </div>
                    </nav>
                </div>
            </section> -->
    </header>
    <!-- <article class='products'>
        <div class="main-products">
            <div class="row">
                <div class="product-1 col-md-4">
                    <div class="card-product">
                        <div class="card-body">
                            <div class="product-icon">
                                <i class="material-icons myicon">
                                time_to_leave
                                </i>
                            </div>
                            <div class="product-title">
                                <h3>Auto</h3>
                            </div>
                            <div class="card-content">
                                <span class='content-of-card' >Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-2 col-md-4">
                    <div class="card-product">
                        <div class="card-body">
                            <div class="product-icon">
                                <i class="material-icons myicon">
                                home
                                </i>
                            </div>
                            <div class="product-title">
                                <h3>Residência</h3>
                            </div>
                            <div class="card-content">
                                <span class='content-of-card' >Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-3 col-md-4">
                    <div class="card-product">
                        <div class="card-body">
                            <div class="product-icon">
                                <i class="material-icons myicon">
                                favorite_border
                                </i>
                            </div>
                            <div class="product-title">
                                <h3>Vida</h3>
                            </div>
                            <div class="card-content">
                                <span class='content-of-card' >Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article> -->

    <article class='products' id='quem-somos'>
        <div class="main-products">
            <div class="row">
                <div class="product-1 col-md-4">
                    <div class="card-product" style="width: auto;">
                            <div class="product-icon">
                                <i class="material-icons myicon">
                                time_to_leave
                                </i>
                            </div>
                            <?php
                                if(is_active_sidebar('main-card-1')){
                                    dynamic_sidebar('main-card-1');
                                }
                            ?>
                            
                    </div>
                </div>
                <div class="product-2 col-md-4">
                    <div class="card-product" style="width: auto;">
                            <div class="product-icon">
                                <i class="material-icons myicon">
                                home
                                </i>
                            </div>
                            <?php
                                if(is_active_sidebar('main-card-2')){
                                    dynamic_sidebar('main-card-2');
                                }
                            ?>
                    </div>
                </div>
                <div class="product-3 col-md-4">
                    <div class="card-product" style="width: auto;">
                            <div class="product-icon">
                                <i class="material-icons myicon">
                                favorite_border
                                </i>
                            </div>
                            <?php
                                if(is_active_sidebar('main-card-3')){
                                    dynamic_sidebar('main-card-3');
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <div class="quadro" id='banner-1'>
        <?php 
        wp_reset_query();
        echo(get_the_post_thumbnail_url($arrayOfSinglePageLoop[0]->ID));
        ?>
        <img class='banner-1' src="<?php echo(get_the_post_thumbnail_url($arrayOfSinglePageLoop[0]->ID)); ?>" alt="">
    </div>

    <section>
        
        <div class="more-options">
            
            <h2 class='title' style='margin-bottom:3em;' >Suas Vantagens</h2>

            <div class="card-group">
                <div class="row">
                    <div class="col-md-4 conteudo-card">
                        <div class="text-center image-of-service" >
                            <?php
                                if(is_active_sidebar('service-card-img-1')){
                                    dynamic_sidebar('service-card-img-1');
                                }
                            ?>
                        </div>
                        <?php
                            if(is_active_sidebar('service-card-1')){
                                dynamic_sidebar('service-card-1');
                            }
                        ?>
                    </div>
                    <div class="col-md-4 conteudo-card">
                        <div class="text-center image-of-service" >
                            <?php
                                if(is_active_sidebar('service-card-img-2')){
                                    dynamic_sidebar('service-card-img-2');
                                }
                            ?>
                        </div>
                        <?php
                            if(is_active_sidebar('service-card-2')){
                                dynamic_sidebar('service-card-2');
                            }
                        ?>
                    </div>
                    <div class="col-md-4 conteudo-card">
                        <div class="text-center image-of-service" >
                            <?php
                                if(is_active_sidebar('service-card-img-3')){
                                    dynamic_sidebar('service-card-img-3');
                                }
                            ?>
                        </div>
                        <?php
                            if(is_active_sidebar('service-card-3')){
                                dynamic_sidebar('service-card-3');
                            }
                        ?>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <script src="<?php echo(get_template_directory_uri())?>/js/adjustCardServices.js" ></script>
    <div class="quadro">
        <div class="jumbotron">
            <h1 class="display-4">JumboTron 2</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>

    <div class="modulo">
        <div class="title" style='margin-top:3em;margin-bottom:2em;' >
            <h2>Por que escolher Barros&Borges?</h2>
        </div>
        <div class="container">
            <div class="card mb-3 border-0">
                <div class="card-body">
                    <div class='why-icon float-right'>
                        <img class="card-img-top" src="<?php echo(get_template_directory_uri()) ?>/images/check.png" alt="Card image cap">
                    </div>
                    <div class="content">
                        <h5 class="card-title ">Card title</h5>
                        <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <div class="card mb-3 border-0">
                <div class="card-body">
                    <div class='why-icon float-right'>
                        <img class="card-img-top" src="<?php echo(get_template_directory_uri()) ?>/images/check.png" alt="Card image cap">
                    </div>
                    <div class="content">
                        <h5 class="card-title ">Card title</h5>
                        <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <div class="card mb-3 border-0">
                <div class="card-body">
                    <div class='why-icon float-right'>
                        <img class="card-img-top" src="<?php echo(get_template_directory_uri()) ?>/images/check.png" alt="Card image cap">
                    </div>
                    <div class="content">
                        <h5 class="card-title ">Card title</h5>
                        <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blog-container">
        <div class="blog-container-title title" style='margin-top:3em;margin-bottom:3em;' ><h2>Confira nossas Postagens</h2></div>
        <div class="card-group">
                <div class="row">
                    <div class="col-sm-4">
                    <div class="text-center">
                        <img class="card-img-top my-img" src="<?php echo(get_template_directory_uri()) ?>/images/blog1.jpg" alt="Card image cap">
                    </div>
                        <div class="card-body">
                        <h5 class="card-title title">Blog title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <a href="">Ler no Blog</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="text-center">
                        <img class="card-img-top my-img" src="<?php echo(get_template_directory_uri()) ?>/images/blog1.jpg" alt="Card image cap">
                    </div>
                        <div class="card-body">
                        <h5 class="card-title title">Blog title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <a href="">Ler no Blog</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="text-center">
                        <img class="card-img-top my-img" src="<?php echo(get_template_directory_uri()) ?>/images/blog1.jpg" alt="Card image cap">
                    </div>
                        <div class="card-body">
                        <h5 class="card-title title">Blog title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <a href="">Ler no Blog</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <div class="about-comments title" style='margin-top:3em;margin-bottom:3em;'>
        <h2>O que falam de nós</h2>
    </div>

    <div class="card-deck">
        <div class="card border-0">
            <div class="card border-0 mb-3 mx-auto" style="max-width: 18rem;">
                <div class="speech-bubble">
                    
                    <blockquote><p>This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p></blockquote>
                </div>
            </div>
            <div class="card-body">
            <div class="text-center">
                <img class="card-img-top rounded-circle img-comment-user" src="<?php echo(get_template_directory_uri()) ?>/images/img_avatar3.jpg" alt="Card image cap">
            </div>
            <p class="text-center"><small class="text-muted">Usuário da Silva</small></p>
            </div>
        </div>
        <div class="card border-0">
            <div class="card border-0 mb-3 mx-auto" style="max-width: 18rem;">
                <div class="speech-bubble">
                    
                    <blockquote><p>This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p></blockquote>
                </div>
            </div>
            <div class="card-body">
            <div class="text-center">
                <img class="card-img-top rounded-circle img-comment-user" src="<?php echo(get_template_directory_uri()) ?>/images/img_avatar3.jpg" alt="Card image cap">
            </div>
            <p class="text-center"><small class="text-muted">Usuário da Silva</small></p>
            </div>
        </div>
        <div class="card border-0">
            <div class="card border-0 mb-3 mx-auto" style="max-width: 18rem;">
                <div class="speech-bubble">
                    
                    <blockquote><p>This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p></blockquote>
                </div>
            </div>
            <div class="card-body">
            <div class="text-center">
                <img class="card-img-top rounded-circle img-comment-user" src="<?php echo(get_template_directory_uri()) ?>/images/img_avatar3.jpg" alt="Card image cap">
            </div>
            <p class="text-center"><small class="text-muted">Usuário da Silva</small></p>
            </div>
        </div>
    </div>

    <hr class="featurette-divider">

    
<?php require_once('footer.php') ?>


