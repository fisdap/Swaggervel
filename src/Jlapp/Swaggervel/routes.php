<?php

use Jlapp\Swaggervel\SwaggervelController;


Route::any(Config::get('swaggervel.doc-route') . '/{page?}',
    ['as' => 'swagger.docs', 'uses' => SwaggervelController::class . '@docs']);

Route::get(Config::get('swaggervel.api-docs-route'),
    ['as' => 'swagger.ui', 'uses' => SwaggervelController::class . '@ui']);
