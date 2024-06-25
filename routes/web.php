<?php

use App\Category;
use App\Manufacturer;
use App\Partner;
use App\Subcategory;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', function(){
    $partners = Partner::all();
    $manufacturers = Manufacturer::all();
    $categories = Category::all();
    return view('index', compact('partners', 'manufacturers', 'categories'));
});

Route::get('/contact', function(){
    return view('contact');
});

// Route::get('/manufacturer/category/{id}/{category_id}', function(Request $request, $id, $category_id){
    
//     $manufacturer = Manufacturer::findOrFail($id);
    
//     $category = Category::findOrFail($category_id);

//     return view('manufacturer-show-category', compact('manufacturer', 'category'));
// });

Route::get('/manufacturer/{slug}', function(Request $request, $slug){
    $manufacturer = Manufacturer::where('slug', $slug)->firstOrFail();
    $categories = Category::with('subcategories', 'subcategories.products')->whereHas('subcategories.products', function($query) use ($manufacturer){
        $query->where('manufacturer_id', $manufacturer->id);
    })->get();
    return view('manufacturer-show', compact('manufacturer', 'categories'));
});

Route::get('/category/{slug}', function(Request $request, $slug){
    $category = Category::where('slug', $slug)->firstOrFail();
    return view('category-show', compact('category'));
});

Route::get('/subcategory/{slug}', function(Request $request, $slug){
    $subcategory = Subcategory::where('slug', $slug)->firstOrFail();
    return view('subcategory-show', compact('subcategory'));
});