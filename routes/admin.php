<?php
/*
|--------------------------------------------------------------------------
| Auth  Routes
|--------------------------------------------------------------------------
*/
Route::get('/user/edit','auth\AuthController@edit');
Route::post('/user/edit','auth\AuthController@update');
/*
|--------------------------------------------------------------------------
| Theme Cookie Routes
|--------------------------------------------------------------------------
*/
Route::post('/theme_layout','cookie\ThemeCookieController@themeLayout');
Route::post('/theme_nav_bar_color','cookie\ThemeCookieController@navBarColor');
Route::post('/theme_footer_type','cookie\ThemeCookieController@footerType');
Route::post('/theme_nav_bar_type','cookie\ThemeCookieController@navBarType');
Route::post('/theme_sidebar_switch','cookie\ThemeCookieController@sidebarSwitch');
Route::post('/theme_scroll_top','cookie\ThemeCookieController@scrollTop');
Route::post('/theme_color','cookie\ThemeCookieController@themeColor');
/*
|--------------------------------------------------------------------------
| Resources Routes
|--------------------------------------------------------------------------
*/
Route::resource('settings','settings\SettingsController');
Route::resource('clients','clients\ClientsController');
Route::resource('citations','citations\CitationsController');
Route::resource('competitions','competitions\CompetitionsController');
Route::resource('admins','admins\AdminsController');
Route::resource('admin-groups','admins\AdminGroupsController');
Route::resource('main-categories','categories\MainCategoriesController');
Route::resource('libraries','libraries\LibrariesController');
Route::resource('libraries-main-categories','libraries\LibrariesMainCategoriesController');
Route::resource('libraries-sub-categories','libraries\LibrariesSubCategoriesController');
Route::resource('sub-categories','categories\SubCategoriesController');
Route::resource('sub-sub-categories','categories\SubSubCategoriesController');
/*
|--------------------------------------------------------------------------
| views Routes
|--------------------------------------------------------------------------
*/
Route::get('/','IndexController@index');
Route::get('/icons-font-awesome','icons\IconController@iconsFontAwesome');
Route::get('/icons-feather','icons\IconController@iconsFeather');
Route::get('/inputs','IndexController@inputsExamples');
Route::get('/analytics','IndexController@analyticsExample');
/*
|--------------------------------------------------------------------------
| Ajax Routes
|--------------------------------------------------------------------------
*/

Route::get('/getLibrariesSubCategories','libraries\LibrariesSubCategoriesController@GetSubCategories');

Route::get('/getSubCategories','categories\SubCategoriesController@GetSubCategories');
Route::get('/getSubSubCategories','categories\SubSubCategoriesController@supSupCategoryID');




