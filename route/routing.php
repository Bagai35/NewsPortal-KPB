<?php
//вычислить маршрут из адресной строки
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host) [$num];
if ($path == '' or $path == 'index' or $path == 'index.php') {
    $response = Controller:: StartSite();
} elseif
($path == 'all') {
    $response = Controller::AllNews();
} elseif
($path == 'category' and isset($_GET['id'])) {
    $response = Controller::NewsByCatID($_GET['id']);
} elseif ($path == 'news' and isset($_GET['id'])) {
    $response = Controller::NewsByID($_GET['id']);
} elseif ($path == 'insertcomment' and isset($_GET['comment'], $_GET['id'])) {
    $response = Controller::InsertComment($_GET['comment'], $_GET['id']);
} elseif ($path == 'registerForm') {
    $response = Controller::registerForm();
} elseif ($path == 'registerAnswer'){
    $response  = Controller::registerUser();
} else {
    $response
        = Controller::error404();
}
?>