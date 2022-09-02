<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $front = [
            [
                "nom" => "alix",
                "fonction" => "frontend dev",
                "url" => "http://placekitten.com/g/200/300"
            ],
            [
                "nom" => "Johan",
                "fonction" => "Fullstack dev + bg",
                "url" => "http://placekitten.com/g/200/300"
            ],
            [
                "nom" => "Cactus",
                "fonction" => "Coach inchallah",
                "url" => "http://placekitten.com/g/200/300"
            ],
            [
                "nom" => "Nico",
                "fonction" => "?",
                "url" => "http://placekitten.com/g/200/300"
            ],
        ];
        return view('/pages/frontend',compact('front'));
    }
}
