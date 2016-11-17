<table class="table table-responsive" id="materialEntregas-table">
    <thead>
        <th>Producto Id</th>
        <th>Empleado Id</th>
        <th>Guid</th>
        <th>Barcode</th>
        <th>Cantidad</th>
        <th>Fechaentrega</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($materialEntregas as $materialEntrega)
        <tr>
            <td>{!! $materialEntrega->producto_id !!}</td>
            <td>{!! $materialEntrega->empleado_id !!}</td>
            <td>{!! $materialEntrega->guid !!}</td>
            <td>{!! $materialEntrega->barcode !!}</td>
            <td>{!! $materialEntrega->cantidad !!}</td>
            <td>{!! $materialEntrega->fechaEntrega !!}</td>
            <td>{!! $materialEntrega->created_at !!}</td>
            <td>{!! $materialEntrega->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['materialEntregas.destroy', $materialEntrega->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('materialEntregas.show', [$materialEntrega->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('materialEntregas.edit', [$materialEntrega->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>