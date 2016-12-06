<table class="table table-responsive" id="empleados-table">
    <thead>
        <th>Tipo Empleado</th>
        <th>Turno</th>
        <!--<th>Guid</th>-->
        <th>Nombre</th>
        <th>Genero</th>
        <th>Antiguedad</th>
        <th>Bataentrega</th>
        <th>Camisaentrega</th>
        <th>Pantalonentrega</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($empleados as $empleado)
        <tr>
            <td>{!! $empleado->tipo_empleado !!}</td>
            <td>
                @if ($empleado->turno == 2)
                    Vespertino
                @elseif ($empleado->turno === 1)
                    Matutino
                @endif
            </td>
            <td>{!! $empleado->nombre !!}</td>
            <td>
                @if ($empleado->genero == 1)
                    Masculino
                @elseif ($empleado->genero === 0)
                    Femenino
                @endif
            </td>
            <td>{!! $empleado->antiguedad !!}</td>
            <td>
                @if ($empleado->bataEntrega == 1)
                    Si
                @elseif ($empleado->bataEntrega === 0)
                    No
                @endif
            </td>
            <td>
                @if ($empleado->camisaEntrega == 1)
                    Si
                @elseif ($empleado->camisaEntrega === 0)
                    No
                @endif
            </td>
            <td>
                @if ($empleado->pantalonEntrega == 1)
                    Si
                @elseif ($empleado->pantalonEntrega === 0)
                    No
                @endif
            </td>
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