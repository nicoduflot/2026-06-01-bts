<?php
$url = 'https://dummyjson.com/products';
$raw = file_get_contents($url);
$data = json_decode($raw);
$total = $data->total;
$skip = $data->skip;
$limit = $data->limit;
$products = $data->products;
?>
<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
            <?php
            foreach($products as $product){
                include './template/mini-product.php';
            }
            ?>
        </div>
    </div>
</div>