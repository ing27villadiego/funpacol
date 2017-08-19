@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="panel-title">Editar la ciudad {{ $zone->name }}</div>
                    </div>
                    <div class="panel-body">

                        {!! Form::open(['route' => ['zone_update', $zone->id], 'method'=>'PUT', 'autocomplete'=>'off']) !!}
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group">
                                {!! Form::label('city_id', 'Ciudades') !!}
                                {!! Form::select('city_id',$cities, $zone->city->id, ['class'=>'form-control']) !!}
                                <span class="error_span"> {{ $errors->first('city_id') }}</span>
                            </div>

                            <div class="form-group">
                                {{Form::label('name','Nombre de la Zona')}}
                                {{Form::text('name',$zone->name ,['class' => 'form-control', 'placeholder' => 'Nombre de la zona'])}}
                                <span class="error_span"> {{ $errors->first('name') }}</span>
                            </div>
                            <button type="submit" class="btn btn-success pull-right">Guardar</button>
                        </fieldset>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop