<!-- Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Imagen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imagen', 'Imagen:') !!}
    {!! Form::text('imagen', null, ['class' => 'form-control']) !!}
</div>

<!-- Empleado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empleado_id', 'Empleado Id:') !!}
    {!! Form::select('empleado_id',  $empleados, null, ['class' => 'form-control']) !!}
</div>

<!-- Estacion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estacion_id', 'Estacion Id:') !!}
    {!! Form::select('estacion_id',  $estacions, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('produccionAreas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
