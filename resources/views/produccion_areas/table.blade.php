<table class="table table-responsive" id="produccionAreas-table">
    <thead>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Imagen</th>
        <th>Empleado Id</th>
        <th>Estacion Id</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($produccionAreas as $produccionArea)
        <tr>
            <td>{!! $produccionArea->codigo !!}</td>
            <td>{!! $produccionArea->nombre !!}</td>
            <td><img src="{!! $produccionArea->imagen !!}" width="100px"></td>
            <td>{!! $produccionArea->empleado !!}</td>
            <td>{!! $produccionArea->estacion !!}</td>
            <td>{!! $produccionArea->created_at !!}</td>
            <td>{!! $produccionArea->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['produccionAreas.destroy', $produccionArea->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('produccionAreas.show', [$produccionArea->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('produccionAreas.edit', [$produccionArea->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estás seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>