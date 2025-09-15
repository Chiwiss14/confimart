<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{

    public function testimonialPage()
    {
        $testimonials = Testimonial::all();
        return view('testimonials.create', compact('testimonials'));
    }

    public function store(Request $request)
    {
        // 1. Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'message' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        // 2. Handle the image upload
        if ($request->hasFile('image')) {
            // Store the image and get the public path
            $imagePath = $request->file('image')->store('testimonials', 'public');

            // Add the image path to the validated data array
            $validated['image'] = $imagePath;
        }

        // 3. Create the testimonial record using the combined data
        Testimonial::create($validated);

        // 4. Redirect with a success message
        return redirect()->route('testimonial')->with('success', 'Testimonial submitted successfully.');
    }
}
