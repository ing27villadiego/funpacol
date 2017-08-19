
@extends('layouts.app')

@section('content')
    <div class="content-box-large">
        <div class="panel-heading">
            <div class="panel-title"> ASESOR : ( <strong> {{ $adviser->first_name }} {{ $adviser->last_name }} ) </strong> </div>
        </div>
        <div class="panel-body content-box-header panel-heading">
            <div class="panel-heading">
                <div class="panel-title">LISTA DE  SUS AFILICIONES </div>
            </div>
        </div>
        <div class="content-box-large box-with-header">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-lesss" id="example">
                            <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Nombres </th>
                                <th>Apellido</th>
                                <th>Tipo de padrino</th>
                                <th>estado </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($godfathers as $godfather)
                                <tr >
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
    </div>
@endsection

@section('js')

    <script>
        $(document).ready(function(){
            $('#example').DataTable();
        });
    </script>

@stop
