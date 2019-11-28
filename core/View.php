<?php
class View
{
    public function __construct() 
    {
        
    }
    
    public function render($view)
    {
        require 'views/header.php';
        require "views/" . $view . ".php";
        require 'views/footer.php';
    }
}
