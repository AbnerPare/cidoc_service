@extends('layout')

@section('titre')
Liste des demandes soumises
@endsection

@section('contenu')
<div class="container">
    <h1>Liste des demandes soumises</h1>

    @if (count($soumissions) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Numéro</th>
                    <th>État</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($soumissions as $soumission)
                    <tr>
                        <td>{{ $soumission->nom }}</td>
                        <td>{{ $soumission->prenom }}</td>
                        <td>{{ $soumission->numero }}</td>
                        <td>{{ $soumission->etat }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Aucune demande soumise pour le moment.</p>
    @endif
</div>
@endsection
