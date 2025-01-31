<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquete;

class EnqueteController extends Controller
{
   
    public function index()
    {
        return response()->json(Enquete::all());    
    }

    
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'nome' => 'required|max:255' 
        ]);

        $enquete = Enquete::create($validated_data);
        return response($enquete, 201);
    }

    public function show(string $id)
    {
        $enquete = Enquete::find($id);

        if(!$enquete){
            return response()->json(['erro' => 'Enquete não encontrada'], 404);    
        }
        
        return response()->json($enquete); 
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        $enquete = Enquete::find($id);
        if(!$enquete){
            return response()->json(['erro' => 'enquete não encontrada'], 404);
        }
        
        $enquete->delete();
        return response()->json(['ok' => 'sucesso']);
    }
}