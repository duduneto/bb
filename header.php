<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css"> -->
    <link rel='stylesheet' href='<?php echo(get_template_directory_uri()) ?>/style.css' />
    <!-- <link rel='stylesheet' href='<?php echo(get_template_directory_uri()) ?>/one-page-style.php' /> -->
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    
    
    
    <title>Corretora</title>
</head>

<style>
html{
    max-width: 100vw;
    overflow-x: hidden;
}
body{
    max-width: 100vw;
    overflow-x: hidden;
    overflow-y: hidden;
}

.my-header{
    height: 50px;
    width: 100%;
    /* background-image: url("images/header2.png"); */
    background-repeat:no-repeat;
    -webkit-background-size:cover;
    -moz-background-size:cover;
    -o-background-size:cover;
    background-size:cover;
    background-position:center;
    /* margin-left: 10vw; */
    /* margin-top: 10vw; */
    margin-bottom: 2em;
}
.my-main-navbar{
    padding-top: 0.2em;
    padding-bottom: 1em;
    background-color: #002851;
    margin-bottom: 3em;
}
.nav-item{
  padding-right: 5vw;
}

.nav-item a:hover, .main-logo a:hover{
    background-color:#ffffff00;
}
</style>
<body>

<?php require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php'; ?>
<!-- <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?> -->
    <header class='my-header' id='header'  >
    <!-- <header class='header'> -->
        <div class="navmenu">
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top my-main-navbar" id="mainNav">
                <div class="container main-logo" id='my-main-menu'>
                    <a class="navbar-brand js-scroll-trigger" href="/">
                        <?php 
                            if(dynamic_sidebar('logo')){
                                
                            }
                        ?>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style='margin-right: 2em;'>
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <!-- <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto" id='mynav' > -->
                            <!-- <?php
                            $args = array(
                                
                                'post_type' => 'page'
                            ); 

                            $pagesLoop = get_pages($args);
                            // var_dump($pagesLoop[1]);
                            foreach ($pagesLoop as $page) {?>
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="<?php echo(get_page_link($page->ID)); ?>"><span class='meulink' ><?php echo($page->post_title); ?></span></a>
                                </li>
                            <?php    
                            }
                            ?> -->
                            <?php wp_nav_menu(
                            array(
                                'theme_location' => 'my_main_menu'
                            ) 
                            ); ?>
                            <!-- <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#home" data-toggle="collapse" data-target="#navbarResponsive"><span class='meulink' >Home</span></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#services" data-toggle="collapse" data-target="#navbarResponsive"><span class='meulink' >Serviços</span></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#blog" data-toggle="collapse" data-target="#navbarResponsive" ><span class='meulink' >Blog</span></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contato" data-toggle="collapse" data-target="#navbarResponsive" ><span class='meulink' >Simule</span></a>
                            </li> -->
                        <!-- </ul>
                    </div> -->
                </div>
            </nav>
        </div>
        
            
        
        <!-- <section id='home' class='container block-header'>
        
        
            <div class="block text-center">
                <div class="block-body">
                    <h1 class="block-title" style='font-weight:500;font-size:5em;color: <?php echo(get_post_meta($header->ID)['text-color-metabox'][0]) ?>' ><?php echo( get_post_meta($header->ID)['title-metabox'][0]); ?></h1>
                    <p class="block-text" style='color: <?php echo(get_post_meta($header->ID)['text-color-metabox'][0]) ?>'><?php echo( get_post_meta($header->ID)['sub-title-metabox'][0]); ?></p>
                    <p class="block-text" style='color: <?php echo(get_post_meta($header->ID)['text-color-metabox'][0]) ?>'><?php echo( get_post_meta($header->ID)['content-metabox'][0]); ?></p>
                    <?php if(get_post_meta($header->ID)['header-btn-metabox'][0]): ?>
                    <a href="<?php echo( get_post_meta($header->ID)['header-btn-link-metabox'][0]); ?>" class="btn btn-primary" id='btn-simulation' ><?php echo( get_post_meta($header->ID)['header-btn-metabox'][0]); ?></a>
                    <?php endif ?>
                </div>
            </div>
        </section> -->
    
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
    <script>
        const myMainMenu = document.getElementById('my-main-menu');
        const containerUl = myMainMenu.childNodes[9];
        const ulNavMenu = containerUl.childNodes[0];
        const liNavMenu = ulNavMenu.childNodes;

        containerUl.classList.remove('menu-main-menu-container');
        containerUl.classList.add('collapse');
        containerUl.classList.add('navbar-collapse');
        containerUl.id = 'navbarResponsive';

        ulNavMenu.classList.remove('menu-main-menu');
        ulNavMenu.classList.add('navbar-nav');
        ulNavMenu.classList.add('ml-auto');

        liNavMenu.forEach(li => {
            if(!(li.length > 0)){
                console.log(li.classList.add('nav-item'));
            }
        });

        console.log(typeof(liNavMenu));
    </script>
    
<!-- <?php 
$menus = wp_get_nav_menu_object(array(
    'theme_location' => 'my_main_menu'
));
var_dump($menus);
?> -->
