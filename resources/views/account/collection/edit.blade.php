@extends('layouts.app')

@section('content')
<div class="content-box-large">
    <div class="panel-body content-box-header panel-heading">

        <div class="box-footer panel-title clearfix no-border">
            <h3>FORMULARIO EDITAR COBRO</h3>
        </div>
    </div>
    <div class="row">

        @include('errors.error')
        <div class="col-lg-11">

            {!! Form::open(['route' => ['collection.update', $collection], 'method'=>'PUT', 'autocomplete'=>'off']) !!}

            {{ Form::token() }}
            <hr>

            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('receipt_code', 'Recibo Nº', ['class'=>'control-label']) !!}
                        {!! Form::text('receipt_code', $collection->receipt_code, ['class'=>'form-control', 'placeholder'=>'Nº **** ']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('godfather_id', 'Codigo Padrino',['class'=> 'control-label']) !!}
                        {!! Form::select('godfather_id',$godfathers ,$collection->godfather->id, ['class'=>'form-control chosen', 'placeholder'=>'Seleccione codigo...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('postmen_id', 'Mensajero',['class'=> 'control-label']) !!}
                        {!! Form::select('postmen_id',$postmens ,$collection->postmen->id, ['class'=>'form-control chosen', 'placeholder'=>'Seleccione mensajero...']) !!}
                    </div>

                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('date_collection', 'Fecha cobro', ['class'=>'control-label']) !!}
                        {!! Form::date('date_collection', $collection->date_collection) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('value_collected', 'Valor Recaudo', ['class'=>'control-label']) !!}
                        {!! Form::text('value_collected',$collection->value_collected, ['class'=>'form-control', 'placeholder'=>'$ Valor']) !!}
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

@section('js')

    <script>
        $('.chosen').chosen({
            no_results_text: 'Ops.. error '
        });
    </script>

@endsection