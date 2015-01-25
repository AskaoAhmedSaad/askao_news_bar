<?php
        global $wpdb;
        $post_categories = array();
        $results = array();
        $categories = $wpdb->get_results("SELECT * FROM wp_terms WHERE name = 'newsbar'");
        foreach($categories as $category) {
            array_push( $post_categories ,$wpdb->get_results("SELECT * FROM wp_term_relationships WHERE term_taxonomy_id  = ". $category->term_id ));
       }
        foreach($post_categories[0] as $post_category) {           
                array_push( $results ,$wpdb->get_results("SELECT * FROM wp_posts WHERE ID  = ". $post_category->object_id ));
                //print_r($post_category[$i]->object_id);
        }              
?>
