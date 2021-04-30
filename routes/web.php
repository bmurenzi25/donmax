<?php

use Illuminate\Support\Facades\Route;
use App\Service;
use App\Testimonial;
use App\Project;
use App\Client;
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
    return view('home',
    [
        'services'     => App\Service::all(),
        'testimonials' => App\Testimonial::all(),
        'clients'      => App\Client::all(),
    ]
    );
});

Route::get('/service/{id}', function($id) {
//    $project_data = Project::where('id',$id)->get();
	return view('service', ['service_id' => $id]);
})->name('serviced');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
