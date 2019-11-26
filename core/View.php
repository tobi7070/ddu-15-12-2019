<?php
class View
{
    public function __construct() 
    {
        // Do something
    }
    
    public function render($view)
    {
        require 'views/header.php';
        require "views/" . $view . ".php";
        require 'views/footer.php';
    }
}
