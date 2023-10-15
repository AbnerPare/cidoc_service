@extends('layout')

@section('titre')
    Les projects
@endsection

@section('contenu')
 
    <div class="container-fluid mb-5 mt-5" style="height: 100% ; background-color: rgb(244, 233, 220) ">
        <div class="row mb-5">
            <div class="m-1 col-md-2 col-6 col-sm-4 mt-3 bg-success mx-auto my-3"
                style="border-bottom-right-radius: 20px; border-top-right-radius: 50px; border:solid 10px rgb(156, 106, 106); position: relative;">
                <div style="border-top-right-radius: 50px">
                    <div class="card-body d-flex flex-column align-items-center" style="text-align: center; height: 100%;">
                       <img src="img/logo.png" alt="..." width="80%">
                        <h5 style="margin-top: 10px; margin-bottom: 20px;">Actions DED</h5>
                    </div>
                </div>
                <a href="{{ URL::to('/ded') }}"  class="btn btn-info pb-0 btn-sm mx-auto"
                    style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">Ouvrir</a>
            </div>

            <div class="m-1 col-md-2 col-6 col-sm-4 mt-3 bg-success mx-auto my-3"
                style="border-bottom-right-radius: 20px; border-top-right-radius: 50px; border:solid 10px rgb(156, 106, 106); position: relative;">
                <div style="border-top-right-radius: 50px">
                    <div class="card-body d-flex flex-column align-items-center" style="text-align: center; height: 100%;">
                       <img src="img/logo.png" alt="..." width="80%">
                        <h5 style="margin-top: 10px; margin-bottom: 20px;">Actions DHC</h5>
                    </div>
                </div>
                <a href="{{ URL::to('/dhc') }}" class="btn btn-info pb-0 btn-sm mx-auto"
                    style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">Ouvrir</a>
            </div>


            <div class="m-1 col-md-2 col-6 col-sm-4 mt-3 bg-success mx-auto my-3"
                style="border-bottom-right-radius: 20px; border-top-right-radius: 50px; border:solid 10px rgb(156, 106, 106); position: relative;">
                <div style="border-top-right-radius: 50px">
                    <div class="card-body d-flex flex-column align-items-center" style="text-align: center; height: 100%;">
                        <img src="img/logo.png" alt="..." width="80%">
                        <h5 style="margin-top: 10px; margin-bottom: 20px;">Action Protection</h5>
                    </div>
                </div>
                <a href="{{ URL::to('/protection') }}" class="btn btn-info pb-0 btn-sm mx-auto"
                    style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">Ouvrir</a>
            </div>

            <div class="m-1 col-md-2 col-6 col-sm-4 mt-3 bg-success mx-auto my-3"
                style="border-bottom-right-radius: 20px; border-top-right-radius: 50px; border:solid 10px rgb(156, 106, 106); position: relative;">
                <div style="border-top-right-radius: 50px">
                    <div class="card-body d-flex flex-column align-items-center" style="text-align: center; height: 100%;">
                        <img src="img/logo.png" alt="..." width="80%">
                        <h5 style="margin-top: 10px; margin-bottom: 20px;">Actions administrative</h5>
                    </div>
                </div>
                <a href="{{ URL::to('/view4') }}" class="btn btn-info pb-0 btn-sm   mx-auto  "
                    style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">Ouvrir</a>
            </div>
            <div class="m-1 col-md-2 col-6 col-sm-4 mt-3 bg-success mx-auto my-3"
                style="border-bottom-right-radius: 20px; border-top-right-radius: 50px; border:solid 10px rgb(156, 106, 106); position: relative;">
                <div style="border-top-right-radius: 50px">
                    <div class="card-body d-flex flex-column align-items-center" style="text-align: center; height: 100%;">
                        <img src="img/logo.png" alt="..." width="80%">
                        <h5  style="margin-top: 10px; margin-bottom: 20px; ">Actions logistique</h5>
                    </div>
                </div>
                <a href="{{ URL::to('/view5') }}"  class="btn btn-info pb-0 btn-sm mx-auto"
                    style="position: absolute; bottom: 5px; left: 50%; transform: translateX(-50%);">Ouvrir</a>
            </div>
        </div>
    </div>
@endsection
