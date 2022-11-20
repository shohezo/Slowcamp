<!DOCTYPE html>
<html lang="jp">

<head prefix=”og: http://ogp.me/ns#”>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo wp_get_document_title();?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <!-- OGP -->
    <meta property="og:url" content="https://slow-camp.net" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Slowcamp" />
    <meta property="og:description" content="名古屋市名東区にあるタイ料理中心アジアン遊飯酒場" />
    <meta property="og:site_name" content="Slowcamp" />
    <meta property="og:image" content="https://slow-camp/public_html/wp-content/themes/Slowcamp/img/ogp.png" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/reset.css" />
    <!-- <link rel="icon" type="image/-icon" href="/img/favicon.ico" /> -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/img/favicon.ico">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/common.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/responsive.css" />
    <script src="https://kit.fontawesome.com/30c76fcb1e.js" crossorigin="anonymous"></script>
    <!-- Adobe fonts -->
    <script>
    (function(d) {
        var config = {
                kitId: 'xvg5lni',
                scriptTimeout: 3000,
                async: true
            },
            h = d.documentElement,
            t = setTimeout(function() {
                h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
            }, config.scriptTimeout),
            tk = d.createElement("script"),
            f = false,
            s = d.getElementsByTagName("script")[0],
            a;
        h.className += " wf-loading";
        tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
        tk.async = true;
        tk.onload = tk.onreadystatechange = function() {
            a = this.readyState;
            if (f || a && a != "complete" && a != "loaded") return;
            f = true;
            clearTimeout(t);
            try {
                Typekit.load(config)
            } catch (e) {}
        };
        s.parentNode.insertBefore(tk, s)
    })(document);
    </script>
    <!-- aosライブラリの読み込み -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script>
    <script type=" text/javascript" src="./js/jquery-migrate-1.4.1.min.js"></script>
</head>

<!-- ドロワーメニュー -->
<div class="bl_drawer">
    <ul class="bl_drawer_list">
        <!-- 開いたときの中身 -->
        <!-- <a class="el_btn hp_mbSm" href="<?php bloginfo('url');?>/reserve">ご予約はこちら</a> -->
        <li class="bl_drawer_item"><a href="<?php bloginfo('url');?>/#kodawari">KODAWARI</a>
        <li class="bl_drawer_item"><a href="<?php bloginfo('url');?>/#menu">MENU</a></li>
        <li class="bl_drawer_item"><a href="<?php bloginfo('url');?>/#takeout">TAKEOUT</a></li>
        <li class="bl_drawer_item"><a href="<?php bloginfo('url');?>/#photo">PHOTO</a></li>
        <li class="bl_drawer_item"><a href="<?php bloginfo('url');?>/#info">INFO</a></li>
        <li class="bl_drawer_item"><a href="<?php bloginfo('url');?>/#access">ACCESS</a></li>
        <div class="el_icon_wrapper hp_flex">
            <div class="el_icon hp_mr10">
                <a href="https://www.instagram.com/slowcamp.fujigaoka/" target="_blank" rel="noopener noreferrer"><img
                        src="<?php bloginfo('template_url');?>/img/instagram.png" alt="インスタグラムのリンクアイコン" /></a>
            </div>
            <div class="el_icon">
                <a href="https://www.facebook.com/Slow-Camp-%E3%82%A2%E3%82%B8%E3%82%A2%E3%83%B3%E9%81%8A%E9%A3%AF%E9%85%92%E5%A0%B4-128171247240680/"
                    target="_blank" rel="noopener noreferrer"><img
                        src="<?php bloginfo('template_url');?>/img/facebook.png" alt="フェイスブックのリンクアイコン" /></a>
            </div>
        </div>
    </ul>
    <div class="bl_drawerBtn">
        <!-- ハンバーガーボタン -->
        <span class="hambarg"></span>
        <span class="hambarg"></span>
        <span class="hambarg"></span>
    </div>
    <!--bl_drawerBtn-->
