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

<body>

    <header>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
            <div class="container">
                <a class="navbar-brand" href="#">Grand livre</a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                    <span class="visually-hidden">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url("livreC/liste") ?>">Balance</a></li>
                    </ul>
                    <a class="btn btn-light action-button" role="button" href="<?php echo site_url("home/welcome") ?>">Accueil</a>
                </div>
            </div>
        </nav>
    </header>
    <div>
        <div class="container" style="margin-top: 10pc; background-color: #eee;">
            <div style="background-color: #ddd; border-radius: 20px;">
                <br>
                <h5><strong>Compte: </strong> <?php echo $mouvements[0]["num_compte"]; ?></h5>
                <h6><strong>Intitulé: </strong> <?php echo $mouvements[0]["intitule"]; ?></h6>
                <br>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h1>Debit</h1>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Tiers</th>
                                    <th>Libellé</th>
                                    <th>Montant</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($mouvements as $view) {
                                    if ($view['debit'] != 0) { ?>
                                        <tr>
                                            <td scope="row"><?php echo $view['date'] ?></td>
                                            <td scope="row"><?php echo $view['nom_tiers'] ?></td>
                                            <td scope="row"><?php echo $view['libelle'] ?></td>
                                            <th><?php echo $view['debit'] ?></th>
                                        </tr>
                                <?php }
                                } ?>
                            </tbody>
                            <?php if (count($mouvements) != 0) {
                                if ($mouvements[0]['debit'] != 0) {
                            ?>
                                    <tfoot>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col">Totale: </th>
                                            <th scope="col"><?php echo $mouvements[0]['mvd'] ?></th>
                                        </tr>
                                    </tfoot>
                            <?php
                                }
                            }
                            ?>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <h1>credit</h1>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Tiers</th>
                                    <th>Libellé</th>
                                    <th>Montant</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($mouvements as $view) {
                                    if ($view['credit'] != 0) { ?>
                                        <tr>
                                            <td scope="row"><?php echo $view['date'] ?></td>
                                            <td scope="row"><?php echo $view['nom_tiers'] ?></td>
                                            <td scope="row"><?php echo $view['libelle'] ?></td>
                                            <th><?php echo $view['credit'] ?></th>
                                        </tr>
                                <?php }
                                } ?>
                            </tbody>
                            <?php if (count($mouvements) != 0) {
                                if ($mouvements[0]['credit'] != 0) {
                            ?>
                                    <tfoot>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col">Totale: </th>
                                            <th scope="col"><?php echo $mouvements[0]['mvc'] ?></th>
                                        </tr>
                                    </tfoot>
                            <?php
                                }
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer" style="max-height: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-start my-auto h-100">
                    <p class="text-muted small mb-4 mb-lg-0"></p>
                </div>
                <div class="col-lg-6 text-center text-lg-start my-auto h-100">
                    <p class="small mb-4 mb-lg-0" style="text-align: right;">© Projet 2022. </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="<?php echo site_url('assets/js/jquery-3.6.0.js') ?>"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script src="<?php echo site_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/Swiper-Slider-Card-For-Blog-Or-Product.js') ?>"></script>
    <script src="<?php echo site_url('assets/dist/js/select2.min.js') ?>"></script>
    <script src="<?php echo site_url('assets/dist/js/script.js') ?>"></script>
    <script src="<?php echo site_url('assets/js/script.js') ?>"></script>

</body>

</html>