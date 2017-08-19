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
                                    <h4 class="title">EDITAR DATOS AHIJADO : ( <strong>  {{ $godchildren->first_name   }} </strong> {{ $godchildren->last_name }} ) </h4>
                                </div>
                            </div>
                        </div>
                        @include('errors.error')
                        <div class="card-content">
                            {!! Form::open(['route' => ['godchildren_update', $godchildren->id], 'method'=>'PUT', 'autocomplete'=>'off']) !!}
                            {{ Form::token() }}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nombres</label>
                                        {{Form::text('first_name',$godchildren->first_name ,['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Apellidos</label>
                                        {{Form::text('last_name',$godchildren->last_name,['class' => 'form-control'])}}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Tipo documento</label>
                                        {{ Form::select('document_id',$documents, $godchildren->document_id, ['class'=>'form-control', 'placeholder' => 'Tipo documento']) }}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Numero documento</label>
                                        {{Form::text('document',$godchildren->document ,['class' => 'form-control'])}}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Fecha Cumpleaños</label>
                                        {{Form::date('birth_date',$godchildren->birth_date ,['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Familiar</label>
                                        {{ Form::select('datafamily_id',$datafamilies, $godchildren->datafamily_id, ['class'=>'form-control', 'placeholder' => 'Asignar un Familiar']) }}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Estado del Ahijado</label>
                                        {!! Form::select('state', ['1' => 'Activo', '2' => 'Inactivo'], $godchildren->state, ['class'=>'form-control', 'placeholder'=>'Estado del Ahijado']) !!}
                                    </div>
                                </div>
                            </div>


                            {!! Form::submit('Guardar datos', ['class' => 'btn btn-primary']) !!}
                            {!! Form::reset('Cancelar', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection





