<?php get_header(); ?>
<?php
    $banners = array('2-1-banner.jpg');
    $bannerTitle = '岩睿·量身定制品牌H5创意传播方案';
    $bannerSubTitle = 'TAILOR MADE';
    include(TEMPLATEPATH . '/banner.php');
?>
<p class="position">您所在的位置：<a href="<?php echo home_url(); ?>">首页</a> - <a href="<?php echo home_url('service');?>">服务项目</a> - H5</p>
<div class="page-2-1">
    <div class="section-1">
        <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/2-1-title.png" alt=""></figure>
        <div class="content">
            <div class="item"><figure><img src="<?php echo get_bloginfo('template_url') ?>/img/2-1-icon1.png" alt=""></figure><p class="title">跨平台性，兼容性</p></div>
            <div class="item"><figure><img src="<?php echo get_bloginfo('template_url') ?>/img/2-1-icon2.png" alt=""></figure><p class="title">社交分享便利，传播性强</p></div>
            <div class="item"><figure><img src="<?php echo get_bloginfo('template_url') ?>/img/2-1-icon3.png" alt=""></figure><p class="title">用户感官体验丰富，互动性好</p></div>
            <div class="item"><figure><img src="<?php echo get_bloginfo('template_url') ?>/img/2-1-icon4.png" alt=""></figure><p class="title">制作及传播成本低，优势明显</p></div>
        </div>
    </div>
    <div class="section-2">
        <p class="title">H5<span>开发</span>流程</p>
        <div class="content">
            <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/2-1-title1.png" alt=""></figure>
        </div>
    </div>
    <div class="section-3">
        <p class="title">千形万态，<span>总</span>有一款适合</p>
        <div class="img1Div"></div>
        <figure><img class="bg" src="<?php echo get_bloginfo('template_url') ?>/img/2-1-title2.png" alt=""></figure>
    </div>
    <div class="section-4">
        <p class="title"><span>案例</span></p>
        <div id="categoryContent" class="content">
            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'category_name' => 'h5',
                    'showposts' => 3,  //展示6篇文章
                    'paged' => $paged
                );
                query_posts($args);
            ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <a href="<?php the_permalink() ?>"><div class='item'>
                    <figure><?php the_post_thumbnail(); ?></figure>
                    <p class='name'><?php the_title(); ?></p>
                    <span class='tagWithLine'><?php $category = get_the_category(); echo $category[0]->cat_name; ?></span>
                    <div class='btnDetail'></div>
                </div></a>
            <?php endwhile; ?>
        </div>
        <a href="case"><div class="btnMore">查看更多</div></a>
    </div>
</div>

<?php get_footer('service'); ?>