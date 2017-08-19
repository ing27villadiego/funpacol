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
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Fecha Afiliacion</label>
                                        {!! Form::date('date_membership', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('code_godfather', null, ['class'=>'form-control', 'placeholder'=>'Codigo Padrino...']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::select('promoter_id', $promoters,null, ['class'=>'form-control ', 'placeholder'=>'Seleccione un promoter...']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::select('adviser_id',$advisers,null, ['class'=>'form-control ', 'placeholder'=>'Seleccione un asesor...']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('first_name', null, ['class'=>'form-control', 'placeholder'=>'Nombres ...']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('last_name', null, ['class'=>'form-control', 'placeholder'=>'Apellidos ...']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::select('document_id', $documents, null,['class'=>'form-control ', 'placeholder'=>'Seleccione tipo Doc...']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('document', null, ['class'=>'form-control', 'placeholder'=>'numero documento']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Fecha de cumpleaños</label>
                                        {!! Form::date('date_birthday', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'ejemplo@gmail.com']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('address_office', null, ['class'=>'form-control', 'placeholder'=>'Direccion oficina ...']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('district_office', null, ['class'=>'form-control', 'placeholder'=>'Barrio']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('phone_office', null, ['class'=>'form-control', 'placeholder'=>'Telefono']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('cell_phone_office', null, ['class'=>'form-control', 'placeholder'=>'Celular']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('whatsapp', null, ['class'=>'form-control', 'placeholder'=>'Whatsapp']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('profesion', null, ['class'=>'form-control', 'placeholder'=>'Profesion']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('charge', null, ['class'=>'form-control', 'placeholder'=>'Cargo']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('business', null, ['class'=>'form-control', 'placeholder'=>'Empresa']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('address_house', null, ['class'=>'form-control', 'placeholder'=>'Direccion Residencia']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('district_house', null, ['class'=>'form-control', 'placeholder'=>'Barrio']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('phone_house', null, ['class'=>'form-control', 'placeholder'=>'Telefono']) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::select('godchildren_id', $godchildrens, null, ['class'=>'form-control ', 'placeholder'=>'Seleccione un Niño']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('community', null, ['class'=>'form-control', 'placeholder'=>'Comunidad del niño']) !!}
                                    </div>
                                </div>
                            </div>

                            <span>FORMA DE PAGO Y  PERIODO DE PAGO DE LOS APORTES</span>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::select('paymenttype_id',$paymenttypes, null, ['class'=>'form-control ', 'placeholder'=>'Seleccione tipo de pago']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::select('paymentperiod_id',$paymentperiods, null, ['class'=>'form-control ', 'placeholder'=>'Seleccione periodo de pago']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::select('type_godfather',['1'=> 'Padrino completo','2'=> 'Padrino compartido','3'=> 'Donacion unica'], null, ['class'=>'form-control ', 'placeholder'=>'Seleccione tipo de padrino']) !!}
                                    </div>
                                </div>
                            </div>

                            <span>MI DONACION MENSUAL SERA DE </span>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('value_donation', null, ['class'=>'form-control', 'placeholder'=>'Valor de la donacion']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating">
                                        {!! Form::text('day_colletion', null, ['class'=>'form-control', 'placeholder'=>'Dia del recaudo']) !!}
                                    </div>
                                </div>
                            </div>


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




