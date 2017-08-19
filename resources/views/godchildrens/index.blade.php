
@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header" data-background-color="blue">
          <div class="row">
            <div class="col-md-8">
              <h5 class="title">LISTA DE AHIJADOS </h5>
            </div>
            <div class="col-md-4">
              <h4 class="title"><a href="{{route('godchildren_create')}}">Crear nuevo Ahijado</a> </h4>
            </div>
          </div>
        </div>
        <div class="card-content table-responsive">
          <table class="table" id="example">
            <thead class="text-info">
            <th>Nombres </th>
            <th>Apellidos</th>
            <th>Documento</th>
            <th>edad</th>
            <th>Cumpleaños</th>
            <th>Ciudad</th>
            <th>Familiar</th>
            <th>estado</th>
            <th>Accion</th>
            </thead>
            <tbody>
            @foreach ($godchildrens as $godchildren)
              <tr >
                <td>{{ $godchildren->first_name}}</td>
                <td>{{ $godchildren->last_name}}</td>
                <td>{{ $godchildren->document}}</td>
                <td>{{ $godchildren->birth_date->diffInYears(\Carbon\Carbon::now()) }} Años</td>
                <td>{{ $godchildren->birth_date->toFormattedDateString('d') }}</td>
                <td>{{ $godchildren->city->name}}</td>
                <td>{{ $godchildren->datafamily->first_name}}</td>
                @if($godchildren->state == 1)
                  <td class="text-primary">Activo</td>
                @elseif($godchildren->state == 2)
                  <td class="text-danger">Inactivo</td>
                @endif
                <td>
                  <a class="btn btn-info btn-sm" href="{{route('godchildren_show', $godchildren->id)}}" role="button">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                  </a>
                  <a class="btn btn-success btn-sm" href="{{route('godchildren_edit', $godchildren->id)}}" role="button">
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


