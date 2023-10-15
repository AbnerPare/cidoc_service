@extends('layout')
@section('titre')
    Actions DED
@endsection

@section('contenu')
    <table class="table">
        <thead>
            <tr>
                <th>Description</th>
                <th>Etat</th>
                <th>Lire</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="table-info">
                <td>{{ $user['Description'] }}</td>
                <td>{{ $user['Etat'] }}</td>
                <td><a href="{{ asset('storage/' . $user->pdf_path) }}" target="_blank" class="btn btn-info pb-0"
                    style="position: absolute; top: 95%; left: 50%; transform: translate(-50%, -50%);">Ouvrir</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
