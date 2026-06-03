<?php
$url = 'https://dummyjson.com/products';
if (isset($_GET['category']) && $_GET['category'] !== '') {
    $url = $url . '/category/' . $_GET['category'];
}
$raw = @file_get_contents($url);
$data = json_decode($raw);
$total = $data->total;
$skip = $data->skip;
$limit = $data->limit;
$products = $data->products;
?>
<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <?php
        if ($products) {
        ?>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
                <?php
                foreach ($products as $product) {
                    include './template/mini-product.php';
                }
                ?>
            </div>
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
        ?>
    </div>
</div>