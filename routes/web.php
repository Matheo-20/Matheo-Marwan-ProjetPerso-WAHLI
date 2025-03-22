<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ClientController;




Route::get('/','App\Http\Controllers\ClientController@AccueilClient');
Route::get('/AccueilClient','App\Http\Controllers\ClientController@AccueilClient');


Route::get('/Contacts', [ContactsController::class, 'create'])->name('contact.create');
Route::post('/Contacts', [ContactsController::class, 'store'])->name('contact.store');

Route::get('/AsieSpe','App\Http\Controllers\ClientController@AsieSpe');
Route::get('/Canada','App\Http\Controllers\ClientController@Canada');

Route::get('/EtatsUnis','App\Http\Controllers\ClientController@EtatsUnis');

Route::get('/Cuba','App\Http\Controllers\ClientController@Cuba');

Route::get('/AfriqueSpe','App\Http\Controllers\ClientController@AfriqueSpe');

Route::get('/AmériqueduNordSpe','App\Http\Controllers\ClientController@AmériqueduNordSpe');

Route::get('/AmériqueduSudSpe','App\Http\Controllers\ClientController@AmériqueduSudSpe');

Route::get('/Mexique','App\Http\Controllers\ClientController@Mexique');

Route::get('/Colombie','App\Http\Controllers\ClientController@Colombie');

Route::get('/Argentine','App\Http\Controllers\ClientController@Argentine');

Route::get('/Australie','App\Http\Controllers\ClientController@Australie');

Route::get('/Fidji','App\Http\Controllers\ClientController@Fidji');

Route::get('/PapouasieNouvelleGuinée','App\Http\Controllers\ClientController@PapouasieNouvelleGuinée');

Route::get('/NouvelleZelande','App\Http\Controllers\ClientController@NouvelleZelande');


Route::get('/Pizza','App\Http\Controllers\ClientController@Pizza');

Route::get('/Pates','App\Http\Controllers\ClientController@Pates');

Route::get('/Risotto','App\Http\Controllers\ClientController@Risotto');

Route::get('/Lasagnes','App\Http\Controllers\ClientController@Lasagnes');

Route::get('/Tiramisu','App\Http\Controllers\ClientController@Tiramisu');

Route::get('/Quiche','App\Http\Controllers\ClientController@Quiche');

Route::get('/Aligot','App\Http\Controllers\ClientController@Aligot');

Route::get('/Boeuf','App\Http\Controllers\ClientController@Boeuf');

Route::get('/Gratin','App\Http\Controllers\ClientController@Gratin');

Route::get('/Tartiflette','App\Http\Controllers\ClientController@Tartiflette');

Route::get('/Tapas','App\Http\Controllers\ClientController@Tapas');

Route::get('/Gazpa','App\Http\Controllers\ClientController@Gazpa');

Route::get('/Tortilla','App\Http\Controllers\ClientController@Tortilla');

Route::get('/Churros','App\Http\Controllers\ClientController@Churros');

Route::get('/Paella','App\Http\Controllers\ClientController@Paella');

Route::get('/Carne','App\Http\Controllers\ClientController@Carne');

Route::get('/Sardine','App\Http\Controllers\ClientController@Sardine');

Route::get('/Pastel','App\Http\Controllers\ClientController@Pastel');

Route::get('/Francesinha','App\Http\Controllers\ClientController@Francesinha');

Route::get('/Bacalhau','App\Http\Controllers\ClientController@Bacalhau');

Route::get('/Poutine','App\Http\Controllers\ClientController@Poutine');

Route::get('/Sirop','App\Http\Controllers\ClientController@Sirop');

Route::get('/Homard','App\Http\Controllers\ClientController@Homard');

Route::get('/Tourtiere','App\Http\Controllers\ClientController@Tourtiere');

Route::get('/Beaver','App\Http\Controllers\ClientController@Beaver');



Route::get('/Burger','App\Http\Controllers\ClientController@Burger');

Route::get('/Mac','App\Http\Controllers\ClientController@Mac');

Route::get('/Apple','App\Http\Controllers\ClientController@Apple');

Route::get('/Barbecue','App\Http\Controllers\ClientController@Barbecue');

Route::get('/Clam','App\Http\Controllers\ClientController@Clam');



Route::get('/Tacos','App\Http\Controllers\ClientController@Tacos');

Route::get('/Guacamole','App\Http\Controllers\ClientController@Guacamole');

Route::get('/Enchiladas','App\Http\Controllers\ClientController@Enchiladas');

Route::get('/Pozole','App\Http\Controllers\ClientController@Pozole');

Route::get('/Barbacoa','App\Http\Controllers\ClientController@Barbacoa');

Route::get('/Acaraje', 'App\Http\Controllers\ClientController@Acaraje');

Route::get('/Pao', 'App\Http\Controllers\ClientController@Pao');

Route::get('/Moqueca', 'App\Http\Controllers\ClientController@Moqueca');

Route::get('/Churrasco', 'App\Http\Controllers\ClientController@Churrasco');

