<?php 
/*
Template Name: Single-Blog
Template Post Type: post
*/
// get_header();
?>
<?php 
    $url = $_SERVER['REQUEST_URI'];
    $postId = url_to_postid($url);
    $thePost = get_post($postId);
?>
<?php require_once('header.php') ?>
<?php require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php'; ?>
<!-- <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?> -->

    
    <section class='container single-post-header mb-5' >
        <div class="text-center">
            <img class='img-fluid' src="<?php echo( get_the_post_thumbnail_url($thePost) ); ?>" alt="<?php echo(get_the_post_thumbnail_caption($thePost)); ?>">
        </div>

        

        <div class="content-post blog-post">
            <!-- <hr class="featurette-divider"> -->
            <h1 class='text-center title-single-post mt-5 mb-5'><?php echo($thePost->post_title); ?></h1>
            <!-- <hr class="featurette-divider"> -->
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="text">
                            <div class='text-post' ><?php echo($thePost->post_content); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </section>
    
<?php require_once('footer.php') ?> 