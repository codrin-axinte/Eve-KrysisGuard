<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

	public function index(Request $request) {
		$category = $request->get('category');
		if($category !=null && $category > 1){
			abort('This category does not exists.');
		}

		$query = Task::latest()
		             ->completed((bool) \request('completed'))
					->with('user')
		;
		if($category != null){
			$query->category($category);
		}

		$tasks = $query->paginate(10);

		return view('user.tasks.index', compact('tasks'));
	}

	public function show(Task $task) {
		return view('user.tasks.show', compact('task'));
	}
}
