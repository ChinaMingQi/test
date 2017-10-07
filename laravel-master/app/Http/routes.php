<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*//基础路由
Route::get('basic1',function(){
	return 'hello world!!';
});
Route::post('basic2',function(){
	return 'basic2 hello world';
});*/

//多请求路由
/*Route::match(['get','post'],'multy1',function(){
	return 'multy1';
});
Route::any('multy2',function(){
	return 'multy2';
});*/

//路由参数
/*Route::get('user/{id}/{name?}',function($id){
	return 'user-'.$id;
})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);*/

//路由别名
/*Route::get('user/center', ['as' => 'center',function() {
	return route('center');
}]);
*/

//路由群组
Route::group(['prefix'=>'member'],function (){

	Route::get('user/center', ['as' => 'center',function() {
	return route('center');
	}]);

	Route::any('multy2',function(){
	return 'member-multy2';
	});

});

//路由中输出视图
Route::get('view', function () {
    return view('welcome');
});

//关联控制器
//Route::get('member/info','MemberController@info');

//Route::any('member/info',['uses'=>'MemberController@info']);

//关联控制器，别名的用法
/*	Route::any('member/info',[
		'uses'=>'MemberController@info',
		'as'  =>'memberinfo'

		]);*/

//关联控制器，带有参数
//Route::any('member/{id}',['uses'=>'MemberController@info']);

Route::any('test1',['uses'=>'StudentController@test1']);
Route::any('query1',['uses'=>'StudentController@query1']);
Route::any('query2',['uses'=>'StudentController@query2']);
Route::any('query3',['uses'=>'StudentController@query3']);
Route::any('query4',['uses'=>'StudentController@query4']);
Route::any('query5',['uses'=>'StudentController@query5']);

//关联控制器，参数限制
Route::any('member/{id}',['uses'=>'MemberController@info'])
->where('id','[0-9]+');//限制为数字


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
