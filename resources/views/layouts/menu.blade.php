<li class="{{ Request::is('materialEntregas*') ? 'active' : '' }}">
    <a href="{!! route('materialEntregas.index') !!}"><i class="fa fa-edit"></i><span>Entregas de Material</span></a>
</li>

<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{!! route('productos.index') !!}"><i class="fa fa-edit"></i><span>Materiales</span></a>
</li>

<li class="{{ Request::is('empleados*') ? 'active' : '' }}">
    <a href="{!! route('empleados.index') !!}"><i class="fa fa-edit"></i><span>Empleados</span></a>
</li>

<li class="{{ Request::is('tipoEmpleados*') ? 'active' : '' }}">
    <a href="{!! route('tipoEmpleados.index') !!}"><i class="fa fa-edit"></i><span>Tipos de Empleados</span></a>
</li>

<li class="{{ Request::is('produccionAreas*') ? 'active' : '' }}">
    <a href="{!! route('produccionAreas.index') !!}"><i class="fa fa-edit"></i><span>Areas de Producción</span></a>
</li>

<li class="{{ Request::is('empleadoAreas*') ? 'active' : '' }}">
    <a href="{!! route('empleadoAreas.index') !!}"><i class="fa fa-edit"></i><span>Relación Empleado - Area</span></a>
</li>
