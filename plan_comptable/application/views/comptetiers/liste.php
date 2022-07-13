<div class="container" style="margin-top: 10pc;">
    <div class="row">
        <div class="col-md-12" style="background-color: white; border-radius: 30px; padding: 20px; margin-bottom: 30px;">

            <!-- <button type="button" class="btn btn-primary" style="margin: 20px">Générer pdf</button> -->
            <div class="row">
                <!-- <div class="col col-md-3 form-floating">
                    <select class="form-select" id="j" aria-placeholder="tiers" name="tiers">
                        <option value="">Tout</option>
                        <option value="">Fournisseur</option>
                        <option value="">Client</option>
                        <option value="">Débiteur et créditeur divers</option>
                    </select>
                    <label for="j">Tiers</label>
                </div> -->
                <div class="col col-md-6">

                    <form class="d-flex" method="get" action="<?php echo site_url("ComptetiersC/liste") ?>">
                        <input class="form-control me-2" id="search_tiers" type="search" name="q" placeholder="rechercher" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <!-- <th scope="col">Numéro</th>
                        <th scope="col">Intitulé</th> -->
                        <!-- <th scope="col">Compte</th>
                        <th scope="col">Intitulé</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($liste_tiers as $view) { ?>
                        <tr>
                            <th scope="row"><?php echo $view['identifiant'] ?></th>
                            <td><?php echo $view['nom'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>