<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller{

    public function connexionAdmin(){
        return view ('connexionAdmin');
    }

    public function connecterAdmin(){
        return view ('connecterAdmin');
    }

    public function modificationListeResto(){
        return view ('modifListeResto');
    }

    public function modificationListePlat(){
        return view ('modifListePlat');
    }

    
    public function supprimerAvis(){
        return view ('supprimerAvis');
    }
    
    public function seDeconnecter(){
        return view ('seDeconnecter');
    }

    public function bloquerUtilisateur(){
        return view ('bloquerUtilisateur');
    }
}
    


    

