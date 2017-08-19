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
                                    <h5 class="title">Lista de usuarios (Funpacol)</h5>
                                </div>
                                <div class="col-md-4">
                                    <h4 class="title"><a href="{{route('dashboard_user_create')}}">Crear nuevo usuario</a> </h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table" id="example">
                                <thead class="text-primary">
                                <th>Usuario</th>
                                <th>Email</th>
                                <th>Ciudad</th>
                                <th>Estado</th>
                                <th>Accion</th>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                    <tr >
                                        <td>{{ $user->name}}</td>
                                        <td>{{ $user->email}}</td>
                                        <td>{{ $user->city->name}}</td>
                                        @if ($user->state  == 1)
                                            <td class="text-primary"> Activo</td>
                                        @elseif ($user->state == 2)
                                            <td class="text-danger"> Inactivo</td>
                                        @endif
                                        <td>
                                            <a class="btn btn-success btn-sm" href="{{ route('dashboard_user_edit', $user->id ) }}" role="button">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true">
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

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
@section('js')

    <script>
        $(document).ready(function(){
            $('#example').DataTable();
        });
    </script>

@stop


