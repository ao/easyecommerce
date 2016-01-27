<?php

if (!isset($_SESSION)) session_start();

define("ADMIN", FALSE);

include("config.php");

if (isset($_GET['error'])) {
	include("pages/error.php");
} else {
	if (isset($_GET["page"])) {
		include("pages/".$_GET["page"].".php");
	} else {
		include("pages/home.php");
	}
}
