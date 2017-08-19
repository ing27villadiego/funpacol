@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel-group">

        <div class="panel panel-success">
            <div class="panel-heading">Panel with panel-success class</div>
            <div class="panel-body">
                Padrino : {{ $godfather->first_name .' '. $godfather->last_name }} <br>
                <span>Ahijado  <strong> {{ $godfather->godchildren->first_name }} </strong></span>

                Mensajero:
            </div>
        </div>

    </div>
</div>

@stop