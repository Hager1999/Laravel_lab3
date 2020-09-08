<?php

namespace App\Http\Controllers;

use App\Cake;
use Illuminate\Http\Request;

class CakeController extends Controller
{
    //
    public function listCakes()
    {

        #existed cake names
        $cakes=Cake::all();
        return view("showcakes", [
            "cakes"=>$cakes
        ]);
    }
    public function insertCakes(Request $request)
    {
        //dd($request->all());
        $this->validate($request,
            [ 'name'=>'required|max:255',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'price'=>'required',
            ]);
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('img'), $imageName);

        $name=request('name');
        $image=request('image');
        $price=request('price');

        $cake=new Cake();
        $cake->name=$name;
        $cake->image=$image;
        $cake->price=$price;
        $cake->save();

        return back();
    }
}
