<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
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

    <div id="main-wrapper" class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="mb-5">
                                        <h3 class="h4 font-weight-bold text-theme">Définition d'une exercice</h3>
                                    </div>
                                    <form method="post" action="<?php echo site_url('Home/login'); ?>">
                                        <div class="mb-3">
                                            <label for="e">Exercice</label>
                                            <select class="form-select" id="e" aria-placeholder="Exercice" name="exercice">

                                                <?php foreach ($exo as $view) { ?>

                                                    <option value=<?php echo $view['id'] ?>><?php echo $view['annee'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Valider</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="mb-5">
                                        <h3 class="h4 font-weight-bold text-theme">Nouvelle exercice</h3>
                                    </div>
                                    <form method="post" action="<?php echo site_url('regleC/ajout_exo'); ?>">
                                        <div class="mb-3">
                                            <label for="annee" class="form-label">Année</label>
                                            <input type="number" name="an" class="form-control" id="annee">
                                        </div>
                                        <div class="mb-3">
                                            <label for="debut" class="form-label">Debut</label>
                                            <input type="date" name="debut" class="form-control" id="debut">
                                        </div>
                                        <div class="mb-3">
                                            <label for="mois" class="form-label">Nombre de mois</label>
                                            <input type="number" min="1" max="12" name="mois" class="form-control" id="mois">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Créer</button>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- end row -->

            </div>
            <!-- end col -->
        </div>
        <!-- Row -->
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>