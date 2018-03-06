<?php

/*
|--------------------------------------------------------------------------
| 应用路由
|--------------------------------------------------------------------------
|
| 在这里 注 册 应用程序 的所有路由
| 当 URI 被请求时, 简单的告诉Laravel URI 应该回应那些控制器
*/
use App\Task;
use Illuminate\Http\Request;

// 显示所有任务
Route::get('/', 'TasksController@home');

Route::get('about', 'TasksController@about');
Route::get('welcome', 'TasksController@welcome');
Route::get('demo', function(){
	$h2  = '测试bootstrop的可视化布局';
	$title  = '测试bootstrop的可视化布局';
	return view('pages.demo',compact('h2','title'));
});


// 增加新任务
Route::post('task', function (Request $request) {

    $validator = Validator::make($request->all(), [
        'name' => 'required|max:32',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');
});

// 删除一个任务
Route::delete('/task/{id}', function ($id) {
    // return view('welcome');
});


Route::get('{error}', function () {
    return view('common.404');
});

/*
Route::get()      //  对应http的get
Route::post()     //  对应http的post
Route::put()      //  对应http的put
Route::patch()   //   对应http的patch
Route::delete()  //   对应http的delete
*/