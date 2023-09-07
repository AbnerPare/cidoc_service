
@extends('layout')



{{-- titre --}}
@section('titre')
   Mission
@endsection






{{-- debut contenu --}}
@section('contenu')
    
<h2 style="text-align: center; font-size:80px">Liste des missions </h2>
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
                                        <p style="font-size: 20px; text-transform: uppercase;">{{ $user->Date_du_remplissage }}</p>
                                    </td>
                                    <td>
                                        <p style="font-size: 20px; text-transform: uppercase;">{{ $user->Conducteur }}</p>
                                    </td>
                                    <td>
                                        <p style="font-size: 20px; text-transform: uppercase;">{{ $user->Prémière }}</p>
                                    </td>

                                    <td>
                                        <p style="font-size: 20px; text-transform: uppercase;">{{ $user->Deuxième }}</p>
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

