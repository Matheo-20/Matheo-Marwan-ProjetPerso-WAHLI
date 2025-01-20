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
