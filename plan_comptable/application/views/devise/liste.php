<div class="container" style="margin-top: 10pc;">
    <div class="row">
        <div class="col-md-10 " style="background-color: #eee; border-radius: 30px; padding: 20px;">

            <!-- <button type="button" class="btn btn-primary" style="margin: 20px">Générer pdf</button> -->
            <div id="search"></div>
            <form class="d-flex" method="get" action="<?php echo site_url("DeviseC/liste") ?>">
                <select class="form-select" id="j" aria-placeholder="devise" name="devise">
                    <option value="">Tout</option>

                    <?php foreach ($typedevise as $view) { ?>

                        <option value=<?php echo $view['id'] ?>><?php echo $view['nom'] ?></option>
                    <?php } ?>
                </select>
                <button class="btn btn-outline-primary" type="submit">Filtrer</button>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>Devise</th>
                        <th>taux</th>
                        <th>Montant</th>
                        <th>mois</th>
                        <th>jour</th>
                        <th>compte</th>
                        <th>tiers</th>
                        <th>debit</th>
                        <th>credit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($historique as $view) { ?>
                        <tr>
                            <th><?php echo $view['devise'] ?></th>
                            <td><?php echo $view['taux'] ?></a></td>
                            <th><?php echo $view['prixdevise'] ?></th>
                            <td><?php echo $view['mois'] ?></a></td>
                            <th><?php echo $view['jour'] ?></th>
                            <td><?php echo $view['numero_compte'] ?></a></td>
                            <th><?php echo $view['numero_tiers'] ?></th>
                            <td><?php echo $view['debit'] ?></a></td>
                            <td><?php echo $view['credit'] ?></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>