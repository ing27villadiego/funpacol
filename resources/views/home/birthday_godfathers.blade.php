@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Padrinos que cumplen años </h2>
    <p>Deseale un feliz cumpleaños a cada uno de ellos se lo merecen </p>
    <table class="table">
        <thead>
        <tr>
            <th>Cumpleaños</th>
            <th>Codigo Padrino</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Celular</th>
            <th>Correo</th>
            <th>Estado</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dates as $date)
            <tr class="success">
                <td>{{ Carbon\Carbon::parse($date->date_birthday)->toFormattedDateString() }}</td>
                <td>{{ $date->code_godfather}}</td>
                <td>{{ $date->first_name}}</td>
                <td>{{$date->last_name }}</td>
                <td>{{ $date->whatsapp}}</td>
                <td>{{ $date->email}}</td>
                <td>
                    @if($date->state == 1)
                        Activo
                    @elseif($date->state == 2)
                        Inactivo
                    @else
                        Elimidado
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@stop