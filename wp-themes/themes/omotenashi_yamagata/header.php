<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php asset("css/bootstrap.min.css");?>">
    <link rel="stylesheet" href="<?php asset("css/fontawesome.min.css");?>">
    <link rel="stylesheet" href="<?php asset("css/style.css");?>">
    <?php wp_head();?>
</head>

<body <?php body_class()?>>
    <div class="wrapper">
        <header id="header">
            <div class="header-wrapper">
                <div class="container">
                    <div class="row header-logo">
                        <div id="logo" class="col-3">
                            <img src="<?php asset("images/logo.png");?>" alt="Logo">
                        </div>
                        <div class="col-6 header-right">
                            <div class="header-right-icon">
                                <span class="fa fa-facebook-square"></span>
                                <span class="fa fa-instagram"></span>
                            </div>
                            <div class="nav-header-menu">
                                <nav class="navbar navbar-expand-sm navbar-light bg-light ml-auto text-right">
                                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                                        data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                                        <ul class="navbar-nav mt-2 mt-lg-0 ml-auto text-right">
                                            <li>
                                                <a class="nav-link" href="#">Navbar</a>
                                            </li>
                                            <li class="nav-item active">
                                                <a class="nav-link" href="#">Home <span
                                                        class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>