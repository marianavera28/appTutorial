<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class TestController extends Controller
{
    public function view ($id){

    	$article = Article::find($id);

    	//para mostrar las relaciones
		$article->category;
		$article->user;
		$article->tags;

    	//helper de laravel para mostrar datos
    	//dd($article);

    	return view('test.view',['article' => $article]);
    }
}
