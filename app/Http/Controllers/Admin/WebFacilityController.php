<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebFacility;

class WebFacilityController extends Controller
{
    public function index() {
        $facilities = WebFacility::all();
        return view('admin.facilities.index', compact('facilities'));
    }
public function create()
{
    $facilities = WebFacility::all(); 

    return view('admin.Facilities.create', compact('facilities'));
}


 public function store(Request $request)
{
   
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|max:2048',
        'bg_color' => 'nullable|string|max:20',
        'text_color' => 'nullable|string|max:20',
    ]);

    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('facilities', 'public');
    }

    WebFacility::create($validated);

    return redirect()->route('admin.facilities.index')->with('success', 'Facility ajoutée avec succès.');
}


   public function edit($id)
{
    $webFacility = WebFacility::findOrFail($id);
    return view('admin.facilities.edit', ['facility' => $webFacility]);

}public function update(Request $request, WebFacility $facility) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image',
        'bg_color' => 'nullable|string|max:50',
        'text_color' => 'nullable|string|max:50'
    ]);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('facilities', 'public');
        $data['image'] = $imagePath;
    }

    $facility->update($data);

    return redirect()->route('admin.facilities.index')->with('success', 'Facility mise à jour');
}

public function destroy(WebFacility $facility) {
    $facility->delete();
    return back()->with('success', 'Facility supprimée');
}


}
