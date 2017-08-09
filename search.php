<?php get_header(); ?>
<?php
    $result = $_GET['s']; //获取搜索内容
    $tiaoj = $_GET['sosearch']; //获取搜索条件，上面写到按照标题，作者，全文
    $cat = $_GET['cat'];
    $posts = query_posts($query_string.'&category_name='.$cat);
    if ($cat == 'resources') {
        $banners = array('3-banner.jpg');
        $bannerTitle = '岩睿·汇聚最全直播网红 让传播更有价值';
        $bannerSubTitle = 'LIVE NET RED';
    } else {
        $banners = array('4-banner.jpg');
        $bannerTitle = '岩睿·量身定制品牌H5创意传播方案';
        $bannerSubTitle = 'TAILOR MADE';
    }
    include(TEMPLATEPATH . '/banner.php');
?>

<form method="get" class="divSearch" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input name="s" id="s" type="text" class="text" value="<?php echo $result; ?>" />
    <input name="cat" id="cat" type="text" class="text" value="<?php echo $cat; ?>" hidden>
    <input id="searchsubmit" type="submit" class="submit btnSearch" value="" />
</form>
<?php if ($cat== 'resources') {   ?>
    <?php include(TEMPLATEPATH . '/templete-submit.php'); ?>
    <p class="position">您所在的位置：<a href="<?php echo home_url(); ?>">首页</a> - <a href="<?php echo home_url('resources'); ?>">网红资源</a> - <?php echo '关键词: '.$result.'-总共找到'.count($posts).'条相关内容' ; ?></p>
    <div class="page-3">
        <section class="section-1">
            <div class="content">
                <div class="items">
                    <?php if(!empty($posts)) { ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="item">
                                <div class="info"><hr><?php the_content(); ?></div>
                                <figure><?php the_post_thumbnail(); ?></figure>
                                <p class="name"><?php the_title(); ?></p>
                                <span class="tag">粉丝数：<?php echo get_post_meta($post->ID, 'fans', $single = true); ?></span>
                                <a href="javascript:dateGirl();"><div class="bottomDiv"><div class="btnDate">预约主播</div><lable class="seeInfo">查看价格</lable></div></a>
                            </div>
                        <?php endwhile; ?>
                    <?php } else {
                        echo "<p class='noResult'>找不到相关结果</p>";
                    }?>
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
<?php } else { ?>
    <p class="position">您所在的位置：<a href="<?php echo home_url(); ?>">首页</a> - <?php echo '关键词: '.$result.'-总共找到'.count($posts).'条相关内容' ; ?></p>
    <div class="page-4">
        <section class="section-1">
            <div class="content">
                <div class="items">
                    <?php if(!empty($posts)) { ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <a href="<?php the_permalink() ?>"><div class='item'>
                                <figure><?php the_post_thumbnail(); ?></figure>
                                <p class='name'><?php the_title(); ?></p>
                                <span class='tagWithLine'>
                                <?php $category = get_the_category(); foreach ($category as $cat) {
                                    if ($cat->parent != 0) {
                                        echo $cat->cat_name;
                                    }
                                }?></span>
                                </span>
                                <div class='btnDetail'></div>
                            </div></a>
                        <?php endwhile; ?>
                    <?php } else {
                        echo "<p class='noResult'>找不到相关结果</p>";
                    }?>
                </div>
            </div>
        </section>
    </div>
<?php } ?>

<?php get_footer(); ?>
