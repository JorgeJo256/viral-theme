<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Viral</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/viral.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
</head>
<body>
    <header class="row header"> 
        <section class="col-6 header_main">
            <section class="col-12 header_logo">
                <figure class="headerLogo_img e-center">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/viral.png" alt="Logo Viral" title="Logo Viral">
                </figure>
            </section>

            <?php wp_nav_menu( array(
                'theme_location' => 'header_menu',
                'container' => 'nav',
                'container_class' => 'col-12 header_nav',
                'container_id' => '',
                'items_wrap' => '<ul class="nav nav_main justi-center t-bold t-black">%3$s</ul>',
                'menu_class' => 'nav-item nav_item'
            )); ?>

        </section>
        <section class="col-6 header_sec a-center">
            <div class="row full-width">

                <?php wp_nav_menu( array(
                    'theme_location' => 'social_menu',
                    'container' => 'nav',
                    'container_class' => 'col-5 social__nav',
                    'container_id' => '',
                    'items_wrap' => '<ul class="nav social__nav justi-center">%3$s</ul>',
                    'menu_class' => 'nav-item nav_item social__nav',
                    'link_before' => '<span class= "d-none social__nav" >',
                    'link_after' => '</span>'
                )); ?>

                    <section class="search_input col-7 a-center">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Buscar" aria-label="Búsqueda" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                    <i class="fas fa-search t-black"></i>
                                </button>
                            </div>
                        </div> 
                    </section>
        </div>
        </section>
    </header>
    <section class="main row">