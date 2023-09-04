@extends('layout')



{{-- titre --}}
@section('titre')
    Le personnel
@endsection






{{-- debut contenu --}}
@section('contenu')
    <div class="container-fluid" style="background-color: rgb(233, 245, 235)">
        <h1 class="text-center"> <u> Statut de présence </u></h1>


        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="statut-filter" id="all" value="all" checked>
            <label class="form-check-label" for="all">Tous les statuts</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="statut-filter" id="disponible" value="Disponible">
            <label class="form-check-label" for="disponible">Disponible</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="statut-filter" id="mission" value="En mission">
            <label class="form-check-label" for="mission">En mission</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="statut-filter" id="conge" value="En congé">
            <label class="form-check-label" for="conge">En congé</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="statut-filter" id="non-disponible" value="Non disponible">
            <label class="form-check-label" for="non-disponible">Non disponible</label>
        </div>
        
        

        <a href="{{ route('personnels.creer') }}" class="btn btn-success btn-xs py-0 float-end">Ajouter</a>
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="bg-success text-white">
                            <tr>
                                <th>
                                    <h5>Photo</h5>
                                </th>
                                <th>
                                    <h5>Nom</h5>
                                </th>
                                <th>
                                    <h5>Prénom</h5>
                                </th>
                                <th>
                                    <h5>Email</h5>
                                </th>
                                <th>
                                    <h5>Téléphone</h5>
                                </th>
                                <th>
                                    <h5>Département</h5>
                                </th>
                                <th>
                                    <h5>Statut de présence</h5>
                                </th>
                                <th>
                                    <h5>Actions</h5>
                                </th>

                            </tr>
                        </thead>
                        <tbody style="font-size: 20px">
                            @foreach ($users as $user)
                                <tr>
                                    <td><img src="{{ asset('storage/images/' . $user->image) }}" alt="{{ $user->Nom }}"
                                            width="50" height="50"
                                            style=" border:solid 5px green; border-radius:50px ">
                                    </td>
                                    <td>
                                        <h4 style="font-size: 20px; text-transform: uppercase;">{{ $user->Nom }}</h4>
                                    </td>
                                    <td>
                                        <h6 style="font-size: 20px; text-transform: capitalize;">{{ $user->Prénom }}</h6>
                                    </td>
                                    <td>
                                        <h6 style="font-size: 20px"><a href="mailto:{{ $user->Email }}">
                                                {{ $user->Email }}</a></h6>
                                    </td>

                                    <td>
                                        <a href="tel:{{ $user->téléphone }}">{{ $user->téléphone }}</a>
                                    </td>
                                    <td>
                                        <h6 style="font-size: 20px">{{ $user->département }}</h6>
                                    </td>

                                    <td class="statut-cell @if ($user->Statut_de_présence == 'Disponible') bg-success @elseif ($user->Statut_de_présence == 'En mission') bg-info @elseif ($user->Statut_de_présence == 'En congé') bg-warning @else bg-danger @endif text-white">
                                        {{ $user->Statut_de_présence }} <br> 
                                    </td>                                                                                                                    

                                    <td>
                                        <a href="{{ route('personnels.edit', $user->id) }}"
                                            class="btn btn-primary">Modifier</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>








    {{-- fin contenu --}}
@endsection
