<?php 
/*
Template Name: Blog
*/
?>
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
                        <a class="nav-link js-scroll-trigger" href="#home"><span class='meulink' >Home</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services"><span class='meulink' >Serviços</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?php echo(get_template_directory_uri()) ?>/blog"><span class='meulink' >Blog</span></a>
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
                    <a href="#" class="btn btn-primary"><?php echo getContentHeaderByPostTitle($arrayOfConteudoLoop,'btn_simulacao'); ?></a>
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

    

    <hr class="featurette-divider">

    
<?php require_once('footer.php') ?> 