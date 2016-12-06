<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $empleadoArea->id !!}</p>
</div>

<!-- Empleado Id Field -->
<div class="form-group">
    {!! Form::label('empleado_id', 'Empleado:') !!}
    <p>{!! $empleadoArea->empleado !!}</p>
</div>

<!-- Produccion Area Id Field -->
<div class="form-group">
    {!! Form::label('produccion_area_id', 'Produccion Area:') !!}
    <p>{!! $empleadoArea->produccion_area !!}</p>
</div>

<!-- Turno Field -->
<div class="form-group">
    {!! Form::label('turno', 'Estatus:') !!}
    <p>
        @if ($empleadoArea->turno == 1)
                    Activo
                @elseif ($empleadoArea->turno == 0)
                    Inactivo
                @endif
    </p>
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

