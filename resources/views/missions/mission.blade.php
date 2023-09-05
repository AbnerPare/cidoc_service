
@extends('layout')



{{-- titre --}}
@section('titre')
   Mission
@endsection






{{-- debut contenu --}}
@section('contenu')
    
<h1 style="text-align: center; font-size:80px">Formulaire de Mission </h1>
<a href="{{ route('missions.ordre') }}" class="btn btn-success btn-xs py-0 float-end">Ajouter</a>

    <div class="container-fluid" style="background-color: rgb(233, 245, 235)">
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        </thead>
                        <tbody style="font-size: 20px">
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <h4 style="font-size: 20px; text-transform: uppercase;">{{ $user->date }}</h4>
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

