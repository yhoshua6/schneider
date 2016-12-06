<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $produccionArea->id !!}</p>
</div>

<!-- Codigo Field -->
<div class="form-group">
    {!! Form::label('codigo', 'Codigo:') !!}
    <p>{!! $produccionArea->codigo !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $produccionArea->nombre !!}</p>
</div>

<!-- Imagen Field -->
<div class="form-group">
    {!! Form::label('imagen', 'Imagen:') !!}
    <p><img src="{!! $produccionArea->imagen !!}" width="100px"></p>
</div>

<!-- Empleado Id Field -->
<div class="form-group">
    {!! Form::label('empleado_id', 'Empleado:') !!}
    <p>{!! $produccionArea->empleado !!}</p>
</div>

<!-- Estacion Id Field -->
<div class="form-group">
    {!! Form::label('estacion_id', 'Estacion:') !!}
    <p>{!! $produccionArea->estacion !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $produccionArea->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $produccionArea->updated_at !!}</p>
</div>

