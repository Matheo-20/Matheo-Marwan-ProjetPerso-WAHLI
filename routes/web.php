<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ClientController;

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

Route::get('/client/Contacts', [ContactsController::class, 'create'])->name('contact.create');
Route::post('/client/Contacts', [ContactsController::class, 'store'])->name('contact.store');



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


Route::get('/client/Pizza','App\Http\Controllers\ClientController@Pizza');

Route::get('/client/Pates','App\Http\Controllers\ClientController@Pates');

Route::get('/client/Risotto','App\Http\Controllers\ClientController@Risotto');

Route::get('/client/Lasagnes','App\Http\Controllers\ClientController@Lasagnes');

Route::get('/client/Tiramisu','App\Http\Controllers\ClientController@Tiramisu');

Route::get('/client/Quiche','App\Http\Controllers\ClientController@Quiche');

Route::get('/client/Aligot','App\Http\Controllers\ClientController@Aligot');

Route::get('/client/Boeuf','App\Http\Controllers\ClientController@Boeuf');

Route::get('/client/Gratin','App\Http\Controllers\ClientController@Gratin');

Route::get('/client/Tartiflette','App\Http\Controllers\ClientController@Tartiflette');

Route::get('/client/Tapas','App\Http\Controllers\ClientController@Tapas');

Route::get('/client/Gazpa','App\Http\Controllers\ClientController@Gazpa');

Route::get('/client/Tortilla','App\Http\Controllers\ClientController@Tortilla');

Route::get('/client/Churros','App\Http\Controllers\ClientController@Churros');

Route::get('/client/Paella','App\Http\Controllers\ClientController@Paella');

Route::get('/client/Carne','App\Http\Controllers\ClientController@Carne');

Route::get('/client/Sardine','App\Http\Controllers\ClientController@Sardine');

Route::get('/client/Pastel','App\Http\Controllers\ClientController@Pastel');

Route::get('/client/Francesinha','App\Http\Controllers\ClientController@Francesinha');

Route::get('/client/Bacalhau','App\Http\Controllers\ClientController@Bacalhau');

Route::get('/client/Poutine','App\Http\Controllers\ClientController@Poutine');

Route::get('/client/Sirop','App\Http\Controllers\ClientController@Sirop');

Route::get('/client/Homard','App\Http\Controllers\ClientController@Homard');

Route::get('/client/Tourtiere','App\Http\Controllers\ClientController@Tourtiere');

Route::get('/client/Beaver','App\Http\Controllers\ClientController@Beaver');



Route::get('/client/Burger','App\Http\Controllers\ClientController@Burger');

Route::get('/client/Mac','App\Http\Controllers\ClientController@Mac');

Route::get('/client/Apple','App\Http\Controllers\ClientController@Apple');

Route::get('/client/Barbecue','App\Http\Controllers\ClientController@Barbecue');

Route::get('/client/Clam','App\Http\Controllers\ClientController@Clam');



Route::get('/client/Tacos','App\Http\Controllers\ClientController@Tacos');

Route::get('/client/Guacamole','App\Http\Controllers\ClientController@Guacamole');

Route::get('/client/Enchiladas','App\Http\Controllers\ClientController@Enchiladas');

Route::get('/client/Pozole','App\Http\Controllers\ClientController@Pozole');

Route::get('/client/Barbacoa','App\Http\Controllers\ClientController@Barbacoa');

Route::get('/client/Acaraje', 'App\Http\Controllers\ClientController@Acaraje');

Route::get('/client/Pao', 'App\Http\Controllers\ClientController@Pao');

Route::get('/client/Moqueca', 'App\Http\Controllers\ClientController@Moqueca');

Route::get('/client/Churrasco', 'App\Http\Controllers\ClientController@Churrasco');

Route::get('/client/Brigadeiro', 'App\Http\Controllers\ClientController@Brigadeiro');

Route::get('/client/Asado', 'App\Http\Controllers\ClientController@Asado');

Route::get('/client/EmpanadasA', 'App\Http\Controllers\ClientController@EmpanadasA');

Route::get('/client/Choripan', 'App\Http\Controllers\ClientController@Choripan');

Route::get('/client/Milanesa', 'App\Http\Controllers\ClientController@Milanesa');

Route::get('/client/Dulce', 'App\Http\Controllers\ClientController@Dulce');

Route::get('/client/Arepa', 'App\Http\Controllers\ClientController@Arepa');

Route::get('/client/Ajiaco', 'App\Http\Controllers\ClientController@Ajiaco');

Route::get('/client/Bandeja', 'App\Http\Controllers\ClientController@Bandeja');

Route::get('/client/EmpanadaC', 'App\Http\Controllers\ClientController@EmpanadaC');

Route::get('/client/Pandebono', 'App\Http\Controllers\ClientController@Pandebono');

Route::get('/client/EmpanadaCh', 'App\Http\Controllers\ClientController@EmpanadaCh');

Route::get('/client/PastelD', 'App\Http\Controllers\ClientController@PastelD');

Route::get('/client/Curanto', 'App\Http\Controllers\ClientController@Curanto');

Route::get('/client/Caldillo', 'App\Http\Controllers\ClientController@Caldillo');

Route::get('/client/Sopaipillas', 'App\Http\Controllers\ClientController@Sopaipillas');

Route::get('/client/Couscous', 'App\Http\Controllers\ClientController@Couscous');

Route::get('/client/Tagine', 'App\Http\Controllers\ClientController@Tagine');

