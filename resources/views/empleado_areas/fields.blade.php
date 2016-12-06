<!-- Empleado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empleado_id', 'Empleado:') !!}
    {!! Form::select('empleado_id',  $empleados, null, ['class' => 'form-control']) !!}
</div>

<!-- Produccion Area Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('produccion_area_id', 'Area de Producción:') !!}
    {!! Form::select('produccion_area_id',  $produccionAreas, null, ['class' => 'form-control']) !!}
</div>

<!-- Turno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('turno', 'Turno:') !!}
    {!! Form::select('turno', ['1' => 'Activo', '0' => 'Inactivo'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('empleadoAreas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
