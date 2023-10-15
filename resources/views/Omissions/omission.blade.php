@extends('layout')



{{-- titre --}}
@section('titre')
Missions
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




<div class="action">
    <h2 class="text-center text-white">Les fiches de missions</h2>    
</div>
    <div class="container-fluid" id="filteredUsers">
        <div class="container-fluid">
            <div class="row">
                {{-- Ajoutez le formulaire de sélection de thématique --}}
                @foreach ($users as $user)
                    <div class="col-md-2 col-6 mt-3 span-thematique"
                        style="border-bottom-right-radius: 20px; border-top-right-radius: 50px; border:solid 10px white; background-color:#c09854">
                        <div style="border-top-right-radius: 50px">
                            <div class="card-body">
                                <img src="img/logo.png" alt="..." width="100">
                                <div>
                                    <p style="color: white">
                                        {{ $user['Lieu'] }}
                                    </p>
                                </div>
                                <div>
                                    <p style="color: white">
                                        {{ $user['Région'] }}
                                    </p>
                                </div>
                                <div>
                                    <p style="color: white">
                                        {{ $user['Date'] }}
                                    </p>
                                </div>
                            </div>
                            <a href="{{ asset('storage/' . $user->pdf_path) }}" target="_blank"
                                class="btn btn-info pb-0"
                                style="position: absolute; top: 90%; left: 50%; transform: translate(-50%, -50%);">Ouvrir</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    {{-- fin contenu --}}
@endsection
