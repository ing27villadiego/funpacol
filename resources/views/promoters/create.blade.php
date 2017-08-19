@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel-body content-box-header panel-heading">

            <div class="box-footer panel-title clearfix no-border">
                <h3>FORMULARIO AGREGAR PROMOTOR</h3>
            </div>
        </div>
        <div class="row">

            @include('errors.error')
            <div class="col-lg-11">

                {!! Form::open(['route' => 'promoter_create', 'method'=>'POST', 'autocomplete'=>'off']) !!}

                {{ Form::token() }}
                <hr>

                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-4">
                            {!! Form::text('first_name', null, ['class'=>'form-control', 'placeholder'=>'Nombres del Promotor...']) !!}
                        </div>
                        <div class="col-lg-4">
                            {!! Form::text('last_name', null, ['class'=>'form-control', 'placeholder'=>'Apellidos del Promotor...']) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-4">
                            {!! Form::select('document_id',$documents, null, ['class'=>'form-control', 'placeholder'=>'Seleccione un tipo doc...']) !!}
                        </div>
                        <div class="col-lg-4">
                            {!! Form::text('document', null, ['class'=>'form-control', 'placeholder'=>'Documento del Promotor...']) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-4">
                            {!! Form::text('address', null, ['class'=>'form-control', 'placeholder'=>'Direccion del Promotor...']) !!}
                        </div>
                        <div class="col-lg-4">
                            {!! Form::text('cell_phone', null, ['class'=>'form-control', 'placeholder'=>'Celular del Promotor...']) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-4">
                            {{ Form::label('date_birthday', 'Fecha de cumpleaño', ['class' => 'control-label ']) }}
                            {!! Form::date('date_birthday', null, ['class'=>'form-control', 'placeholder'=>'Fecha de Cumpleaños...']) !!}
                        </div>
                        <div class="col-lg-4">
                            {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'example@gmail.com...']) !!}
                        </div>
                    </div>
                </div>

                <br>
                <div class="modal-footer">
                    {!! Form::submit('Agregar Promotor', ['class' => 'btn btn-primary']) !!}
                    {!! Form::reset('Cancelar', ['class' => 'btn btn-danger']) !!}
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection
