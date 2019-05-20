<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValentineJokeController extends Controller
{
    public function index(){
        return response()->view('valentine.joke');
    }

    public function checkAnswer($ans){
        if( empty($ans) || is_null($ans) )
            return response()->json(['status'=>false,'answer'=>'respuesta vacia'],200);
        else{
            if(strtolower($ans) == strtolower('6,6,156') || strtolower($ans) == '6, 6, 156'){
                return response()->json(['status'=>true,'answer'=>'exito lo lograste, 1 -> lugar poco habitado,necesitaras revisar en lo alto / cuidado con las paredes se puede ver a traves de ella / mejor date price, el calor puede hacerle da#o. 2 -> esta muy cerca de ti, mas de los que te imaginas solo hace necesitas buscar un cable de red'],200);
            }else{
                return response()->json(['status'=>false,'answer'=>'fallaste, sigue intentando'],200);
            }
        }
    }
}
