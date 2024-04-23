<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showList() {
        $model = new Article();
        $articles = $model->getList();

        return view('list', ['articles' => $articles]);
    }
}
