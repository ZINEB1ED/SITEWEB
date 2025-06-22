@extends('layouts.app')

@section('title', 'Liste des Revues')

@section('content')
<div style="max-width: 1100px; margin: 40px auto; padding: 0 20px; font-family: 'Roboto', sans-serif;">

    {{-- Bouton retour --}}
    <div style="margin-bottom: 20px;">
        <a href="{{ route('admin.dashboard') }}" class="btn" style="background-color: #6c757d;">⬅ Retour au Dashboard</a>
    </div>

    <h1 style="font-size: 2rem; margin-bottom: 20px; color: #2d3748;">📝 Liste des Revues</h1>

    <div style="margin-bottom: 20px;">
        <a href="{{ route('admin.reviews.create') }}" class="btn">➕ Ajouter une Revue</a>
    </div>

    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: white; box-shadow: 0 4px 12px rgba(0,0,0,0.05); border-radius: 8px; overflow: hidden;">
            <thead style="background-color: #f4f4f4; text-align: left;">
                <tr>
                    <th style="padding: 12px 16px;">ID</th>
                    <th style="padding: 12px 16px;">Auteur</th>
                    <th style="padding: 12px 16px;">Contenu</th>
                    <th style="padding: 12px 16px;">Note</th>
                    <th style="padding: 12px 16px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($reviews as $review)
                    <tr style="border-top: 1px solid #eee;">
                        <td style="padding: 12px 16px;">{{ $review->id }}</td>
                        <td style="padding: 12px 16px;">{{ $review->author }}</td>
                        <td style="padding: 12px 16px;">{{ $review->content }}</td>
                        <td style="padding: 12px 16px;">
                            ⭐ {{ $review->rating }}/5
                        </td>
                        <td style="padding: 12px 16px;">
                            <a href="{{ route('admin.reviews.edit', $review->id) }}" class="btn btn-sm"
                               style="background-color: #f0ad4e; color: white; padding: 6px 12px; border-radius: 6px; text-decoration: none;">✏️ Modifier</a>

                            <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Confirmer la suppression ?')" class="btn btn-sm"
                                        style="background-color: #d9534f; color: white; padding: 6px 12px; border-radius: 6px; border: none; cursor: pointer;">
                                    🗑️ Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="padding: 16px; text-align: center; color: #777;">Aucune revue trouvée.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('styles')
<style>
    .btn {
        background-color: #c9a94a;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 25px;
        font-weight: bold;
        cursor: pointer;
        font-size: 1rem;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #a88939;
    }
</style>
@endpush
