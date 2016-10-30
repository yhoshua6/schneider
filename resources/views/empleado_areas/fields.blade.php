<!-- Empleado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empleado_id', 'Empleado Id:') !!}
    {!! Form::number('empleado_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Produccion Area Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('produccion_area_id', 'Produccion Area Id:') !!}
    {!! Form::number('produccion_area_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('empleadoAreas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
