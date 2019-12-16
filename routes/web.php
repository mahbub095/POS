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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pos', 'PosController@index')->name('pos');
Route::get('/pending/order','PosController@PendingOrder')->name('pending.orders');
Route::get('/view-order-status/{id}','PosController@ViewOrder');
Route::get('/pos-done/{id}','PosController@PosDONE');
Route::get('/success/order','PosController@SuccessOrder')->name('success.orders');
//Cart controller
Route::post('/add-cart', 'CartController@index');
Route::post('/cart-update/{rowId}', 'CartController@CartUpdate');
Route::get('/cart-remove/{rowId}', 'CartController@CartRemove');
Route::post('/invoice', 'CartController@CreateInvoice');
Route::post('/final-invoice', 'CartController@FinalInvoice');

// Admin Group
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::resource('category', 'CategoryController');
    Route::resource('supplier', 'SupplierController');
    Route::resource('employee', 'EmployeeController');
    Route::resource('customer', 'CustomerController');
    Route::resource('product', 'ProductController');
    Route::resource('advanced_salary', 'AdvancedSalaryController');
    Route::resource('expense', 'ExpenseController');

    Route::get('expense-today', 'ExpenseController@today_expense')->name('expense.today');
    Route::get('expense-month/{month?}', 'ExpenseController@month_expense')->name('expense.month');
    Route::get('expense-yearly/{year?}', 'ExpenseController@yearly_expense')->name('expense.yearly');

});


