<?php
    defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR); // define the directory separator 
    defined('SITE_ROOT') ? null : define ('SITE_ROOT', DS . 'wamp64' .DS. 'www' .DS. 'phprest'); // défine the site root urL

    //wamp64/www/phprest/includes
    //defined ('INC_PATH') ? null : define('INC_PATH', SITE_ROOT.DS.'includes');
    //defined ('CORE_PATH') ? null : define ('CORE_PATH', SITE_ROOT.DS.'core');

    //load the config file first
    //require_once(INC_PATH.DS.'config.php');
    require_once('../includes/config.php');

    //core classes
    //require_once(CORE_PATH.DS.'post.php');
    require_once('../core/post.php');

?>