<main class="book">
     <section class="detail">
          <img class="detail-image" src="assets/images/<?= $detail_book['picture'] ?>" alt="">
          <div class="resume">

               <h2 class="detail-title"><?= $detail_book['title'] ?></h2>
               <h3 class="detail-author">
                    <a href="<?= $router->generate('author-list', ['id' => $detail_book['author_id']]) ?>">
                         <?= $detail_book['author_name'] ?>
                    </a>
               </h3>
               <div class="tags">
                    <?php foreach ($categoriesListByBook as $categoryBook) : ?>
                         <div class="tag">
                              <a href="<?= $router->generate('category-list', ['id' => $categoryBook['category_id']])?>">
                                   <?= $categoryBook['name'] ?>
                              </a>
                         </div>
                    <?php endforeach ?>
               </div>

               <h4>Résumé</h4>
               <p><?= $detail_book['description'] ?></p>
               <p class="detail-edition">Edition : <?= $detail_book['edition_name'] ?></p>

               <div class="detail-price">
                    <p><?= $detail_book['price'] ?> €</p>
                    <a class="detail-panier" href="">Ajouter au panier</a>
               </div>
          </div>
     </section>

</main>