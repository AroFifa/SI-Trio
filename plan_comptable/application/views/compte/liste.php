<div class="container" style="margin-top: 10pc;">
    <div class="row">
        <div class="col-md-10 " style="background-color: #eee; border-radius: 30px; padding: 20px;">
            <!-- <button type="button" class="btn btn-primary" style="margin: 20px">Générer pdf</button> -->
            <div id="search"></div>
            <form class="d-flex" method="get" action="<?php echo site_url("CompteC/liste") ?>">
                <input class="form-control me-2" type="search" placeholder="rechercher" name="q" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">numéro</th>
                        <th scope="col">Intitulé</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($liste_compte as $view) { ?>
                        <tr>
                            <th scope="row"><?php echo $view['id'] ?></th>
                            <td><?php echo $view['numero'] ?></td>
                            <td><?php echo $view['intitule'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>