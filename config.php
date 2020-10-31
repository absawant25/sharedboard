<?php

spl_autoload_register(function ($name) {

    $controllers_to_model_mappings = array(
        'home' => 'home',
        'shares' => 'share',
        'users' => 'user'
    );

    if (file_exists('controllers/'.$name.'.php')) {
        require_once 'controllers/' . $name . '.php';
    }

    $name = $controllers_to_model_mappings[$name];

    if (file_exists('models/'.$name.'.php')) {
        require_once 'models/' . $name . '.php';
    }
});

//Define DB params

define('DB_HOST', "localhost");
define("DB_USER", "shared_user");
define("DB_PASS", "SharedUser@1234");
define("DB_NAME", "shareboard");

//Define config URL

define("ROOT_PATH", "/shareboard/");
define("ROOT_URL", "http://localhost".ROOT_PATH);
