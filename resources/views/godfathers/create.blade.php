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
                                    <h4 class="title">Crear Afiliacion</h4>
                                    <p class="category">Complete los campos</p>
                                </div>
                                <div class="col-md-8">
                                    <h5 class="title"><a href="{{route('godfathers')}}">Lista de afiliaciones (Funpacol)</a></h5>
                                </div>
                            </div>
                        </div>
                        @include('errors.error')
                        <div class="card-content">
                            {!! Form::open(['route' => 'godfather_store', 'method'=>'POST', 'autocomplete'=>'off']) !!}
                            {{ Form::token() }}
                                @include('godfathers.partials.fields')
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


@section('js')


    <script>
        $( document ).ready(function() {

        });
    </script>

@stop




