<!DOCTYPE html>
<html>
    <head>
        <title>さわやか歯科クリニック</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="sawayaka dental clinic" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
        
        <?php wp_head(); ?>
    </head>

    <body>
        <div class="super_containaer">
        <!--ハンバーガーメニュー-->
            
            <button class="hbmenu" id="cl">
                <img src="images/icon_23.png" class="hbicon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon_23.png" class="hbicon"/>
            </button>            

            <div id="m-navi">
                <button class="opbtn" id="op">
                    <img src="images/mark_batu5.png" class="hbicon">
                </button>
                <div class="hbtitle">
                <h2>さわやか歯科クリニック</h2>
                </div>
                <ul>
                    <li class="navi-itemo"><a href="#medical-care">診療案内</a></li>
                    <li class="navi-itemo"><a href="#taisetsu-title">大切にしていること</a></li>
                    <li class="navi-itemo"><a href="#director-title">院長挨拶</a></li>
                    <li class="navi-itemo"><a href="staff.html">スタッフ紹介</a></li>
                    <li class="navi-itemo"><a href="">オンライン予約</a></li>
                </ul>
            </div>
        <!-- ヘッダーここから -->
        <header class="header">
         <div class="header-container">
         <div class="header-title">
            <h1>さわやか歯科クリニック</h1>
            <p>sawayaka dental clinic</p>
            </div>
            <nav class="nav-title">
            <a href="<?php echo home_url(); ?>/#medical-care">診療案内</a>
            <a href="<?php echo home_url(); ?>/#taisetsu-title">大切にしていること</a>
            <a href="<?php echo home_url(); ?>/#director-title">院長挨拶</a>
            <a href="<?php echo home_url(); ?>/staff">スタッフ紹介</a>
            <a href="<?php echo home_url(); ?>/reservation">オンライン予約</a>
            </nav>
            </div>
        </header>
