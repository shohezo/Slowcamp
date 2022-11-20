<footer class="ly_footer hp_ptSm">
    <div class="ly_inner hp_pbSm">
        <div class="bl_footer_container">
            <a class="el_logo" href="<?php echo esc_url(home_url('/'));?>">
                <div>
                    <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="ロゴ画像" />
                </div>
            </a>
            <div class="hp_flex">
                <div class="el_icon hp_mr10">
                    <a href="https://www.instagram.com/slowcamp.fujigaoka/" target="_blank"
                        rel="noopener noreferrer"><img src="<?php bloginfo('template_url');?>/img/instagram.png"
                            alt="インスタグラムのリンクアイコン" /></a>
                </div>
                <div class="el_icon">
                    <a href="https://www.facebook.com/Slow-Camp-%E3%82%A2%E3%82%B8%E3%82%A2%E3%83%B3%E9%81%8A%E9%A3%AF%E9%85%92%E5%A0%B4-128171247240680/"
                        target="_blank" rel="noopener noreferrer"><img
                            src="<?php bloginfo('template_url');?>/img/facebook.png" alt="フェイスブックのリンクアイコン" /></a>
                </div>
            </div>
            <nav>
                <ul class="bl_footerNav">
                    <div class="hp_flex hp_aic">
                        <li class="bl_footerNav_item">
                            <a class="bl_footerNav_link" href="<?php bloginfo('url');?>/#kodawari">KODAWARI</a>
                        </li>
                        <li class="bl_footerNav_item">
                            <a class="bl_footerNav_link" href="<?php bloginfo('url');?>/#menu">MENU</a>
                        </li>
                        <li class="bl_footerNav_item">
                            <a class="bl_footerNav_link" href="<?php bloginfo('url');?>/#takeout">TAKEOUT</a>
                        </li>
                    </div>
                    <div class="hp_flex hp_aic">
                        <li class="bl_footerNav_item">
                            <a class="bl_footerNav_link" href="<?php bloginfo('url');?>/#photo">PHOTO</a>
                        </li>
                        <li class="bl_footerNav_item">
                            <a class="bl_footerNav_link" href="<?php bloginfo('url');?>/#info">INFO</a>
                        </li>
                        <li class="bl_footerNav_item">
                            <a class="bl_footerNav_link" href="<?php bloginfo('url');?>/#access">ACCESS</a>
                        </li>
                    </div>
                </ul>
            </nav>
        </div>
    </div>
    <div class="ly_copyright">
        <div class="ly_inner hp_pt20 hp_pb20">
            <span>©️2022 Slowcamp Rights Reserved.</span>
            <!-- <a href="https://ss-design1104.com/" target="_blank" rel="noopener noreferrer" class="bl_production">
                <p>produced by</p>
                <img src="<?php bloginfo('template_url');?>/img/ss-design_logo.png" alt="SS-DESIGNのロゴ">
            </a> -->
        </div>
    </div>
</footer>
<!--ローディングアニメーション -->
<div class="loading">
    <div class="loading-animation">
        <a class="el_logo">
            <img src=" <?php bloginfo('template_url');?>/img/logo_loading.png" alt="ロゴマーク" />
        </a>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/script.js"></script>
<?php wp_footer();?>
<!-- AOS実装 -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
</script>
</body>

</html>