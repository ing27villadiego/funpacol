@extends('dashboard.dashboard')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Lista de los cargos</h4>
                            <p class="category">cargos que estan asignados en ( Funpacol ) </p>
                        </div>

                        <div class="card-content">
                            <div id="typography">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <div class="panel-title">Lista de los cargos</div>
                                            </div>
                                            <div class="panel-body">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Accion</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($positions as $position)
                                                        <tr>
                                                            <td>{{ $position->name }}</td>
                                                            <td>
                                                                <a class="btn btn-success btn-sm" href="#" role="button">
                                                                    <i class="fa fa-pencil-square-o" aria-hidden="true">
                                                                    </i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <div class="panel-title">Formulario Cargos</div>
                                            </div>
                                            <div class="panel-body">
                                                {{Form::open(['route' => 'dashboard_city_create', 'method' => 'post', 'role' => 'form'])}}
                                                <fieldset>
                                                    <div class="form-group">
                                                        {{Form::text('name',null ,['class' => 'form-control', 'placeholder' => 'nombre de la ciudad'])}}
                                                        <span class="error_span"> {{ $errors->first('name') }}</span>
                                                    </div>

                                                    <button type="submit" class="btn btn-success pull-right">Guardar</button>
                                                </fieldset>
                                                {{Form::close()}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop