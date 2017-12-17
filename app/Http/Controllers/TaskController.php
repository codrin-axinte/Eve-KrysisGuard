<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

	public function index($category = null) {
		if($category !=null && $category > 1){
			abort('This category does not exists.');
		}

		$query = Task::latest()->completed((bool) \request('completed'));
		if($category != null){
			$query->category($category);
		}

		$tasks = $query->paginate(10);

		return view('tasks.index', compact('tasks'));
	}

	public function show(Task $task) {
		return view('tasks.show', compact('task'));
	}
}
