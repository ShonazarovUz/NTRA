<?php

declare(strict_types=1);

use App\Router;
// use Controller\LoginAd;
Router::get('/', fn()=> loadController('home'));
Router::get('/branches', fn()=> loadController('branch'));

Router::get('/ads/{id}', function (int $id) {
    loadController('showAd', ['id'=>$id]);
});

Router::get('/ads/create', fn()=> loadController('create-ad'));

Router::get('/status/create', fn()=> loadView('admin/createStatus'));

Router::get('/Branch/create', fn()=> loadView('admin/createBranch'));

Router::get('/register', fn()=> loadView('register'));
Router::get('/login', fn()=> loadView('login'));





Router::post('/ads/create', fn()=> loadController('createAd'));

Router::post('/status/create', fn()=> loadController('create-status'));

Router::post('/Branch/create', fn()=> loadController('create-branch'));
Router::post('/register', fn()=> loadController('registerAd'));
Router::post('/login', fn() => (new \Controller\LoginAd())->login());
Router::errorResponse(404, 'Not Found');