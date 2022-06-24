<div class="container" style="margin-top: 10pc;">
    <div class="row">
        <div class="col-md-6" style="background-color: #eee; border-radius: 30px; padding: 20px; margin-bottom: 30px;">
            <h3>Nouvelle exercice</h3>
            <form method="post" action="<?php echo site_url("regleC/ajout_exo"); ?>">
                <div class="row">
                    <div class="col col-contact">
                        <div class="modern-form__form-group--padding-r form-group mb-3">
                            <input class="form-control input input-tr" min="1800" max="5000" type="number" name="an" placeholder="Année">
                            <div class="line-box">
                                <div class="line"></div>
                            </div>
                        </div>
                        <div class="modern-form__form-group--padding-r form-group form-floating mb-3">
                            <input class="form-control input input-tr" name="debut" id="debut" type="date" placeholder="Debut" />
                            <label for="debut">Debut</label>
                            <div class="line-box">
                                <div class="line"></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center"><button class="btn btn-primary submit-now" type="submit">Insérer</button></div>
                </div>
            </form>
        </div>
        <div class="col-md-4 offset-md-2" style="background-color: #eee; border-radius: 30px; padding: 20px; margin-bottom: 30px;">
            <h3>Code journal</h3>
            <form method="post" action="<?php echo site_url("regleC/ajout_journal"); ?>">
                <div class="row">
                    <div class="col col-contact">
                        <div class="modern-form__form-group--padding-r form-group mb-3">
                            <input class="form-control input input-tr" type="text" name="libelle" placeholder="Libellé">
                            <div class="line-box">
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center"><button class="btn btn-primary submit-now" type="submit">Ajouter</button></div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6" style="background-color: #eee; border-radius: 30px; padding: 20px; margin-bottom: 30px;">
            <h3>Nombre de charactère <span class="badge rounded-pill bg-primary"><?php echo $nb; ?></span></h3>
            <form method="post" action="<?php echo site_url("regleC/modif_caractere"); ?>">
                <div class="row">
                    <div class="col col-contact">
                        <div class="modern-form__form-group--padding-r form-group form-floating mb-3">
                            <input class="form-control input input-tr" name="nb" id="nombre" type="number" min="5" placeholder="Nombre" />
                            <label for="nombre">nombre</label>
                            <div class="line-box">
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center"><button class="btn btn-primary submit-now" type="submit">Modifier</button></div>
                </div>
            </form>
        </div>
    </div>

</div>