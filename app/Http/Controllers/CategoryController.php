<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Components\Recusive;
use phpDocumentor\Reflection\Types\This;

class CategoryController extends Controller
{
    private $category;

    public function __constructor()
    {
    }

    public function create()
    {
        $Category = new Category();
        $data = $Category->all();
//        var_dump($data);die;
        $data = Category::all();
        $recusive = new Recusive($data);
        $tmpHtmlOption = [];
        $recusive->getCategoryRecursive($tmpHtmlOption, $data);
        $htmlOption = implode(' ', $tmpHtmlOption);
        return view('category.add', compact('htmlOption'));
    }

    public function index()
    {
        return view('category.index');
    }

}
