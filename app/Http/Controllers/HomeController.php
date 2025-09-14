<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Reviews;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class  HomeController extends Controller
{
  function detailsPage($id){
    $property = Property::find($id);

    return view('singleproperty', compact('property'));
  }

  function welcomePage(){
    $properties= Property::all();
    $testimonials = Testimonial::latest()->take(6)->get(); // show 6 latest
    return view ('welcome',compact('properties','testimonials'));
 }

    function propertyPage(){
        $properties= Property::all();


        return view ('properties', compact('properties'));
    }



    public function propertyList(Request $request)
    {
       $query = Property::query();

    if ($request->filled('search')) {
        $query->where('title', 'like', '%'.$request->search.'%')
              ->orWhere('address', 'like', '%'.$request->search.'%');
    }

    if ($request->filled('type')) {
        $query->where('type', $request->type);
    }

    if ($request->filled('price')) {
        $query->where('price', '<=', $request->price);
    }

    $properties = $query->paginate(9); // show 9 per page

    return view('property-list', compact('properties'));
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


