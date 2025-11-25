<?php



define('BASE_URL', $config['base_url']);

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

function limitText($text, $limit = 50, $end = '...') {
    if (mb_strlen($text) > $limit) {
        return mb_substr($text, 0, $limit) . $end;
    }
    return $text;
}
