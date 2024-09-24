<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TranslatedPageController extends Controller
{
    public function pageView($lang = null){
        App::setLocale($lang);
        return view('translated-page');
    }
}
  