<!-- 
https://tm-shopify027-furniture.myshopify.com/collections/computer-desks/products/avenue-six-roundabout-spring-green-low-circle-lounger 
-->
<section>
    <?php
    if (isset($_GET['id']) && $_GET['id'] !== '') {
        $url = 'https://dummyjson.com/products/' . $_GET['id'];
        $raw = @file_get_contents($url);
        if ($raw === false) {
            $raw = '{"message":"not found"}';
        }
        $product = json_decode($raw);
        if (!isset($product->message)) {
    ?>
            <article>
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouselExample" class="carousel slide" data-bs-theme="dark">
                            <div class="carousel-indicators">
                                <?php
                                $firstImg = true;
                                $cpt = 0;
                                foreach ($product->images as $img) {
                                ?>
                                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="<?= $cpt ?>" class=" <?= ($firstImg) ? 'active' : '' ?>" aria-current=" <?= ($firstImg) ? 'true' : '' ?>" aria-label="Slide 1"></button>
                                <?php
                                    $firstImg = false;
                                    $cpt = $cpt + 1;
                                }
                                ?>
                            </div>
                            <div class="carousel-inner">
                                <?php
                                $firstImg = true;
                                foreach ($product->images as $img) {
                                ?>
                                    <div class="carousel-item <?= ($firstImg) ? 'active' : '' ?>">
                                        <img src="<?= $img ?>" class="img-fluid" alt="<?= $product->description ?>">
                                    </div>
                                <?php
                                    $firstImg = false;
                                }
                                ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="h4"><?= $product->title ?></h2>
                        <p>
                            <span class="h3">$ <?= $product->price ?></span>
                        </p>
                        <form>
                            <div class="row">
                                <div class="col-2 my-2">
                                    <label for="qty" class="form-label">Qty : </label>
                                </div>
                                <div class="col-3 my-2">
                                    <input type="number" placeholder="1" class="form-control" id="qty" name="qty" />
                                </div>
                                <div class="col-12 col-sm my-2">
                                    <button type="button" class="btn btn-outline-success">Ajouter au panier</button>
                                </div>
                            </div>
                        </form>
                        <hr />
                        <p>
                            <b>Type : </b><?= $product->category ?>
                        </p>
                        <hr />
                        <h3 class="h4">Description</h3>
                        <p>
                            <?= $product->description ?>
                        </p>
                        <!-- moyenne des notes (rating) sur 5 -->
                        <h3 class="h4">Note sur 5</h3>
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
                            <h3 class="h4">Étiquette(s)</h3>
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
                </div>
                <section>

                    <h3>Produit(s) dans la catégorie <?= $product->category ?></h3>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
                        <?php
                        $other = @file_get_contents('https://dummyjson.com/products/category/' . $product->category . '?limit=4');
                        $otherProducts = json_decode($other)->products;
                        foreach ($otherProducts as $product) {
                            include './template/mini-product.php';
                        }
                        ?>
                    </div>
                </section>
            </article>
        <?php
        } else {
        ?>
            <div class="alert alert-warning text-center">
                <p>Le produit que vous recherchez n'est pas dans le stock</p>
                <p>
                    <a href="./index-bs.php">Tous les produits</a>
                </p>
            </div>
        <?php

        }
    } else {
        ?>
        <div class="alert alert-warning text-center">
            <p>Le produit que vous recherchez n'est pas dans le stock</p>
            <p>
                <a href="./index-bs.php">Tous les produits</a>
            </p>
        </div>
    <?php
    } ?>

</section>