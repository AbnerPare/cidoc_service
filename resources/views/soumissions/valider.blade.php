@extends('layout')

@section('titre')
La validation
@endsection
@section('contenu')
    <div class="container">
        <h1>Liste des demandes en attente de validation</h1>

        @if (count($soumissionsEnAttente) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Numéro</th>
                        <th>État</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($soumissionsEnAttente as $soumission)
                        <tr>
                            <td>{{ $soumission->nom }}</td>
                            <td>{{ $soumission->prenom }}</td>
                            <td>{{ $soumission->numero }}</td>
                            <td>{{ $soumission->etat }}</td>
                            <td>
                                <a href="{{ route('soumissions.validerSoumission', $soumission->id) }}" class="btn btn-primary">Valider</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Aucune demande en attente de validation pour le moment.</p>
        @endif
    </div>
@endsection
