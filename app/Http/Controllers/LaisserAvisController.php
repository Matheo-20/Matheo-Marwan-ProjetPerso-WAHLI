<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Plat;
use App\Models\Evaluer;



class LaisserAvisController extends Controller
{
    
    public function create()
    {
        $plats = Plat::all(); 
        return view('LaisserAvis', compact('plats')); 
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'plat_id' => 'required|exists:plats,id', 
            'commentaire' => 'required|string',
            'note' => 'required|integer|min:1|max:5',
            
        ]);
    
        
        Evaluer::create([
            'plat_id' => $request->plat_id,
            'commentaire' => $request->commentaire,
            'note' => $request->note,
            
            
        ]);
    
        return redirect()->back()->with('message', 'Votre avis a bien été envoyé!');
    }

    public function clients(){
        return $this ->belongsToMany(Client::class);
    }
    

}
