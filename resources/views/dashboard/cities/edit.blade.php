@extends('dashboard.dashboard')


@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Editar la ciudad de  <strong>( {{ $city->slug }} )</strong></h4>
                        </div>
                        <div class="card-content">
                            <div id="typography">
                                <div class="row">
                                    <div class="col-md-6">
                                        {!! Form::open(['route' => ['dashboard_city_update', $city->id], 'method'=>'PUT', 'autocomplete'=>'off']) !!}
                                        {{ csrf_field() }}
                                        <fieldset>
                                            <div class="form-group">
                                                {{Form::label('name','Nombre Ciudad')}}
                                                {{Form::text('name',$city->name ,['class' => 'form-control', 'placeholder' => 'nombre de la ciudad'])}}
                                                <span class="alert-danger"> {{ $errors->first('name') }}</span>
                                            </div>

                                            <div class="form-group">
                                                {{Form::label('letter','Letra ciudad')}}
                                                {{Form::text('letter',$city->letter ,['class' => 'form-control', 'placeholder' => 'letra de la ciudad'])}}
                                                <span class="alert-danger"> {{ $errors->first('letter') }}</span>
                                            </div>
                                            <button type="submit" class="btn btn-success pull-right">Guardar</button>
                                        </fieldset>
                                        {!! Form::close() !!}
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

