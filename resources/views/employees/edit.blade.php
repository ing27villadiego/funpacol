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
                                    <h4 class="title">Editar datos del Empleado {{ $employee->first_name }}</h4>
                                </div>
                                <div class="col-md-8">
                                    <h5 class="title"><a href="{{route('employees')}}">Lista de empleados (Funpacol)</a></h5>
                                </div>
                            </div>
                        </div>
                        @include('errors.error')
                        <div class="card-content">
                            {!! Form::open(['route' => ['employee_update', $employee->id], 'method'=>'PUT','class' => 'form-horizontal', 'autocomplete'=>'off']) !!}
                            {{ csrf_field() }}
                            {{ Form::token() }}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nombre</label>
                                        {{Form::text('first_name',$employee->first_name ,['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Apellidos</label>
                                        {{Form::text('last_name',$employee->last_name,['class' => 'form-control'])}}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Tipo documento</label>
                                        {{ Form::select('document_id',$documents, $employee->document_id, ['class'=>'form-control', 'placeholder' => 'Tipo documento']) }}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Numero documento</label>
                                        {{Form::text('document',$employee->document ,['class' => 'form-control'])}}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Direccion</label>
                                        {{Form::text('address',$employee->address ,['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Celular</label>
                                        {{Form::text('cell_phone',$employee->cell_phone ,['class' => 'form-control'])}}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Fecha Cumpleaños</label>
                                        {{Form::date('date_birthday',$employee->date_birthday ,['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Correo electronico</label>
                                        {{Form::email('email',$employee->email ,['class' => 'form-control'])}}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Cargos</label>
                                        {{ Form::select('position_id',$positions, $employee->position_id, ['class'=>'form-control', 'placeholder' => 'Asigne un cargo']) }}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Estado</label>
                                        {!! Form::select('state', ['1' => 'Activo', '2' => 'Inactivo'], $employee->state, ['class'=>'form-control']) !!}
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