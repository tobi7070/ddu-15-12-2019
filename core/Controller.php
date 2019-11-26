<?php
class Controller
{
    public function __construct()
    {
        $this->view = new View();
    }

    public function loadModel($file)
    {
        $path = "models/" . $file . "Model.php";
        if(file_exists($path)) {
            require "models/" . $file . "Model.php";

            $modelName = $file . "Model";
            $this->model = new $modelName();
        }
    }
}
