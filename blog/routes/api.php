<?php

use Illuminate\Http\Request;

Route::get('products', 'ProductsController@index');

Route::get('products/{product}', 'ProductsController@show');

Route::post('products','ProductsController@store');

Route::put('products/{product}','ProductsController@update');

Route::delete('products/{product}', 'ProductsController@delete');
// Route::get('products', function () {
//     return response(Product::all(),200);
// });
//
// Route::get('products/{product}', function ($productId) {
//     return response()->json(['productId' => "{$productId}"], 200);
// });
//
// Route::post('products', function(Request $request) {
//    $resp = Product::create($request->all());
//     return $resp;
// });
//
// Route::put('products/{product}', function(Request $request, $productId) {
//     $product = Product::findOrFail($productId);
//     $product->update($request->all());
//     return $product;
// });
//
// Route::delete('products/{product}',function($productId) {
//     Product::find($productId)->delete();
//
//     return 204;
// });
//
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
