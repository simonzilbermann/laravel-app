<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class CategoryController extends Controller
{
    public function index()
    {
        $categorys = Categorie::all();
        return view('products.create', ['categorys' => $categorys]);
    }
    public function getAll()
    {
        $categorys = Categorie::all();
        return view('products.category', ['categorys' => $categorys]);
    }

   
}