Route::get('/client/Pastilla', 'App\Http\Controllers\ClientController@Pastilla');

Route::get('/client/Harira', 'App\Http\Controllers\ClientController@Harira');

Route::get('/client/Chebakia', 'App\Http\Controllers\ClientController@Chebakia');

Route::get('/client/Seffa', 'App\Http\Controllers\ClientController@Seffa');



Route::get('/client/Attieke', 'App\Http\Controllers\ClientController@Attieke');

Route::get('/client/SauceArachide', 'App\Http\Controllers\ClientController@SauceA');

Route::get('/client/Kedjenou', 'App\Http\Controllers\ClientController@Kedjenou');

Route::get('/client/Alloco', 'App\Http\Controllers\ClientController@Alloco');

Route::get('/client/Foutou', 'App\Http\Controllers\ClientController@Foutou');

Route::get('/client/Tieb', 'App\Http\Controllers\ClientController@Tieb');

Route::get('/client/Yassa', 'App\Http\Controllers\ClientController@Yassa');

Route::get('/client/Mafe', 'App\Http\Controllers\ClientController@Mafe');

Route::get('/client/Domoda', 'App\Http\Controllers\ClientController@Domoda');

Route::get('/client/Beignet', 'App\Http\Controllers\ClientController@Beignet');


Route::get('/client/Calulu', 'App\Http\Controllers\ClientController@Calulu');
Route::get('/client/Doce', 'App\Http\Controllers\ClientController@Doce');
Route::get('/client/Cachupa', 'App\Http\Controllers\ClientController@Cachupa');
Route::get('/client/Funge', 'App\Http\Controllers\ClientController@Funge');
Route::get('/client/Muamba', 'App\Http\Controllers\ClientController@Muamba');


Route::get('/client/Canard', 'App\Http\Controllers\ClientController@Canard');
Route::get('/client/Dumpling', 'App\Http\Controllers\ClientController@Dumpling');
Route::get('/client/Mapo', 'App\Http\Controllers\ClientController@Mapo');
Route::get('/client/Nems', 'App\Http\Controllers\ClientController@Nems');
Route::get('/client/RizC', 'App\Http\Controllers\ClientController@RizC');


Route::get('/client/Matcha', 'App\Http\Controllers\ClientController@Matcha');
Route::get('/client/Sushi', 'App\Http\Controllers\ClientController@Sushi');
Route::get('/client/Ramen', 'App\Http\Controllers\ClientController@Ramen');
Route::get('/client/Tempura', 'App\Http\Controllers\ClientController@Tempura');
Route::get('/client/Oko', 'App\Http\Controllers\ClientController@Oko');



Route::get('/client/Pad', 'App\Http\Controllers\ClientController@Pad');
Route::get('/client/Mango', 'App\Http\Controllers\ClientController@Mango');
Route::get('/client/Curry', 'App\Http\Controllers\ClientController@Curry');
Route::get('/client/Tom', 'App\Http\Controllers\ClientController@Tom');
Route::get('/client/Som', 'App\Http\Controllers\ClientController@Som');

Route::get('/client/Biryani', 'App\Http\Controllers\ClientController@Biryani');
Route::get('/client/Gulab', 'App\Http\Controllers\ClientController@Gulab');
Route::get('/client/Nihari', 'App\Http\Controllers\ClientController@Nihari');
Route::get('/client/Seekh', 'App\Http\Controllers\ClientController@Seekh');
Route::get('/client/Haleem', 'App\Http\Controllers\ClientController@Haleem');



Route::get('/client/Meat', 'App\Http\Controllers\ClientController@Meat');
Route::get('/client/Fairy', 'App\Http\Controllers\ClientController@Fairy');
Route::get('/client/Pavlova', 'App\Http\Controllers\ClientController@Pavlova');
Route::get('/client/Lamington', 'App\Http\Controllers\ClientController@Lamington');
Route::get('/client/Barbecued', 'App\Http\Controllers\ClientController@Barbecued');


Route::get('/client/Hangi', 'App\Http\Controllers\ClientController@Hangi');
Route::get('/client/Moule', 'App\Http\Controllers\ClientController@Moule');
Route::get('/client/Paua', 'App\Http\Controllers\ClientController@Paua');
Route::get('/client/CheeseR', 'App\Http\Controllers\ClientController@CheeseR');
Route::get('/client/Agneau', 'App\Http\Controllers\ClientController@Agneau');


Route::get('/client/Kokoda', 'App\Http\Controllers\ClientController@Kokoda');
Route::get('/client/Cassava', 'App\Http\Controllers\ClientController@Cassava');
Route::get('/client/Palusami', 'App\Http\Controllers\ClientController@Palusami');
Route::get('/client/Lovo', 'App\Http\Controllers\ClientController@Lovo');
Route::get('/client/Roti', 'App\Http\Controllers\ClientController@Roti');























Route::get('/client/Ropa','App\Http\Controllers\ClientController@Ropa');

Route::get('/client/Lechon','App\Http\Controllers\ClientController@Lechon');

Route::get('/client/Arroz','App\Http\Controllers\ClientController@Arroz');

Route::get('/client/Tostones','App\Http\Controllers\ClientController@Tostones');


Route::get('/client/Flan','App\Http\Controllers\ClientController@Flan');
















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
Route::POST('/client/inscription','App\Http\Controllers\ClientController@inscription'); 

Route::get('/client/seConnecterClient','App\Http\Controllers\ClientController@seConnecterClient');
Route::POST('/client/connecter',[ClientController::class, 'connecter']);

































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










