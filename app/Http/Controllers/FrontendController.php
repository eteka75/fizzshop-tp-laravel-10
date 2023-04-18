<?php

namespace App\Http\Controllers;

use App\Models\Avis;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontendController extends Controller
{
    public function Accueil():View{
        $avis=Avis::latest()->paginate(10);

        return view('frontend.index',compact('avis'))->with('success','Item created successfully!');;
    }
}
