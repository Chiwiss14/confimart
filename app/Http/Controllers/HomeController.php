<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Reviews;
use Illuminate\Http\Request;

class  HomeController extends Controller
{
  function detailsPage($id){
    $property = Property::find($id);

    return view('singleproperty', compact('property'));
  }

  function welcomePage(){
    $properties= Property::all();
    return view ('welcome',compact('properties'));
    // return view ('welcome');
 }

    function propertyPage(){
        $properties= Property::all();


        return view ('properties', compact('properties'));
    }



    function propertyList(){
        return view ('propertylist');
    }

    function store(Request $request) {

        $reviews = new Reviews();
        $reviews->name=$request->name;
        $reviews->email = $request->email;
        $reviews->message =$request->message;

        $reviews->save();

        return back();
    }

}


