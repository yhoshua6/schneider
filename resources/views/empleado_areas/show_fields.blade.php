<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $empleadoArea->id !!}</p>
</div>

<!-- Empleado Id Field -->
<div class="form-group">
    {!! Form::label('empleado_id', 'Empleado Id:') !!}
    <p>{!! $empleadoArea->empleado_id !!}</p>
</div>

<!-- Produccion Area Id Field -->
<div class="form-group">
    {!! Form::label('produccion_area_id', 'Produccion Area Id:') !!}
    <p>{!! $empleadoArea->produccion_area_id !!}</p>
</div>

<!-- Turno Field -->
<div class="form-group">
    {!! Form::label('turno', 'Turno:') !!}
    <p>{!! $empleadoArea->turno !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $empleadoArea->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $empleadoArea->updated_at !!}</p>
</div>

