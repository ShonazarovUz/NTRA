<?php

declare(strict_types=1);

use App\Router;
Router::get('/', fn()=> loadController('home'));
Router::get('/branches', fn()=> loadController('branch'));

Router::get('/ads/{id}', function (int $id) {
    loadController('showAd', ['id'=>$id]);
});

Router::get('/ads/create', fn()=> loadController('create-ad'));
Router::post('/ads/create', fn()=> loadController('createAd'));


Router::get('/status/create', fn()=> loadView('admin/createStatus'));
Router::post('/status/create', fn()=> loadController('create-status'));


Router::get('/Branch/create', fn()=> loadView('admin/createBranch'));
Router::post('/Branch/create', fn()=> loadController('create-branch'));


Router::get('/register', fn()=> loadView('register'));
Router::post('/register', fn()=> loadController('registerAd'));


Router::get('/login', fn()=> loadView('login'));
Router::post('/login', fn() => (new \Controller\LoginAd())->login());


Router::errorResponse(404, 'Not Found');