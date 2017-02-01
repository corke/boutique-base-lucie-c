<main id="products">
    <?php
    foreach ($products as $id => $product) {
      $link = "product.php?index=$id";
    ?>
        <article class="product">
            <a class="product-link" href="<?= $link ?>">
              <h2 class="product-name"><?= $product["title"] ?></h2>
              <img class="product-image" src="images/<?= $product["thumbnail"] ?>" alt="<?= $product["short_desc"] ?>">
            </a>
            <p class="product-desc"><?= $product["short_desc"] ?></p>
            <p class="product-price">
            <?php if($product["price"] == $product["promo_price"]): ?>
                <span class="product-price-real"><?= number_format($product["price"], 2) ?> €</span>
            <?php else: ?>
                <del class="product-price-old"><?= number_format($product["price"], 2) ?> €</del>
                <ins class="product-price-real"><?= number_format($product["promo_price"], 2) ?> €</ins>
            <?php endif; ?>
            </p>
            <p class="product-infos">
                <a class="product-see" href="<?= $link ?>">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <span class="product-see-text">Voir le produit</span>
                </a>
                <button class="product-add" type="submit" name="button">Ajouter au panier</button>
            </p>
        </article>
    <?php
    }
    ?>
</main>
