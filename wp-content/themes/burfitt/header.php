<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Louise Burfitt</title>
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:700|Hind:300" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <?php wp_head();?>
</head>

<body>

<div class="nav-bar hidden-xs">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</div>

<div class="nav-bar show-xs">
    <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?>
</div>
    
<div class="container">

<div class="col-12 title-area">
    <a href="/">
        <img class="title-area__img" src="<?php echo get_theme_mod("header_image", "https://media-exp2.licdn.com/media/AAMAAQDGAAwAAQAAAAAAAAy_AAAAJDgzM2JjNmQ0LTExZjMtNDdmOS1hOTgyLWMzZmVlNWYyNTVkNQ.jpg");?>"/>
    </a>
    <h1><?php echo get_theme_mod("header_title", "Louise Burfitt");?></h1>
    <h2><?php echo get_theme_mod("header_desc", "");?></h2>
</div>



</div>