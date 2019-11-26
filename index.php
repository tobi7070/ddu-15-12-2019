<?php
require "config\Config.php";

require "core\Bootstrap.php";
require "core\Database.php";
require "core\Session.php";

require "core\Model.php";
require "core\View.php";
require "core\Controller.php";
$app = new Bootstrap();

// http://localhost/docs/index/action/param/.extension?query