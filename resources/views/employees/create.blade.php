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
                                    <h4 class="title">Crear Empleado</h4>
                                    <p class="category">Complete los campos</p>
                                </div>
                                <div class="col-md-8">
                                    <h5 class="title"><a href="{{route('employees')}}">Lista de empleados (Funpacol)</a></h5>
                                </div>
                            </div>
                        </div>
                        @include('errors.error')
                        <div class="card-content">
                            {!! Form::open(['route' => 'employee_store', 'method'=>'POST', 'autocomplete'=>'off']) !!}
                            {{ Form::token() }}
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nombre</label>
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
                                            <label class="control-label">Direccion</label>
                                            {{Form::text('address',null ,['class' => 'form-control'])}}
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Celular</label>
                                            {{Form::text('cell_phone',null ,['class' => 'form-control'])}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Fecha Cumpleaños</label>
                                            {{Form::date('date_birthday',null ,['class' => 'form-control'])}}
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Correo electronico</label>
                                            {{Form::email('email',null ,['class' => 'form-control'])}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Cargos</label>
                                            {{ Form::select('position_id',$positions, null, ['class'=>'form-control', 'placeholder' => 'Asigne un cargo']) }}
                                        </div>
                                    </div>
                                </div>

                            {!! Form::submit('Guardar datos', ['class' => 'btn btn-primary']) !!}
                            <div class="clearfix"></div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection