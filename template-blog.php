<?php 
/*
Template Name: Blog
Template Post Type: page
*/
get_header();
require_once('blog-style.php');
$loop = new WP_Query( array( 'post_type' => 'page' ) );
$pages = $loop->get_posts();
$currentPage;
$urlThumbnailBlog;
foreach($pages as $page) {
    if($page->post_title == 'Blog'){
        $currentPage = $page;
        $urlThumbnailBlog = get_the_post_thumbnail_url( $page->ID, 'full' );
    }
}
$loopPosts = new WP_Query( array( 'post_type' => 'post','posts_per_page'   => 3 ) );
$posts = $loopPosts->get_posts();

?>

<section class='header-blog masthead' style="background-image: url('<?php echo($urlThumbnailBlog) ?>'); background-repeat: no-repeat;">
    <div class="overlay"></div>
    <div class="container container-head-blog">
        <div class="row row-head-blog">
            <div class="col-head-blog col-lg-8 col-md-10 mx-auto">
                <div class="site-heading-blog ">
                    <div class="text-center">
                        <h1>Confira Nossas Postagens e Notícias</h1>
                        <span class='subheading' >Fique sempre por dentro do que acontece no mundo dos Seguros!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
                <?php 
                    foreach($posts as $post){ ?>

                        <div class="post-preview">
                            <a href="<?php echo(get_post_permalink($post->ID)); ?>">
                                <h1><?php echo($post->post_title); ?></h1>
                                <h2><?php echo(get_the_subtitle($post)); ?></h2>
                                <h4><?php echo(get_post_meta($post->ID)['headline-metabox-posts'][0]); ?></h4>
                                <hr>
                            </a>
                        </div>

                <?php 
                    }
                ?>
            
        </div>
    </div>
</div>

<?php get_footer(); ?>