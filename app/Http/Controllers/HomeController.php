<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view("layouts.layout");
    }

    public function showstore()
    {
        return view('store');
    }
    public function contactus()
    {
        return view("contactus");
    }
    public function aboutus()
    {
        return view("aboutus");
    }
    public function showcake($cakename)
    {
        #existed cake names
        $cake_names=[
            'cupcake item'=>['cupcake-1','cupcake-2','cupcake-3'],
            'sweet item'=>['sweets-1','sweets-2','sweets-3'],
            'cake item'=>['cake-1','cake-2','cake-3'],
            'dougnut item'=>['doughnut-1','doughnut-2','doughnut-3']
        ];
        if(in_array($cakename,array_keys($cake_names))){
            return view("showcake",

                [
                    'cakename'=>$cake_names[$cakename],
                ]);
        }
        return view("notfoundcake",

            [
                'error'=>"This name not found, check the store page and try again, you can click on the below button to explore our store"
            ]);

    }
}
