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
        <h1 class="h2">Utilisateurs</h1>
        <!--
        Template utilisateurs qui appellera
            Template d'un tableau affichage utilisateurs
            Iframe qui appelle la fiche utilisateur
        
        Fiche utilisateur
        -->
        <?php
        include './template/utilisateurs.php';
        ?>
    </main>
</body>