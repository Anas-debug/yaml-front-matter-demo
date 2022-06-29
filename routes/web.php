<?php

use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;


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
$object = YamlFrontMatter::parse(file_get_contents('example.md'));
$object->matter(); // => ['title' => 'Example']
$object->matter('title'); // => 'Example'
$object->body(); // => 'Lorem ipsum.'
$object->title; // => 'Example'


// Route::get('/', function () {
//     return view('welcome');
// });
