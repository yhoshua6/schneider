@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Entrega de Material
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-success">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($materialEntrega, ['route' => ['materialEntregas.update', $materialEntrega->id], 'method' => 'patch']) !!}

                        @include('material_entregas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection