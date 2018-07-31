<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Viral</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

</head>
<body>
    <header class="row">
        <section class="col-6 header_main">
            <section class="col-12 header_logo">
                <figure>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/viral.png" alt="Logo Viral" title="Logo Vira">
                </figure>
            </section>
            <nav class="col-12 header_nav">
                <ul class="nav nav_main">
                    <li class="nav-item nav_item">
                        <a class="nav-link nav_link" href="#">Active</a>
                    </li>
                    <li class="nav-item nav_item">
                        <a class="nav-link nav_link" href="#">Link</a>
                    </li>
                    <li class="nav-item nav_item">
                        <a class="nav-link nav_link" href="#">Link</a>
                    </li>
                    <li class="nav-item nav_item">
                        <a class="nav-link nav_link" href="#">Disabled</a>
                    </li>
                </ul>
            </nav>
        </section>
        <section class="col-6 header_sec">
            <div class="row">
                <nav class="col-5 nav_social">
                    <ul class="nav nav_main">
                        <li class="nav-item nav_item">
                            <a class="nav-link nav_link active" href="#">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </li>
                        <li class="nav-item nav_item">
                            <a class="nav-link nav_link" href="#">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                        </li>
                        <li class="nav-item nav_item">
                            <a class="nav-link nav_link" href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item nav_item">
                            <a class="nav-link nav_link" href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </nav>   
                <section class="search_input col-7">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div> 
                </section>
        </div>
        </section>
    </header>
</body>
</html>