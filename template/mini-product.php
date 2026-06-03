<!-- $product -->
<div class="col">
    <div class="card shadow-sm" style="height: 100%;">
        <!--thumbnail -->
        <figure class="figure">
            <img class="figure-img img-fluid" src="<?= $product->thumbnail  ?>" alt="<?= $product->description ?>" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">
                <?= $product->title ?>
            </h2>
            <p class="card-text">
                <?= mb_strcut($product->description, 0, 150, "UTF-8").'...'; ?>
            </p>
            <h3>Catégorie</h3>
            <p>
                <a href="./index-bs.php?category=<?= $product->category ?>"><?= $product->category ?></a>
            </p>
            <!-- moyenne des notes (rating) sur 5 -->
            <h3>Note sur 5</h3>
            <?php
            $totRating = 0;
            $nbRatings = 0;
            foreach ($product->reviews as $review) {
                $totRating = $totRating + $review->rating;
                $nbRatings = $nbRatings + 1;
            }
            echo number_format(($totRating / $nbRatings), 1) . ' / 5';
            ?>
            <div>
                <h3>Étiquette(s)</h3>
                <!-- les tags -->
                <?php
                foreach ($product->tags as $tag) {
                ?>
                    <span class="badge text-bg-dark"><?= $tag ?></span>
                <?php
                }
                ?>
            </div>
        </div>
        <div
            class="card-footer d-flex justify-content-between align-items-center">
                <a
                    type="button"
                    class="btn btn-sm btn-outline-secondary" href="index-bs.php?id=<?= $product->id ?>">
                    Voir
                </a>
            <small class="text-body-secondary"><?= $product->price ?> €</small>
        </div>        
    </div>
</div>