<div id="product">
    <div id="product-summary">
        <h1 id="product-title" class="titre"><?= $product["title"] ?></h1>
        <p id="product-price">
            <?php if($product["price"] == $product["promo_price"]): ?>
                <span class="product-price-real"><?= number_format($product["price"], 2) ?> €</span>
            <?php else: ?>
                <del class="product-price-old"><?= number_format($product["price"], 2) ?> €</del>
                <ins class="product-price-real"><?= number_format($product["promo_price"], 2) ?> €</ins>
            <?php endif; ?>
        </p>
        <p id="product-short"><?= $product["short_desc"] ?>... <a id="product-link" href="#product-details">En savoir plus</a></p>
        <button id="product-add" class="product-add">Ajouter au panier</button>
    </div>
    <img id="product-image" src="images/<?= $product["picture"] ?>" alt="">
    <div id="product-details">
        <h2 class="product-detail titre">Détails</h2>
        <p id="product-desc"><?= $product["long_desc"] ?></p>
        <h2 class="product-detail titre">Prix</h2>
        <?php if($product["price"] == $product["promo_price"]): ?>
            <span class="product-price-real"><?= number_format($product["price"], 2) ?> €</span>
        <?php else: ?>
            <del class="product-price-old"><?= number_format($product["price"], 2) ?> €</del>
            <ins class="product-price-real"><?= number_format($product["promo_price"], 2) ?> €</ins>
        <?php endif; ?>
    </div>
</div>
