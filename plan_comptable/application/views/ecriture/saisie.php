<div class="container" style="margin-top: 10pc;">
    <div class="row">
        <div class="col-md-6" style="background-color: #eee; border-radius: 30px; padding: 20px; margin-bottom: 30px;">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Exercice
                    <span class="badge bg-secondary rounded-pill"><?php echo $exo->debut ?> au <?php echo $exo->fin ?></span>
                    <span class="badge bg-secondary rounded-pill"><?php echo $exo->annee ?></span>

                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Journal
                    <span class="badge bg-secondary rounded-pill"><?php echo $code; ?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Mois
                    <span class="badge bg-secondary rounded-pill"><?php echo $mois; ?></span>
                </li>
            </ul>
            <!-- <h5>Importation de donnée</h5>
            <form method="post" enctype="multipart/form-data">
                <div class="row">

                    <div class="modern-form__form-group--padding-r form-group mb-3">
                        <input class="form-control input input-tr" name="csv" placeholder="csv" type="file" id="imp">
                        <label for="imp">Csv file</label>
                        <div class="line-box">
                            <div class="line"></div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col text-center"><button class="btn btn-primary submit-now" type="submit">Importer</button></div>
                </div>
            </form> -->
        </div>

        <div class="col-md-4 offset-md-2" style="background-color: #eee; border-radius: 30px; padding: 20px; margin-bottom: 30px;">
            <form method="post" action="<?php echo site_url("ecritureC/upload_ecriture/". $idjournal."/".$mois) ?>" enctype="multipart/form-data">
                <div class="row">

                    <div class="modern-form__form-group--padding-r form-group mb-3">
                        <input class="form-control input input-tr" name="csv" placeholder="csv" type="file" id="imp">
                        <label for="imp">Csv file</label>
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
    <div class="row">
        <div class="col" style="background-color: #eee; border-radius: 30px; padding: 20px;">
            <h5>Enregistrement d'un écriture</h5>
            <form method="POST" action="<?php echo site_url("EcritureC/enregistrer/" . $idjournal . "/" . $mois) ?>" onSubmit="return check_balance()">
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="table-responsive tbl-wfx">
                            <table class="table table-sm">
                                <thead class="text-dark font-md">
                                    <tr class="text-dark-blue">
                                        <th class="w-10x"><strong>Jour</strong></th>
                                        <th class="w-10x"><strong>Ref P/ce</strong></th>
                                        <th class="w-10x"><strong>Libellé</strong></th>
                                    </tr>
                                </thead>
                                <tbody class="h-15x">
                                    <tr>
                                        <td class="w-10x"><input type="number" required min="1" max="31" name="jour" class="form-control"></td>
                                        <td class="w-10x">
                                            <input type="text" name="refpiece" required placeholder="ref p/ce" class="form-control">
                                        </td>
                                        <td class="w-10x">
                                            <input type="text" name="libelle" class="form-control" placeholder="libellé">
                                        </td>
                                    </tr>


                                </tbody>


                                <thead class="text-dark font-md">
                                    <tr class="text-dark-blue">
                                        <th class="w-10x" style="color: gray;">Compte</th>
                                        <th class="w-10x" style="color: gray;">Tiers</th>
                                        <th class="w-10x" style="color: gray;">Devise</th>
                                        <th class="w-10x" style="color: gray;">montant</th>
                                        <th class="w-10x" style="color: gray;">Débit</th>
                                        <th class="w-10x" style="color: gray;">Crédit</th>
                                    </tr>
                                </thead>
                                <tbody class="h-15x" id="details">
                                    <!-- <div id="details"> -->
                                    <tr>
                                        <td class="w-10x">

                                            <input list="cmp" required class="form-control" id="1" name="compte[]" id="compte" type="text" placeholder="compte" />

                                        </td>
                                        <td class="w-10x">

                                            <input list="tiers" class="form-control" id="1" name="tiers[]" id="tiers" type="text" placeholder="tiers" />
                                        </td>
                                        <td class="w-10x">
                                            <select id="1" class="form-select" style="padding-right: 0px" name="devise[]">
                                                <?php foreach ($devise as $view) { ?>
                                                    <option value="<?php echo $view['id']; ?>"><?php echo $view['nom']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                        <td class="w-10x">
                                            <input id="1" type="number" min="0" name="taux[]" step="any" class="form-control" placeholder="taux de change">
                                            <input id="1" type="number" name="q[]" step="any" min="0" class="form-control" placeholder="quantité">
                                        </td>
                                        <td class="w-10x">
                                            <input id="1" type="number" name="debit[]" step="any" min="0" class="form-control" onkeyup="load_sumD()" onclick="fill_devise(this)" placeholder="débit">
                                        </td>
                                        <td class="w-10x">
                                            <input id="1" type="number" name="credit[]" step="any" min="0" class="form-control" onkeyup="load_sumC()" onclick="fill_devise(this)" placeholder=" crédit">
                                        </td>
                                        <datalist id="cmp">
                                            <?php foreach ($compte as $view) { ?>
                                                <option value="<?php echo $view['numero']; ?>"><?php echo $view['numero']; ?>: <?php echo $view['intitule']; ?></option>
                                            <?php } ?>
                                        </datalist>
                                        <datalist id="tiers">
                                            <?php foreach ($tiers as $view) { ?>
                                                <option value="<?php echo $view['numero']; ?>"><?php echo $view['numero']; ?>: <?php echo $view['nom']; ?> </option>
                                            <?php } ?>
                                        </datalist>
                                        <datalist id="dev">
                                            <?php foreach ($devise as $view) { ?>
                                                <option value="<?php echo $view['id']; ?>"><?php echo $view['nom']; ?></option>
                                            <?php } ?>
                                        </datalist>
                                    </tr>
                                    <!-- </div> -->


                                </tbody>
                            </table>

                        </div>

                        <div class="row">
                            <div class="col-md-1 col-xl-1 align-self-center"><button type="button" class="btn btn-info" onclick="addrow('details')"><strong> + </strong></button></div>
                            <div class="col-md-3 offset">
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-2"><button class="btn btn-warning btn-sm d-block" onclick="balance()" type="button">Equilibrer</button></div>
                            <div class="col-md-3 offset-md-4">Débit: <span id="sum_d">0</span>
                            </div>
                            <div class="col-md-3">Crédit: <span id="sum_c">0</span>
                            </div>
                            <div class="col-md-3 offset">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-1 col-xl-1 align-self-center"><button class="btn btn-danger btn-sm d-block" value="submit request" type="submit">Enregistrer</button></div>
                            <div class="col-md-3 offset">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var deviseL = <?php echo json_encode($devise); ?>;
    // console.log(d);
    // console.log("haha");
</script>