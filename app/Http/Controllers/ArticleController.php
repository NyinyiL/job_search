<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $data = [
            ['id' => 1, 'name' => 'Article One'] ,
            ['id' => 2, 'name' => 'Arrticle Two'] 
        ] ;

        return view('site.index', [
            'articles' => $data 
        ]) ;
    }
}
