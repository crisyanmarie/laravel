<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\control;

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

//Act 1
Route::get("/JERICKANAME", function () {
    return view('JERICKANAME');
});

//Act 2
//named routes
Route::get('/Jericka', function () {
    return redirect('/activity2');
});
Route::redirect('activity2', '/JERICKANAME');

//Creating Redirect
Route::get('jers', [control::class,'index']);

//Act3
Route::get('/Name/{Name}/{Age}/{Address}', function ($Name, $Age, $Address){
    return "Name: ${Name}<br>
    Id Number: ${Age}<br>
    Address: ${Address}";
});

//Act4
//1st Output
Route::get('/jerickadiaz/{Name?}/{Id?}/{Address?}', function ($Name="Jericka Florida Diaz", $Id="0551", $Address="Binmaley, Pangasinan") {
    return "Name: ${Name} <br> Id number: ${Id} <br> From: ${Address}";
 });

//2nd Output
Route:: get('/ricka/{Name?}/{Id?}/{Address?}' , function ($Name=null, $Id=null, $Address=null) {
    if(isset($Name) || isset($Id) || isset($Address)){
        return "Name: ${Name} <br> Id number: ${Id} <br> From: ${Address}";
    }
    return "You've input nothing!";
 });

 //Act 5
 route:: get('/', function(){
    return view('header');
});

Route::get('act5/Item', function () {
    return view('Item');
})->name('Item');

Route::get('act5/Customer', function () {
    return view('Customer');
})->name('Customer');

Route::get('act05/order-details', function () {
    return view('Order-details');
})->name('Order_details');

Route::get('act5/order', function () {
    return view('Order');
})->name('Order');