Route::get('/Brigadeiro', 'App\Http\Controllers\ClientController@Brigadeiro');

Route::get('/Asado', 'App\Http\Controllers\ClientController@Asado');

Route::get('/EmpanadasA', 'App\Http\Controllers\ClientController@EmpanadasA');

Route::get('/Choripan', 'App\Http\Controllers\ClientController@Choripan');

Route::get('/Milanesa', 'App\Http\Controllers\ClientController@Milanesa');

Route::get('/Dulce', 'App\Http\Controllers\ClientController@Dulce');

Route::get('/Arepa', 'App\Http\Controllers\ClientController@Arepa');

Route::get('/Ajiaco', 'App\Http\Controllers\ClientController@Ajiaco');

Route::get('/Bandeja', 'App\Http\Controllers\ClientController@Bandeja');

Route::get('/EmpanadaC', 'App\Http\Controllers\ClientController@EmpanadaC');

Route::get('/Pandebono', 'App\Http\Controllers\ClientController@Pandebono');

Route::get('/EmpanadaCh', 'App\Http\Controllers\ClientController@EmpanadaCh');

Route::get('/PastelD', 'App\Http\Controllers\ClientController@PastelD');

Route::get('/Curanto', 'App\Http\Controllers\ClientController@Curanto');

Route::get('/Caldillo', 'App\Http\Controllers\ClientController@Caldillo');

Route::get('/Sopaipillas', 'App\Http\Controllers\ClientController@Sopaipillas');

Route::get('/Couscous', 'App\Http\Controllers\ClientController@Couscous');

Route::get('/Tagine', 'App\Http\Controllers\ClientController@Tagine');

Route::get('/Pastilla', 'App\Http\Controllers\ClientController@Pastilla');

Route::get('/Harira', 'App\Http\Controllers\ClientController@Harira');

Route::get('/Chebakia', 'App\Http\Controllers\ClientController@Chebakia');

Route::get('/Seffa', 'App\Http\Controllers\ClientController@Seffa');



Route::get('/Attieke', 'App\Http\Controllers\ClientController@Attieke');

Route::get('/SauceArachide', 'App\Http\Controllers\ClientController@SauceA');

Route::get('/Kedjenou', 'App\Http\Controllers\ClientController@Kedjenou');

Route::get('/Alloco', 'App\Http\Controllers\ClientController@Alloco');

Route::get('/Foutou', 'App\Http\Controllers\ClientController@Foutou');

Route::get('/Tieb', 'App\Http\Controllers\ClientController@Tieb');

Route::get('/Yassa', 'App\Http\Controllers\ClientController@Yassa');

Route::get('/Mafe', 'App\Http\Controllers\ClientController@Mafe');

Route::get('/Domoda', 'App\Http\Controllers\ClientController@Domoda');

Route::get('/Beignet', 'App\Http\Controllers\ClientController@Beignet');


Route::get('/Calulu', 'App\Http\Controllers\ClientController@Calulu');
Route::get('/Doce', 'App\Http\Controllers\ClientController@Doce');
Route::get('/Cachupa', 'App\Http\Controllers\ClientController@Cachupa');
Route::get('/Funge', 'App\Http\Controllers\ClientController@Funge');
Route::get('/Muamba', 'App\Http\Controllers\ClientController@Muamba');


Route::get('/Canard', 'App\Http\Controllers\ClientController@Canard');
Route::get('/Dumpling', 'App\Http\Controllers\ClientController@Dumpling');
Route::get('/Mapo', 'App\Http\Controllers\ClientController@Mapo');
Route::get('/Nems', 'App\Http\Controllers\ClientController@Nems');
Route::get('/RizC', 'App\Http\Controllers\ClientController@RizC');


Route::get('/Matcha', 'App\Http\Controllers\ClientController@Matcha');
Route::get('/Sushi', 'App\Http\Controllers\ClientController@Sushi');
Route::get('/Ramen', 'App\Http\Controllers\ClientController@Ramen');
Route::get('/Tempura', 'App\Http\Controllers\ClientController@Tempura');
Route::get('/Oko', 'App\Http\Controllers\ClientController@Oko');



Route::get('/Pad', 'App\Http\Controllers\ClientController@Pad');
Route::get('/Mango', 'App\Http\Controllers\ClientController@Mango');
Route::get('/Curry', 'App\Http\Controllers\ClientController@Curry');
Route::get('/Tom', 'App\Http\Controllers\ClientController@Tom');
Route::get('/Som', 'App\Http\Controllers\ClientController@Som');

Route::get('/Biryani', 'App\Http\Controllers\ClientController@Biryani');
Route::get('/Gulab', 'App\Http\Controllers\ClientController@Gulab');
Route::get('/Nihari', 'App\Http\Controllers\ClientController@Nihari');
Route::get('/Seekh', 'App\Http\Controllers\ClientController@Seekh');
Route::get('/Haleem', 'App\Http\Controllers\ClientController@Haleem');



