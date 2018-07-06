<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?> </title>
    <meta name="Strona poświęcona kryptowalutom." content="">
    <meta name="Piotr Gladysz" content="">
    <body class="gb-body">
	<div class="container">
        <div class="row ">
            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col- gb-col-xl-1 emptyRow">
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col- gb-col-xl-12 emptyRow">
                <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
                    <div class="logo"></div>
                    <div class="container "> <a class="navbar-brand" href="index.html"></a> 
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" 
                        data-target="#navbarResponsive" aria-controls="navbarResponsive"
                        aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse bg-dark" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto ">
                                <li class="nav-item"> 
                                    <a class="nav-link" href="<?php the_permalink(56);?> ">Strona Główna</a>
                                </li>
                                <li class="nav-item"> 
                                    <a class="nav-link" href="<?php the_permalink(39);?>">O nas</a> 
                                </li>
                                <li class="nav-item"> 
                                    <a class="nav-link" href="<?php the_permalink(35);?>">Blockchain</a> 
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Aktualności
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog"> 
                                        <a class="dropdown-item" href="<?php the_permalink(80);?>">Scam</a> 
                                        <a class="dropdown-item" href="<?php the_permalink(82);?>">Konferencje</a> 
                                        <a class="dropdown-item" href="<?php the_permalink(84);?>">Mining</a> 
                                        <a class="dropdown-item" href="<?php the_permalink(87);?>">ICO</a> 
                                    </div>
                                </li>
                                <li class="nav-item"> 
                                    <a class="nav-link" href="<?php the_permalink(69);?>">Technologia</a> 
                                </li>
                                <li class="nav-item"> 
                                    <a class="nav-link" href="<?php the_permalink(65);?>">Analizy</a> 
                                </li>
                                <li class="nav-item"> 
                                    <a class="nav-link" href="<?php the_permalink(78);?>">Giełdy</a> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col- gb-col-xl-1 emptyRow">
            </div>
        </div>

    <?php wp_head();?>
</head>

<body>



