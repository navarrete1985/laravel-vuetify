<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    //Mandamos la vista vue
    public function index() {
        return view('app');
    }

}
