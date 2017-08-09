<?php get_header(); ?>
<?php
    $banners = array('4-banner.jpg');
    $bannerTitle = '岩睿·量身定制品牌H5创意传播方案';
    $bannerSubTitle = 'TAILOR MADE';
    include(TEMPLATEPATH . '/banner.php')
?>
    <p class="position">您所在的位置：<a href="<?php echo home_url(); ?>">首页</a> - <a href="<?php echo home_url('case');?>">案例</a> - 多媒体</p>
    <div class="page-4">
        <section class="section-1">
            <div id="categoryMenu" class="menu">
                <a href="<?php echo home_url('case'); ?>">全部</a>
                <a href="<?php $cat=get_category_by_slug('h5'); echo get_category_link( $cat->term_id);  ?>">H5</a>
                <a class="hover" href="<?php $cat=get_category_by_slug('media'); echo get_category_link( $cat->term_id); ?>">多媒体</a>
                <a href="<?php $cat=get_category_by_slug('design'); echo get_category_link( $cat->term_id); ?>">设计</a>
            </div>
            <div id="categoryContent" class="content">
                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'category_name' => 'media',
                        'showposts' => 9,  //展示9篇文章
                        'paged' => $paged
                    );
                    query_posts($args);
                ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <a href="<?php the_permalink() ?>"><div class='item'>
                        <figure><?php the_post_thumbnail(); ?></figure>
                        <p class='name'><?php the_title(); ?></p>
                        <span class='tagWithLine'>
                            <?php $category = get_the_category(); foreach ($category as $cat) {
                                if ($cat->parent != 0) {
                                    echo $cat->cat_name;
                                }
                            }?></span>
                        </span>
                        <div class='btnDetail'></div>
                    </div></a>
                <?php endwhile; ?>
            </div>
            <div class="page_navi"><?php par_pagenavi(9); ?></div>
        </section>
    </div>
<?php get_footer('case'); ?>