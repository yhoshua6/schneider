<!-- Producto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('producto_id', 'Producto Id:') !!}
    {!! Form::number('producto_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Empleado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empleado_id', 'Empleado Id:') !!}
    {!! Form::number('empleado_id', null, ['class' => 'form-control']) !!}
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
