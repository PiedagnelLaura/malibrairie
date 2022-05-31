
    <main class="book">
     <?php //dump($detail_book); ?>  
       <section class="detail" >
           <img class="detail-image" src="assets/images/<?= $detail_book['picture'] ?>" alt="">
           <div class="resume">
               
                   <h2 class="detail-title"><?= $detail_book['title'] ?></h2>
                    <h3><?= $detail_book['author_name'] ?></h3>
               
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