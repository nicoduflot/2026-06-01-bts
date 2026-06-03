<?php

?>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?= $subject ?>
    </a>
    <ul class="dropdown-menu">
        <?php
        foreach($data as $listItem){
            ?>
            <li><a class="dropdown-item" href="">Action</a></li>
            <?php
        }
        ?>
    </ul>
</li>