<!-- $product -->
<div class="col">
    <div class="card shadow-sm">
<!--thumbnail -->
        <svg
            aria-label="Placeholder: Thumbnail"
            class="bd-placeholder-img card-img-top"
            height="225"
            preserveAspectRatio="xMidYMid slice"
            role="img"
            width="100%"
            xmlns="http://www.w3.org/2000/svg">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c"></rect>
            <text x="50%" y="50%" fill="#eceeef" dy=".3em">
                Thumbnail
            </text>
        </svg>
        <div class="card-body">
            <h2 span class="card-title">
                <?= $product->title ?>
            </h2>
            <p class="card-text">
<!-- description -->
            </p>
            <ul>
                <!-- categorie(s) -->
            </ul>
            <!-- moyenne des notes (rating) sur 5 -->
            <div
                class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a
                        type="button"
                        class="btn btn-sm btn-outline-secondary" href="index-bs.php?id=<?php  ?>">
                        Voir
                    </a>
                </div>
                <small class="text-body-secondary"><!-- prix --></small>
            </div>
        </div>
    </div>
</div>