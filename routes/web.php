<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/client/AccueilClient','App\Http\Controllers\ClientController@AccueilClient');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/client/AsieSpe','App\Http\Controllers\ClientController@AsieSpe');

Route::get('/client/AfriqueSpe','App\Http\Controllers\ClientController@AfriqueSpe');

Route::get('/client/AmériqueduNordSpe','App\Http\Controllers\ClientController@AmériqueduNordSpe');

Route::get('/client/AmériqueduSudSpe','App\Http\Controllers\ClientController@AmériqueduSudSpe');

Route::get('/client/OceanieSpe','App\Http\Controllers\ClientController@OceanieSpe');

Route::get('/client/EuropeSpe','App\Http\Controllers\ClientController@EuropeSpe');

Route::get('/client/connexionClient','App\Http\Controllers\ClientController@connexionClient');

Route::get('/client/inscription','App\Http\Controllers\ClientController@inscription');

Route::get('/client/France','App\Http\Controllers\ClientController@France');

Route::get('/client/Espagne','App\Http\Controllers\ClientController@Espagne');

Route::get('/client/Italie','App\Http\Controllers\ClientController@Italie');

Route::get('/client/Quiche','App\Http\Controllers\ClientController@Quiche');

Route::get('/client/ListePlat','App\Http\Controllers\ClientController@ListePlat'); 

Route::get('/client/Contact','App\Http\Controllers\ClientController@Contact');


Route::get('/client/ListeResto','App\Http\Controllers\ClientController@ListeResto'); 


Route::get('/client/inscription','App\Http\Controllers\ClientController@inscription'); 


Route::get('/client/seConnecterClient','App\Http\Controllers\ClientController@seConnecterClient'); 


Route::get('/client/deconnecterClient','App\Http\Controllers\ClientController@deconnecterClient'); 


Route::get('/client/reinitialiserMdp','App\Http\Controllers\ClientController@reinitialiserMdp'); 


Route::get('/client/choisirPays','App\Http\Controllers\ClientController@ChoisirPays'); 


Route::get('/client/laisserAvis','App\Http\Controllers\ClientController@LaisserAvis'); 









Route::get('/admin/connexionAdmin','App\Http\Controllers\AdminController@connexionAdmin'); 

Route::get('/admin/connecterAdmin','App\Http\Controllers\AdminController@connecterAdmin'); 

Route::get('/admin/modificationListeResto','App\Http\Controllers\AdminController@modificationListeResto'); 

Route::get('/admin/modificationListePlat','App\Http\Controllers\AdminController@modificationListePlat'); 

Route::get('/admin/supprimerAvis','App\Http\Controllers\AdminController@supprimerAvis'); 

Route::get('/admin/seDeconnecter','App\Http\Controllers\AdminController@seDeconnecter'); 

Route::get('/admin/bloquerUtilisateur','App\Http\Controllers\AdminController@bloquerUtilisateur'); 










