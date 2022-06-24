<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Accueil</title>
    <link rel="stylesheet" href="<?php echo site_url('assets/dist/css/select2.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo site_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/reveal-nav-on-scroll.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/styles.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Swiper-Slider-Card-For-Blog-Or-Product-1.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/Swiper-Slider-Card-For-Blog-Or-Product.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/mouvement.css') ?>">
</head>

<body >
    <header >
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" >
            <div class="container">
                <a class="navbar-brand" href="#"><?php echo $model; ?></a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                    <span class="visually-hidden">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url($model . "C/saisie") ?>">Saisie</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url($model . "C/liste") ?>">Liste</a></li>
                    </ul>
                    <a class="btn btn-light action-button" role="button" href="<?php echo site_url("home/welcome") ?>">Accueil</a>
                </div>
            </div>
        </nav>
    </header>