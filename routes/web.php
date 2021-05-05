<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\emailContactController;
use App\Service;
use App\Testimonial;
use App\Project;
use App\Client;
use App\Team;
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
        'team_members' => App\Team::all(),
    ]
    );
});

Route::get('/service/{id}', function($id) {
//    $project_data = Project::where('id',$id)->get();
	return view('service', ['service_id' => $id]);
})->name('service');

Route::get('/project/{id}', function($id) {
    return view('project',
    [
        'project' => Project::find($id),
    ]
    );
})->name('project');

Route::post('/contact','App\Http\Controllers\emailContactController@sendMail');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
