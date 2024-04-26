<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sondage;
use App\Models\Reponse;

class SondageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ms = Sondage::get();
        //return view('page-publique', compact('ms'));
        return view('page-publique', ['ms'=>$ms]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
        
    }

    public function creersondage()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* dd($request->title);
        $validated = $request->validate([
            'title' => 'required|unique:sond|max:255',
            'description' => 'required',
        ]); */
        Sondage::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'question'=>$request->question,
            'reponse1'=>$request->reponse1,
            'reponse2'=>$request->reponse2,
            'reponse3'=>$request->reponse3,
            'reponse4'=>$request->reponse4,
            'reponse5'=>$request->reponse5
        ]);

        return redirect()->route('publique');
    }


    public function reponse(Request $request){
        Reponse::create([
        'user_id'=>$request->user_id,
        'sondage_id'=>$request->sondage_id,
        'reponse'=>$request->reponse,
        
        ]);
        return redirect()->route('publique')->with('success', 'Vos réponses ont été soumises avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}


