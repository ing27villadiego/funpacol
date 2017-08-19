@extends('layouts.app')

@section('content')

<div class="content-box-large register">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title ">EDITAR PROMOTOR :  <strong> ( {{ $promoter->first_name   }} )</strong> </div>
            </div>
        </div>
            @include('errors.error')

    {!! Form::open(['route' => ['promoter_update', $promoter->id], 'method'=>'PUT', 'autocomplete'=>'off']) !!}

    {{ Form::token() }}
    <hr>

    <div class="row">
        <div class="form-group">
            <div class="col-lg-4">
                {!! Form::text('first_name', $promoter->first_name, ['class'=>'form-control', 'placeholder'=>'Nombres del Promotor...']) !!}
            </div>
            <div class="col-lg-4">
                {!! Form::text('last_name', $promoter->last_name, ['class'=>'form-control', 'placeholder'=>'Apellidos del Promotor...']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <div class="col-lg-4">
                {!! Form::select('document_id', $documents, $promoter->document_id, ['class'=>'form-control', 'placeholder'=>'Seleccione un tipo doc...']) !!}
            </div>
            <div class="col-lg-4">
                {!! Form::text('document', $promoter->document, ['class'=>'form-control', 'placeholder'=>'Documento del Promotor...']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <div class="col-lg-4">
                {!! Form::text('address', $promoter->address, ['class'=>'form-control', 'placeholder'=>'Direccion del Promotor...']) !!}
            </div>
            <div class="col-lg-4">
                {!! Form::text('cell_phone', $promoter->cell_phone, ['class'=>'form-control', 'placeholder'=>'Celular del Promotor...']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <div class="col-lg-4">
                {!! Form::label('date_birthday', 'Fecha Cumpleaños', ['class'=>'control-label']) !!}
                {!! Form::date('date_birthday', $promoter->date_birthday, ['class'=>'form-control', 'placeholder'=>'Fecha de Cumpleaños...']) !!}
            </div>
            <div class="col-lg-4">
                {!! Form::email('email', $promoter->email, ['class'=>'form-control', 'placeholder'=>'example@gmail.com...']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <div class="col-lg-4">
                {!! Form::label('state', 'Estado del promotor:', ['class' => 'control-label']) !!}
                {!! Form::select('state', ['1' => 'Activo', '2' => 'Inactivo'], $promoter->state, ['class'=>'form-control', 'placeholder'=>'Estado del promotor']) !!}
            </div>
        </div>
    </div>


    <br>
    <div class="modal-footer">
        {!! Form::submit('Actualizar Datos', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Cancelar', ['class' => 'btn btn-danger']) !!}
    </div>

    {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection