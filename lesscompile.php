<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once("libraries/lessc.php");
include_once("libraries/CompileLESS.php");

$CompileLess = new CompileLESS();
$CompileLess->compile();

