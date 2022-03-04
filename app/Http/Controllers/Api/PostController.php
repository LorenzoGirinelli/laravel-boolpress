<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    // Metodo per ritornare tutti i post
    public function index() {
        // Prendo tutti i post dal database
        $posts = Post::paginate(6);

        // Devo convertire la collection di post in json (array di oggetti) per poterla ritornare
        return response()->json([
            'success' => true,
            'results' => $posts
        ]);
    }
}
