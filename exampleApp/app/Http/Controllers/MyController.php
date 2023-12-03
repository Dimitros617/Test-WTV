<?php

namespace App\Http\Controllers;

use App\Models\Autors;
use Illuminate\Http\Request;

class MyController extends Controller
{
    
    function show($neco){
        $title = 'Muj titulek';

        $autors = Autors::All();

        $neco = $neco . ' moje';

        return view('brambora', ['title' => $title, 'autori' => $autors, 'moje' => $neco]);
    }

}
