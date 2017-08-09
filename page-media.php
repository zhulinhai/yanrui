<?php get_header(); ?>
<?php
    $banners = array('2-2-banner.jpg');
    $bannerTitle = '岩睿·互联网+ 全方位的影视制作';
    $bannerSubTitle = 'INTERNET AND PHOTOGRAPHIC PRODUCTION';
    include(TEMPLATEPATH . '/banner.php');
?>
    <div class="page-2-2">
        <p class="position">您所在的位置：<a href="<?php echo home_url(); ?>">首页</a> - <a href="<?php echo home_url('service');?>">服务项目</a> - 多媒体服务</p>
        <div class="section-1">
            <div class="item">
                <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/2-2-icon1.png" alt=""></figure>
                <p class="title">宣传片拍摄</p>
                <p class="info">提升品牌形象价值,全方位策划包装企业宣传片或产品形象片。</p>
            </div>
            <div class="item2">
                <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/2-2-icon2.png" alt=""></figure>
                <p class="title">视频直播</p>
                <p class="info">利用互利网和流媒体技术进行直播，通过真实、生动的传播，营造出强烈的现场感。</p>
            </div>
            <div class="item">
                <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/2-2-icon3.png" alt=""></figure>
                <p class="title">创意视频广告</p>
                <p class="info">通过用户营销，精准定位。制作有趣经典轻松的视频广告，吸引网友的眼球。</p>
            </div>
        </div>
        <p class="title-2">多媒体<span>服务</span>流程</p>
        <div class="section-2">
            <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/2-2-info1.png" alt=""></figure>
        </div>
        <div class="section-3">
            <p class="title">视频<span>直播</span>流程</p>
            <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/2-2-info2.png" alt=""></figure>
        </div>
        <div class="section-4">
            <p class="title"><span>案例</span></p>
            <div id="categoryContent" class="content">
                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'category_name' => 'media',
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