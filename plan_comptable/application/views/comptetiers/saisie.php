<div class="container" style="margin-top: 10pc;">
    <div class="row">
        <div class="col col-md-6 offset-md-2" style="background-color: white; border-radius: 30px; padding: 20px;">
            <h5>Enregistrement d'un compte tiers</h5>
            <form method="post" action="<?php echo site_url("ComptetiersC/ajout_tiers") ?>">
                <div class="row">
                    <div class="col col-contact">
                        <div class="modern-form__form-group--padding-r form-group form-floating mb-3">
                            <input class="form-control input input-tr" name="num" id="num" type="text" placeholder="Numéro" />
                            <label for="num">Identification</label>
                            <div class="line-box">
                                <div class="line"></div>
                            </div>

                        </div>
                        <div class="modern-form__form-group--padding-r form-group form-floating mb-3">
                            <input class="form-control input input-tr" name="nom" id="title" type="text" placeholder="Nom" />
                            <label for="title">Nom</label>
                            <div class="line-box">
                                <div class="line"></div>
                            </div>

                        </div>
                        <div class="modern-form__form-group--padding-r form-group mb-3">

                            <label for="compte">Compte</label>

                            <input list="cmp" class="form-control input input-tr" name="compte" id="compte" type="text" placeholder="compte" />
                            <datalist id="cmp">
                                <?php foreach ($compte as $view) { ?>
                                    <option value="<?php echo $view['numero']; ?>"><?php echo $view['numero']; ?>: <?php echo $view['intitule']; ?> </option>
                                <?php } ?>
                            </datalist>
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
    </div>
</div>