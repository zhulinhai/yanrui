<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/5/6
 * Time: 11:46
 */
if ( function_exists('register_sidebar') )
    register_sidebar();
add_filter('pre_option_link_manager_enabled','__return_true');
//添加特色图片
add_theme_support( 'post-thumbnails' );

function par_pagenavi($range = 9){
    global $paged, $wp_query;
    if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}
    if($max_page > 1){if(!$paged){$paged = 1;}
        if($paged != 1){echo "<a href='" . get_pagenum_link(1) . "' class='extend' title='跳转到首页'> 首页 </a>";}
        previous_posts_link(' << ');
        if($max_page > $range){
            if($paged < $range){for($i = 1; $i <= ($range + 1); $i++){echo "<a href='" . get_pagenum_link($i) ."'";
                if($i==$paged)echo " class='current'";echo ">$i</a>";}}
            elseif($paged >= ($max_page - ceil(($range/2)))){
                for($i = $max_page - $range; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
                    if($i==$paged)echo " class='current'";echo ">$i</a>";}}
            elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
                for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){echo "<a href='" . get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";}}}
        else{for($i = 1; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
            if($i==$paged)echo " class='current'";echo ">$i</a>";}}
        next_posts_link(' >> ');
        if($paged != $max_page){echo "<a href='" . get_pagenum_link($max_page) . "' class='extend' title='跳转到最后一页'> 尾页 </a>";}}
}

function return_only_selected_category() {
    if ( isset($_REQUEST['s']) && isset($_REQUEST['cat']) ){ //若为搜索页面，且有cat值传入
        global $wp_query;
        $desired_cat = $_REQUEST['cat']; //要搜索的分类
        $excluded = get_categories("hide_empty=false&exclude={$desired_cat}"); //要排除的分类
        $wp_query->query_vars['cat'] = "-{$excluded}"; //除了要搜索的，其它都排除
        //还可添加其它条件，比如要搜索的文章类型$wp_query->query_vars['post_type'] ="product";
    }
}
add_filter('pre_get_posts', 'return_only_selected_category');