@extends('layouts.app')

@section('content')
<div class="container mt-5" style="font-family: 'Roboto', sans-serif; max-width: 900px;">

    <h2 style="margin-bottom: 30px; color: #2d3748;">➕ Ajouter une nouvelle facility</h2>

    <form action="{{ route('admin.facilities.store') }}" method="POST" enctype="multipart/form-data" class="mb-5">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label fw-semibold">Nom</label>
            <input type="text" name="name" id="name" class="form-control" required style="border-radius: 8px; border: 1.5px solid #ccc;">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label fw-semibold">Description</label>
            <textarea name="description" id="description" class="form-control" rows="3" required style="border-radius: 8px; border: 1.5px solid #ccc;"></textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label fw-semibold">Image (URL ou fichier)</label>
            <input type="file" name="image" id="image" class="form-control" style="border-radius: 8px;">
        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <label for="bg_color" class="form-label fw-semibold">Couleur de fond</label>
                <input type="color" name="bg_color" id="bg_color" class="form-control form-control-color" style="height: 50px; width: 100%; padding: 0;">
            </div>
            <div class="col-md-6">
                <label for="text_color" class="form-label fw-semibold">Couleur du texte</label>
                <input type="color" name="text_color" id="text_color" class="form-control form-control-color" style="height: 50px; width: 100%; padding: 0;">
            </div>
        </div>

        <button type="submit" class="btn btn-primary px-4 py-2 fw-bold" style="border-radius: 25px; background-color: #c9a94a; border: none; transition: background-color 0.3s;">
            💾 Enregistrer
        </button>
    </form>

    {{-- Liste des facilities existantes --}}
    @if(isset($facilities) && count($facilities) > 0)
        <h3 style="margin-bottom: 20px; color: #2d3748;">📋 Liste des facilities</h3>

        <div style="overflow-x: auto;">
            <table class="table table-bordered align-middle" style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.05); background: white;">
                <thead class="table-light">
                    <tr>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Fond</th>
                        <th>Texte</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($facilities as $facility)
                        <tr>
                            <td>
                                @if($facility->image)
                                    <img src="{{ asset('storage/' . $facility->image) }}" alt="{{ $facility->name }}" width="80" style="border-radius: 6px;">
                                @else
                                    Aucun
                                @endif
                            </td>
                            <td>{{ $facility->name }}</td>
                            <td>{{ $facility->description }}</td>
                            <td>
                                <div style="width: 30px; height: 30px; border-radius: 6px; background-color: {{ $facility->bg_color }}; border: 1px solid #ccc;"></div>
                            </td>
                            <td>
                                <div style="width: 30px; height: 30px; border-radius: 6px; background-color: {{ $facility->text_color }}; border: 1px solid #ccc;"></div>
                            </td>
                            <td>
                                <a href="{{ route('admin.facilities.edit', $facility->id) }}" class="btn btn-warning btn-sm me-2" style="border-radius: 20px;">✏️ Modifier</a>
                                <form action="{{ route('admin.facilities.destroy', $facility->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" style="border-radius: 20px;" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ?')">🗑️ Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p style="color: #777; font-style: italic;">Aucune facility enregistrée.</p>
    @endif

</div>
@endsection
