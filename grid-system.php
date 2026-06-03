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
    <main class="container">
        <h1 class="h2">Système de grille</h1>
        <section>
            <h2 class="h3">Classe <code>col</code> et <code>col-*</code></h2>
            <div class="row my-2">
                <div class="col border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
            </div>
            <div class="row my-2">
                <div class="col border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
            </div>
            <div class="row my-2">
                <div class="col-2 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col-3 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col-4 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col-5 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col-6 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
            </div>
        </section>
        <section>
            <h2 class="h3">Classe  <code>col-&lt;breakpoint&gt;</code> et <code>col-&lt;breakpoint&gt;-&lt;nb colonne(s)&gt;</code></h2>
            <div class="row my2">
                <div class="col-sm-6 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col-sm-4 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col-sm-3 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col-sm-2 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col-sm-1 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col-sm border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
            </div>
            <div class="row my2">
                <div class="col-sm-6 col-md-4 col-lg-2 col-xl-1 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 col-xl-1 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 col-xl-1 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 col-xl-1 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 col-xl-1 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 col-xl-1 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 col-xl-1 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 col-xl-1 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 col-xl-1 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 col-xl-1 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 col-xl-1 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 col-xl-1 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 col-xl-1 border border-danger p-2">
                    <img src="./images/better-off-dead-1200-1200-675-675-crop-000000-768x432.jpg" class="img-fluid" />
                </div>
            </div>
        </section>
    </main>
</body>

</html>