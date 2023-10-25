@extends('layout')

@section('titre')
    Rapports de projects
@endsection

@section('contenu')
    <div class=" gradient-background">
        <h1 class="text-gradient text-center">Fiches de projet</h1>
        <div class="container-fluid" style="height: 100% ;">
            <br><br><br><br><br><br>
            <div class="row justify-content-center">
                <div class="col-md-2  col-sm-4 " id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/fiches_ded') }}" style=" display: block; border-radius: 50%;">
                        <div style="color: white; background-color: rgb(46, 44, 44)"
                            class="p-4 pb-4 pt-4 text-center services-content">
                            <h5 class="p-4" style="color: white">Action DED</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-2  col-sm-4 " id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/fiches_dhc') }}" style=" display: block; border-radius: 50%;">
                        <div style="color: white; background-color: rgb(46, 44, 44)"
                            class="p-4 pb-4 pt-4 text-center services-content">
                            <h5 class="p-4" style="color: white">Action DHC</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-2  col-sm-4  " id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/fiches_protection') }}" style=" display: block; border-radius: 50%;">
                        <div style="background-color: rgb(46, 44, 44)" class="pb-4 pt-4 text-center services-content">
                            <h5 class="p-4" style="color: white">Action protection</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-2  col-sm-4 " id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/fiches_administrative') }}" style=" display: block; border-radius: 50%;">
                        <div style="background-color: rgb(46, 44, 44)" class="pb-4 pt-4 text-center services-content">
                            <h5 class="p-4" style="color: white">Action administrative</h5>
                        </div>
                    </a>
                </div>
                <div class="col-md-2  col-sm-4 just" id="maCarte"
                    style="border-radius: 50%; position: relative; overflow: hidden;">
                    <a href="{{ URL::to('/fiches_logistique') }}" style=" display: block; border-radius: 50%;">
                        <div style="background-color: rgb(46, 44, 44)" class="pb-4 pt-4 text-center  services-content">
                            <h5 class="p-4" style="color: white">Action logistique</h5>
                        </div>
                    </a>
                </div>
            </div>
            <br><br><br><br><br><br><br>
        </div>
    </div>
@endsection
