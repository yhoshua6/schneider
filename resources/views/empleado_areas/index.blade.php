@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Relaciónes Empleado - Area</h1>
        <h1 class="pull-right">
           <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('empleadoAreas.create') !!}">Agregar Empleado a Area</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-success">
            <div class="box-body">
                    @include('empleado_areas.table')
            </div>
        </div>
    </div>
@endsection

