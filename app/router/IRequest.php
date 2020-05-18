<?php

namespace HomeFramework\Router;

use HomeFramework\Router\RequestData;

interface IRequest {

    public function getData(): RequestData;
}
