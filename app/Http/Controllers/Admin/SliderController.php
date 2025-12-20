<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('slider_order', 'asc')->simplePaginate(1);
        // dd($sliders);
        return view('admin.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'slider' => 'nullable|string|max:255',
            'slider_order' => 'nullable|integer|min:1',
            'slider_file' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048|dimensions:width=1920,height=600',
        ],
        [
            'slider_file.dimensions' => 'Image must be exactly 1920 × 600 pixels.',
        ]);

        // Handle file upload
        if ($request->hasFile('slider_file')) {
            // First, create the slider record to get the ID
            $slider = Slider::create([
                'slider' => $validated['slider'] ?? null,
                'slider_order' => $validated['slider_order'] ?? 1,
                'slider_file' => null, // Temporary, will update after file upload
                'status' => 1,
            ]);

            // Now store file in ID-based folder
            $file = $request->file('slider_file');
            $fileName = Str::random(20) . '_' . time() . '.' . $file->getClientOriginalExtension();
            $folderPath = 'sliders/' . $slider->id;
            $filePath = $file->storeAs($folderPath, $fileName, 'public');
            
            // Update slider record with the correct file path
            $slider->update([
                'slider_file' => $filePath,
            ]);

            return redirect()->route('admin.slider.create')
                ->with('success', 'Slider created successfully!');
        }

        return redirect()->back()
            ->with('error', 'Failed to upload image.');
    }
}
