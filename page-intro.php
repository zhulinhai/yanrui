<?php get_header(); ?>
<?php
    $banners = array('5-1-banner.jpg');
    $bannerTitle = '智慧创绎 睿新互联';
    $bannerSubTitle = 'LIVE VIDEO MARKETING';
    include(TEMPLATEPATH . '/banner.php');
?>
<p class="position">您所在的位置：<a href="<?php echo home_url(); ?>">首页</a> - <a href="<?php echo home_url('aboutus');?>">关于我们</a> - 岩睿介绍</p>
<div class="page-5-1">
    <div class="section-1">
        <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/5-1-img1.jpg" alt=""></figure>
        <div class="content">
            <div class="bg"></div>
            <div class="subInfo">
                <p class="title">岩睿介绍</p>
                <hr>
                <p class="info">岩睿（北京）科技有限公司，成立于2013年。一家致力于影视领域开拓的新互联网服务公司。秉承”智慧创绎·睿新互联”的企业理念。</p>
            </div>
        </div>
    </div>
    <div class="section-2">
        <div class="bg"></div>
        <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/5-1-img2.png" alt=""></figure>
        <div class="content">
            <div class="subInfo">
                <p class="title">公司主营业务</p>
                <hr>
                <p class="info">公司主营业务：H5开发、多媒体服务、视觉设计、网红资源四大服务。拥有10年以上的从业经验，曾服务国际和国内大公司，曾出任包括华为、易车、昆仑科技等技术骨干。</p>
            </div>
        </div>
    </div>
    <div class="section-3">
        <div class="bg"></div>
        <figure><img src="<?php echo get_bloginfo('template_url') ?>/img/5-1-img3.png" alt=""></figure>
        <div class="content">
            <div class="subInfo">
                <p class="title">岩睿和您一起成长</p>
                <hr>
                <p class="info">坚持以创意和技术相结合，将流行元素、企业特色、新鲜的思路进行融合，给客户带来不一样的视频内容。运用电影级的制作团队为您拍摄最有传播价值的企业宣传片。</p>
            </div>
        </div>
    </div>
</div>

<?php get_footer('aboutus'); ?>
