<table class="table table-responsive" id="tipoEmpleados-table">
    <thead>
        <th>Nombre</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tipoEmpleados as $tipoEmpleado)
        <tr>
            <td>{!! $tipoEmpleado->nombre !!}</td>
            <td>{!! $tipoEmpleado->created_at !!}</td>
            <td>{!! $tipoEmpleado->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoEmpleados.destroy', $tipoEmpleado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoEmpleados.show', [$tipoEmpleado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoEmpleados.edit', [$tipoEmpleado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estás Seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>