<?php get_header(); ?>
<div class="page-6-1">
    <p class="position">您所在的位置：<a href="<?php echo home_url(); ?>">首页</a> - <a href="<?php echo home_url('case');?>">案例</a> - <?php echo the_title(); ?></p>
    <div class="content">
        <div class="leftDiv">
            <iframe width="350px" height="560px" style="margin-top: 78px" frameborder="0" src="<?php echo get_post_meta($post->ID, 'linkUrl', $single = true); ?>" ></iframe>
        </div>
        <div class="rightDiv">
            <?php if(have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <p class="title"><?php the_title(); ?></p>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="post">
                    <h2><?php _e('Not Found'); ?></h2>
                </div>
            <?php endif; ?>
        </div>
        <div class="navigation">
            <div class="fLeft"><?php $cat=get_category_by_slug('h5'); if (get_next_post(true,$cat->term_id,'category')) { next_post_link('上一篇: %link','%title',true, $cat->term_id,'category');} else { echo "已是最新文章";} ?></div>
            <div class="fRight"><?php $cat=get_category_by_slug('h5'); if (get_previous_post(true,$cat->term_id,'category')) { previous_post_link('下一篇: %link','%title',true, $cat->term_id,'category');} else { echo "已是最后文章";} ?></div>
        </div>
    </div>
</div>
<?php get_footer('case'); ?>