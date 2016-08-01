@extends('app')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-20">
            <div class="panel panel-default">
                <div class="panel-heading">BITACORAS</div>

                <div class="panel-body">



<div class="container">

    <h1>Mis Bitacoras</h1>
    <div class="table" style="width: 97%;">
        <table class="table table-bordered table-striped table-hover" style=" width: 500px;
    overflow-x: auto;">
            <thead>
                <tr>
                    <th>S.No</th><th> Usuario </th><th> Accion </th><th> IP </th><th> Tabla </th><th> Fecha </th><th> Datos Viejos </th><th> Datos Nuevos </th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($examen as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->usuario_bi }}</td><td>{{ $item->accion_bi }}</td><td>{{ $item->ip_bi }}</td><td>{{ $item->tabla_bi }}</td><td>{{ $item->fecha_bi }}</td><td>{{ $item->viejo }}</td><td>{{ $item->nuevo }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
       <div class="pagination"></div>
    </div>

</div>



            </div>
            </div>
        </div>
    </div>
</div>
@endsection
