@extends('layouts.app')

@section('title', 'Liste des Sliders')

@section('content')
<div style="max-width: 1100px; margin: 40px auto; padding: 0 20px; font-family: 'Roboto', sans-serif;">

    <div style="margin-bottom: 20px;">
        <a href="{{ route('admin.dashboard') }}" class="btn" style="background-color: #6c757d;">⬅ Retour au Dashboard</a>
    </div>

    <h1 style="font-size: 2rem; margin-bottom: 20px; color: #2d3748;">📸 Liste des Sliders</h1>

    <div style="margin-bottom: 20px;">
        <a href="{{ route('admin.sliders.create') }}" class="btn">➕ Ajouter un slider</a>
    </div>

    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: white; box-shadow: 0 4px 12px rgba(0,0,0,0.05); border-radius: 8px; overflow: hidden;">
            <thead style="background-color: #f4f4f4; text-align: left;">
                <tr>
                    <th style="padding: 12px 16px;">Image</th>
                    <th style="padding: 12px 16px;">Titre</th>
                    <th style="padding: 12px 16px;">Description</th>
                    <th style="padding: 12px 16px;">Statut</th>
                    <th style="padding: 12px 16px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sliders as $slider)
                    <tr style="border-top: 1px solid #eee;">
                        <td style="padding: 12px 16px;"><img src="{{ $slider->image }}" alt="slider" style="width: 100px; border-radius: 6px;"></td>
                        <td style="padding: 12px 16px;">{{ $slider->title }}</td>
                        <td style="padding: 12px 16px;">{{ $slider->description }}</td>
                        <td style="padding: 12px 16px;">
                            <span style="padding: 4px 10px; border-radius: 20px; font-size: 0.9rem;
                                background-color: {{ $slider->status ? '#c8e6c9' : '#ffcdd2' }};
                                color: {{ $slider->status ? '#256029' : '#b71c1c' }};">
                                {{ $slider->status ? 'Actif' : 'Inactif' }}
                            </span>
                        </td>
                        <td style="padding: 12px 16px;">
                            <a href="{{ route('admin.sliders.edit', $slider->id) }}" style="margin-right: 10px; text-decoration: none; font-size: 1.2rem;">✏️</a>
                            <form action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Supprimer ?')" style="background: none; border: none; font-size: 1.2rem; cursor: pointer;">🗑️</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @if($sliders->isEmpty())
                    <tr>
                        <td colspan="5" style="padding: 16px; text-align: center; color: #777;">Aucun slider trouvé.</td>
                    </tr>
                @endif
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
