@extends('base')




    <h1>les sondage</h1>

    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de Sondage - Application de Sondage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 10px;
        }
        input[type="text"],
        textarea {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Création de Sondage</h1>
        <form action="{{ route('sondages.store') }}" method="POST">
            @csrf
            <label for="title">Titre du Sondage :</label>
            <input type="text" id="title" name="title" required>

            <label for="description">Description :</label>
            <textarea id="description" name="description" rows="4"></textarea>

            <label for="description">Question :</label>
            <textarea id="question" name="question" rows="4"></textarea>

            <label for="title">Reponse1 :</label>
            <input type="text" id="reponse1" name="reponse1" required>

            <label for="title">Reponse2 :</label>
            <input type="text" id="reponse2" name="reponse2" >

            <label for="title">Reponse3 :</label>
            <input type="text" id="reponse3" name="reponse3" >

            <label for="title">Reponse4 :</label>
            <input type="text" id="reponse4" name="reponse4" >
            
            <label for="title">Reponse5 :</label>
            <input type="text" id="reponse5" name="reponse5" >
 


            

            <!-- Ajoute des champs pour les questions du sondage ici -->

            <input type="submit" value="Créer le Sondage">
        </form>
    </div>

   



</body>
</html>






