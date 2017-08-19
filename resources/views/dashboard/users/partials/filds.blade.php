<div class="row">
    <div class="col-md-5">
        <div class="form-group label-floating">
            <label class="control-label">Usuario</label>
            {{Form::text('name',null ,['class' => 'form-control'])}}
        </div>
    </div>
    <div class="col-md-7">
        <div class="form-group label-floating">
            <label class="control-label">Correo Electronico</label>
            {{Form::email('email',null ,['class' => 'form-control'])}}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group label-floating">
            <label class="control-label">Nombres</label>
            {{Form::text('first_name',null ,['class' => 'form-control'])}}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group label-floating">
            <label class="control-label">Apellidos</label>
            {{Form::text('last_name',null ,['class' => 'form-control'])}}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group label-floating">
            <label class="control-label">Contraseña</label>
            {{Form::password('password' ,['class' => 'form-control'])}}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group label-floating">
            <label class="control-label">Confirmar Contraseña</label>
            {{Form::password('password_confirmation' ,['class' => 'form-control'])}}
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-7">
        <div class="form-group label-floating">
            <label class="control-label">Ciudad</label>
            {{Form::select('city_id',$cities, null, ['class'=>'form-control'])}}
        </div>
    </div>
</div>