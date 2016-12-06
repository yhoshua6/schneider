<!-- Producto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('producto_id', 'Producto:') !!}
    {!! Form::select('producto_id',  $productos, null, ['class' => 'form-control']) !!}
</div>

<!-- Empleado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empleado_id', 'Empleado:') !!}
    {!! Form::select('empleado_id',  $empleados, null, ['class' => 'form-control']) !!}
</div>

<!-- Guid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('guid', 'Guid:') !!}
    {!! Form::text('guid', null, ['class' => 'form-control']) !!}
</div>

<!-- Barcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barcode', 'Barcode:') !!}
    {!! Form::text('barcode', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechaentrega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaEntrega', 'Fechaentrega:') !!}
    {!! Form::date('fechaEntrega', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('materialEntregas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
