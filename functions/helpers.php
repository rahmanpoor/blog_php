<?php

define('BASE_URL', 'https://angry-elbakyan-yov6c0ovh.liara.run/');

function redirect($url) 
{ 
    header('Location: '.trim(BASE_URL, '/ ') . '/' . trim($url, '/ ')); 
}

function asset($file) 
{ 
    return trim(BASE_URL, '/ ') . '/' . trim($file, '/ '); 
}

function url($url) 
{ 
    return trim(BASE_URL, '/ ') . '/' . trim($url, '/ '); 
}

function dd($var) 
{ 
    echo '<pre>'; 
    var_dump($var) ; 
    exit; 
}

