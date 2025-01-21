<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller {
    
    public function AccueilClient(){
        return view ('AccueilClient');
    }

    public function connexionClient(){
        return view ('connexionClient');
    }

    public function Pizza(){
        return view ('Pizza');
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

    public function Quiche(){
        return view ('Quiche');
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
