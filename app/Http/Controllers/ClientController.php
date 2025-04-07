<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Http\Request;

class ClientController extends Controller {
    
    public function AccueilClient(){
        return view('AccueilClient');
    }

    public function connexionClient(){
        return view('connexionClient');
    }
    
    public function connecter(Request $request)
{
    $email = $request->input('email');
    $mdp = $request->input('mdp');
    
    $client = Client::where('email', $email)->first();

    if ($client && Hash::check($mdp, $client->mdp)) {
        // Stockez l'objet client ET son ID séparément pour plus de sécurité
        session()->put('clients', $client);
        session()->put('client_id', $client->id); // Critique pour votre cas
        
        return view('vue-espace-perso');
    } else {
        return view('seConnecterClient')->with('connexion_nok', true);
    }
}
      
    public function create(){
         return view ('inscriptionreussi');
  }
      
  public function store(Request $request){
    
    $client = Client::create([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'email' => $request->email,
        'mdp' => bcrypt($request->mdp),  
    ]);

    return redirect()->route('Client.create')->with('success', 'Inscription réussie!');
}

    public function evaluer(){
        return $this ->belongsToMany(LaisserAvis::class);
    }

    
     

    public function Pizza(){
        return view ('Pizza');
    }

    public function Boeuf(){
        return view ('Boeuf');
    }

    public function Quiche(){
        return view ('Quiche');
    }

    public function Tartiflette(){
        return view ('Tartiflette');
    }

    public function Aligot(){
        return view ('Aligot');
    }

    public function Gratin(){
        return view ('Gratin');
    }






    public function Pates(){
        return view ('Pates');
    }

    public function Tiramisu(){
        return view ('Tiramisu');
    }

    public function Risotto(){
        return view ('Risotto');
    }

    public function Lasagnes(){
        return view('Lasagnes');
    }


    public function OceanieSpe(){
        return view ('OceanieSpe');
    }

    public function AfriqueSpe(){
        return view ('AfriqueSpe');
    }

    public function AmériqueduNordSpe(){
        return view ('AmériqueduNordSpe');
    }

    public function Italie(){
        return view ('Italie');
    }

    public function Tapas(){
        return view ('Tapas');
    }

    public function Gazpa(){
        return view ('Gazpa');
    }

    public function Carne(){
        return view ('Carne');
    }

    public function Bacalhau(){
        return view ('Bacalhau');
    }

    public function Sardine(){
        return view ('Sardine');
    }

    public function Pastel(){
        return view ('Pastel');
    }

    public function Francesinha(){
        return view ('Francesinha');
    }

    public function Poutine(){
        return view ('Poutine');
    }

    public function Tourtiere(){
        return view ('Tourtiere');
    }

    public function Sirop(){
        return view ('Sirop');
    }

    public function Homard(){
        return view ('Homard');
    }

    public function Beaver(){
        return view ('Beaver');
    }

    public function Burger(){
        return view ('Burger');
    }

    public function Barbecue(){
        return view ('Barbecue');
    }

    public function Mac(){
        return view ('Mac');
    }

    public function Apple(){
        return view ('Apple');
    }

    public function Clam(){
        return view ('Clam');
    }

    public function Tacos(){
        return view ('Tacos');
    }

    public function Pozole(){
        return view ('Pozole');
    }

    public function Enchiladas(){
        return view ('Enchiladas');
    }

    public function Barbacoa(){
        return view ('Barbacoa');
    }

    public function Acaraje(){
        return view ('Acaraje');
    }

    public function Pao(){
        return view ('Pao');
    }

    public function Moqueca(){
        return view ('Moqueca');
    }

    public function Churrasco(){
        return view ('Churrasco');
    }

    public function Brigadeiro(){
        return view ('Brigadeiro');
    }

    public function Asado(){
        return view ('Asado');
    }

    public function EmpanadasA(){
        return view ('EmpanadasA');
    }

    public function Milanesa(){
        return view ('Milanesa');
    }


    public function Choripan(){
        return view ('Choripan');
    }

    
    public function Dulce(){
        return view ('Dulce');
    }

    public function Arepa(){
        return view ('Arepa');
    }

    public function Ajiaco(){
        return view ('Ajiaco');
    }

    public function Bandeja(){
        return view ('Bandeja');
    }

    public function EmpanadaC(){
        return view ('EmpanadaC');
    }

    public function Pandebono(){
        return view ('Pandebono');
    }

    public function EmpanadaCh(){
        return view ('EmpanadasCh');
    }

    public function Sopaipillas(){
        return view ('Sopaipillas');
    }

    public function PastelD(){
        return view ('PastelD');
    }

    public function Curanto(){
        return view ('Curanto');
    }
    public function Caldillo(){
        return view ('Caldillo');
    }


    public function Couscous(){
        return view ('Couscous');
    }


    public function Tagine(){
        return view ('Tagine');
    }


    public function Harira(){
        return view ('Harira');
    }

    public function Pastilla(){
        return view ('Pastilla');
    }

    public function Chebakia(){
        return view ('Chebakia');
    }

    public function Seffa(){
        return view ('Seffa');
    }

    public function Attieke(){
        return view ('Attieke');
    }

    public function Foutou(){
        return view ('Foutou');
    }

    public function SauceA(){
        return view ('SauceA');
    }

    public function Alloco (){
        return view ('Alloco');
    }

    public function Kedjenou (){
        return view ('Kedjenou');
    }

    Public function Tieb(){
        return view ('Tieb');
    }

