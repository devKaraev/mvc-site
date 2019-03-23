<?php

define('ROOT',dirname(__FILE__));
require_once ROOT.'/components/Router.php';

$run = new Router();
$run ->run();