<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
	public function index()
	{
		$tasks = Task::all(); //выбирает всё

    	return view('index',['tasks' => $tasks]); 
	}

	public function create()
	{
		return view('create');
	}
	

	public function store(Request $request)
	{
		Task::create($request->all());
		return redirect('/');
	}

	public function edit($id)
	{
		$task = Task::find($id);
		return view('edit', ['task' => $task]);
	}

	public function update(Request $request, $id)
	{
		$task = Task::find($id);
		$task->fill($request->all()); //заполняем
		$task->save();	//сохраняем
		return redirect('/');
	}
	
}
