<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/css/idangerous.swiper2.7.6.css ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script src="<?php echo get_bloginfo('template_url') ?>/js/jquery-1.10.1.min.js"></script>
<script src="<?php echo get_bloginfo('template_url') ?>/js/idangerous.swiper2.7.6.min.js"></script>
</head>
<body>
<div id="wrapper">
    <div id="header">
        <div class="content">
            <a href="<?php echo home_url(); ?>"><div class="logo"><img src="<?php echo get_bloginfo('template_url') ?>/img/1-logo.png" alt=""/></div></a>
            <a href="<?php echo home_url('result');?>"><div class="btnSearch"></div></a>
            <?php
                $items = array(
                    array("index"=>4,"title"=>"关于我们",'subTitle'=>'ABOUT','href'=>home_url('aboutus')),
                    array("index"=>3,"title"=>"案例展示",'subTitle'=>'CASE','href'=>home_url('case')),
                    array("index"=>2,"title"=>"网红资源",'subTitle'=>'RED NET','href'=>home_url('resources')),
                    array("index"=>1,"title"=>"服务项目",'subTitle'=>'SERVICE','href'=>home_url('service')),
                    array("index"=>0,"title"=>"首页",'subTitle'=>'HOME','href'=>home_url())
                );
                foreach ($items as $item) { ?>
                    <a href="<?php echo $item['href']; ?>"><div id="item<?php echo $item['index'];?>" class="item"><p class="title"><?php echo $item['title']; ?></p><p class="subTitle"><?php echo $item['subTitle']; ?></p><hr></div></a>
            <?php } ?>
        </div>
    </div>