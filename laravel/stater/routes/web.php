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
// route::get('laravel/{id?}',function(){
//     return 'welcome';
// });
// route::get('test/{name}/{id}/{address?},',function($name,$id,$address){
//         return 'yourname' . $name . "and yourid" . $id . "address" . $address ;
// });
route::get('test2',function(){
    return "welcome";
}) ->name('a');
route::get('test3/{id}',function($id){
    return $id;
}) ->name('b');

// route::namespace('Front') ->group(function(){
//     route::get('user','UserController@showuser');
//     route::get('id','UserController@showid');
// });

route::group(['namespace' => 'Front'],function(){
    route::get('user','UserController@showuser');
});

// route::prefix('user') ->group(function(){
//     route::get('/',function(){
//         return 'fucking you';
//     });
//     route::get('show','UserController@showuser');
//     route::get('delete','UserController@showuser');
//     route::get('update','UserController@showuser');
//     route::get('put','UserController@showuser');
// });
// الى تحت ده هنسخدم الميدل وير مش هيخلى الكود يشتغل لازم تعمله تسجيل دخول بالايميل والباسورد
// route::group(['prefix' => 'user' , 'middleware' => 'auth'],function(){
//     route::get('/',function(){
//         return 'fucking you';
//     });
//     route::get('show','UserController@showuser');
//     route::get('delete','UserController@showuser');
//     route::get('update','UserController@showuser');
//     route::get('put','UserController@showuser');
// });
route::group(['namespace' => 'Front'],function(){
    route::get('second0','SecondController@seconds0');
    route::get('second1','SecondController@seconds1');
    route::get('second2','SecondController@seconds2');
    route::get('second3','SecondController@seconds3');
});
// ده الروت الى بتعمل الميدل وير بترجع على الروت ده
route::get('login',function(){
        return "you must to be login man";
}) ->name('login');

route::resource('getsource','ResController');

// route::get('views',function(){
//     return view('welcome');
// });

route::get('showview','Front\UserController@myview');
route::get('landing',function(){
    return view('landing');
});

route::get('index',function(){
    return view('welcome');
});
route::get('master',function(){
        return view('layout\master');
});



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home') -> middleware('verified');


route::get('redirect/{service}','servisecontroller@redirect');
route::get('callback/{service}','servisecontroller@callback');

route::get('fillable','crudController@getoffers');


//models and eloquent

route::group(['prefix' =>'offer'] ,function(){
    route::get('myStore','crudController@store');
    route::get('getForm','crudController@myform');
    route::post('store','crudController@storeForm') ->name('offer.store');
});





