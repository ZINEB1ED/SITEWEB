<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebClasse;

class WebClasseController extends Controller
{
    public function index() {
        $classes = WebClasse::all();
        return view('admin.classes.index', compact('classes'));
    }

    public function create() {
        return view('admin.classes.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string'
        ]);
        WebClasse::create($data);
        return redirect()->route('admin.classes.index')->with('success', 'Classe ajoutée');
    }

    public function edit(WebClasse $webClasse) {
        return view('admin.classes.edit', compact('webClasse'));
    }

    public function update(Request $request, WebClasse $webClasse) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string'
        ]);
        $webClasse->update($data);
        return redirect()->route('admin.classes.index')->with('success', 'Classe mise à jour');
    }

    public function destroy(WebClasse $webClasse) {
        $webClasse->delete();
        return back()->with('success', 'Classe supprimée');
    }
}
