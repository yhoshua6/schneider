<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $empleado->id !!}</p>
</div>

<!-- Tipo Empleado Id Field -->
<div class="form-group">
    {!! Form::label('tipo_empleado_id', 'Tipo Empleado:') !!}
    <p>{!! $empleado->tipo_empleado !!}</p>
</div>

<!-- Turno Field -->
<div class="form-group">
    {!! Form::label('turno', 'Turno:') !!}
    <p>
        @if ($empleado->turno == 2)
            Vespertino
        @elseif ($empleado->turno === 1)
            Matutino
        @endif
    </p>
</div>

<!-- Guid Field -->
<div class="form-group">
    {!! Form::label('guid', 'Guid:') !!}
    <p>{!! $empleado->guid !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $empleado->nombre !!}</p>
</div>

<!-- Genero Field -->
<div class="form-group">
    {!! Form::label('genero', 'Genero:') !!}
    <p>
        @if ($empleado->genero == 1)
            Masculino
        @elseif ($empleado->genero === 0)
            Femenino
        @endif
    </p>
</div>

<!-- Antiguedad Field -->
<div class="form-group">
    {!! Form::label('antiguedad', 'Antiguedad:') !!}
    <p>{!! $empleado->antiguedad !!}</p>
</div>

<!-- Bataentrega Field -->
<div class="form-group">
    {!! Form::label('bataEntrega', 'Bataentrega:') !!}
    <p>@if ($empleado->bataEntrega == 1)
                    Si
                @elseif ($empleado->bataEntrega === 0)
                    No
                @endif</p>
</div>

<!-- Batatalla Field -->
<div class="form-group">
    {!! Form::label('bataTalla', 'Batatalla:') !!}
    <p>{!! $empleado->bataTalla !!}</p>
</div>

<!-- Camisaentrega Field -->
<div class="form-group">
    {!! Form::label('camisaEntrega', 'Camisaentrega:') !!}
    <p>@if ($empleado->camisaEntrega == 1)
                    Si
                @elseif ($empleado->camisaEntrega === 0)
                    No
                @endif</p>
</div>

<!-- Camisatalla Field -->
<div class="form-group">
    {!! Form::label('camisaTalla', 'Camisatalla:') !!}
    <p>{!! $empleado->camisaTalla !!}</p>
</div>

<!-- Pantalonentrega Field -->
<div class="form-group">
    {!! Form::label('pantalonEntrega', 'Pantalonentrega:') !!}
    <p>@if ($empleado->pantalonEntrega == 1)
                    Si
                @elseif ($empleado->pantalonEntrega === 0)
                    No
                @endif</p>
</div>

<!-- Pantalontalla Field -->
<div class="form-group">
    {!! Form::label('pantalonTalla', 'Pantalontalla:') !!}
    <p>{!! $empleado->pantalonTalla !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $empleado->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $empleado->updated_at !!}</p>
</div>

