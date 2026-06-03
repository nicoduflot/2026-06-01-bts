<?php
include './template/init.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Bootstrap</title>
    <?php
    include './template/head.php';
    ?>
</head>

<body>
    <?php
    include './template/main-nav.php';
    include './template/header.php';
    ?>
    <main class="container py-2">
        <?php
        if (isset($_GET['id']) || isset($_GET['category'])) {
            $id = (isset($_GET['id']) && isset($_GET['id']) !== '') ? isset($_GET['id']) : '';
            $category = (isset($_GET['category']) && isset($_GET['category']) !== '') ? isset($_GET['category']) : '';
            switch (true) {
                case ($id !== ''):
                    /* fiche produit */
                    include './template/product-sheet.php';
                    break;
                case ($category !== ''):
                    /* fiche produit */
                    include './template/products.php';
                    break;
            }
        } else {
        ?>
            <section class="py-5 text-center">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-light">Album example</h1>
                        <p class="lead text-body-secondary">
                            Something short and leading about the collection below—its
                            contents, the creator, etc. Make it short and sweet, but not too
                            short so folks don’t simply skip over it entirely.
                        </p>
                        <p>
                            <a href="#" class="btn btn-primary my-2">Main call to action</a>
                            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                        </p>
                    </div>
                </div>
            </section>
        <?php
            include './template/products.php';
        }

        ?>
    </main>
</body>

</html>