<?php get_header(); ?>
<div class="page-6-3">
    <p class="position">您所在的位置：<a href="<?php echo home_url(); ?>">首页</a> - <a href="<?php echo home_url('case');?>">案例</a> - <?php echo the_title(); ?></p>
    <div class="content">
        <?php if(have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="post">
                <h2><?php _e('Not Found'); ?></h2>
            </div>
        <?php endif; ?>
        <div class="navigation">
            <?php
                $categories = get_the_category();
                $categoryIDS = array();
                foreach ($categories as $category) {
                    array_push($categoryIDS, $category->term_id);
                }
                $categoryIDS = implode(",", $categoryIDS);
            ?>
            <div class="fLeft"><?php if (get_next_post($categoryIDS)) { next_post_link('上一篇: %link','%title',true);} else { echo "已是最新文章";} ?></div>
            <div class="fRight"><?php if (get_previous_post($categoryIDS)) { previous_post_link('下一篇: %link','%title',true);} else { echo "已是最后文章";} ?></div>
        </div>
    </div>
</div>
<?php get_footer('case'); ?>