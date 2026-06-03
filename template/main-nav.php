<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="#">Use-bootstrap.com</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="./">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= toggleTextUri('index-bs.php', ' active') ?>" 
                    <?= toggleTextUri('index-bs.php', 'aria-current="page"') ?> 
                    href="./index-bs.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= toggleTextUri('grid-system.php', ' active') ?>" 
                    <?= toggleTextUri('grid-system.php', 'aria-current="page"') ?> 
                    href="./grid-system.php">Grille bootstrap</a>
                </li>
                <?php
                $subject = 'Catégories';
                $url = 'https://dummyjson.com/products/categories';
                $data = json_decode(@file_get_contents($url));
                $href = './index-bs.php?category=';
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $subject ?>
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                        foreach ($data as $listItem) {
                        ?>
                            <li><a class="dropdown-item" href="<?= $href.$listItem->slug ?>"><?= $listItem->name ?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>