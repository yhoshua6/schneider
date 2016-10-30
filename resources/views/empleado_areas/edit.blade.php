@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar Relación Empleado - Area
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-success">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($empleadoArea, ['route' => ['empleadoAreas.update', $empleadoArea->id], 'method' => 'patch']) !!}

                        @include('empleado_areas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection