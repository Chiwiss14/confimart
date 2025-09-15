<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    function Property()
    {
        return view('property.view');
    }


    function addproperty()
    {

        $properties = Property::orderBy('title', 'asc')->get();


        return view('admin.addproperty', compact('properties'));
    }

    function editProperty($id)
    {
        $property = Property::find($id);
        return view('admin.edit_property', compact('property'));
    }

    function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|string',
            'country' => 'required|string',
            'type' => 'required|string',
            'address' => 'required|string',
            'status' => 'required|in:for_sale,for_rent',
            'image' => 'required|mimes:jpg,jpeg,png|max:3048',
        ]);

        $property = new Property();
        $property->title = $request->title;
        $property->description = $request->description;
        $property->address = $request->address;
        $property->type = $request->type;
        $property->price = $request->price;
        $property->country = $request->country;
        $property->status = $request->status;

        $imagePath = $request->file('image')->store('images/properties', 'public');
        $property->image = '/storage/' . $imagePath;

        $property->save();

        return back();
    }



    function reviews()
    {
        return view('admin.reviews');
    }

    function deleteProperty($id) {
        $property = Property::find($id);

        $property->delete();
        return back();
    }

    function viewProperty($id)
    {
        $property = Property::find($id); // This fetches the property by ID.



        return view('admin.singleproperty', ['property' => $property]);

        
    }

    function updateProperty(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|string',
            'country' => 'required|string',
            'type' => 'required|string',
            'address' => 'required|string',
            'image' => 'nullable|mimes:jpg,jpeg,png|max:3048',
        ]);

        $property = Property::find($id);
        $property->title = $request->title;
        $property->description = $request->description;
        $property->address = $request->address;
        $property->type = $request->type;
        $property->price = $request->price;
        $property->country = $request->country;

        if ($request->image != null) {
            $imagePath = $request->file('image')->store('images/properties', 'public');
            $property->image = '/storage/' . $imagePath;
        }

        $property->save();

        return back();
    }
}
