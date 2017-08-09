<?php get_header(); ?>
    <?php
        $banners = array('2-banner.jpg');
        $bannerTitle = '岩睿·视频直播营销专业科技公司';
        $bannerSubTitle = 'LIVE VIDEO MARKETING';
        include(TEMPLATEPATH . '/banner.php')
    ?>
    <div class="page-2">
        <div class="section-1">
            <div class="bg"></div>
            <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/2-img1.jpg" alt=""></figure>
            <div class="contentDiv"><p class="title">一 H5开发</p><p class="info">通过精准内容实现跨平台</p><p class="info">高效率传播，与用户促成有效沟通</p><a href="h5"><div class="more">更多<img src="<?php echo get_bloginfo('template_url') ?>/img/2-arrowRight.png" alt=""></a></div></div>
        </div>
        <div class="section-2">
            <div class="bg"></div>
            <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/2-img2.jpg" alt=""></figure>
            <div class="contentDiv"><p class="title">一 多媒体服务</p><p class="info">宣传片拍摄</p><p class="info">视频直播 创意视频广告</p><a href="media"><div class="more">更多<img src="<?php echo get_bloginfo('template_url') ?>/img/2-arrowRight.png" alt=""></div></a></div>
        </div>
        <div class="section-3">
            <div class="bg"></div>
            <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/2-img3.jpg" alt=""></figure>
            <div class="contentDiv"><p class="title">一 视觉设计</p><p class="info">UI设计 平面广告</p><p class="info"></p><a href="design"><div class="more">更多<img src="<?php echo get_bloginfo('template_url') ?>/img/2-arrowRight.png" alt=""></div></a></div>
        </div>
    </div>

<?php get_footer('service'); ?>