@extends('layouts.app')

@section('content')

    <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <div class="row">
                                <div class="col-md-8">
                                    <h5 class="title">LISTA PROMOTORES DE  ( <span> {{ Auth::user()->city->name }}</span> )</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table" id="example">
                                <thead class="text-info">
                                <th>Nombres </th>
                                <th>Apellido</th>
                                <th>Documento</th>
                                <th>Celular</th>
                                <th>Direccion</th>
                                <th>estado </th>
                                <th>Accion</th>
                                </thead>
                                <tbody>
                                @foreach ($promoters as $promoter )
                                    <tr >
                                        <td>{{ $promoter->first_name}}</td>
                                        <td>{{ $promoter->last_name }}</td>
                                        <td>{{ $promoter->document}}</td>
                                        <td>{{ $promoter->cell_phone}}</td>
                                        <td>{{ $promoter->address}}</td>
                                        @if ($promoter->state  == 1)
                                            <td class="text-primary">Activo</td>
                                        @elseif ($promoter->state == 2)
                                            <td class="text-danger">Inactivo</td>
                                        @endif
                                        <td>
                                            <a class="btn btn-info btn-sm" href="{{route('promoter_show', $promoter->id)}}" role="button">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>


@stop

@section('js')

    <script>
        $(document).ready(function(){
            $('#example').DataTable();
        });
    </script>

@stop