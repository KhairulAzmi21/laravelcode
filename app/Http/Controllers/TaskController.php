<?php

namespace App\Http\Controllers;
use App\Task;

class TaskController extends Controller {
	public function index() {
		//$tasks = DB::table('tasks')->get();
		$tasks = Task::all();
		return view('about', compact('tasks'));
		/*$tasks = [
			'pergi kerja di netbox',
			'jangan lupa untuk melabur saham',
			'ahad ni tak jadi pergi ke langkawi'];

		return view('about', compact('tasks'));*/
		/*$name = "khairul azmi";
		return view('about', compact('name'));*/
		//return view('about', ['name' => 'khairul']);
	}
	//Route model binding make sure wildcare in w/route same with parameter name
	//it does like Task::find($task);
	public function show(Task $task) {
		//{id} - wildcards
		//$task = DB::table('tasks')->find($id);
		//$task = Task::find($id);

		return view('details', compact('task'));

	}
}
