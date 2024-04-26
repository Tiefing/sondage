<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;

class SurveyController extends Controller
{
    public function showCreateSurveyForm()
    {
        return view('create-survey');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            // Ajoute d'autres règles de validation pour les champs de question si nécessaire
        ]);

        // Créer un nouveau sondage avec les données du formulaire
        $survey = new Survey();
        $survey->title = $request->input('title');
        $survey->description = $request->input('description');
        // Sauvegarder le sondage dans la base de données
        $survey->save();

        // Rediriger l'utilisateur vers une autre page (par exemple, la page d'accueil)
        return redirect()->route('home')->with('success', 'Sondage créé avec succès !');
    }
}

