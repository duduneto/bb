<?php
 function callback_metabox_posts($post) {
    $metabox_post_data = get_post_meta($post->ID);
    ?>
    <link rel="stylesheet" href="<?php echo(get_template_directory_uri()); ?>/css/bootstrap.css">

    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="headline-metabox-posts">HeadLine of Post</label>
            <input type="text-area" class="form-control" id="headline-metabox-posts" placeholder="Enter Headline of Post" name='headline-metabox-posts' value='<?php echo($metabox_post_data['headline-metabox-posts'][0]);?>'>
            
        </div>
    </form>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php 
}
function update_my_meta_info_posts($post_id){
    if(isset($_POST['headline-metabox-posts'])){
        update_post_meta($post_id,'headline-metabox-posts',$_POST['headline-metabox-posts']);
    }
};
add_action('save_post', 'update_my_meta_info_posts');
?>