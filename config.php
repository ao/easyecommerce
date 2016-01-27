<?php

ini_set('display_errors', E_ALL);

ini_set('session.gc_maxlifetime', 606462); // set to 1 week
ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);
ini_set("session.cookie_lifetime", "0");

date_default_timezone_set('UTC');

ini_set('memory_limit', '-1');

$_ABS_PATH = dirname(__FILE__);

$_DATABASE = array(
	"HOST"=>"127.0.0.1",
	"DATABASE_NAME"=>"dbname",
	"USERNAME"=>"username",
	"PASSWORD"=>"password",
);

$_THEME = "default";

try {
    $DBH = new PDO("mysql:host=$_DATABASE[HOST];dbname=$_DATABASE[DATABASE_NAME]", "$_DATABASE[USERNAME]", "$_DATABASE[PASSWORD]", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
} catch (PDOException $e) {
    header("Location: /?error");
    die();
    #die( $e->getMessage() );
}

include("lib/functions.php");

if (ADMIN==FALSE) {
	$_arr_include = arrIncludes();
}
