<?php
class Bootstrap
{
    public function __construct()
    {
        $path = isset($_GET['url']) ? $_GET['url'] : 'index.php';
        // echo $path."<br>";
        $path = strpos($path, ".") ? substr($path, 0, strpos($path, ".")) : $path;
        // echo $path."<br>";
        $path = trim($path, "/");
        // echo $path."<br>";
        $path = explode("/", $path);
        // print_r($path);

        $file = "controllers/". $path[0] . ".php";
        if (file_exists($file)) {
            require $file;
        } else {
            require "controllers/httpError.php";
            $controller = new HttpError();
            $controller->loadModel("httpError");
            $controller->index();
            return false;
        }

        $controller = new $path[0];
        $controller->loadModel($path[0]);

        if (isset($path[2])) {
            $controller->{$path[1]}($path[2]);
        } elseif (isset($path[1])) {
            $controller->{$path[1]}();
        } else {
            $controller->index();
        }
    }
}
