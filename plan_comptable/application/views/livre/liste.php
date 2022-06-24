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
                <a class="navbar-brand" href="#">Balance</a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                    <span class="visually-hidden">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url("livreC/liste") ?>">Liste</a></li>
                    </ul>
                    <a class="btn btn-light action-button" role="button" href="<?php echo site_url("home/welcome") ?>">Accueil</a>
                </div>
            </div>
        </nav>
    </header>

    <div class="container" style="margin-top: 10pc;">
        <div class="row">
            <div class="col-md-10 " style="background-color: #eee; border-radius: 30px; padding: 20px;">
                <div id="search"></div>
                <form class="d-flex" method="get" action="<?php echo site_url('livreC/liste') ?>">
                    <div class="col col-md-3 form-floating">
                        <input class="form-control me-2" type="date" placeholder="Date" name="date" id="d">
                        <label for="d">Date</label>
                    </div>
                    <div class="col col-md-3 form-floating">
                        <input class="form-control me-2" type="search" placeholder="Compte" name="q" id="q">
                        <label for="q">Compte</label>
                    </div>
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Date </th>
                            <th scope="col">numéro</th>
                            <th scope="col">Intitulé</th>
                            <th scope="col">mouvement crédit</th>
                            <th scope="col">mouvement débit</th>
                            <th scope="col">solde créditeur</th>
                            <th scope="col">solde débiteur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($livres as $view) { ?>
                            <tr>
                                <th scope="row"><?php echo $view['date'] ?></th>
                                <td><a href="<?php echo site_url("livreC/liste_mouvement?num=" . $view['numero']); ?>"><?php echo $view['numero'] ?></a></td>
                                <td><?php echo $view['intitule'] ?></td>
                                <td><?php echo $view['mvc'] ?></td>
                                <td><?php echo $view['mvd'] ?></td>
                                <td><strong><?php echo $view['crediteur'] ?></strong></td>
                                <td><strong><?php echo $view['debiteur'] ?></strong></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <?php if (count($livres) != 0) { ?>
                    <tfoot>
                        <tr>
                            <th scope="col">Totale: </th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"><?php echo $livres[0]['solde_credit'] ?></th>
                            <th scope="col"><?php echo $livres[0]['solde_debit'] ?></th>
                        </tr>
                    </tfoot>
                    <?php } ?>
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