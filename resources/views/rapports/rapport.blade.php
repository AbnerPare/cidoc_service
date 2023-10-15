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
<div class="action">
    <h2 class="text-center text-white">Les Rapports de project</h2>
    <div class="row mb-3">
        <div class="col-sm-9">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="thematique-filter" id="all" value="" checked>
                <label class="form-check-label" for="all">Toutes les thématiques</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="thematique-filter" id="actions-ded" value="Actions DED">
                <label class="form-check-label" for="actions-ded">Actions DED</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="thematique-filter" id="actions-dhc" value="Actions DHC">
                <label class="form-check-label" for="actions-dhc">Actions DHC</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="thematique-filter" id="actions-protection" value="Actions protection">
                <label class="form-check-label" for="actions-protection">Actions protection</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="thematique-filter" id="actions-administrative" value="Actions administrative">
                <label class="form-check-label" for="actions-administrative">Actions administrative</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="thematique-filter" id="actions-logistique" value="Actions logistique">
                <label class="form-check-label" for="actions-logistique">Actions logistique</label>
            </div>
        </div>
    </div>
    
</div>

    <div class="container-fluid" id="filteredUsers">
        <div class="container-fluid">
            <div class="row">
                {{-- Ajoutez le formulaire de sélection de thématique --}}
               

                @foreach ($users as $user)
                    <div class="col-md-2 col-6 mt-3 span-thematique"
                        data-thematique="{{ $user['Thématique'] }}"
                        style="border-bottom-right-radius: 20px; border-top-right-radius: 50px; border:solid 10px white; background-color:#c09854">
                        <div style="border-top-right-radius: 50px">
                            <div class="card-body">
                                <h6 class="text-black"
                                    style="background: white; border-radius:10px; text-align:center; text-transform: capitalize;">
                                    {{ $user['Thématique'] }}</h6>
                                <img src="img/logo.png" alt="..." width="100">
                                <div>
                                    <p style="color: white">
                                        {{ $user['Description'] }}
                                    </p>
                                </div>
                            </div>
                            <a href="{{ asset('storage/' . $user->pdf_path) }}" target="_blank"
                                class="btn btn-info pb-0"
                                style="position: absolute; top: 94%; left: 50%; transform: translate(-50%, -50%);">Ouvrir</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    {{-- fin contenu --}}
@endsection
