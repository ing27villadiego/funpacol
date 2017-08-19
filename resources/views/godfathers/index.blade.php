
@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header" data-background-color="blue">
          <div class="row">
            <div class="col-md-8">
              <h5 class="title">LISTA DE AFILICIONES </h5>
            </div>
            <div class="col-md-4">
              <h4 class="title"><a href="{{route('godfather_create')}}">Crear Afiliacion</a> </h4>
            </div>
          </div>
        </div>
        <div class="card-content table-responsive">
          <table class="table" id="example">
            <thead class="text-info">
            <th>Ciudad</th>
            <th>Codigo </th>
            <th>Nombres </th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Profesion</th>
            <th>Documento</th>
            <th>celular oficina</th>
            <th>Estado</th>
            <th>Accion</th>
            </thead>
            <tbody>
            @foreach ($godfathers as $godfather)
              <tr >
                <td>{{ $godfather->city->name }}</td>
                <td>{{ $godfather->code_godfather}}</td>
                <td>{{ $godfather->first_name}}</td>
                <td>{{ $godfather->last_name}}</td>
                <td>{{ $godfather->email }}</td>
                <td>{{ $godfather->profesion }}</td>
                <td>{{ $godfather->document}}</td>
                <td>{{ $godfather->cell_phone_office}}</td>
                @if($godfather->state == 1)
                  <td class="text-primary">Activo</td>
                @elseif($godfather->state == 2)
                  <td class="text-info">Inactivo</td>
                @elseif($godfather->state == 3)
                  <td class="text-danger">Problema</td>
                @else
                  <td class="text-danger">Anulado</td>
                @endif
                <td>
                  <a class="btn btn-info btn-xs" href="{{route('godfather_show', $godfather->id)}}" role="button">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                  </a>
                  <a class="btn btn-success btn-xs" href="{{route('godfather_edit', $godfather->id)}}" role="button">
                    <i class="fa fa-pencil-square-o" aria-hidden="true">
                    </i>
                  </a>

                </td>
              </tr>
            @endforeach
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')

  <script>
      $(document).ready(function(){
          $('#example').DataTable();
      });
  </script>

@stop

