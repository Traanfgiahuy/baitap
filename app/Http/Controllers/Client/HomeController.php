<?php

namespace App\Http\Controllers\Client;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('client.home',[
            'categoryList' => $categories
        ]);
    }
}
