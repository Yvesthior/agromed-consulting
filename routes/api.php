<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Test Covid
    Route::apiResource('test-covids', 'TestCovidApiController');
});
