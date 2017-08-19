@extends('layouts.app')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <div class="row">
                                <div class="panel-heading">
                                    <div class="panel-title ">EDITAR DATOS FAMILIAR : ( <strong>  {{ $datafamily->first_name   }} </strong> {{ $datafamily->last_name }} ) </div>
                                </div>
                            </div>
                        </div>
                        @include('errors.error')
                        <div class="card-content">
                            {!! Form::open(['route' => ['datafamily_update', $datafamily->id], 'method'=>'put', 'autocomplete'=>'off']) !!}
                            {{ Form::token() }}
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-lg-4">
                                        {!! Form::text('first_name', $datafamily->first_name, ['class'=>'form-control', 'placeholder'=>'Nombres...']) !!}
                                    </div>
                                    <div class="col-lg-4">
                                        {!! Form::text('last_name', $datafamily->last_name, ['class'=>'form-control', 'placeholder'=>'Apellidos...']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-lg-4">
                                        {!! Form::select('document_id',$documents, $datafamily->document_id, ['class'=>'form-control', 'placeholder'=>'Seleccione tipo doc...']) !!}
                                    </div>
                                    <div class="col-lg-4">
                                        {!! Form::text('document', $datafamily->document, ['class'=>'form-control', 'placeholder'=>'Documento ...']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-lg-4">
                                        {!! Form::select('city_id',$cities, $datafamily->city_id, ['class'=>'form-control chosen', 'placeholder'=>'Seleccione una Ciudad...']) !!}
                                    </div>
                                    <div class="col-lg-4">
                                        {!! Form::text('address', $datafamily->address, ['class'=>'form-control', 'placeholder'=>'Direccion ...']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-lg-4">
                                        {!! Form::text('cell_phone', $datafamily->cell_phone, ['class'=>'form-control', 'placeholder'=>'Celular ...']) !!}
                                    </div>
                                    <div class="col-lg-4">
                                        {!! Form::label('date_birthday', 'Cumple Años', ['class' => 'control-label']) !!}
                                        {!! Form::date('date_birthday', $datafamily->date_birthday, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-lg-4">
                                        {!! Form::text('number_brothers', $datafamily->number_brothers, ['class'=>'form-control', 'placeholder'=>'Nº Hijos o Hermanos del Niño...']) !!}
                                    </div>
                                    <div class="col-lg-4">
                                        {!! Form::text('name_brothers', $datafamily->name_brothers, ['class'=>'form-control', 'placeholder'=>'Nombre de Hijos o Hermanos del Niño...']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-lg-4">
                                        {!! Form::select('state', ['1' => 'Activo', '2' => 'Inactivo'], $datafamily->state, ['class'=>'form-control', 'placeholder'=>'Estado del mensajero']) !!}
                                    </div>
                                </div>
                            </div>

                            {!! Form::submit('Actualizar datos', ['class' => 'btn btn-primary pull-center']) !!}
                            <div class="clearfix"></div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
