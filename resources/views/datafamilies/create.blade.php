@extends('layouts.app')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="title">Crear Familiar</h4>
                                    <p class="category">Complete los campos</p>
                                </div>
                                <div class="col-md-8">
                                    <h5 class="title"><a href="{{route('datafamilies')}}">Lista de familiares (Funpacol)</a></h5>
                                </div>
                            </div>
                        </div>
                        @include('errors.error')
                        <div class="card-content">
                            {!! Form::open(['route' => 'datafamily_store', 'method'=>'POST', 'autocomplete'=>'off']) !!}
                            {{ Form::token() }}
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-lg-4">
                                        {!! Form::text('first_name', null, ['class'=>'form-control', 'placeholder'=>'Nombres...']) !!}
                                    </div>
                                    <div class="col-lg-4">
                                        {!! Form::text('last_name', null, ['class'=>'form-control', 'placeholder'=>'Apellidos...']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-lg-4">
                                        {!! Form::select('document_id',$documents, null, ['class'=>'form-control', 'placeholder'=>'Seleccione tipo doc...']) !!}
                                    </div>
                                    <div class="col-lg-4">
                                        {!! Form::text('document', null, ['class'=>'form-control', 'placeholder'=>'Documento ...']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-lg-4">
                                        {!! Form::select('city_id',$cities, null, ['class'=>'form-control chosen', 'placeholder'=>'Seleccione una Ciudad...']) !!}
                                    </div>
                                    <div class="col-lg-4">
                                        {!! Form::text('address', null, ['class'=>'form-control', 'placeholder'=>'Direccion ...']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-lg-4">
                                        {!! Form::text('cell_phone', null, ['class'=>'form-control', 'placeholder'=>'Celular ...']) !!}
                                    </div>
                                    <div class="col-lg-4">
                                        {!! Form::label('date_birthday', 'Cumple Años', ['class' => 'control-label']) !!}
                                        {!! Form::date('date_birthday', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-lg-4">
                                        {!! Form::text('number_brothers', null, ['class'=>'form-control', 'placeholder'=>'Nº Hijos o Hermanos del Niño...']) !!}
                                    </div>
                                    <div class="col-lg-4">
                                        {!! Form::text('name_brothers', null, ['class'=>'form-control', 'placeholder'=>'Nombre de Hijos o Hermanos del Niño...']) !!}
                                    </div>
                                </div>
                            </div>

                            {!! Form::submit('Guardar datos', ['class' => 'btn btn-primary pull-center']) !!}
                            <div class="clearfix"></div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection



