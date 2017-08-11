<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerTask extends Controller
{
	public function task(){
		$task = ['study framework',
				'new project',
				'start earning'];

    return view('task',[
    'tasks' => $task]); 
		
	}
	
	
}
