<?php
//start session
session_start();
require_once 'config.php';
//include helpers
require_once 'helpers/system_helper.php';
//autoload
function __autoload($class_name)
{
require_once 'lib/'.$class_name. '.php';
}

