<?php

function toggleTextUri($target, $text = ''){
    $uri = $_SERVER['REQUEST_URI'];
    $uri = explode('/', $uri);
    $uri = $uri[sizeof($uri) - 1];
    if($uri === $target){
        echo $text;
    }
}