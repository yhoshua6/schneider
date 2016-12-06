<table class="table table-responsive" id="estacions-table">
    <thead>
        <th>Nombre</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($estacions as $estacion)
        <tr>
            <td>{!! $estacion->nombre !!}</td>
            <td>{!! $estacion->created_at !!}</td>
            <td>{!! $estacion->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['estacions.destroy', $estacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('estacions.show', [$estacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('estacions.edit', [$estacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estás seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>