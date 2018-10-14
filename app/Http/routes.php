<?php
	$app['router']->get('/', function() {
		return '<h1>根路径/，路由成功-routes</h1>';
	});

	$app['router']->get('/test', 'App\Http\Controllers\TestController@idex');

	$app['router']->get('welcome', 'App\Http\Controllers\WelcomeController@test');
	