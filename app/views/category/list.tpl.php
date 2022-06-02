<main>
    <h1 class='categ-name'>Rayon <?= $categoryName->getName() ?></h1>

    <div class="category">
        <?php foreach ($bookCategory as $book) : ?>
            <div class="categ">
                <h2 class="detail-title"><a href="<?= $router->generate('book-detail', ['id' => $book['id']]) ?>"><?= $book['title'] ?></a></h2>
                <h3><?= $book['name'] ?></h3>
                <a class="lien-img" href="<?= $router->generate('book-detail', ['id' => $book['id']]) ?>"><img class="image-categ" src="assets/images/<?= $book['picture'] ?>" alt=""></a>
                <div class="detail-price">
                    <p><?= $book['price'] ?> €</p>
                    <a class="detail-panier" href="">Ajouter au panier</a>
                </div>
            </div> <?php endforeach ?>

    </div>

</main>