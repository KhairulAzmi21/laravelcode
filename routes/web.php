<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
	return view('welcome');
});

Route::get('/about', function () {

	$tasks = [
		'pergi kerja di netbox',
		'jangan lupa untuk melabur saham',
		'ahad ni tak jadi pergi ke langkawi'];

	return view('about', compact('tasks'));
	/*$name = "khairul azmi";
	return view('about', compact('name'));*/
	//return view('about', ['name' => 'khairul']);
});
