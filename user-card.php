<?php
include './template/init.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include './template/head.php';
    ?>
</head>

<body>
    <div class="container">
        <h2 class="h3">Utilisateur</h2>
        <!---
        Exercice : 
        Faire une fiche utilisateur en utilisant rol et col-*, col-*-*
        Cas sans utilisateur sélectionné
        --->
        <?php
        if( isset($_GET['id']) && $_GET['id'] !== '' ){
            $url = 'https://dummyjson.com/users/'.$_GET['id'];
            $raw = @file_get_contents($url);
            $user = json_decode($raw);
            ?>
            <div class="row">
                <div class="col"><img src="<?= $user->image ?>" /></div>
                <div class="col">
                    <h2 class="h3">Civilité</h2>
                    <p>
                        <?= $user->lastName ?><br />
                        <?= $user->firstName ?></div>
                    </p>
                    <hr />
            </div>
            <div class="row">
                <div class="col">
                    <h2 class="h3">Contact</h2>
                    <p>
                        <?= $user->email ?>
                    </p>
                </div>
            </div>
            <hr />
            <div class="table-responsive overflow-y-auto" style="height: 25vh;">
                <?php echo jsonToList($user) ?>
            </div>
            <?php
        }else{
            ?>
            <div class="alert alert-info">
                Aucun utilisateur sélectionné
            </div>
            <?php
        }
        ?>
    </div>
</body>

</html>