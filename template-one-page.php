<?php 
/*
Template Name: One Page
Template Post Type: conteudo, conteudo_single_page ,post, page
*/
get_header();
require_once('get-contents-functions.php');
$myPost = get_post_meta($arrayOfSinglePageLoop[0]->ID);
    $header = getContentByPostTitle($arrayOfSinglePageLoop, 'header');
    $cardServ1 = getContentByPostTitle($arrayOfSinglePageLoop, 'card_service_1');
    $cardServ2 = getContentByPostTitle($arrayOfSinglePageLoop, 'card_service_2');
    $cardServ3 = getContentByPostTitle($arrayOfSinglePageLoop, 'card_service_3');
    $cardBB1 = getContentByPostTitle($arrayOfSinglePageLoop, 'card_bb_1');
    $cardBB2 = getContentByPostTitle($arrayOfSinglePageLoop, 'card_bb_2');
    $cardBB3 = getContentByPostTitle($arrayOfSinglePageLoop, 'card_bb_3');
    $cardBB4 = getContentByPostTitle($arrayOfSinglePageLoop, 'card_bb_4');
    $cardAbout1 = getContentByPostTitle($arrayOfSinglePageLoop, 'card_about_1');
    $cardAbout2 = getContentByPostTitle($arrayOfSinglePageLoop, 'card_about_2');
    $cardAbout3 = getContentByPostTitle($arrayOfSinglePageLoop, 'card_about_3');
    $banner1 = getContentByPostTitle($arrayOfSinglePageLoop, 'banner_main');
    // var_dump(get_post_meta($banner1->ID)); 
    $postArgs = array(
        'post_type' => 'post'
    );
    $loopOfPosts = new WP_query($postArgs);
    $arrayOfPost = $loopOfPosts->get_posts();
    // var_dump($arrayOfPost[0]);
    // echo(get_template_directory_uri());
