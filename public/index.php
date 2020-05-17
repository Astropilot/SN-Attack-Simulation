<?php

error_reporting(-1);

require_once '../app/autoload.php';

use Testify\Router\Request;
use Testify\Router\Router;

session_start();

Router::getInstance(new Request);

require_once '../src/views/Views.php';
