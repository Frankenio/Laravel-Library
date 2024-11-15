<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Categorie;
use App\Models\ExternalReader;
use App\Models\Reader;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::count();
        $studens = Reader::where('role', 'estudiante')->count();
        $teachers = Reader::where('role', 'docente')->count();
        $externals = ExternalReader::count();
        $books = Book::count();
        $categories = Categorie::count();
        return view('home', compact('users', 'studens', 'teachers', 'externals', 'books', 'categories'));
    }
}
