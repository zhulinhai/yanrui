<?php get_header(); ?>
<?php
    $banners = array('2-3-banner.jpg');
    $bannerTitle = '岩睿·用视觉传达品牌';
    $bannerSubTitle = 'VISUAL COMMUNICATION';
    include(TEMPLATEPATH . '/banner.php');
?>
    <div class="page-2-3">
        <p class="position">您所在的位置：<a href="<?php echo home_url(); ?>">首页</a> - <a href="<?php echo home_url('service');?>">服务项目</a> - 视觉设计</p>
        <div class="section-1">
            <div class="rightDiv">
                <div class="cube">VI</div>
                <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/2-3-rightImg.png" alt=""></figure>
                <p class="title">平面设计</p>
                <p class="info">通过视觉传达想法或讯息的表现形式。常见的有平面广告、海报、标志、产品包装等等。</p>
            </div>
            <div class="leftDiv">
                <div class="cube">UI</div>
                <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/2-3-leftImg.png" alt=""></figure>
                <p class="title">UI设计</p>
                <p class="info">主要提供网页、APP、H5等软件界面整体设计，充分体现软件的定位和特点。</p>
            </div>

        </div>
        <div class="section-2">
            <p class="title">设计<span>制作</span>流程</p>
            <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/2-3-info1.jpg" alt=""></figure>

        </div>
        <div class="section-3">
            <p class="title"><span>案例</span></p>
            <div id="categoryContent" class="content">
                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'category_name' => 'design',
                    'showposts' => 3,  //展示3篇文章
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