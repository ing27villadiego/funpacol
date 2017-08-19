@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="title">EDITAR DATOS AFILIACION : ( <strong>  {{ $godfather->first_name   }} </strong> {{ $godfather->last_name }} )</h4>
                                </div>
                            </div>
                        </div>
                        @include('errors.error')
                        <div class="card-content">
                            {!! Form::model($godfather,['route' => ['godfather_update', $godfather->id], 'method'=>'PUT', 'autocomplete'=>'off']) !!}
                            {{ Form::token() }}
                                @include('godfathers.partials.fields')
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Estado de la afiliacion</label>
                                            {!! Form::select('state', ['1' => 'Activo', '2' => 'Inactivo', '3' => 'Problema' , '4' => 'Anulado'], $godfather->state, ['class'=>'form-control', 'placeholder'=>'Estado del mensajero']) !!}
                                        </div>
                                    </div>
                                </div>
                            {!! Form::submit('Actualizar datos', ['class' => 'btn btn-primary']) !!}
                            {!! Form::reset('Cancelar', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

