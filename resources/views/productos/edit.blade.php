@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Editar Material
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-success">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($productos, ['route' => ['productos.update', $productos->id], 'method' => 'patch']) !!}

                        @include('productos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection