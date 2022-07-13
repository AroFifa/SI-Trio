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
                <a class="navbar-brand" href="#">Etats Financiers</a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                    <span class="visually-hidden">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url("etatFinancierC/bilan") ?>">Bilan</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url("etatFinancierC/resultat") ?>">Compte des résultats</a></li>
                    </ul>
                    <a class="btn btn-light action-button" role="button" href="<?php echo site_url("home/welcome") ?>">Accueil</a>
                </div>
            </div>
        </nav>
    </header>

    <div class="container" style="margin-top: 10pc;">
        <div class="row">
            <div class="col-md-5" style="background-color: #eee; border-radius: 30px; padding: 20px; margin-bottom: 30px;">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Date de clôture de l'exercice:
                        <span class="badge bg-secondary rounded-pill"> <?php echo $exo->fin ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Unité monétaire:
                        <span class="badge bg-secondary rounded-pill"> Ariary</span>
                    </li>
                </ul>
            </div>

        </div>
        <div class="row">
            <div class="col-md-5" style="background-color: #eee; border-radius: 30px; padding: 20px;">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ACTIF </th>
                            <th>Note</th>
                            <th>Montant</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>ACTIFS NON-COURANTS</th>
                        </tr>
                        <?php foreach ($actifs_noncourants as $view) { ?>

                            <tr>
                                <td><?php echo $view['intitule'] ?></td>
                                <td><?php echo $view['num_compte'] ?></td>
                                <td><?php echo $view['montant'] ?></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th>TOTAL ACTIFS NON-COURANTS </th>
                            <th></th>
                            <th><?php echo $SANC; ?></th>
                        </tr>
                        <tr>
                            <th></th>
                        </tr>
                        </tr>
                        <tr>
                            <br>
                            <th>ACTIFS COURANTS</th>
                        </tr>
                        <?php foreach ($actifs_courants as $view) { ?>

                            <tr>
                                <td><?php echo $view['intitule'] ?></td>
                                <td><?php echo $view['num_compte'] ?></td>
                                <td><?php echo $view['montant'] ?></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th>TOTAL ACTIFS COURANTS</th>
                            <th></th>
                            <th><?php echo $SAC; ?></th>
                        </tr>
                        <tr>
                            <th></th>
                        </tr>
                        <tr>
                            <th>TOTAL DES ACTIFS</th>
                            <th></th>
                            <th><?php echo $SANC + $SAC; ?></th>
                        </tr>
                        <tr>
                            <th></th>
                        </tr>
                        <tr>
                            <th></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-5 offset-md-2" style="background-color: #eee; border-radius: 30px; padding: 20px;">
                <table class="table">
                    <thead>
                        <tr>
                            <th>PASSIF </th>
                            <th>Note</th>
                            <th>Montant</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>CAPITAUX PROPRES</th>
                        </tr>
                        <?php foreach ($capitaux as $view) { ?>

                            <tr>
                                <td><?php echo $view['intitule'] ?></td>
                                <td><?php echo $view['num_compte'] ?></td>
                                <td><?php echo $view['montant'] ?></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th>TOTAL DES CAPITAUX PROPRES </th>
                            <th></th>
                            <th><?php echo $SCP; ?></th>
                        </tr>
                        <tr>
                            <th></th>
                        </tr>
                        <tr>
                            <th></th>
                        </tr>
                        <tr>
                            <th>PASSIFS NON-COURANTS</th>
                        </tr>
                        <?php foreach ($passifs_noncourants as $view) { ?>

                            <tr>
                                <td><?php echo $view['intitule'] ?></td>
                                <td><?php echo $view['num_compte'] ?></td>
                                <td><?php echo $view['montant'] ?></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th>TOTAL PASSIFS NON-COURANTS </th>
                            <th></th>
                            <th><?php echo $SPNC; ?></th>
                        </tr>
                        <tr>
                        <tr>
                            <th></th>
                        </tr>
                        <th>PASSIFS COURANTS</th>
                        </tr>
                        <?php foreach ($passifs_courants as $view) { ?>

                            <tr>
                                <td><?php echo $view['intitule'] ?></td>
                                <td><?php echo $view['num_compte'] ?></td>
                                <td><?php echo $view['montant'] ?></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th>TOTAL PASSIFS COURANTS </th>
                            <th></th>
                            <th><?php echo $SPC; ?></th>
                        </tr>
                        <tr>
                            <th></th>
                        </tr>
                        <tr>
                            <th></th>
                        </tr>
                        <tr>
                            <th>TOTAL DES PASSIFS</th>
                            <th></th>
                            <th><?php echo $SPNC + $SPC + $SCP; ?></th>
                        </tr>
                    </tbody>
                </table>
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