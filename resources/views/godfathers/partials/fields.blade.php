<div class="row">
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">Fecha Afiliacion</label>
            {!! Form::date('date_membership', \Carbon\Carbon::now(), ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">Codigo del padrino</label>
            {!! Form::text('code_godfather', $letter->letter .'-', ['class'=>'form-control', 'placeholder'=>'Codigo Padrino...']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">seleccione un promotor</label>
            {!! Form::select('promoter_id', $promoters,null, ['class'=>'form-control ','id' => 'select-promoters' ,'placeholder'=>'Seleccione un promoter...']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">seleccione un asesor</label>
            {!! Form::select('adviser_id',$advisers,null, ['class'=>'form-control ', 'id' => 'select-advisers' ,'placeholder'=>'Seleccione un asesor...']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">Nombres del padrino</label>
            {!! Form::text('first_name', null, ['class'=>'form-control', 'placeholder'=>'Nombres ...']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">Apellidos del padrino</label>
            {!! Form::text('last_name', null, ['class'=>'form-control', 'placeholder'=>'Apellidos ...']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">Seleccione tipo de documento</label>
            {!! Form::select('document_id', $documents, null,['class'=>'form-control ', 'placeholder'=>'Seleccione tipo Doc...']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">Numero de documento</label>
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
            <label class="control-label">Correo electronico</label>
            {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'ejemplo@gmail.com']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">direccion oficina</label>
            {!! Form::text('address_office', null, ['class'=>'form-control', 'placeholder'=>'Direccion oficina ...']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">Barrio oficina</label>
            {!! Form::text('district_office', null, ['class'=>'form-control', 'placeholder'=>'Barrio']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">Telefono fijo de oficina</label>
            {!! Form::text('phone_office', null, ['class'=>'form-control', 'placeholder'=>'Telefono']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">celular oficina</label>
            {!! Form::text('cell_phone_office', null, ['class'=>'form-control', 'placeholder'=>'Celular']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">numero de whatsapp</label>
            {!! Form::text('whatsapp', null, ['class'=>'form-control', 'placeholder'=>'Whatsapp']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">Profesion del padrino</label>
            {!! Form::text('profesion', null, ['class'=>'form-control', 'placeholder'=>'Profesion']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">Cargo del padrino</label>
            {!! Form::text('charge', null, ['class'=>'form-control', 'placeholder'=>'Cargo']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">Nombre de la empresa</label>
            {!! Form::text('business', null, ['class'=>'form-control', 'placeholder'=>'Empresa']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">Direccion de la casa</label>
            {!! Form::text('address_house', null, ['class'=>'form-control', 'placeholder'=>'Direccion Residencia']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">Barrio de la casa</label>
            {!! Form::text('district_house', null, ['class'=>'form-control', 'placeholder'=>'Barrio']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">Telefono fijo de la casa</label>
            {!! Form::text('phone_house', null, ['class'=>'form-control', 'placeholder'=>'Telefono']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">Seleccione un Ahijado</label>
            {!! Form::select('godchildren_id', $godchildrens, null, ['class'=>'form-control ', 'placeholder'=>'Seleccione un Niño']) !!}
        </div>
    </div>
</div>

<span>FORMA DE PAGO Y  PERIODO DE PAGO DE LOS APORTES</span>

<div class="row">
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">Seleccione el tipo de pago</label>
            {!! Form::select('paymenttype_id',$paymenttypes, null, ['class'=>'form-control ', 'placeholder'=>'Seleccione tipo de pago']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">Seleccione el periodo de pago</label>
            {!! Form::select('paymentperiod_id',$paymentperiods, null, ['class'=>'form-control ', 'placeholder'=>'Seleccione el periodo de pago']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">Seleccione el tipo de padrino</label>
            {!! Form::select('type_godfather',['1'=> 'Integral','2'=> 'Padrino compartido','3'=> 'Donacion unica', '4' => 'Padrino Colectivo', '5' => 'Padrino Comunidad'], null, ['class'=>'form-control ', 'placeholder'=>'Seleccione tipo de padrino']) !!}
        </div>
    </div>
</div>

<span>MI DONACION SERA DE </span>
<div class="row">
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">Valor de la donacion</label>
            {!! Form::text('value_donation', null, ['class'=>'form-control', 'placeholder'=>'Valor de la donacion']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">Dia de la donacion</label>
            {!! Form::text('day_colletion', null, ['class'=>'form-control', 'placeholder'=>'Dia del recaudo']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group label-floating">
            <label class="control-label">Seleccione el tipo de afiliacion</label>
            {!! Form::select('type_membership',['1'=> 'Afiliacion Efectivo','2'=> 'Afiliacion Acredito'], null, ['class'=>'form-control ', 'placeholder'=>'Seleccione el tipo de afiliacion']) !!}
        </div>
    </div>
</div>