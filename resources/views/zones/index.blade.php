@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">Lista de las Zonas</div>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Nombre de la zona</th>
                            <th>Ciudad de la zona</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($zones as $zone)
                            <tr>
                                <td>{{ $zone->name }}</td>
                                <td>{{ $zone->city->name }}</td>
                                <td>
                                    <a class="btn btn-success btn-sm" href="{{ route('zone_edit', $zone->id ) }}" role="button">
                                        <i class="glyphicon glyphicon-pencil">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger btn-sm"  role="button">
                                        <i class="glyphicon glyphicon-remove">
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
                    <div class="panel-title">Formulario Zona</div>
                </div>
                <div class="panel-body">
                    {{Form::open(['route' => 'zone_create', 'method' => 'post', 'role' => 'form'])}}
                    <fieldset>
                        <div class="form-group">
                            {!! Form::label('city_id', 'Ciudades') !!}
                            {!! Form::select('city_id',$cities, null, ['class'=>'form-control', 'placeholder'=>'Seleccione una Ciudad...']) !!}
                            <span class="error_span"> {{ $errors->first('city_id') }}</span>
                        </div>

                        <div class="form-group">
                            {{Form::label('name','Nombre de la Zona')}}
                            {{Form::text('name',null ,['class' => 'form-control', 'placeholder' => 'Nombre de la zona'])}}
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


@stop