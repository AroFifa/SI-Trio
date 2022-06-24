<div class="container" style="margin-top: 10pc;">
    <div class="row">
        <div class="col-md-6" style="background-color: #eee; border-radius: 30px; padding: 20px; margin-bottom: 30px;">
            <h3>Nouveau compte</h3>
            <form method="post" action="<?php echo site_url("CompteC/ajout_compte") ?>">
                <div class="row">
                    <div class="col col-contact">
                        <div class="modern-form__form-group--padding-r form-group form-floating mb-3">
                            <input class="form-control input input-tr" name="num" id="num" type="text" placeholder="Numéro" />
                            <label for="num">Numéro</label>
                            <div class="line-box">
                                <div class="line"></div>
                            </div>

                        </div>
                        <div class="modern-form__form-group--padding-r form-group form-floating mb-3">
                            <input class="form-control input input-tr" name="title" id="title" type="text" placeholder="Intitulé" />
                            <label for="title">Intitulé</label>
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
            <h3>Importation</h3>
            <form method="post" enctype="multipart/form-data" action="<?php echo site_url("compteC/upload_compte") ?>">
                <div class="row">

                    <div class="modern-form__form-group--padding-r form-group mb-3">
                        <input class="form-control input input-tr" name="csv" placeholder="csv" type="file" id="imp">
                        <label for="imp"><?php echo $error; ?></label>
                        <div class="line-box">
                            <div class="line"></div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col text-center"><button class="btn btn-primary submit-now" type="submit">Importer</button></div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>