@extends('dashboard.dashboard')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="title">Crear Usuario</h4>
                                    <p class="category">Complete los campos</p>
                                </div>
                                <div class="col-md-8">
                                    <h5 class="title"><a href="{{route('dashboard_users')}}">Lista de usuarios (Funpacol)</a></h5>
                                </div>
                            </div>
                        </div>
                        @include('errors.error')
                        <div class="card-content">
                            {!! Form::open(['route' => 'dashboard_user_create', 'method'=>'POST', 'autocomplete'=>'off']) !!}
                            {{ Form::token() }}
                                @include('dashboard.users.partials.filds')
                            {!! Form::submit('Guardar datos', ['class' => 'btn btn-primary']) !!}
                            {!! Form::reset('Cancelar', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
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


