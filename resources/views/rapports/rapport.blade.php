@extends('layout')



{{-- titre --}}
@section('titre')
    Rapports de project
@endsection

@push('style')
    <style type="text/css">
        .my-active span {
            background-color: #5cb85c !important;
            color: white !important;
            border-color: #5cb85c !important;
        }

        ul.pager>li {
            display: inline-flex;
            padding: 5px;
        }
    </style>
@endpush




@section('contenu')
<br>
<a href="{{ route('rapports.ajout') }}" class="btn btn-success btn-xs py-0 float-end">Ajouter</a>

    <h2 class="action">Les Rapports de project</h2>

    <div class="container-fluid">
        <div class="row">
            @foreach ($users as $user)
                <div class="col-md-2 mt-3 " 
                    style="border-bottom-right-radius: 20px; border-top-right-radius: 50px; border:solid 10px white; background: #a6741d;">
                    <div class="card" style="border-top-right-radius: 50px; border:solid 5px #a6741d;">
                        <div class="card-body">
                            <h6 class=" text-black p-2" style="background: #a6741d;">{{ $user['Département'] }}</h6>
                            <img src="img/logo.png" class="card-img-top" alt="...">
                            <div>
                                <p style="color: black">Titre: {{ $user['Titre'] }} <br>
                                    Localité: {{ $user['Localité'] }}<br>
                                    Durabilité: {{ $user['Durabilité'] }}</p><br>
                                <a href="{{ asset('storage/' . $user->pdf_path) }}"target="_blank"
                                    class="btn btn-info">Ouvrir</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- fin contenu --}}
@endsection
