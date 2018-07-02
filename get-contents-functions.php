<?php 


    // ------------------------------- FUNTIONS FOR HEADER CONTENTS------------------------
            $conteudoArgs = array(
                // 'posts_per_page'   => 5,
                // 'offset'           => 0,
                // 'category'         => '',
                // 'category_name'    => '',
                // 'orderby'          => 'date',
                // 'order'            => 'DESC',
                // 'include'          => '',
                // 'exclude'          => '',
                // 'meta_key'         => '',
                // 'meta_value'       => '',
                'post_type'        => 'conteudo',
                // 'post_mime_type'   => '',
                // 'post_parent'      => '',
                // 'author'	   => '',
                // 'author_name'	   => '',
                // 'post_status'      => 'publish',
                // 'suppress_filters' => true,
                // 'fields'           => '',
            );
        
            $conteudoLoop = new WP_query($conteudoArgs);
            
            $arrayOfConteudoLoop = $conteudoLoop->get_posts();

            function getContentHeaderByPostTitle($arrayOfContent, $title){
                for ($i=0; $i < count($arrayOfContent) ; $i++) { 
                    if($arrayOfContent[$i]->post_title == $title){
                        return $arrayOfContent[$i]->post_content;
                    }
                }
            }

            $singlePageArgs = array(
                // 'posts_per_page'   => 5,
                // 'offset'           => 0,
                // 'category'         => '',
                // 'category_name'    => '',
                // 'orderby'          => 'date',
                // 'order'            => 'DESC',
                // 'include'          => '',
                // 'exclude'          => '',
                // 'meta_key'         => '',
                // 'meta_value'       => '',
                'post_type'        => 'conteudo_single_page',
                // 'post_mime_type'   => '',
                // 'post_parent'      => '',
                // 'author'	   => '',
                // 'author_name'	   => '',
                // 'post_status'      => 'publish',
                // 'suppress_filters' => true,
                // 'fields'           => '',
            );
        
            $singlePageLoop = new WP_query($singlePageArgs);
            
            $arrayOfSinglePageLoop = $singlePageLoop->get_posts();
    //-----------------------------END BLOCK ------------------------------------    


    //----------------------FUNCTIONS FOR MAIN CARDS----------------------------

    $conteudoArgsCards = array(
        'post_type'        => 'conteudo_main_cards',
    );

    $conteudoLoopCards = new WP_query($conteudoArgsCards);
    $arrayOfConteudoLoopCards = $conteudoLoopCards->get_posts();

    function getContentCardsByPostTitle($arrayOfContent, $title){
        for ($i=0; $i < count($arrayOfContent) ; $i++) { 
            if($arrayOfContent[$i]->post_title == $title){
                if( $arrayOfContent[$i]->post_content ){

                    return $arrayOfContent[$i]->post_content;
                }else{
                    
                }
            }
        }
    }

    //----------------------END BLOCK-------------------------------------------
?>