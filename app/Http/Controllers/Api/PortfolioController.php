<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Portfolio;

class PortfolioController extends Controller
{
    //METODO INDEX  --  ROTTA IN routes\api
    public function index(){
        
        //Creazione API che restituisce i lavori del portfolio
        $works = Portfolio::all();
        return response()->json([
            'success' => true,
            'results' => $works,
        ]);
    }

}
