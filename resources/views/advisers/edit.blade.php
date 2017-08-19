@extends('layouts.app')

@section('content')

    <div class="content-box-large register">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title ">EDITAR ASESOR :  <strong> ( {{ $adviser->first_name   }} )</strong> </div>
            </div>
        </div>
        @include('errors.error')

        {!! Form::open(['route' => ['adviser_update', $adviser->id], 'method'=>'PUT', 'autocomplete'=>'off']) !!}

        {{ Form::token() }}
        <hr>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-4">
                    {!! Form::text('first_name', $adviser->first_name, ['class'=>'form-control', 'placeholder'=>'Nombres del Asesor...']) !!}
                </div>
                <div class="col-lg-4">
                    {!! Form::text('last_name', $adviser->last_name, ['class'=>'form-control', 'placeholder'=>'Apellidos del Asesor...']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-4">
                    {!! Form::select('document_id',$documents, $adviser->document_id, ['class'=>'form-control', 'placeholder'=>'Seleccione un tipo doc...']) !!}
                </div>
                <div class="col-lg-4">
                    {!! Form::text('document', $adviser->document, ['class'=>'form-control', 'placeholder'=>'Documento del Asesor...']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-4">
                    {!! Form::text('address', $adviser->address, ['class'=>'form-control', 'placeholder'=>'Direccion del Asesor...']) !!}
                </div>
                <div class="col-lg-4">
                    {!! Form::text('cell_phone', $adviser->cell_phone, ['class'=>'form-control', 'placeholder'=>'Celular del Asesor...']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-4">
                    {!! Form::date('date_birthday', $adviser->date_birthday, ['class'=>'form-control', 'placeholder'=>'Fecha de Cumpleaños...']) !!}
                </div>
                <div class="col-lg-4">
                    {!! Form::email('email', $adviser->email, ['class'=>'form-control', 'placeholder'=>'example@gmail.com...']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-4">
                    {!! Form::select('promoter_id',$promoters, $adviser->promoter_id, ['class'=>'form-control', 'placeholder'=>'Seleccione un promotor']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-4">
                    {!! Form::select('state', ['1' => 'Activo', '2' => 'Inactivo'], $adviser->state, ['class'=>'form-control', 'placeholder'=>'Estado del asesor']) !!}
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