    public function Yassa(){
        return view ('Yassa');
    }

    public function Mafe(){
        return view ('Mafe');
    }

    public function Domoda(){
        return view ('Domoda');
    }

    public function Beignet(){
        return view ('Beignet');
    }

    public function Calulu(){
        return view ('Calulu');
    }

    public function Cachupa(){
        return view ('Cachupa');
    }

    public function Funge(){
        return view ('Funge');
    }

    public function Muamba(){
        return view ('Muamba');
    }

    public function Doce(){
        return view ('Doce');
    }

    public function Canard(){
        return view ('Canard');
    }

    public function Dumpling(){
        return view ('Dumpling');
    }

    public function Mapo(){
        return view ('Mapo');
    }

    public function Nems(){
        return view ('Nems');
    }

    public function RizC(){
        return view ('RizC');
    }

    public function Sushi(){
        return view ('Sushi');
    }

    public function Ramen (){
        return view ('Tempura');
    }

    public function Tempura(){
        return view ('Tempura');
    }

    public function Matcha(){
        return view ('Matcha');
    }

    public function Oko(){
        return view ('Oko');
    }

    public function Pad(){
        return view ('Pad');
    }

    public function Som(){
        return view ('Som');
    }


    public function Tom(){
        return view ('Tom');
    }

    public function Curry(){
        return view ('Curry');
    }

    public function Mango(){
        return view ('Mango');
    }

    public function Biryani(){
        return view ('Biryani');
    }

    public function Nihari(){
        return view ('Nihari');
    }

    public function Seekh(){
        return view ('Seekh');
    }

    public function Haleem(){
        return view ('Haleem');
    }

    public function Gulab(){
        return view ('Gulab');
    }


    public function Meat(){
        return view ('Meat');
    }

    public function Lamington(){
        return view ('Lamington');
    }

    public function Pavlova(){
        return view ('Pavlova');

    }
       

    public function Barbecued(){
        return view ('Barbecued');
    }

    public function Fairy(){
        return view ('Fairy');
    }

    public function CheeseR(){
        return view ('CheeseR');
    }

    public function Moule(){
        return view ('Moule');
    }

    public function Paua(){
        return view ('Paua');
    }

    public function Hangi(){
        return view ('Hangi');
    }

    public function Agneau(){
        return view ('Agneau');
    }

    public function Kokoda(){
        return view ('Kokoda');
    }

    public function Palusami(){
        return view ('Palusami');
    }

    public function Lovo(){
        return view ('Lovo');
    }


    public function Roti(){
        return view ('Roti');
    }

    public function Cassava(){
        return view ('Cassava');
    }











    public function Guacamole(){
        return view ('Guacamole');
    }

    public function Ropa(){
        return view ('Ropa');
    }

    public function Arroz(){
        return view ('Arroz');
    }

    public function Lechon(){
        return view ('Lechon');
    }

    public function Flan(){
        return view ('Flan');
    }

    public function Tostones(){
        return view ('Tostones');
    }











    public function Churros(){
        return view ('Churros');
    }
    
    public function Paella(){
        return view ('Paella');
    }

    public function Tortilla(){
        return view ('Tortilla');
    }



    public function Bresil(){
        return view ('Bresil');
    }

    public function Colombie(){
        return view ('Colombie');
    }

    public function Australie(){
        return view ('Australie');
    }

    public function Fidji(){
        return view ('Fidji');
    }

    public function PapouasieNouvelleGuinée(){
        return view ('Papouasie-Nouvelle-Guinée');
    }

    public function NouvelleZelande(){
        return view ('Nouvelle-Zélande');
    }

    public function Argentine(){
        return view ('Argentine');
    }

    public function Chine(){
        return view ('Chine');
    }

    public function Japon(){
        return view('Japon');
    }

    public function Thailande(){
        return view('Thailande');
    }

    public function Pakistan(){
        return view ('Pakistan');
    }

    public function Angola(){
        return view ('Angola');
    }

    public function Maroc(){
        return view ('Maroc');
    }

    public function CoteDivoire(){
        return view ('CoteDivoire');
    }

    public function Senegal(){
        return view ('Senegal');
    }

    public function Chili(){
        return view ('Chili');
    }

    public function Portugal(){
        return view ('Portugal');
    }

    public function Cuba(){
        return view ('Cuba');
    }

    public function Mexique(){
        return view ('Mexique');
    }

    public function Canada(){
        return view ('Canada');
    }

    public function EtatsUnis(){
        return view ('EtatsUnis');
    }
    

    public function AmériqueduSudSpe(){
        return view ('AmériqueduSudSpe');
    }

    public function France(){
        return view ('France');
    }

    public function Espagne (){
        return view ('Espagne');
    }

    public function AsieSpe(){
        return view ('AsieSpe');
    }

    public function EuropeSpe(){
        return view ('EuropeSpe');
    }

    public function Contact(){
        return view ('Contact');
    }

    public function inscription(){
        return view ('inscription'); 
    }

    public function seConnecterClient(){
        return view ('seConnecterClient');
    }

    public function deconnecterClient(){
        return view ('deconnecterClient');
    }

    public function reinitialiserMdp(){
        return view ('reinitialiserMdp');
    }

    public function ListePlat(){
        return view ('ListePlat');
    }

    public function ListeResto(){
        return view ('ListeResto');
    }

    public function LaisserAvis(){
        return view ('LaisserAvis');
    }

    public function ChoisirPays(){
        return view ('ChoisirPays');
    }

}