<?php

declare(strict_types=1);

use App\Router;

Router::get('/', fn()=> loadController('home'));

Router::get('/ads/{id}', function (int $id) {
    loadController('showAd', ['id'=>$id]);
});

Router::get('/ads/create', fn()=> loadView('admin/create-ad'));
Router::get('/ads/create', fn()=> loadController('create-ad'));
Router::post('/ads/create', fn()=> loadController('createAd'));

Router::errorResponse(404, 'Not Found');
Router::get('/ads/create', fn()=> loadView('admin/create-ad'));
