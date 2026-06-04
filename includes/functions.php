<?php

function toggleTextUri($target, $text = ''){
    $uri = $_SERVER['REQUEST_URI'];
    $uri = explode('/', $uri);
    $uri = $uri[sizeof($uri) - 1];
    if($uri === $target){
        echo $text;
    }
}

function jsonToList($data): string
{
    // Si c'est une string JSON, on décode en tableau associatif
    if (is_string($data)) {
        $decoded = json_decode($data, true);
        // Si le décodage réussit, on travaille avec le tableau
        if (json_last_error() === JSON_ERROR_NONE) {
            $data = $decoded;
        }
    }

    // Convertir stdClass en tableau si nécessaire
    if (is_object($data)) {
        $data = (array) $data;
    }

    // Tableau indexé (liste d'objets) → <ul> avec récursion
    if (is_array($data) && array_is_list($data)) {
        $html = '<ul>';
        foreach ($data as $item) {
            $html .= '<li>' . jsonToList($item) . '</li>';
        }
        $html .= '</ul>';
        return $html;
    }

    // Objet/tableau associatif → chaque clé est un <li>
    if (is_array($data)) {
        $html = '<ul>';
        foreach ($data as $key => $value) {
            if (is_array($value) || is_object($value)) {
                $html .= '<li><strong>' . htmlspecialchars($key) . '</strong>' . jsonToList($value) . '</li>';
            } else {
                $html .= '<li><strong>' . htmlspecialchars($key) . '</strong> : ' . htmlspecialchars((string) $value) . '</li>';
            }
        }
        $html .= '</ul>';
        return $html;
    }

    // Valeur brute (string, int, float, bool)
    return htmlspecialchars((string) $data);
}