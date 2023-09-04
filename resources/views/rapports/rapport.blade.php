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

    <div class="container-fluid" id="filteredUsers">
        <div class="container-fluid">
            <div class="row">
                @foreach ($users as $user)
                    <div class="col-md-2 mt-3 "
                        style="border-bottom-right-radius: 20px; border-top-right-radius: 50px; border:solid 10px white; background-color:#c09854">
                        <div style="border-top-right-radius: 50px">
                            <div class="card-body">
                                <h6 class=" text-black "
                                    style=" background: white; border-radius:10px; text-align:center; text-transform: capitalize;">
                                    {{ $user['Thématique'] }}</h6>
                                <img src="img/logo.png" alt="..." width="100">
                                <div>
                                    <p style="color: white">
                                        {{ $user['Description'] }}
                                    </p>

                                </div>
                            </div>
                        </div>
                        <a href="{{ asset('storage/' . $user->pdf_path) }}"target="_blank"
                            class="btn btn-info pb-0">Ouvrir</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- fin contenu --}}
@endsection
