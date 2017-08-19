@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="blue">
                    <div class="row">
                        <div class="col-md-8">
                            <h5 class="title">LISTA EMPLEADOS DE  ( <span> {{ Auth::user()->city->name }}</span> )</h5>
                        </div>
                        <div class="col-md-4">
                            <h4 class="title"><a href="{{route('employee_create')}}">Crear nuevo Empleado</a> </h4>
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
                        <th>Cargo</th>
                        <th>estado </th>
                        <th>Accion</th>
                        </thead>
                        <tbody>
                        @foreach ($employees as $employee )
                            <tr >
                                <td>{{ $employee->first_name}}</td>
                                <td>{{ $employee->last_name }}</td>
                                <td>{{ $employee->document}}</td>
                                <td>{{ $employee->cell_phone}}</td>
                                <td>{{ $employee->address}}</td>
                                <td>{{ $employee->position->name }}</td>
                                @if ($employee->state  == 1)
                                    <td class="text-primary">Activo</td>
                                @elseif ($employee->state == 2)
                                    <td class="text-danger">Inactivo</td>
                                @endif
                                <td>
                                    <a class="btn btn-success btn-sm" href="{{route('employee_edit', $employee->id)}}" role="button">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
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
