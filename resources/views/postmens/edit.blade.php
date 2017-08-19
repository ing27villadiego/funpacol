@extends('layouts.app')

@section('content')

    <div class="content-box-large register">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title ">EDITAR MENSAJERO : ( <strong>  {{ $postmen->first_name   }} </strong> {{ $postmen->last_name }} ) </div>
            </div>
        </div>
        @include('errors.error')

        {!! Form::open(['route' => ['postmen_update', $postmen->id], 'method'=>'PUT', 'autocomplete'=>'off']) !!}

        {{ Form::token() }}
        <hr>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-4">
                    {!! Form::text('first_name', $postmen->first_name, ['class'=>'form-control', 'placeholder'=>'Nombres del mensajero...']) !!}
                </div>
                <div class="col-lg-4">
                    {!! Form::text('last_name', $postmen->last_name, ['class'=>'form-control', 'placeholder'=>'Apellidos del mensajero...']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-4">
                    {!! Form::select('document_id',$documents, $postmen->document_id, ['class'=>'form-control', 'placeholder'=>'Seleccione un tipo doc...']) !!}
                </div>
                <div class="col-lg-4">
                    {!! Form::text('document', $postmen->document, ['class'=>'form-control', 'placeholder'=>'Documento del mensajero...']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-4">
                    {!! Form::text('address', $postmen->address, ['class'=>'form-control', 'placeholder'=>'Direccion del mensajero...']) !!}
                </div>
                <div class="col-lg-4">
                    {!! Form::text('cell_phone', $postmen->cell_phone, ['class'=>'form-control', 'placeholder'=>'Celular del mensajero...']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-4">
                    {!! Form::date('date_birthday', $postmen->date_birthday, ['class'=>'form-control', 'placeholder'=>'Fecha de Cumpleaños...']) !!}
                </div>
                <div class="col-lg-4">
                    {!! Form::email('email', $postmen->email, ['class'=>'form-control', 'placeholder'=>'example@gmail.com...']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-4">
                    {!! Form::select('state', ['1' => 'Activo', '2' => 'Inactivo'], $postmen->state, ['class'=>'form-control', 'placeholder'=>'Estado del mensajero']) !!}
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