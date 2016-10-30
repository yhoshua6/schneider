<table class="table table-responsive" id="productos-table">
    <thead>
        <th>Codigo</th>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Talla</th>
        <th>Color</th>
        <th>Cantidad</th>
        <th>Unidad</th>
        <th>Presentacion</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($productos as $productos)
        <tr>
            <td>{!! $productos->codigo !!}</td>
            <td>{!! $productos->imagen !!}</td>
            <td>{!! $productos->nombre !!}</td>
            <td>{!! $productos->talla !!}</td>
            <td>{!! $productos->color !!}</td>
            <td>{!! $productos->cantidad !!}</td>
            <td>{!! $productos->unidad !!}</td>
            <td>{!! $productos->presentacion !!}</td>
            <td>{!! $productos->created_at !!}</td>
            <td>{!! $productos->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['productos.destroy', $productos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('productos.show', [$productos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('productos.edit', [$productos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estás Seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>