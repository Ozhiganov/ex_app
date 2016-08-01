<?php

error_reporting(0);

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null :
                define('SITE_ROOT', 'C:' . DS . 'wamp64' . DS . 'www' . DS . 'ex_app');

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT . DS . 'includes');

// load config file first
require_once(LIB_PATH . DS . 'config.php');

// load basic functions next so that everything after can use them
require_once(LIB_PATH . DS . 'functions.php');

// load core objects
require_once(LIB_PATH . DS . 'database.php');

// load database-related classes
require_once(LIB_PATH . DS . 'user.php');
?>