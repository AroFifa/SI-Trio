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
</head>

<body>

    <header>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
            <div class="container">
                <a class="navbar-brand" href="#">ecriture</a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                    <span class="visually-hidden">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url("EcritureC/saisie") ?>">Saisie</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url("EcritureC/liste") ?>">Liste</a></li>
                    </ul>
                    <a class="btn btn-light action-button" role="button" href="<?php echo site_url("home/welcome") ?>">Accueil</a>
                </div>
            </div>
        </nav>
    </header>







    <div class="container" style="margin-top: 10pc;">
        <div class="row">
            <div class="col col-md-6 offset-md-2" style="background-color: #eee; border-radius: 30px; padding: 20px;">
                <h5>Choix du code Journal</h5>
                <form method="post" action="<?php echo site_url("ecritureC/form_saisie") ?>">
                    <div class="row">
                        <div class="col col-contact">
                            <div class="modern-form__form-group--padding-r form-group form-floating mb-3">
                                <input class="form-control input input-tr" required name="code" list="code" type="text" placeholder="code journal" />
                                <label for="code">Code journal</label>
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>

                            </div>
                            <div class="modern-form__form-group--padding-r form-group form-floating mb-3">
                                <!--<input class="form-control input input-tr" name="mois" id="mois" type="number" placeholder="mois" />-->
                                <select name="mois" required id="mois" class="form-control input input-tr">
                                    <?php for ($i = 1; $i <= 12; $i++) { ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                                <label for="mois">Mois</label>
                                <div class="line-box">
                                    <div class="line"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center"><button class="btn btn-primary submit-now" type="submit">Valider</button></div>
                    </div>
                </form>


            </div>
        </div>
    </div>






    <datalist id="code">
        <?php foreach ($journal as $view) { ?>
            <option value="<?php echo $view['libelle']; ?>"><?php echo $view['libelle']; ?> </option>
        <?php } ?>
    </datalist>

    <footer class="footer" style="max-height: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-start my-auto h-100">
                    <p class="text-muted small mb-4 mb-lg-0"></p>
                </div>
                <div class="col-lg-6 text-center text-lg-start my-auto h-100">
                    <p class="small mb-4 mb-lg-0" style="text-align: right;font-family: calibri">© Exercice <?php echo $exo->annee; ?> Du <?php echo $exo->debut; ?> au <?php echo $exo->fin; ?>. </p>
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