Route::get('/Meat', 'App\Http\Controllers\ClientController@Meat');
Route::get('/Fairy', 'App\Http\Controllers\ClientController@Fairy');
Route::get('/Pavlova', 'App\Http\Controllers\ClientController@Pavlova');
Route::get('/Lamington', 'App\Http\Controllers\ClientController@Lamington');
Route::get('/Barbecued', 'App\Http\Controllers\ClientController@Barbecued');


Route::get('/Hangi', 'App\Http\Controllers\ClientController@Hangi');
Route::get('/Moule', 'App\Http\Controllers\ClientController@Moule');
Route::get('/Paua', 'App\Http\Controllers\ClientController@Paua');
Route::get('/CheeseR', 'App\Http\Controllers\ClientController@CheeseR');
Route::get('/Agneau', 'App\Http\Controllers\ClientController@Agneau');


Route::get('/Kokoda', 'App\Http\Controllers\ClientController@Kokoda');
Route::get('/Cassava', 'App\Http\Controllers\ClientController@Cassava');
Route::get('/Palusami', 'App\Http\Controllers\ClientController@Palusami');
Route::get('/Lovo', 'App\Http\Controllers\ClientController@Lovo');
Route::get('/Roti', 'App\Http\Controllers\ClientController@Roti');
Route::get('/Ropa','App\Http\Controllers\ClientController@Ropa');
Route::get('/Lechon','App\Http\Controllers\ClientController@Lechon');
Route::get('/Arroz','App\Http\Controllers\ClientController@Arroz');
Route::get('/Tostones','App\Http\Controllers\ClientController@Tostones');
Route::get('/Flan','App\Http\Controllers\ClientController@Flan');


Route::get('/Chine','App\Http\Controllers\ClientController@Chine');

Route::get('/Japon','App\Http\Controllers\ClientController@Japon');

Route::get('/Pakistan','App\Http\Controllers\ClientController@Pakistan');

Route::get('/Thailande','App\Http\Controllers\ClientController@Thailande');

Route::get('/Bresil','App\Http\Controllers\ClientController@Bresil');

Route::get('/Chili','App\Http\Controllers\ClientController@Chili');

Route::get('/Angola','App\Http\Controllers\ClientController@Angola');

Route::get('/Senegal','App\Http\Controllers\ClientController@Senegal');

Route::get('/Maroc','App\Http\Controllers\ClientController@Maroc');

Route::get('/CoteDivoire','App\Http\Controllers\ClientController@CoteDivoire');

Route::get('/OceanieSpe','App\Http\Controllers\ClientController@OceanieSpe');

Route::get('/EuropeSpe','App\Http\Controllers\ClientController@EuropeSpe');

Route::get('/connexionClient','App\Http\Controllers\ClientController@connexionClient');

Route::get('/inscription','App\Http\Controllers\ClientController@inscription');

Route::get('/France','App\Http\Controllers\ClientController@France');

Route::get('/Espagne','App\Http\Controllers\ClientController@Espagne');

Route::get('/Italie','App\Http\Controllers\ClientController@Italie');

Route::get('/Quiche','App\Http\Controllers\ClientController@Quiche');

Route::get('/Portugal','App\Http\Controllers\ClientController@Portugal');

Route::get('/ListePlat','App\Http\Controllers\ClientController@ListePlat'); 

Route::get('/Contact','App\Http\Controllers\ClientController@Contact');


Route::get('/ListeResto','App\Http\Controllers\ClientController@ListeResto'); 


Route::get('/inscription','App\Http\Controllers\ClientController@inscription'); 
Route::POST('/inscription','App\Http\Controllers\ClientController@inscription'); 

Route::get('/seConnecterClient','App\Http\Controllers\ClientController@seConnecterClient');
Route::POST('/connecter',[ClientController::class, 'connecter']);

































Route::get('/deconnecterClient','App\Http\Controllers\ClientController@deconnecterClient'); 


Route::get('/reinitialiserMdp','App\Http\Controllers\ClientController@reinitialiserMdp'); 


Route::get('/choisirPays','App\Http\Controllers\ClientController@ChoisirPays'); 


Route::get('/laisserAvis','App\Http\Controllers\ClientController@LaisserAvis'); 









Route::get('/admin/connexionAdmin','App\Http\Controllers\AdminController@connexionAdmin'); 

Route::get('/admin/connecterAdmin','App\Http\Controllers\AdminController@connecterAdmin'); 

Route::get('/admin/modificationListeResto','App\Http\Controllers\AdminController@modificationListeResto'); 

Route::get('/admin/modificationListePlat','App\Http\Controllers\AdminController@modificationListePlat'); 

Route::get('/admin/supprimerAvis','App\Http\Controllers\AdminController@supprimerAvis'); 

Route::get('/admin/seDeconnecter','App\Http\Controllers\AdminController@seDeconnecter'); 

Route::get('/admin/bloquerUtilisateur','App\Http\Controllers\AdminController@bloquerUtilisateur'); 










