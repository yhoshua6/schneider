@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Nueva Area de Produccion
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-success">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'produccionAreas.store']) !!}

                        @include('produccion_areas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
