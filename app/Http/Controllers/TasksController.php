<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Task;

class TasksController extends Controller
{
	public function home()
	{
		$tasks = Task::orderBy('created_at', 'asc')->get();
		$tasks = $tasks->toArray();
		// var_dump($tasks);
		// exit;

	    $title = '任务管理';
	    $h2 = '任务列表';
		/*
		--------------------------------
		 将数据传递到视图层
		--------------------------------
		*/
	    return view('pages.tasks',compact('title','h2','tasks'));

	    // 使用with()来传参数
	   	// return view('welcome')->with('users', $users);

	   	// 使用with+自定义的键名(如：users),拼接成withUsers()来传参数
	   	// return view('welcome')->withUsers($users);

	   	// 链式调用with()
	   	// return view('welcome')->with('users', $users)->with('country', $country)->with('ages', $ages);
	    // return view('pages.tasks');
	}
	public function about()
	{
	    return view('pages.about');
	}
	public function welcome()
	{
	    return view('pages.welcome');
	}
    
}
