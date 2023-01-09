<?php

namespace MVC\Models\Example;

use MVC\Base\MVCService;

class ExampleService extends MVCService {

    protected Example $model;

    public function __construct(Example $model)
    {
        $this->model = $model;
    }
}
