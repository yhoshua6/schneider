@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar Area de Produccion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-success">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($produccionArea, ['route' => ['produccionAreas.update', $produccionArea->id], 'method' => 'patch']) !!}

                        @include('produccion_areas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection