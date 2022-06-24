<div class="container" style="margin-top: 10pc;">
    <div class="row">
        <div class="col col-md-5" style="background-color: #eee; border-radius: 30px; padding: 20px;">
            <h4>Exercices</h4>

            <form class="d-flex" method="get" action="#">
                <input class="form-control me-2" name="qE" type="number" placeholder="Année" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>

            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Année</th>
                        <th scope="col">Début</th>
                        <th scope="col">Fin</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($liste_exo as $view) { ?>

                        <tr>
                            <th scope="row"><?php echo $view['id'] ?></th>
                            <td><?php echo $view['annee'] ?></td>
                            <td><?php echo $view['debut'] ?></td>
                            <td><?php echo $view['fin'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col col-md-5 offset-md-2" style="background-color: #eee; border-radius: 30px; padding: 20px;">
            <h4>Journal</h4>
            <form class="d-flex" method="get" action="#">
                <input class="form-control me-2" type="search" name="qJ" placeholder="Libellé" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>

            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Libellé</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($liste_jour as $view) { ?>

                        <tr>
                            <th scope="row"><?php echo $view['id'] ?></th>
                            <td><?php echo $view['libelle'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>