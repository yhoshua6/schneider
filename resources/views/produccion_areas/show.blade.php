@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Produccion Area
        </h1>
    </section>
    <div class="content">
        <div class="box box-success">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('produccion_areas.show_fields')
                    <a href="{!! route('produccionAreas.index') !!}" class="btn btn-default">Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
