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

Route::get('homepage', 'HomepageController@index');
Route::get('categoryPackage/{id}', 'HomepageController@categoryDetailed');
Route::get('package', 'HomepageController@getPackage');

Route::get('packageDetailed/{id}', 'HomepageController@packageDetails');

Route::get('bookingRequest/{id}', 'HomepageController@bookingRequest');
Route::post('processBooking', 'HomepageController@processBooking');
Route::get('packageDetailed/{id}', 'HomepageController@packageDetailed');






Route::get('/migrations/grid', 'MigrationsController@grid');
Route::resource('/migrations', 'MigrationsController');
Route::get('/package_places_to_visits/grid', 'Package_places_to_visitsController@grid');
Route::resource('/package_places_to_visits', 'Package_places_to_visitsController');
Route::get('/package_tags/grid', 'Package_tagsController@grid');
Route::resource('/package_tags', 'Package_tagsController');
Route::get('/package_trip_itineraries/grid', 'Package_trip_itinerariesController@grid');
Route::resource('/package_trip_itineraries', 'Package_trip_itinerariesController');
Route::get('/packages/grid', 'PackagesController@grid');
Route::resource('/packages', 'PackagesController');
Route::get('/places_to_visits/grid', 'Places_to_visitsController@grid');
Route::resource('/places_to_visits', 'Places_to_visitsController');
Route::get('/tags/grid', 'TagsController@grid');
Route::resource('/tags', 'TagsController');
Route::get('/travel_types/grid', 'Travel_typesController@grid');
Route::resource('/travel_types', 'Travel_typesController');
Route::get('/trip_activities/grid', 'Trip_activitiesController@grid');
Route::resource('/trip_activities', 'Trip_activitiesController');
Route::get('/trip_categories/grid', 'Trip_categoriesController@grid');
Route::resource('/trip_categories', 'Trip_categoriesController');
Route::get('/trip_itineraries/grid', 'Trip_itinerariesController@grid');
Route::resource('/trip_itineraries', 'Trip_itinerariesController');
Route::get('/trip_itinerary_places_to_visits/grid', 'Trip_itinerary_places_to_visitsController@grid');
Route::resource('/trip_itinerary_places_to_visits', 'Trip_itinerary_places_to_visitsController');
Route::get('/trip_itinerary_tags/grid', 'Trip_itinerary_tagsController@grid');
Route::resource('/trip_itinerary_tags', 'Trip_itinerary_tagsController');
Route::get('/trip_itinerary_trip_activities/grid', 'Trip_itinerary_trip_activitiesController@grid');
Route::resource('/trip_itinerary_trip_activities', 'Trip_itinerary_trip_activitiesController');
Route::get('/trip_sub_categories/grid', 'Trip_sub_categoriesController@grid');
Route::resource('/trip_sub_categories', 'Trip_sub_categoriesController');