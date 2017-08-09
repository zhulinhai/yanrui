<?php get_header(); ?>

<form method="get" class="divSearch" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input name="s" id="s" type="text" class="text" />
    <input name="cat" id="cat" type="text" class="text" value="resources" hidden>
    <input id="searchsubmit" type="submit" class="submit btnSearch" value=" " />
</form>
<?php
    $banners = array('3-banner.jpg');
    $bannerTitle = '岩睿·汇聚最全直播网红 让传播更有价值';
    $bannerSubTitle = 'LIVE NET RED';
    include(TEMPLATEPATH . '/banner.php');
    include(TEMPLATEPATH . '/templete-submit.php');
?>
<p class="position">您所在的位置：<a href="<?php echo home_url(); ?>">首页</a> - 网红资源</p>
<div class="page-3">
    <section class="section-1">
        <div class="content">
            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'category_name' => 'resources',
                    'showposts' => 9,  //展示9篇文章
                    'paged' => $paged
                );
                query_posts($args);
            ?>
            <div class="items">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="item">
                        <div class="info"><hr><?php the_content(); ?></div>
                        <figure><?php the_post_thumbnail(); ?></figure>
                        <p class="name"><?php the_title(); ?></p>
                        <span class="tag">粉丝数：<?php echo get_post_meta($post->ID, 'fans', $single = true); ?></span>
                        <a href="javascript:dateGirl();"><div class="bottomDiv"><div class="btnDate">预约主播</div><lable class="seeInfo">查看价格</lable></div></a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="page_navi"><?php par_pagenavi(9); ?></div>
    </section>
</div>
<script type="text/javascript">
    $(function () {
        $('#item2').addClass('itemHover');
    });
</script>

<?php get_footer(); ?>