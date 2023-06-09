<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;
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
//Acara 5
//File Route Default
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/user', [ManagementUserController::class, 'index']);
Route::resource('user', ManagementUserController::class);
// //route default
// Route::get('/user', 'UserController@index');
Route::get("/home", function(){
    return view("home");
});

// //metode route yang tersedia
// Route::get($uri, $callback);
// Route::post($uri, $callback);

// Route::put($uri,$callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

// Route::match(['get', 'post'], '/', function(){
//     //
// });

// Route::any('/', function(){
//     //
// });

// // <form method="POST" action="/profile">
// //     @csrf
// //     ...
// // </form>

// //redirect route
// Route::redirect('/here','/there');
// Route::redirect('/here', '/there', 301);
// Route::permanentRedirect('/here', '/there');

// //route view
// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Sevia']);


// //Acara 6
// //1. parameter opsional
// Route::get('user/{name?}', function ($name = null){
//     return $name;
// });

// Route::get('user/{name?}', function ($name = 'Dewiika'){
//     return $name;
// });

// //2. regular expression
// Route::get('user/{name}', function ($name){
//     //
// })->where('name', '[A-Za-z]+');

// Route::get('user/{id}', function ($id){
//     //
// })->where('id', '[0-9]+');

// Route::get('user/{id}/{name}', function ($id, $name){
//     //
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// //3. Global constraints

// Route::get('user/{id}', function ($id){
// // only executed if (id) is numeric...
// });

// //4. Encoded Forward Slashes
// Route::get('search/{search}', function ($search){
//     return $search;
// })->where('search', '.*');


// //Acara 7
// //1. Generate URL ke Route Bernama

// //Generating URLs...
// $url = route('profile');

// //Generating Redirects...
// return redirect()->route('profile');


// Route::get('user/{id}/profile', function ($id){
//     //
// })->name('profile');

// $url = route('profile', ['id' => 1]);


// Route::get('user/{id}/profile', function ($id){
//     //
// })->name('profile');

// $url = route('profile', ['id' => 1,'photos' => 'yes']);

// // /user/1/profile?photos=yes

// //2.Memeriksa Rute Saat Ini
// // /**
// //  * Handle an incoming request
// //  * 
// //  * @param \Illuminate\Http\Request $request
// //  * @param \Closure $next
// //  * @return miixed
// //  */
// // public function handle($request, Closure $next)
// // {
// //     if ($request->route()->named('profile')){
// //         //
// //     }

// //     return $next($request);
// // }

// //Acara 8
// // Middleware
// Route::middleware(['first', 'second'])->group(function(){
//     Route::get('/', function(){
//         //Uses first & second  Middleware
//     });
//     Route::get('user/profile', function(){
//         //uses first & second  Middleware
//     });
// });

// //2. Namespaces
// Route::namespaces('Admin')->group(function(){
//     //Controllers Within The "App\Http\Controllers\Admin"  Namespaces
// });

// //3. Subdomain Routing
// Route::domain('{account}.myapp.com')->group(function(){
//     Route::get('user/{id}', function ($account, $id){
//         //
//     });
// });

// //4. Route Prefixes
// Route::prefix('admin')->group(function(){
//     Route::get('users', function(){
//         // Matches The "/admin/users" URL
//     });
// });

// //5. Route Name Prefixes
// Route::name('admin')->group(function(){
//     Route::get('users', function(){
//         //Route assigned name "admin.users"...
//     })->name('users');
// });