<?php

error_reporting(-1);

require_once '../app/autoload.php';

use HomeFramework\Router\Request;
use HomeFramework\Router\Router;

Router::getInstance(new Request);

require_once '../src/views/Views.php';
