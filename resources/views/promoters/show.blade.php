
@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="blue">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="title">PROMOTOR : ( <strong> {{ $promoter->first_name }} {{ $promoter->last_name }} ) </strong></h5>
                        </div>
                        <div class="col-md-4">
                            <h5 class="title center-block"> Lista de sus afiliaciones </h5>
                        </div>
                    </div>
                </div>
                <div class="card-content table-responsive">
                    <table class="table" id="example">
                        <thead class="text-info">
                        <th>Fecha Afiliacion</th>
                        <th>Codigo</th>
                        <th>Nombres </th>
                        <th>Apellido</th>
                        <th>Tipo de padrino</th>
                        <th>estado </th>
                        </thead>
                        <tbody>
                        @foreach ($godfathers as $godfather)
                            <tr >
                                <td>{{ $godfather->date_membership }}</td>
                                <td>{{ $godfather->code_godfather }}</td>
                                <td>{{ $godfather->first_name}}</td>
                                <td>{{ $godfather->last_name}}</td>
                                <td>
                                    @if($godfather->type_godfather == 1)
                                        Padrino Completo
                                    @elseif($godfather->type_godfather == 2)
                                        PadrinoCompartido
                                    @else
                                        Donacion Unica
                                    @endif
                                </td>
                                @if($godfather->state == 1)
                                    <td class="text-primary">Activo</td>
                                @elseif($godfather->state == 2)
                                    <td class="text-info">Inactivo</td>
                                @else
                                    <td class="text-danger">Anulado</td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

    <script>
        $(document).ready(function(){
            $('#example').DataTable();
        });
    </script>

@stop