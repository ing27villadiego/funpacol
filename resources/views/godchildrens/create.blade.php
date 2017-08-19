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
                                    <h4 class="title">Crear Ahijado</h4>
                                    <p class="category">Complete los campos</p>
                                </div>
                                <div class="col-md-8">
                                    <h5 class="title"><a href="{{route('godchildrens')}}">Lista de ahijados (Funpacol)</a></h5>
                                </div>
                            </div>
                        </div>
                        @include('errors.error')
                        <div class="card-content">
                            {!! Form::open(['route' => ['godchildren_create'], 'method'=>'post', 'autocomplete'=>'off']) !!}
                            {{ Form::token() }}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nombres</label>
                                        {{Form::text('first_name',null ,['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Apellidos</label>
                                        {{Form::text('last_name',null,['class' => 'form-control'])}}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Tipo documento</label>
                                        {{ Form::select('document_id',$documents, null, ['class'=>'form-control', 'placeholder' => 'Tipo documento']) }}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Numero documento</label>
                                        {{Form::text('document',null ,['class' => 'form-control'])}}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Fecha Cumpleaños</label>
                                        {{Form::date('birth_date',null ,['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Familiar</label>
                                        {{ Form::select('datafamily_id',$datafamilies, null, ['class'=>'form-control', 'placeholder' => 'Asignar un Familiar']) }}
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
