<?php
// Start Session
session_start();

// Include Config
require('config.php');

require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

$bootstrap = new Bootstrap($_REQUEST);
$controller = $bootstrap->createController();

if($controller) {
    $controller->executeAction();
}