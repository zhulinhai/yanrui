<?php get_header(); ?>
<?php
    $banners = array('5-2-banner.jpg');
    $bannerTitle = '热爱我们的行业 为客户带来意想不到';
    $bannerSubTitle = 'LIVE VIDEO MARKETING';
    include(TEMPLATEPATH . '/banner.php');
?>
<p class="position">您所在的位置：<a href="<?php echo home_url(); ?>">首页</a> - <a href="<?php echo home_url('aboutus');?>">关于我们</a> - 团队介绍</p>
<div class="page-5-2">
    <div class="section-1">
        <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/5-2-img1.jpg" alt=""></figure>
        <div class="content">
            <div class="subInfo">
                <p class="title">核心团队</p>
                <hr>
                <p class="subTitle">50余人精英团队   10年行业专业经验</p>
                <p class="info">团队人员都是来自国内知名互联网企业腾讯、易车、华为等公司。我们将以敏锐的洞察力、出色的团队协作才能、超强的沟通能力武装自己出色完成每一个任务。。</p>
            </div>
        </div>
    </div>
    <div class="section-2">
        <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/5-2-img2.png" alt=""></figure>
        <div class="content">
            <div class="subInfo">
                <p class="title">技术开发团队</p>
                <hr>
                <p class="info">专业研发产品，为客户提供H5等定制化产品服务</p>
            </div>
        </div>
    </div>
    <div class="section-3">
        <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/5-2-img3.png" alt=""></figure>
        <div class="content">
            <div class="subInfo">
                <p class="title">摄影制作团队</p>
                <hr>
                <p class="info">专业摄影精英团队，致力于为不同行业的客户提供高品质的企业宣传片，电视广告等影视服务</p>
            </div>
        </div>
    </div>
    <div class="section-4">
        <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/5-2-img4.png" alt=""></figure>
        <div class="content">
            <div class="subInfo">
                <p class="title">设计策划团队</p>
                <hr>
                <p class="info">创意四射，行动并发。我们是最强脑力的团队。给你意想不到的惊喜服务</p>
            </div>
        </div>
    </div>
</div>

<?php get_footer('aboutus'); ?>