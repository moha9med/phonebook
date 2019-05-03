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

use App\phonebook;
use Illuminate\Support\Facades\Input;
 


Route::get('/', function () {
    return view('phonebook');
});



route::get('/phonebook', function(){
    return view('phonebook');
});


route::resource('phonebook','phonebookController');


// route::get('/search','phonebookController@search');

Route::any('/search',function(){
    $q = Input::get ( 'q' );
    
    $contacts = phonebook::where('name','LIKE','%',$q,'%')->get();
    if(count($contacts) > 0)
        return view('search')->withdetails($contacts)->withQuery ( $q );
    else return view ('search')->withMessage('No Details found. Try to search again !');
});