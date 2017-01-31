<main>
    <!-- objectif de l'aprem: afficher la liste des articles ici! -->
    <!-- loupe = lien qui affiche le détail d'un produit -->
    <!-- bouton ajouter au panier pour plus tard -->

    <!-- un produit = un <article> -->
    <?php foreach ($products as $index => $product): ?>

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
                <!-- lien vers la page Détail d'un produit: -->
                <!-- script:product.php, av. parametre GET qui contient
                l'index du produit dans le tableau, pour pouvoir récupérer les infos du produit
                dans product.php (avec $_GET["index"]) -->
                <a href="product.php?index=<?= $index ?>">Voir</a>
                <button type="button" name="button">Ajouter au panier</button>
            </p>
        </article>
        <hr>

    <?php endforeach; ?>
</main>
