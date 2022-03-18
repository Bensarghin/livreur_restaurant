<?php

namespace App\Http\Controllers\visitors;

use App\Http\Controllers\Controller;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class commande_vController extends Controller
{
    public function store($restaurant, $produit)
    {
        DB::table('panels')->insert([
            'client_id' => $commande_id+1,
            'produit_id' => $produit
        ]);
        return redirect()->back();
    }
}
