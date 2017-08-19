@extends('layouts.app')

@section('content')
    <div class="content-box-large">
        <div class="panel-body content-box-header panel-heading">

            <div class="box-footer panel-title clearfix no-border">
                <h3>FORMULARIO ASIGNAR COBRO A UN MENSAJERO</h3>
            </div>
        </div>
        <div class="row">

            @include('errors.error')
            <div class="col-lg-11">

                {!! Form::open(['route' => 'postmenPortfolio.store', 'method'=>'POST', 'autocomplete'=>'off']) !!}

                {{ Form::token() }}
                <hr>

                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-4">
                            {!! Form::label('godfather_id', 'Seleccione un Padrino', ['class' => 'control-label']) !!}
                            {!! Form::select('godfather_id',$godfathers, null,['class'=>'form-control chosen', 'placeholder'=>'Seleccione un padrino...']) !!}
                        </div>

                        <div class="col-lg-4">
                            {!! Form::label('postmen_id', 'Seleccione un Mensajero', ['class' => 'control-label']) !!}
                            {!! Form::select('postmen_id',$postmens, null,['class'=>'form-control chosen', 'placeholder'=>'Seleccione un mensajero...']) !!}
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    {!! Form::submit('Agregar Asesor', ['class' => 'btn btn-primary']) !!}
                    {!! Form::reset('Cancelar', ['class' => 'btn btn-danger']) !!}

                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection

@section('js')

    <script>
        $('.chosen').chosen({
            placeholder_text_single: 'Seleccione un padrino',
            no_results_text: 'Ops.. error ',
        });
    </script>

@endsection





