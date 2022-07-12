<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Plan comptable</title>
    <link rel="stylesheet" href="<?php echo site_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rufina&amp;display=swap">
    <link rel="stylesheet" href="<?php echo site_url('assets/fonts/fontawesome-all.min.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/untitled.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/ysf-hover-navbar-1.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/ysf-hover-navbar.css') ?>">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand bg-light navigation-clean">
        <div class="container"><a class="navbar-brand" href="#" style="font-family: calibri, serif;">Plan comptable</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"></button>
            <div class="collapse navbar-collapse" id="navcol-1"></div>
        </div>
    </nav>
    <header class="text-center text-white masthead" style="background: url(&quot;assets/img/bg-masthead.jpg&quot;);background-size: cover;height: 200px;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto position-relative">
                    <h1 class="mb-5" style="font-family: Rufina, serif;">Système d'information: gestion de comptabilité</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="text-center bg-light features-icons">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="<?php echo site_url('regleC/saisie') ?>">
                        <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                            <div class="d-flex features-icons-icon"><i class="fas fa-pencil-ruler m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                            <h3 style="font-family: Rufina, serif;">Règle</h3>
                        </div>

                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="<?php echo site_url('compteC/saisie') ?>">
                        <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                            <div class="d-flex features-icons-icon"><i class="fas fa-project-diagram m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                            <h3 style="font-family: Rufina, serif;">Compte</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="<?php echo site_url('comptetiersC/saisie') ?>">
                        <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                            <div class="d-flex features-icons-icon"><i class="fa fa-universal-access m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                            <h3>Compte tiers</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="<?php echo site_url('choixCodeJournalC/saisie') ?>">
                        <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                            <div class="d-flex features-icons-icon"><i class="fas fa-pen-nib m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                            <h3 style="font-family: Rufina, serif;">Ecriture</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="<?php echo site_url('livreC/liste') ?>">
                        <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                            <div class="d-flex features-icons-icon"><i class="fas fa-balance-scale m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                            <h3 style="font-family: Rufina, serif;">Balance</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="<?php echo site_url('DeviseC/liste') ?>">
                        <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                            <div class="d-flex features-icons-icon"><i class="fas fa-money-check m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                            <h3 style="font-family: Rufina, serif;">Devise</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="<?php echo site_url('EtatFinancierC/bilan') ?>">
                        <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                            <div class="d-flex features-icons-icon"><i class="fas fa-newspaper m-auto text-primary" data-bss-hover-animate="pulse"></i></div>
                            <h3 style="font-family: Rufina, serif;">Etats financiers</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer" style="max-height: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-start my-auto h-100">
                    <p class="text-muted small mb-4 mb-lg-0"></p>
                </div>
                <div class="col-lg-6 text-center text-lg-start my-auto h-100">
                    <p class="small mb-4 mb-lg-0" style="text-align: right;font-family: calibri">© Exo <?php echo $exo->annee; ?> Du <?php echo $exo->debut; ?> au <?php echo $exo->fin; ?>. </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>