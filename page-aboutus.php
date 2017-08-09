<?php get_header(); ?>
<?php
    $banners = array('5-banner.jpg');
    $bannerTitle = '岩睿·互联网直播解决方案提供商';
    $bannerSubTitle = 'LIVE VIDEO MARKETING';
    include(TEMPLATEPATH . '/banner.php')
?>
    <div class="page-5">
        <div class="section-2">
            <div class="bg"></div>
            <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/5-img1.jpg" alt=""></figure>
            <div class="contentDiv">
                <p class="title">一 岩睿介绍</p>
                <p class="info">主营H5开发、多媒体服务、</p>
                <p class="info">视觉设计、网红资源四大服务</p>
                <a href="intro"><div class="more">更多<img src="<?php echo get_bloginfo('template_url') ?>/img/2-arrowRight.png" alt=""></div></a>
            </div>
        </div>
        <div class="section-1">
            <div class="bg"></div>
            <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/5-img2.jpg" alt=""></figure>
            <div class="contentDiv">
                <p class="title">一 团队介绍</p>
                <p class="info">技术开发团队</p>
                <p class="info">摄影制作团队、设计策划团队</p>
                <a href="team"><div class="more">更多<img src="<?php echo get_bloginfo('template_url') ?>/img/2-arrowRight.png" alt=""></div></a>
            </div>
        </div>
        <div class="section-2">
            <div class="bg"></div>
            <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/5-img3.jpg" alt=""></figure>
            <div class="contentDiv">
                <p class="title">一 联系我们</p>
                <p class="info">完事具备等你来撩</p>
                <p class="info"></p>
                <a href="linkus"><div class="more">更多<img src="<?php echo get_bloginfo('template_url') ?>/img/2-arrowRight.png" alt=""></div></a>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function () {
            $('#item4').addClass('itemHover');
        });
    </script>
<?php get_footer(); ?>