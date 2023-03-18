<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superheros;

class SuperherosController extends Controller
{
    public function index(){
        $page_title="Super Heros";

        $superheros=Superheros::all();

        return view('heros', compact('page_title','superheros'));
    }

    public function male(){

        $page_title="Super heros:male";

        $superheros = Superheros::all();

        $men = Superheros::where('gender', '=', 'Male')->get();

        return view('herosmale', compact('page_title','superheros', 'men'));

    }

    public function female(){

        $page_title="Super heros:Female";

        $superheros = Superheros::all();

        $female = Superheros::where('gender', '=', 'Female')->get();

        return view('herosfemale', compact('page_title','superheros', 'female'));

    }
}
