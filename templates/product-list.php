<main>
    <!-- objectif de l'aprem: afficher la liste des articles ici! -->
    <!-- loupe = lien qui affiche le détail d'un produit -->
    <!-- bouton ajouter au panier pour plus tard -->

    <!-- un produit = un <article> -->
    <?php foreach ($products as $id => $product): ?>

        <article>
            <h1><?= $product["title"] ?></h1>
            <img src="images/<?= $product["thumbnail"] ?>" alt="">
            <p><?= $product["short_desc"] ?></p>
            <p>
                <?php if($product["price"] != $product["promo_price"]) : ?>
                    <span class="old-price"><?= number_format($product["price"], 2) ?> &euro;</span>
                    <span class="new-price"><?= number_format($product["promo_price"], 2) ?> &euro;</span>
                <?php else : ?>
                    <span class="normal-price"><?= number_format($product["price"], 2) ?> &euro;</span>
                <?php endif; ?>
            </p>
            <p>
                <a href="#">Voir</a>
                <button type="button" name="button">Ajouter au panier</button>
            </p>
        </article>

    <?php endforeach; ?>
</main>
