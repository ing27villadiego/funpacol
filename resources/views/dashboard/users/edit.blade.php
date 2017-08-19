@extends('dashboard.dashboard')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
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
                            {!! Form::model($user,['route' => ['dashboard_user_update', $user->id], 'method'=>'PUT','class' => 'form-horizontal', 'autocomplete'=>'off']) !!}
                            {{ csrf_field() }}
                            {{ Form::token() }}
                                @include('dashboard.users.partials.filds')
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Estado</label>
                                            {!! Form::select('state', ['1' => 'Activo', '2' => 'Inactivo'], $user->state, ['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                            {!! Form::submit('Actualizar usuario', ['class' => 'btn btn-primary']) !!}
                            {!! Form::reset('Cancelar', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a >
                                <img class="img" src="{{asset('assets/img/faces/perfil.jpg')}}" />
                            </a>
                        </div>

                        <div class="content">
                            <h6 class="category text-gray">CEO / Co-Founder</h6>
                            <h4 class="card-title">Jeaffer Villadiego</h4>
                            <p class="card-content">
                                Estudiante de Ingenieria Sistemas integrante de la Fundacion Padrinos de Colombia inpulsador de la sistematizacion de sus procesos manuales...
                            </p>
                            <a class="btn btn-primary btn-round">Follow</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop



