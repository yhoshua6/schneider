@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Empleados</h1>
        <h1 class="pull-right">
           <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('empleados.create') !!}">Agregar Nuevo Empleado</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-success">
            <div class="box-body">
                    @include('empleados.table')
            </div>
        </div>
    </div>
@endsection

