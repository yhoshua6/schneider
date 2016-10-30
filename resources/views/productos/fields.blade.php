<!-- Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Imagen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imagen', 'Imagen:') !!}
    {!! Form::text('imagen', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Talla Field -->
<div class="form-group col-sm-6">
    {!! Form::label('talla', 'Talla:') !!}
    {!! Form::text('talla', null, ['class' => 'form-control']) !!}
</div>

<!-- Color Field -->
<div class="form-group col-sm-6">
    {!! Form::label('color', 'Color:') !!}
    {!! Form::text('color', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Unidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unidad', 'Unidad:') !!}
    {!! Form::text('unidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Presentacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('presentacion', 'Presentacion:') !!}
    {!! Form::text('presentacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('productos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
