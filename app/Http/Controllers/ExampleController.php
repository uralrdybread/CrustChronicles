<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ExampleController extends Controller
{
    public function homepage() {

        $ourname = 'Douglas';
        $animals = ["Meow", "barks", "fuckyou"];

        return view('homepage', ['name' => $ourname, 'allAnimals' => $animals]);
    }

    public function aboutPage() {
        return view('single-post');
    }
}
