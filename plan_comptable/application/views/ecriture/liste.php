<div class="container" style="margin-top: 10pc;">
    <div class="row">
        <div class="col-md-12" style="background-color: #eee; border-radius: 30px; padding: 20px; margin-bottom: 30px;">

            <!-- <button type="button" class="btn btn-primary" style="margin: 20px">Générer pdf</button> -->
            <div class="row">
                <div class="col col-md-6">

                    <form class="d-flex" method="get" action="<?php echo site_url("EcritureC/liste") ?>">
                        <div class="col col-md-3 form-floating">

                            <select class="form-select" id="j" aria-placeholder="Journal" name="journal">
                                <option value="">Tout</option>

                                <?php foreach ($journal as $view) { ?>

                                    <option value=<?php echo $view['id'] ?>><?php echo $view['libelle'] ?></option>
                                <?php } ?>
                            </select>
                            <label for="j">Journal</label>
                        </div>
                        <div class="col col-md-3 form-floating">
                            <select class="form-select" id="m" aria-placeholder="mois" name="mois">
                                <option value="">Tout</option>

                                <?php for ($i = 1; $i < 13; $i++) {  ?>

                                    <option value=<?php echo $i; ?>><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                            <label for="m">Mois</label>
                        </div>
                        <button class="btn btn-outline-primary" type="submit">Filtrer</button>
                    </form>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Ref P/ce</th>
                        <th scope="col">Compte</th>
                        <th scope="col">Tiers</th>
                        <th scope="col">Libellé</th>
                        <th scope="col">Débit</th>
                        <th scope="col">Crédit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ecriture as $view) { ?>
                        <tr>
                            <td><?php echo $view['date'] ?></td>
                            <td><?php echo $view['refpiece'] ?></td>
                            <td><?php echo $view['numero_compte'] ?></td>
                            <td><?php echo $view['numero_tiers'] ?></td>
                            <td><?php echo $view['libelle'] ?></td>
                            <td><?php echo $view['debit'] ?></td>
                            <td><?php echo $view['credit'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>