<?php 
$request = trim($_SERVER["REQUEST_URI"], '/');
$baseDir = '/test/Formation/mini_formation_php';

switch ($request) {
    case '':
    case $baseDir:
        require __DIR__ . '/index.php';
        break;
    default:
        $filename = __DIR__ . '/' . $request . '.php';
        if (file_exists($filename)) {
            require $filename;
            break;
        }
        http_response_code(404);
        require __DIR__ . '/pages/404.php';
        break;
}
?>
