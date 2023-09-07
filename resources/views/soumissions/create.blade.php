@extends('layout')

@section('contenu')
    <div class="container">
        <h1>Créer une demande de soumission</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('soumissions.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="mb-3">
                <label for="numero" class="form-label">Numéro</label>
                <input type="text" class="form-control" id="numero" name="numero" required>
            </div>
            <div class="mb-3">
                <label for="etat" class="form-label">État</label>
                <select class="form-select" id="etat" name="etat" required>
                    <option value="en attente">En attente</option>
                    <option value="validée">Validée</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
    </div>
@endsection
