<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coins;

class CoinsController extends Controller
{
    public function create(Request $request)
    {
        $coins = new Coins();

        $coins->name =$request->input('name');
        $coins->value =$request->input('value');

        $coins->save();
        return response()->json($coins);
    }

    public function show()
    {
        $coins = Coins::all();
        return response()->json($coins);
    }

    public function showbyid($id)
    {
        $coins = Coins::find($id);
        return response()->json($coins);
    }

    public function updatebyid(Request $request,$id)
    {
        $coins = Coins::find($id);
        $coins->name=$request->input('name');
        $coins->value=$request->input('value');

        $coins->save();
        return response()->json($coins);
    }

    public function deletebyid(Request $request,$id)
    {
        $coins = Coins::find($id);
        $coins->delete();
    
        return response()->json($coins);
    }
}
