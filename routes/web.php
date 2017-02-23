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

	//$tasks = DB::table('tasks')->get();
	$tasks = App\Task::all();
	return view('about', compact('tasks'));
	/*$tasks = [
		'pergi kerja di netbox',
		'jangan lupa untuk melabur saham',
		'ahad ni tak jadi pergi ke langkawi'];

	return view('about', compact('tasks'));*/
	/*$name = "khairul azmi";
	return view('about', compact('name'));*/
	//return view('about', ['name' => 'khairul']);
});

Route::get('/about/{id}', function ($id) {
	//{id} - wildcards

	//$task = DB::table('tasks')->find($id);
	$task = App\Task::find($id);

	return view('details', compact('task'));

});
