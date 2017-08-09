<?php get_header(); ?>
<?php
    $banners = array('5-3-banner.jpg');
    $bannerTitle = '万事具备，等你来撩';
    $bannerSubTitle = 'TAILOR MADE';
    include(TEMPLATEPATH . '/banner.php');
?>
<p class="position">您所在的位置：<a href="<?php echo home_url(); ?>">首页</a> - <a href="<?php echo home_url('aboutus');?>">关于我们</a> - 联系我们</p>
<div class="page-5-3">
    <div class="section-1">
        <figure><img class="map" src="<?php echo get_bloginfo('template_url') ?>/img/5-3-img1.jpg" alt=""></figure>
        <div class="leftDiv">
            <hr>
            <p class="title">联系我们</p>
            <p>地址：</p>
            <p>北京最美的地方你猜猜</p>
            <br>
            <p>邮箱：</p>
            <p>yangbo@bjczxd.com</p>
            <br>
            <p>电话：</p>
            <p>027-87579718</p>
        </div>
    </div>
</div>

<?php get_footer('aboutus'); ?>