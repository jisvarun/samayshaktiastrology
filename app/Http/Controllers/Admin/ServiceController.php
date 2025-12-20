<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.service.index');
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'service' => 'required|string|max:255',
            'service_hn' => 'required|string|max:255',
            'service_order' => 'nullable|integer|min:1',
            'service_file' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048|dimensions:width=200,height=200',
        ],
        [
            'service_file.dimensions' => 'Image must be exactly 200 × 200 pixels.',
        ]);

        // Handle file upload
        if ($request->hasFile('service_file')) {
            // First, create the service record to get the ID
            $service = Service::create([
                'service' => $validated['service'] ?? null,
                'service_hn' => $validated['service_hn'] ?? null,
                'service_order' => $validated['service_order'] ?? 1,
                'service_file' => null, // Temporary, will update after file upload
                'status' => 1,
            ]);

            // Now store file in ID-based folder
            $file = $request->file('service_file');
            $fileName = Str::random(20) . '_' . time() . '.' . $file->getClientOriginalExtension();
            $folderPath = 'sliders/' . $service->id;
            $filePath = $file->storeAs($folderPath, $fileName, 'public');

            // Update slider record with the correct file path
            $service->update([
                'service_file' => $filePath,
            ]);

            return redirect()->route('admin.service.create')
                ->with('success', 'Service created successfully!');
        }

        return redirect()->back()
            ->with('error', 'Failed to upload image.');
    }
}
