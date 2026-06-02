<?php
$url = 'https://dummyjson.com/products';
$raw = file_get_contents($url);

$total = json_decode($raw)->total;
$skip = json_decode($raw)->skip;
$limit = json_decode($raw)->limit;
$products = json_decode($raw)->products;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Bootstrap</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css" />
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="./js/products.js" defer></script>
</head>
<body>
    
</body>
</html>