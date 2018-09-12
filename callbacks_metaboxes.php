<?php
function callback_metabox_single_page( $post){
    $metabox_post_data = get_post_meta($post->ID);
    ?>
    <link rel="stylesheet" href="<?php echo(get_template_directory_uri()); ?>/css/bootstrap.css">
    <style>
    .color-form{
        background-color:#62f957;
    }
    .btn-file {
    position: relative;
    overflow: hidden;
    }
    .btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
    }

    #img-upload{
    width: 100%;
    }
    </style>
    
    <form method="post" enctype="multipart/form-data">
        <img class='img-fluid' src="" alt="" id='imagem-teste'>
        <h1>Content of Metabox</h1>
        <div class="form-grou">
            <label for="title-metabox">Categoria do Conteúdo</label>
            <select id='select-cat-post' class="custom-select custom-select-lg mb-3" name='cat-post'>
                <option selected ><?php echo($metabox_post_data['cat-post'][0]); ?></option>
                <option value="Card">Card</option>
                <option value="Header">Header</option>
                <option value="Banner">Banner</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title-metabox">Title</label>
            <input type="text" class="form-control" id="title-metabox" placeholder="Enter Title Component" name='title-metabox' value='<?php echo($metabox_post_data['title-metabox'][0]);?>'>
            
        </div>
        <div class="form-group">
            <label for="sub-title-metabox">Sub-Title</label>
            <input type="text" class="form-control" id="sub-title-metabox" placeholder="Enter sub-Title Component" name='sub-title-metabox' value='<?php echo($metabox_post_data['sub-title-metabox'][0]);?>'>
            
        </div>
        <div class="form-group">
            <label for="content-metabox">Content</label>
            <!-- <input type="text" class="form-control" id="content-metabox" placeholder="Enter Content Component" name='content-metabox' value='<?php echo($metabox_post_data['content-metabox'][0]);?>'> -->
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='content-metabox' value="<?php echo($metabox_post_data['content-metabox'][0]);?>"><?php echo($metabox_post_data['content-metabox'][0]);?></textarea>
        </div>
        <div class="form-group">
            <label for="text-color-metabox">Text Color</label>
            <input type="text" class="form-control" id="text-color-metabox" placeholder="Enter Text Color Component in Hexadecimal" name='text-color-metabox' value='<?php echo($metabox_post_data['text-color-metabox'][0]);?>'>
        </div>

        <?php if($metabox_post_data['cat-post'][0] !== 'Header'){?>

            <div class="form-group" id='header-btn' style='display:none;'>
                <label for="header-btn-metabox">Button of Header</label>
                <input type="text" class='form-control' id='header-btn-metabox' placeholder='If you want a button, insert a text' name='header-btn-metabox' value='<?php echo($metabox_post_data['header-btn-metabox'][0]); ?>' >
            </div>

        <?php }else {?>

            <div class="form-group" id='header-btn'>
                <label for="header-btn-metabox">Button of Header</label>
                <input type="text" class='form-control' id='header-btn-metabox' placeholder='If you want a button, insert a text' name='header-btn-metabox' value='<?php echo($metabox_post_data['header-btn-metabox'][0]); ?>' >
            </div>
            <div class="form-group">
                <label for='header-btn-link-metabox' >Link of Button</label>
                <input type="text" class='form-contorl' id='header-btn-link-metabox' placeholder='ex.: https://google.com' name='header-btn-link-metabox' value='<?php echo($metabox_post_data['header-btn-link-metabox'][0]); ?>' >
            </div>

        <?php } ?>
        <?php
            if($metabox_post_data['cat-post'][0] == 'Banner'){?>

                <div class="form-group">
                    <label for="title-metabox">Background Color</label>
                    <input type="text" class="form-control" id="color-metabox" placeholder="Enter Hexadecimal Color" name='color-metabox' value='<?php echo($metabox_post_data['color-metabox'][0]);?>'>
                    <small id="colorHelp" class="form-text text-muted">Please Insert the Hexadecimal Code of your Backgroud-Color.</small>
                </div>
                
                <div class="form-group">
                    <h1>Button of Banner</h1>
                    <label for="title-metabox">Button Link</label>
                        <input type="text" class="form-control" id="text-btn-metabox" placeholder="Text of Button" name='text-btn-metabox' value='<?php echo($metabox_post_data['text-btn-metabox'][0]);?>'>
                            <small id="textBtnHelp" class="form-text text-muted">Let this field blank to hidde the button.</small>
                    <label for="title-metabox">Button Background Color</label>
                        <input type="text" class="form-control" id="background-btn-metabox" placeholder="Background color of Button" name='background-btn-metabox' value='<?php echo($metabox_post_data['background-btn-metabox'][0]);?>'>
                            <small id="textBtnHelp" class="form-text text-muted">Let this field blank to hidde the button.</small>
                    <label for="title-metabox">Button Text Color</label>
                        <input type="text" class="form-control" id="text-color-btn-metabox" placeholder="Text color of Button" name='text-color-btn-metabox' value='<?php echo($metabox_post_data['text-color-btn-metabox'][0]);?>'>
                            <small id="textBtnHelp" class="form-text text-muted">Let this field blank to hidde the button.</small>
                    <label for="title-metabox">Button Link</label>
                        <input type="text" class="form-control" id="link-btn-metabox" placeholder="Link of Button" name='link-btn-metabox' value='<?php echo($metabox_post_data['link-btn-metabox'][0]);?>'>
                            <small id="textBtnHelp" class="form-text text-muted">Let this field blank to hidde the button.</small>
                </div>
                <script>
                </script>


            <?php
            }
        ?>
    </form>
    <script src='<?php echo(get_template_directory_uri()); ?>/js/cbMetabox.js' ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <?php
}
function update_my_meta_info($post_id){
    if(isset($_POST['cat-post'])){
        update_post_meta($post_id,'cat-post',$_POST['cat-post']);
    }
    if(isset($_POST['title-metabox'])){
        update_post_meta($post_id,'title-metabox',$_POST['title-metabox']);
    }
    if(isset($_POST['sub-title-metabox'])){
        update_post_meta($post_id,'sub-title-metabox',$_POST['sub-title-metabox']);
    }
    if(isset($_POST['content-metabox'])){
        update_post_meta($post_id,'content-metabox',$_POST['content-metabox']);
    }
    if(isset($_POST['text-color-metabox'])){
        update_post_meta($post_id,'text-color-metabox',$_POST['text-color-metabox']);
    }
    if(isset($_POST['color-metabox'])){
        update_post_meta($post_id,'color-metabox',$_POST['color-metabox']);
    }
    if(isset($_POST['text-btn-metabox'])){
        update_post_meta($post_id,'text-btn-metabox',$_POST['text-btn-metabox']);
    }
    if(isset($_POST['background-btn-metabox'])){
        update_post_meta($post_id,'background-btn-metabox',$_POST['background-btn-metabox']);
    }
    if(isset($_POST['text-color-btn-metabox'])){
        update_post_meta($post_id,'text-color-btn-metabox',$_POST['text-color-btn-metabox']);
    }
    if(isset($_POST['link-btn-metabox'])){
        update_post_meta($post_id,'link-btn-metabox',$_POST['link-btn-metabox']);
    }
    if(isset($_POST['header-btn-metabox'])){
        update_post_meta($post_id,'header-btn-metabox',$_POST['header-btn-metabox']);
    }
    if(isset($_POST['header-btn-link-metabox'])){
        update_post_meta($post_id,'header-btn-link-metabox',$_POST['header-btn-link-metabox']);
    }
}
add_action('save_post', 'update_my_meta_info');
?>