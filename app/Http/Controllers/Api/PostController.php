<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Metodo per ritornare tutti i post
    public function index() {

        // Prendo tutti i post dal database
        // Mostro solo 4 elementi per pagina
        $posts = Post::paginate(4);

        // Tutte le chiamate api avranno nella risposta le chiavi success (andate a buon fine) e in results i risultati (post)
        $response_array = [
            'success' => true,
            'results' => $posts
        ];

        // Devo convertire la collection di post in json (array di oggetti) per poterla ritornare
        return response()->json($response_array);
    }
}
