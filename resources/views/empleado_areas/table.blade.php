<table class="table table-responsive" id="empleadoAreas-table">
    <thead>
        <th>Empleado Id</th>
        <th>Produccion Area Id</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($empleadoAreas as $empleadoArea)
        <tr>
            <td>{!! $empleadoArea->empleado_id !!}</td>
            <td>{!! $empleadoArea->produccion_area_id !!}</td>
            <td>{!! $empleadoArea->created_at !!}</td>
            <td>{!! $empleadoArea->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['empleadoAreas.destroy', $empleadoArea->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('empleadoAreas.show', [$empleadoArea->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('empleadoAreas.edit', [$empleadoArea->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estás Seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>