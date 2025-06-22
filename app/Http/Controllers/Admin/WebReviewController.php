<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebReview;

class WebReviewController extends Controller
{
    public function index()
    {
        $reviews = WebReview::all();
        return view('admin.reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('admin.reviews.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'author' => 'required|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        WebReview::create($data);
        return redirect()->route('admin.reviews.index')->with('success', 'Revue ajoutée');
    }

    public function edit(WebReview $review)
    {
        return view('admin.reviews.edit', compact('review'));
    }

    public function update(Request $request, WebReview $review)
    {
        $data = $request->validate([
            'author' => 'required|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $review->update($data);
        return redirect()->route('admin.reviews.index')->with('success', 'Revue mise à jour');
    }

    public function destroy(WebReview $review)
    {
        $review->delete();
        return back()->with('success', 'Revue supprimée');
    }
}
