<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Noto+Sans|Sawarabi+Mincho&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/common.css">

    <?php
        if( is_front_page() ) //topページ用のCSS
        {
            $slug = 'top';
        }
        else if( is_archive() ) // 投稿一覧ページ用のCSS
        {
            $slug = 'archive';
        }
        else if( is_single() ) // 投稿詳細ページ用のCSS
        {
            $slug = 'single';
        }
        else if( is_page() ) // 固定ページ用のCSS
        {
            $slug = basename( get_permalink() );
        }
    ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $slug; ?>.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="row_area">
            <div class="header_contents">
                <h1><a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/common/img/logo-header.svg" alt="APARIロゴ"></a></h1>
                <ul class="g_menu">
                    <li><a href="<?php echo esc_url(home_url()); ?>/about">about</a></li>
                    <li><a href="<?php echo esc_url(home_url()); ?>/access">access</a></li>
                    <li><a href="<?php echo esc_url(home_url()); ?>/contact">contact</a></li>
                </ul>
                <figure class="menu_open"><img src="<?php echo get_template_directory_uri(); ?>/common/img/menu_open.png" alt="メニューオープン"></figure>
            </div>
        </div>
    </header>