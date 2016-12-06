@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Estación
        </h1>
    </section>
    <div class="content">
        <div class="box box-success">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('estacions.show_fields')
                    <a href="{!! route('estacions.index') !!}" class="btn btn-default">Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
