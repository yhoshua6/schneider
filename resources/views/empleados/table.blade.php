<table class="table table-responsive" id="empleados-table">
    <thead>
        <th>Tipo Empleado Id</th>
        <th>Turno</th>
        <th>Guid</th>
        <th>Nombre</th>
        <th>Genero</th>
        <th>Antiguedad</th>
        <th>Bataentrega</th>
        <th>Batatalla</th>
        <th>Camisaentrega</th>
        <th>Camisatalla</th>
        <th>Pantalonentrega</th>
        <th>Pantalontalla</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($empleados as $empleado)
        <tr>
            <td>{!! $empleado->tipo_empleado_id !!}</td>
            <td>{!! $empleado->turno !!}</td>
            <td>{!! $empleado->guid !!}</td>
            <td>{!! $empleado->nombre !!}</td>
            <td>{!! $empleado->genero !!}</td>
            <td>{!! $empleado->antiguedad !!}</td>
            <td>{!! $empleado->bataEntrega !!}</td>
            <td>{!! $empleado->bataTalla !!}</td>
            <td>{!! $empleado->camisaEntrega !!}</td>
            <td>{!! $empleado->camisaTalla !!}</td>
            <td>{!! $empleado->pantalonEntrega !!}</td>
            <td>{!! $empleado->pantalonTalla !!}</td>
            <td>{!! $empleado->created_at !!}</td>
            <td>{!! $empleado->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['empleados.destroy', $empleado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('empleados.show', [$empleado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('empleados.edit', [$empleado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estás Seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>