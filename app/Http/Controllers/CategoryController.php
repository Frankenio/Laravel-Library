<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $category = Categorie::create([
            'name' => $request->name
        ]);

        return response()->json($category, 201);
    }
}
