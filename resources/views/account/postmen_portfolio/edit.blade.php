@extends('dashboard.dashboard')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="title">Editar el usuario :  <strong> (  {{ $user->first_name .' '. $user->last_name }}  )</strong></h4>
                                </div>
                            </div>
                        </div>
                        @include('errors.error')
                        <div class="card-content">
                            {!! Form::open(['route' => ['dashboard_user_update', $user->id], 'method'=>'PUT','class' => 'form-horizontal', 'autocomplete'=>'off']) !!}
                            {{ csrf_field() }}
                            {{ Form::token() }}
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Usuario</label>
                                        {{Form::text('name',$user->name ,['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Correo Electronico</label>
                                        {{Form::email('email',$user->email ,['class' => 'form-control'])}}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nombres</label>
                                        {{Form::text('first_name',$user->first_name ,['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Apellidos</label>
                                        {{Form::text('last_name',$user->last_name ,['class' => 'form-control'])}}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Contraseña</label>
                                        {{Form::password('password',null ,['class' => 'form-control'])}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Confirmar Contraseña</label>
                                        {{Form::password('password_confirmation',null ,['class' => 'form-control'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Ciudad</label>
                                        {{Form::select('city_id',$cities, $user->city->id, ['class'=>'form-control'])}}
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Estado</label>
                                        {!! Form::select('state', ['1' => 'Activo', '2' => 'Inactivo'], $user->state, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                            </div>

                            {!! Form::submit('Guardar datos', ['class' => 'btn btn-primary pull-right']) !!}
                            <div class="clearfix"></div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@extends('layouts.app')

@section('content')

    <div class="content-box-large register">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title ">EDITAR DATOS DEL COBRO
            </div>
        </div>
        @include('errors.error')

        {!! Form::open(['route' => ['postmentportfolio_update', $postmentportfolio->id], 'method'=>'PUT', 'autocomplete'=>'off']) !!}

        {{ Form::token() }}
        <hr>

            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('godfather_id', 'Seleccione un Padrino', ['class' => 'control-label']) !!}
                        {!! Form::select('godfather_id',$godfathers, $postmentportfolio->godfather->id,['class'=>'form-control chosen', 'placeholder'=>'Seleccione un padrino...']) !!}
                    </div>

                    <div class="col-lg-4">
                        {!! Form::label('postmen_id', 'Seleccione un Mensajero', ['class' => 'control-label']) !!}
                        {!! Form::select('postmen_id',$postments, $postmentportfolio->postmen->id,['class'=>'form-control chosen', 'placeholder'=>'Seleccione un mensajero...']) !!}
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                {!! Form::submit('Actualizar Asesor', ['class' => 'btn btn-primary']) !!}
                {!! Form::reset('Cancelar', ['class' => 'btn btn-danger']) !!}

            </div>

        {!! Form::close() !!}
    </div>
    </div>
    </div>

@endsection

@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-10 col-sm-10">
            <h3>FORMULARIO EDITAR ASESOR</h3>
            @include('errors.error')


            {!! Form::open(['route' => ['postmenPortfolio.update', $postmenportfolio], 'method'=>'PUT', 'autocomplete'=>'off']) !!}

            {{ Form::token() }}
            <hr>

            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('godfather_id', 'Seleccione un Padrino', ['class' => 'control-label']) !!}
                        {!! Form::select('godfather_id',$godfathers, $postmenportfolio->godfather->id,['class'=>'form-control chosen', 'placeholder'=>'Seleccione un padrino...']) !!}
                    </div>

                    <div class="col-lg-4">
                        {!! Form::label('postmen_id', 'Seleccione un Mensajero', ['class' => 'control-label']) !!}
                        {!! Form::select('postmen_id',$postmens, $postmenportfolio->postmen->id,['class'=>'form-control chosen', 'placeholder'=>'Seleccione un mensajero...']) !!}
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                {!! Form::submit('Actualizar Asesor', ['class' => 'btn btn-primary']) !!}
                {!! Form::reset('Cancelar', ['class' => 'btn btn-danger']) !!}

            </div>

            {!! Form::close() !!}

        </div>
    </div><!-- /.box -->


@endsection

@section('js')

    <script>
        $('.chosen').chosen({
            placeholder_text_single: 'Seleccione un padrino',
            no_results_text: 'Ops.. error ',
        });
    </script>

@endsection