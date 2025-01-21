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

Route::get('/client/Canada','App\Http\Controllers\ClientController@Canada');

Route::get('/client/EtatsUnis','App\Http\Controllers\ClientController@EtatsUnis');

Route::get('/client/Cuba','App\Http\Controllers\ClientController@Cuba');

Route::get('/client/AfriqueSpe','App\Http\Controllers\ClientController@AfriqueSpe');

Route::get('/client/AmériqueduNordSpe','App\Http\Controllers\ClientController@AmériqueduNordSpe');

Route::get('/client/AmériqueduSudSpe','App\Http\Controllers\ClientController@AmériqueduSudSpe');

Route::get('/client/Mexique','App\Http\Controllers\ClientController@Mexique');

Route::get('/client/Colombie','App\Http\Controllers\ClientController@Colombie');

Route::get('/client/Argentine','App\Http\Controllers\ClientController@Argentine');

Route::get('/client/Australie','App\Http\Controllers\ClientController@Australie');

Route::get('/client/Fidji','App\Http\Controllers\ClientController@Fidji');

Route::get('/client/PapouasieNouvelleGuinée','App\Http\Controllers\ClientController@PapouasieNouvelleGuinée');

Route::get('/client/NouvelleZelande','App\Http\Controllers\ClientController@NouvelleZelande');











Route::get('/client/Chine','App\Http\Controllers\ClientController@Chine');

Route::get('/client/Japon','App\Http\Controllers\ClientController@Japon');

Route::get('/client/Pakistan','App\Http\Controllers\ClientController@Pakistan');

Route::get('/client/Thailande','App\Http\Controllers\ClientController@Thailande');

Route::get('/client/Bresil','App\Http\Controllers\ClientController@Bresil');

Route::get('/client/Chili','App\Http\Controllers\ClientController@Chili');

Route::get('/client/Angola','App\Http\Controllers\ClientController@Angola');

Route::get('/client/Senegal','App\Http\Controllers\ClientController@Senegal');

Route::get('/client/Maroc','App\Http\Controllers\ClientController@Maroc');

Route::get('/client/CoteDivoire','App\Http\Controllers\ClientController@CoteDivoire');

Route::get('/client/OceanieSpe','App\Http\Controllers\ClientController@OceanieSpe');

Route::get('/client/EuropeSpe','App\Http\Controllers\ClientController@EuropeSpe');

Route::get('/client/connexionClient','App\Http\Controllers\ClientController@connexionClient');

Route::get('/client/inscription','App\Http\Controllers\ClientController@inscription');

Route::get('/client/France','App\Http\Controllers\ClientController@France');

Route::get('/client/Espagne','App\Http\Controllers\ClientController@Espagne');

Route::get('/client/Italie','App\Http\Controllers\ClientController@Italie');

Route::get('/client/Quiche','App\Http\Controllers\ClientController@Quiche');

Route::get('/client/Portugal','App\Http\Controllers\ClientController@Portugal');

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