</div>
<!--bl_drawer-->

<body <?php body_class();?>>
    <?php wp_body_open();?>
    <header class="ly_header hp_bgc" id="header">
        <div class="ly_header_inner hp_flex hp_jcsb hp_aic">
            <a class="el_logo" href="<?php echo esc_url(home_url('/'));?>">
                <div>
                    <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="ロゴ画像" />
                </div>
            </a>
            <div class="hp_flex hp_aic">
                <nav>
                    <ul class="bl_headerNav">
                        <li class="bl_headerNav_item">
                            <a class="bl_headerNav_link" href="<?php bloginfo('url');?>/#kodawari">KODAWARI</a>
                        </li>
                        <li class="bl_headerNav_item">
                            <a class="bl_headerNav_link" href="<?php bloginfo('url');?>/#menu">MENU</a>
                        </li>
                        <li class="bl_headerNav_item">
                            <a class="bl_headerNav_link" href="<?php bloginfo('url');?>/#takeout">TAKEOUT</a>
                        </li>
                        <li class="bl_headerNav_item">
                            <a class="bl_headerNav_link" href="<?php bloginfo('url');?>/#photo">PHOTO</a>
                        </li>
                        <li class="bl_headerNav_item">
                            <a class="bl_headerNav_link" href="<?php bloginfo('url');?>/#info">INFO</a>
                        </li>
                        <li class="bl_headerNav_item">
                            <a class="bl_headerNav_link" href="<?php bloginfo('url');?>/#access">ACCESS</a>
                        </li>
                    </ul>
                </nav>
                <div class="bl_headerUtils">
                    <a class="el_btn" href="tel:+81-52-734-7106">
                        <div class="myicon1">
                            <svg width="20" height="20" viewBox="0 0 20 20">
                                <path
                                    d="M19.8085 16.6771L14.9701 11.8388C14.8663 11.7361 14.7311 11.671 14.5861 11.6538C14.4411 11.6365 14.2944 11.6682 14.1694 11.7438C13.2966 12.2718 12.6455 13.0989 12.3372 14.0713C12.1812 14.5599 11.6111 14.7838 11.1701 14.5192L11.1633 14.5124L11.1565 14.5056C9.03714 13.2345 7.26354 11.4609 5.99245 9.34156C5.99245 9.33477 5.98566 9.32798 5.98566 9.32798C5.71423 8.8869 5.93816 8.31689 6.42674 8.16082C7.40113 7.85638 8.22954 7.20427 8.75429 6.32863C8.91037 6.07077 8.86965 5.74505 8.65929 5.5279L3.82097 0.689575C3.71711 0.586884 3.58195 0.521779 3.43692 0.504571C3.29188 0.487363 3.14524 0.519036 3.02024 0.594573C2.42859 0.949532 1.93459 1.44615 1.58275 2.03965C1.23091 2.63315 1.03231 3.30489 1.00483 3.99429V4.00108C0.998047 4.06894 0.998047 4.1368 0.998047 4.20465C0.998047 4.29966 1.00483 4.38787 1.01162 4.47609C1.09237 7.16318 1.86105 9.78463 3.24417 12.0898C4.51313 14.207 6.29102 15.9849 8.40821 17.2539L8.415 17.2607C10.7493 18.6653 13.4094 19.4321 16.1305 19.4932C16.1848 19.4932 16.2391 19.5 16.2934 19.5H16.6734V19.4864C17.3331 19.4305 17.9702 19.2194 18.5328 18.8704C19.0953 18.5213 19.5673 18.0441 19.9103 17.4778C20.0595 17.2199 20.0188 16.8874 19.8085 16.6771Z" />
                            </svg>
                        </div>
                        050-5486-7903
                    </a>
                </div>
            </div>
            <!-- /.bl_headerUtils -->
        </div>
        <!-- /.ly_header_inner -->
    </header>
    <?php wp_head();?>