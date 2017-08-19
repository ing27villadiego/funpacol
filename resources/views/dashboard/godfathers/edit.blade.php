@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="blue">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="title">EDITAR DATOS AFILIACION : ( <strong>  {{ $godfather->first_name   }} </strong> {{ $godfather->last_name }} )</h4>
                                </div>
                            </div>
                        </div>
                        @include('errors.error')
                        <div class="card-content">
                            {!! Form::open(['route' => ['godfather_update', $godfather->id], 'method'=>'PUT', 'autocomplete'=>'off']) !!}
                            {{ Form::token() }}
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Fecha Afiliacion</label>
                                        {!! Form::date('date_membership',  $godfather->date_membership, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('code_godfather',  $godfather->code_godfather, ['class'=>'form-control', 'placeholder'=>'Codigo Padrino...']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::select('promoter_id', $promoters, $godfather->promoter_id, ['class'=>'form-control ', 'placeholder'=>'Seleccione un promoter...']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::select('adviser_id',$advisers, $godfather->adviser_id, ['class'=>'form-control ', 'placeholder'=>'Seleccione un asesor...']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('first_name', $godfather->first_name, ['class'=>'form-control', 'placeholder'=>'Nombres ...']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('last_name', $godfather->last_name, ['class'=>'form-control', 'placeholder'=>'Apellidos ...']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::select('document_id', $documents, $godfather->document_id,['class'=>'form-control ', 'placeholder'=>'Seleccione tipo Doc...']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('document', $godfather->document, ['class'=>'form-control', 'placeholder'=>'numero documento']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Fecha de cumpleaños</label>
                                        {!! Form::date('date_birthday', $godfather->date_birthday, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::email('email', $godfather->email, ['class'=>'form-control', 'placeholder'=>'ejemplo@gmail.com']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('address_office', $godfather->address_office, ['class'=>'form-control', 'placeholder'=>'Direccion oficina ...']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('district_office', $godfather->district_office, ['class'=>'form-control', 'placeholder'=>'Barrio']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('phone_office', $godfather->phone_office, ['class'=>'form-control', 'placeholder'=>'Telefono']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('cell_phone_office', $godfather->cell_phone_office, ['class'=>'form-control', 'placeholder'=>'Celular']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('whatsapp', $godfather->whatsapp, ['class'=>'form-control', 'placeholder'=>'Whatsapp']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('profesion', $godfather->profesion, ['class'=>'form-control', 'placeholder'=>'Profesion']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('charge', $godfather->charge, ['class'=>'form-control', 'placeholder'=>'Cargo']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('business', $godfather->business, ['class'=>'form-control', 'placeholder'=>'Empresa']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('address_house', $godfather->address_house, ['class'=>'form-control', 'placeholder'=>'Direccion Residencia']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('district_house', $godfather->district_house, ['class'=>'form-control', 'placeholder'=>'Barrio']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('phone_house', $godfather->phone_house, ['class'=>'form-control', 'placeholder'=>'Telefono']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::select('godchildren_id', $godchildrens, $godfather->godchildren_id, ['class'=>'form-control ', 'placeholder'=>'Seleccione un Niño']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('community', $godfather->community, ['class'=>'form-control', 'placeholder'=>'Comunidad del niño']) !!}
                                    </div>
                                </div>
                            </div>

                            <span>FORMA DE PAGO Y  PERIODO DE PAGO DE LOS APORTES</span>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::select('paymenttype_id',$paymenttypes, $godfather->paymenttype_id, ['class'=>'form-control ', 'placeholder'=>'Seleccione tipo de pago']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::select('paymentperiod_id',$paymentperiods, $godfather->paymentperiod_id, ['class'=>'form-control ', 'placeholder'=>'Seleccione periodo de pago']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::select('type_godfather',['1'=> 'Padrino completo','2'=> 'Padrino compartido','3'=> 'Donacion unica'], $godfather->type_godfather, ['class'=>'form-control ', 'placeholder'=>'Seleccione tipo de padrino']) !!}
                                    </div>
                                </div>
                            </div>

                            <span>MI DONACION MENSUAL SERA DE </span>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('value_donation', $godfather->value_donation, ['class'=>'form-control', 'placeholder'=>'Valor de la donacion']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('day_colletion', $godfather->day_colletion, ['class'=>'form-control', 'placeholder'=>'Dia del recaudo']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Estado de la afiliacion</label>
                                        {!! Form::select('state', ['1' => 'Activo', '2' => 'Inactivo', '3' => 'Problema' , '4' => 'Anulado'], $godfather->state, ['class'=>'form-control', 'placeholder'=>'Estado del mensajero']) !!}
                                    </div>
                                </div>
                            </div>



                            {!! Form::submit('Actualizar datos', ['class' => 'btn btn-primary']) !!}
                            {!! Form::reset('Cancelar', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

