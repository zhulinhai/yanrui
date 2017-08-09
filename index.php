<?php get_header('home'); ?>
    <?php
        $banners = array('1-banner-1.jpg','1-banner-2.jpg','1-banner-3.jpg');
        $bannerTitle = '岩睿·视频直播营销专业科技公司';
        $bannerSubTitle = 'LIVE VIDEO MARKETING';
        include(TEMPLATEPATH . '/banner-home.php');
        include(TEMPLATEPATH . '/templete-submit.php');
    ?>
    <div class="page-1">
        <section class="section-1">
            <div class="content">
                <?php
                $items = array(
                    array("img"=>"/img/1-H5","title"=>"H5开发","info"=>"H5 DEVELOPMENT","num"=>'1','href'=>'h5'),
                    array("img"=>"/img/1-media","title"=>"多媒体服务","info"=>"MULTIMEDIA SERVICE","num"=>'2','href'=>'media'),
                    array("img"=>"/img/1-design","title"=>"视觉设计","info"=>"VISUAL DESIGN","num"=>'3','href'=>'design'),
                    array("img"=>"/img/1-resources","title"=>"网红资源","info"=>"NET RED RESOURCES","num"=>'4','href'=>'resources')
                );
                foreach ($items as $item) { ?>
                    <a href="<?php echo $item['href']; ?>"><div class="item">
                        <div class="lineRight" style="<?php if ($item['num']=='4') {echo 'display:none';} ?>"></div>
                        <div class="ring"></div>
                        <figure class="imgHover"><img src="<?php echo get_bloginfo('template_url') ?>/<?php echo $item['img']; ?>-hover.png" alt=""></figure>
                        <p class="num"><?php echo $item['num']; ?></p>
                        <figure><img class="imgNormal" src="<?php echo get_bloginfo('template_url') ?>/<?php echo $item['img']; ?>.png" /></figure>
                        <p class="title"><?php echo $item['title']; ?></p>
                        <p class="info"><?php echo $item['info']; ?></p>
                        <div class="lineBottom"></div>
                    </div></a>
                <?php } ?>
            </div>
        </section>
        <section class="section-2">
            <div class="num">
                <p class="p1">2017</p>
                <p class="p2">MINS</p>
            </div>
            <div class="fLeft">
                <p class="title"><span>A</span>BOUT US</p>
                <p class="subTitle">智慧创绎  睿新互联</p>
                <p class="info">岩睿（北京）科技有限公司，成立于2013年。公司主营H5开发、多媒体服务、视觉设计、网红资源四大服务。拥有10年以上的从业经验，曾服务国际和国内大公司，曾出任包括华为、易车、昆仑科技等技术骨干。</p>
                <a href="aboutus"><div class="arrow"><figure><img src="<?php echo get_bloginfo('template_url') ?>/img/1-arrowRight-hover.png" align="" /></figure></div></a>
            </div>
            <div class="fRight" style="float: right"></div>
        </section>
        <section class="section-3">
            <figure><img class="title" src="<?php echo get_bloginfo('template_url') ?>/img/1-title-1.png" /></figure>
            <div id="categoryMenu" class="menu"><a class="hover" href="javascript:clickItem('0');">全部</a><a href="javascript:clickItem('1');">H5</a><a href="javascript:clickItem('2');">多媒体</a><a href="javascript:clickItem('3');">设计</a></div>
            <div id="categoryContent" class="content">
                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'category_name' => 'case',
                        'showposts' => 6,  //展示6篇文章
                        'paged' => $paged
                    );
                    query_posts($args);
                ?>
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
            </div>
            <a href="case"><div class="btnMore">查看更多</div></a>
        </section>
        <section class="section-4">
            <figure><img class="title" src="<?php echo get_bloginfo('template_url') ?>/img/1-title-2.png" alt="" /></figure>
            <div class="content">
                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'category_name' => 'resources',
                        'showposts' => 6,  //展示6篇文章
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
            <a href="resources"><div class="btnMore">查看更多</div></a>
        </section>
    </div>
    <script type="text/javascript">
        var clickedItem = 0;
        var $items = $('#categoryMenu').find('a');
        var slugList = ['case', 'h5', 'media', 'design'];

        function clickItem(index) {
            /*更新按钮选项的状态*/
            $($items[clickedItem]).removeClass('hover');
            $($items[index]).addClass('hover');
            clickedItem = index;

            /*请求API，获取分类的内容*/
            var url = '/?json=get_category_posts&slug=' + slugList[index] +'&count=6';
            $.ajax({
                type: "GET",
                url: url,
                dataType: "json",
                jsonp: "callback",
                success: function (data) {
                    var res = eval(data);
                    if (res.status == 'ok') {
                        var dataSource = data.posts;
                        var content = '';
                        for (var i=0;i< dataSource.length; i++) {
                            var catName = '', imgUrl = '';
                            for (var j = 0; j < dataSource[i].categories.length; j ++) {
                                if (dataSource[i].categories[j].parent > 0) {
                                    catName = dataSource[i].categories[j].title; break;
                                }
                            }
                            if (dataSource[i].thumbnail_images.large) {
                                imgUrl = dataSource[i].thumbnail_images.large.url;
                            }
                            content += "<a href='" + dataSource[i].url +"'><div class='item'><figure><img src='" + imgUrl + "'/></figure><p class='name'>" + dataSource[i].title +"</p><span class='tagWithLine'>" + catName +"</span><div class='btnDetail'></div></div></a>";
                        }
                        $('#categoryContent').html(content);
                    }
                },
                error:function(msg){
                    msg = eval('(msg)');
                    console.log(msg);
                }
            });
        }

        $(function () {
            $('#item0').addClass('itemHover');
        });

    </script>

<?php get_footer(); ?>
