<?php get_header('home'); ?>
<form method="get" class="divSearch" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input name="s" id="s" type="text" class="text" />
    <input name="cat" id="cat" type="text" class="text" value="case" hidden>
    <input id="searchsubmit" type="submit" class="submit btnSearch" value=" " />
</form>

<?php
    $banners = array('4-banner.jpg');
    $bannerTitle = '岩睿·量身定制品牌H5创意传播方案';
    $bannerSubTitle = 'TAILOR MADE';
    include(TEMPLATEPATH . '/banner.php');
    get_footer();
?>