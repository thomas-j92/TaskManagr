<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Task;

class PagesController extends Controller
{	
	// home page
    public function home() {
    	return view('welcome');
    }

    // view tasks page
    public function tasks() {
    	// get all tasks
    	$tasks = Task::all();

    	return view('tasks')->withTasks($tasks);
    }
}