require_once('one-page-style.php');
?>

    
    <section class='header-background h-100' style='background-image: url("<?php echo(get_template_directory_uri()); ?>/images/backkk.png");' >
        <div class="linha row">
            <div id='section-header-1' class="section-header-1 col-md-7">
                <img id='img-section-header-1' class='img-section-header-1' src="<?php echo( get_header_image() ); ?>" alt="">
                <img id='img-resp' class='img-fluid' src='<?php echo(get_template_directory_uri()); ?>/images/mosaico-2-cropped.png' alt="" style='display: none;' >
            </div>
            <div id='welcome-msg' class="col welcome-header-msg">
                <div class="card w-100 card-welcome border-0">
                    <div class="card-body">
                        <h5 class="card-title font-slabo-xl" ><?php echo( get_post_meta($header->ID)['title-metabox'][0]); ?></h5>
                        <p class="card-text font-slabo-md"><?php echo( get_post_meta($header->ID)['sub-title-metabox'][0]); ?></p>
                        <a href="<?php echo(get_post_meta($header->ID)['header-btn-link-metabox'][0]); ?>" class="btn btn-default bbtn-initial font-slabo-sm"><?php echo( get_post_meta($header->ID)['header-btn-metabox'][0]); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section id='services' style='margin-top: 10vh; margin-bottom: 8vh;' >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase title-section">Nossos Serviços</h2>
                    <h3 class="sub-title-service">Proteja seu patrimônio e sua o que realmente Importa pra você!</h3>
                </div>
            </div>
    </section>
    
    <article class='products'>
        <div class="main-products">
            <div class="row">
                <div class="product-item col-md-4" style='margin-bottom:7vh;'>
                    <?php if($cardServ1){?>
                        <div class="myCard card border-0">
                            <div class="top-bar" style='border-top-color:tomato;' ></div>
                            <div class="product border-0">
                                <img class="card-img-top rounded-circle service-img" src="<?php echo(get_the_post_thumbnail_url($cardServ1)); ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?php echo(get_post_meta($cardServ1->ID)['title-metabox'][0]);?></h5>
                                    <p class="card-text text-center"><?php echo(get_post_meta($cardServ1->ID)['content-metabox'][0]); ?></p>
                                
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
                <div class="product-item col-md-4" style='margin-bottom:7vh;'>
                    <?php if($cardServ2){?>
                        <div class="myCard card border-0">
                            <div class="top-bar" style='border-top-color:#98e045;' ></div>
                            <div class=" product border-0">
                                <img class="card-img-top rounded-circle service-img" src="<?php echo(get_the_post_thumbnail_url($cardServ2)); ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?php echo(get_post_meta($cardServ2->ID)['title-metabox'][0]);?></h5>
                                    <p class="card-text text-center"><?php echo(get_post_meta($cardServ2->ID)['content-metabox'][0]); ?></p>
                                
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
                <div class="product-item col-md-4" style='margin-bottom:7vh;'>
                    <?php if($cardServ3){?>
                        <div class="myCard card border-0">
                            <div class="top-bar" style='border-top-color:#477ff7;' ></div>
                            <div class="product border-0">
                                <img class="card-img-top rounded-circle service-img"  src="<?php echo(get_the_post_thumbnail_url($cardServ3)); ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?php echo(get_post_meta($cardServ3->ID)['title-metabox'][0]);?></h5>
                                    <p class="card-text text-center"><?php echo(get_post_meta($cardServ3->ID)['content-metabox'][0]); ?></p>
                                
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </article>

    
    <script src="<?php echo(get_template_directory_uri())?>/js/adjustCardServices.js" ></script>
    <?php
        if($banner1){?>

    <section class="quadro" id='quem-somos' style="background-color: <?php echo(get_post_meta($banner1->ID)['color-metabox'][0]) ?>;" 
    style="
    font-family: 'Slabo 27px', serif;
    margin-bottom: 4em;"
    >
    <!-- <section class="quadro" id='quem-somos' style="background-color: <?php echo(get_post_meta($banner1->ID)['color-metabox'][0]) ?>;" 
    style="
    font-family: 'Slabo 27px', serif;
    margin-bottom: 4em;"
    > -->
        <div class="global-container"
        style="
        height: 60vh;
        width: calc(100vw + 3px);
        position: relative;
        "
        >
        <span id='ajuste'>AJUSTE</span>
        
            <div class="text-right img-banner-box"
            style="
            width: 100%;
            height: 100%;
            overflow: hidden;
            text-align: left;
            "
            >
                <!-- <div  id='fir-col-banner' class="first-col-banner" style="
                width: auto;
                height: 100%;
                position: relative;
                background-image: url('<?php echo(get_the_post_thumbnail_url($banner1)); ?>');
                background-repeat: no-repeat;
                " >
                
                </div> -->
                <img id='fir-col-banner' class='first-col-banner' src="<?php echo(get_the_post_thumbnail_url($banner1)); ?>" alt=""
                style="
                width: auto;
                height: 100%;
                position: relative;
                "
                >
                
                <script>
                    let firColBanner = document.getElementById('fir-col-banner');

                    function adjustImageBanner(){
                        console.log('Ajustando...')
                        document.getElementById('ajuste').innerHTML = screen.width;
                        // if(screen.width < 500){
                        //     let calcRight = (firColBanner.width - (screen.width+30))+"px";
                        //     console.log(calcRight);
                        //     firColBanner.style.right = calcRight;
                        //     if(screen.width < 341){
                        //         secColBanner.childNodes[1].childNodes[3].classList.remove('mt-4');
                        //         secColBanner.childNodes[1].childNodes[8].classList.remove('mt-5');
                        //     }
                        // }
                    }
                    adjustImageBanner();

                </script>
                <!-- <img id='fir-col-banner' class='first-col-banner' src="<?php echo(get_template_directory_uri()) ?>/images/banner-triangulo.png" alt=""
                style="
                width: auto;
                height: 100%;
                position: relative;
                "
                > -->
            </div>
            <div class="text-left" style='position: absolute; top: 5vw;' >
                <div id='sec-col-banner' class="pl-5" >
                    <div class="container" style='margin-top: ;'>
                        <h1 class="display-4"><?php echo(get_post_meta($banner1->ID)['title-metabox'][0]) ?></h1>
                        <p class='lead mt-4' ><?php echo(get_post_meta($banner1->ID)['content-metabox'][0]) ?></p>
                        <p class="lead">
                            <p id='hover-btn-banner' style='display:none;'><?php echo(get_post_meta($banner1->ID)['hover-color-btn-metabox'][0]) ?></p>
                            <div class='mt-4'>
                                <a class="btn btn-banner" id='btn-banner' href="<?php echo(get_post_meta($banner1->ID)['link-btn-metabox'][0]) ?>" role="button" style='background-color:<?php echo(get_post_meta($banner1->ID)['background-btn-metabox'][0]) ?>; color:<?php echo(get_post_meta($banner1->ID)['text-color-btn-metabox'][0]) ?>;'><?php echo(get_post_meta($banner1->ID)['text-btn-metabox'][0]) ?></a>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        
        </div>
    </section>


        <?php
        }
    ?>



    <div class="modulo" style='background-color:white;'>
        <div class="title" style='margin-top:3em;margin-bottom:2em;' >
            <h2>Por que escolher Barros&Borges?</h2>
        </div>
        <div class="container-fluid blue-bg">
            <div class="container">

                <div class="row justify-content-center row-why-bb m-auto">
                    <?php if($cardBB1){?>

                                <div class="card col-md-4 why-bb border-0">
                                    <div class="why-bb-icon">
                                        <img class="card-img-top"  src="<?php echo(get_the_post_thumbnail_url($cardBB1)); ?>" alt="Card image cap">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><?php echo(get_post_meta($cardBB1->ID)['title-metabox'][0]);?></h5>
                                        <p class="card-text text-center"><?php echo(get_post_meta($cardBB1->ID)['content-metabox'][0]); ?></p>
                                    
                                    </div>
                                </div>

                            <?php
                            }
                            ?>
                    <?php if($cardBB2){?>

                                <div class="card col-md-4 why-bb border-0">
                                    <div class="why-bb-icon">
                                        <img class="card-img-top"  src="<?php echo(get_the_post_thumbnail_url($cardBB2)); ?>" alt="Card image cap">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><?php echo(get_post_meta($cardBB2->ID)['title-metabox'][0]);?></h5>
                                        <p class="card-text text-center"><?php echo(get_post_meta($cardBB2->ID)['content-metabox'][0]); ?></p>
                                    
                                    </div>
                                </div>

                            <?php
                            }
                            ?>
                </div>
                
                <div class="row justify-content-center row-why-bb m-auto">
                    <?php if($cardBB3){?>

                                <div class="card col-md-4 why-bb border-0">
                                    <div class="why-bb-icon">
                                        <img class="card-img-top"  src="<?php echo(get_the_post_thumbnail_url($cardBB3)); ?>" alt="Card image cap">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><?php echo(get_post_meta($cardBB3->ID)['title-metabox'][0]);?></h5>
                                        <p class="card-text text-center"><?php echo(get_post_meta($cardBB3->ID)['content-metabox'][0]); ?></p>
                                    
                                    </div>
                                </div>

                            <?php
                            }
                            ?>
                    <?php if($cardBB4){?>

                                <div class="card col-md-4 why-bb border-0">
                                    <div class="why-bb-icon">
                                        <img class="card-img-top"  src="<?php echo(get_the_post_thumbnail_url($cardBB4)); ?>" alt="Card image cap">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><?php echo(get_post_meta($cardBB4->ID)['title-metabox'][0]);?></h5>
                                        <p class="card-text text-center"><?php echo(get_post_meta($cardBB4->ID)['content-metabox'][0]); ?></p>
                                    
                                    </div>
                                </div>

                            <?php
                            }
                            ?>
                </div>

                
                

                
            </div>
        </div>
    </div>
        
    </div>

    <section class="blog-container" id='blog'>
        <div class="blog-container-title title" style='margin-top:3em;margin-bottom:3em;' ><h2>Confira nossas Postagens</h2></div>
        <div class="container">

            <div class="card-group">
                    <div class="row">
                        <?php
                           for ($i=0; $i <= 2; $i++) { ?>
                            <div class="col-md-4">
                                <div class="text-center">
                                    <img class="img-fluid" src="<?php echo(get_the_post_thumbnail_url($arrayOfPost[$i]->ID)); ?>" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title title"><?php echo($arrayOfPost[$i]->post_title) ?></h5>
                                    <p class="card-text"><?php print(get_post_meta($arrayOfPost[$i]->ID)['headline-metabox-posts'][0]); ?></p>
                                    <a href="<?php echo(get_post_permalink($arrayOfPost[$i]->ID)); ?>">Ler no Blog</a>
                                </div>
                            </div>
                               
                           <?php
                           }
                        ?>
                        
                    </div>
                </div>
        </div>
    </section>

    
<script>
let imgHeader = document.getElementById('img-section-header-1');
let imgResp = document.getElementById('img-resp');
let welcomeMsg = document.getElementById('welcome-msg');
// let firColBanner = document.getElementById('fir-col-banner');
let secColBanner = document.getElementById('sec-col-banner');


function verifyResponsivity(){
    console.log('verifying...');
    console.log(screen.width);
    
    if(screen.width <= 767){
        // firColBanner.style.position = 'absolute';
        // secColBanner.style.position = 'absolute';
        imgHeader.style.display = 'none';
        imgResp.style.display = 'block';

    }else if(screen.width>767){
        // firColBanner.style.position = 'relative'
        // secColBanner.style.position = 'relative'
        imgHeader.style.display = 'block';
        imgResp.style.display = 'none';
    }
}
verifyResponsivity();

window.addEventListener("orientationchange", function() {
    verifyResponsivity();
});


</script>
    
<?php require_once('footer.php') ?>




<?php require_once('footer.php') ?>