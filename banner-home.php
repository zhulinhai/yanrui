<div class="bannerInfoDiv">
    <p class="title"><?php echo $bannerTitle; ?></p>
    <p class="subTitle"><?php echo $bannerSubTitle; ?></p>
</div>
<div class="swiper-container swiper-home">
    <div class="swiper-wrapper">
        <?php foreach ($banners as $value) { ?>
            <div class="swiper-slide" style="background: url('<?php echo get_bloginfo("template_url") ?>/img/<?php echo $value; ?>') no-repeat center; background-size: cover;"></div>
        <?php } ?>
    </div>
</div>

<?php if (count($banners) > 1) { ?>
    <!-- banner为1是 隐藏 -->
    <div class="pagination"></div>

    <script type="text/javascript">
        var bannerSwiper;
        /*初始Swiper*/
        function initSwiper() {
            bannerSwiper = new Swiper('.swiper-container', {
                threshold : 20,
                loop: true,
                followFinger: false,
                centeredSlides: true,
                slideToClickedSlide: true,
                pagination: '.pagination',
                autoplay: 3000,
                autoplayDisableOnInteraction: false
            });
        }

        $(function () {
            initSwiper();
        });
    </script>

<?php } ?>

