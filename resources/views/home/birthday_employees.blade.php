@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Emplead@s que cumplen años el dia de hoy </h2>
        <p>Deseale un feliz cumpleaños a cada uno de ellos se lo merecen </p>
        <table class="table">
            <thead>
            <tr>
                <th>Cumpleaños</th>
                <th>Nombre</th>
                <th>Apellido</th>
            </tr>
            </thead>
            <tbody>
            @foreach($dates as $date)
                <tr class="success">
                    <td>{{ Carbon\Carbon::parse($date->date_birthday)->toFormattedDateString() }}</td>
                    <td>{{ $date->first_name}}</td>
                    <td>{{$date->last_name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@stop