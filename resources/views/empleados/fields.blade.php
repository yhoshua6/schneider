<!-- Tipo Empleado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_empleado_id', 'Tipo de Empleado:') !!}
    {!! Form::select('tipo_empleado_id',  $tipoEmpleados, null, ['class' => 'form-control']) !!}
</div>

<!-- Turno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('turno', 'Turno:') !!}
    {!! Form::select('turno', ['1' => 'Matituno', '2' => 'Vespertino'], null, ['class' => 'form-control']) !!}
</div>

<!-- Guid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('guid', 'Guid:') !!}
    {!! Form::text('guid', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Genero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('genero', 'Genero:') !!}
    {!! Form::select('genero', ['1' => 'Masculino', '0' => 'Femenino'], null, ['class' => 'form-control']) !!}
</div>

<!-- Antiguedad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('antiguedad', 'Antiguedad:') !!}
    {!! Form::number('antiguedad', null, ['class' => 'form-control']) !!}
</div>

<!-- Bataentrega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bataEntrega', 'Bataentrega:') !!}
    {!! Form::select('bataEntrega', ['1' => 'Si', '0' => 'No'], null, ['class' => 'form-control']) !!}
</div>

<!-- Batatalla Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bataTalla', 'Batatalla:') !!}
    {!! Form::number('bataTalla', null, ['class' => 'form-control']) !!}
</div>

<!-- Camisaentrega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('camisaEntrega', 'Camisaentrega:') !!}
    {!! Form::select('camisaEntrega', ['1' => 'Si', '0' => 'No'], null, ['class' => 'form-control']) !!}
</div>

<!-- Camisatalla Field -->
<div class="form-group col-sm-6">
    {!! Form::label('camisaTalla', 'Camisatalla:') !!}
    {!! Form::number('camisaTalla', null, ['class' => 'form-control']) !!}
</div>

<!-- Pantalonentrega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pantalonEntrega', 'Pantalonentrega:') !!}
    {!! Form::select('pantalonEntrega', ['1' => 'Si', '0' => 'No'], null, ['class' => 'form-control']) !!}
</div>

<!-- Pantalontalla Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pantalonTalla', 'Pantalontalla:') !!}
    {!! Form::number('pantalonTalla', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
    <a href="{!! route('empleados.index') !!}" class="btn btn-default">Cancelar</a>
</div>
