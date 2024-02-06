<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
{
    try {
        $donnees = $request->validate([
            "email" => "required",
            "password" => "required",
        ]);

        $email = $donnees["email"];

        $user = User::where('email', $email)->firstOrFail();

        if (!Hash::check($donnees["password"], $user->password)) {
            throw new \Exception("L'email ou le mot de passe saisi est incorrect. Veuillez réessayer.");
        }

        $token = $user->createToken("TransfertArgent")->plainTextToken;

        $role = $user->role;

        return response()->json([
            "status" => "success",
            "data" => [
                "token" => $token,
                "user" => $user,
                "role" => $role
            ],
            "message" => "Authentification réussie avec succès"
        ]);

    } catch (\Illuminate\Validation\ValidationException $e) {
        return response()->json([
            "status" => "failed",
            "data" => [],
            "message" => "Les données fournies ne sont pas valides.",
        ], 422);

    } catch (\Exception $e) {
        return response()->json([
            "status" => "failed",
            "data" => [],
            "message" => $e->getMessage(),
        ], 404);
    }
}


public function inscription(Request $request)
{
    try {
        // Validation des données reçues
        $donnees = $request->validate([
            "name" => "required",
            "email" => "required|unique:users,email",
            "password" => "required",
            "role" => "required"
                ]);

        // Création de l'utilisateur
        $user = User::create([
            "name" => $donnees["name"],
            "email" => $donnees["email"],
            "password" => bcrypt($donnees["password"]),
            "role" => $donnees["role"]
        ]);

        // Création du jeton d'authentification
        $token = $user->createToken("TransfertArgent")->plainTextToken;

        // Réponse JSON en cas de succès
        return response()->json([
            "status" => "success",
            "data" => [
                "token" => $token,
            ],
            "message" => "Inscription réussie avec succès"
        ]);

    } catch (\Illuminate\Validation\ValidationException $e) {
        // Gestion des erreurs de validation
        return response()->json([
            "status" => "failed",
            "data" => [],
            "message" => "Les données fournies ne sont pas valides.",
        ], 422);

    } catch (\Exception $e) {
        // Gestion des autres erreurs
        return response()->json([
            "status" => "failed",
            "data" => [],
            "message" => $e->getMessage(),
        ], 500);
    }
}



public function getUsers()
{
    try {
        // Récupération de tous les utilisateurs
        $users = User::all();

        // Réponse JSON en cas de succès
        return response()->json([
            "status" => "success",
            "data" => $users,
            "message" => "Utilisateurs récupérés avec succès"
        ]);

    } catch (\Exception $e) {
        // Gestion des erreurs
        return response()->json([
            "status" => "failed",
            "data" => [],
            "message" => $e->getMessage(),
        ], 500);
    }
}

}
