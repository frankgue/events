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

use App\Event;

Route::get('/', function () {
    //Event::destroy([4, 5]);
    // Event::create([
    //     'name' => "Gala",
    //     'description' => "Soiree de galla ",
    //     'location' => "Akwa Palace",
    //     'price' => 0,
    //     'start_at' => new DateTime('+4 days')
    // ]);
    //
    // Event::create([
    //     'name' => "Voyage d'etude",
    //     'description' => "Tous les etudiants de SIGL irons en voyage touristique ",
    //     'location' => "Limbe",
    //     'price' => 0,
    //     'start_at' => new DateTime('+3 days')
    // ]);

    $events = Event::first();
    $events->price = 5000;
    $events->save();
    //$events = Event::all();
    return view('events.index')->withEvents($events);
});
