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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'message' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        // Handle file upload for image
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('testimonials', 'public');
        }

        // Create the testimonial
        Testimonial::create($validated);

        return redirect()->route('testimonial')->with('success', 'Testimonial submitted successfully.');
    }
}
