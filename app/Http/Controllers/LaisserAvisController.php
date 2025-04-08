<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Plat;
use App\Models\Evaluer;

class LaisserAvisController extends Controller
{
    
    public function create()
    {
       
        if (!Session::has('clients')) {
            return redirect()->route('seConnecterClient')->with('message', 'Veuillez vous connecter pour laisser un avis.');
        }

        $plats = Plat::all(); 
        return view('LaisserAvis', compact('plats')); 
    }

    public function store(Request $request)
    {
        if (!session()->has('client_id')) {
            return redirect()->back()->with('message', 'Vous devez être connecté.');
        }
    
        $clientId = session('client_id'); 
    
        $request->validate([
            'plat_id' => 'required|exists:plats,id',
            'commentaire' => 'required|string',
            'note' => 'required|integer|min:1|max:5',
        ]);
       
        Evaluer::create([
            'client_id' => $clientId, 
            'plat_id' => $request->plat_id,
            'commentaire' => $request->commentaire,
            'note' => $request->note,
        ]);
    
        return view('avisenvoyer');
    }

    public function avis()
    {
        $avis = \DB::table('evaluers')
            ->join('plats', 'evaluers.plat_id', '=', 'plats.id')
            ->join('clients', 'evaluers.client_id', '=', 'clients.id')
            ->select('evaluers.*', 'plats.nom as plat_nom', 'clients.nom as client_nom')
            ->orderBy('evaluers.created_at', 'desc')
            ->get();
    
        return view('LesAvis', compact('avis')); 
    }

}
