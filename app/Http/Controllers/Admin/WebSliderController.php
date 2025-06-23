<?php

namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebSlider;
use Illuminate\Http\Request;

class WebSliderController extends Controller
{
    public function index()
    {
        $sliders = WebSlider::all();
        return view('admin.sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.sliders.create');
    }

  public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'required|image|max:2048',
        'status' => 'required|boolean',
    ]);

    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('sliders', 'public');
    }

    WebSlider::create($validated);

    
    return redirect()->route('admin.sliders.index')->with('success', 'Slider ajouté avec succès.');
}

    public function show(WebSlider $webSlider)
    {
        return view('admin.sliders.show', compact('webSlider'));
    }

 public function edit($id)
{
    $slider = WebSlider::findOrFail($id);
    return view('admin.sliders.edit', compact('slider'));
}

public function update(Request $request, $id)
{
    $webSlider = WebSlider::findOrFail($id);

    $validated = $request->validate([
        'image' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'status' => 'required|boolean',
    ]);

    $webSlider->update($validated);
    return redirect()->route('admin.sliders.index')->with('success', 'Slider mis à jour avec succès');
}


     public function destroy($id)
    {
        $slider = WebSlider::findOrFail($id);
        $slider->delete();

        return redirect()->route('admin.sliders.index')->with('success', 'Slider supprimé avec succès.');
    }
}