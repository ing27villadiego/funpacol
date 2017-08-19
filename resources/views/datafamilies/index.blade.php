@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header" data-background-color="blue">
          <div class="row">
            <div class="col-md-8">
              <h5 class="title">LISTA FAMILIARES </h5>
            </div>
            <div class="col-md-4">
              <h4 class="title"><a href="{{route('datafamily_create')}}">Crear nuevo Familiar</a> </h4>
            </div>
          </div>
        </div>
        <div class="card-content table-responsive">
          <table class="table" id="example">
            <thead class="text-info">
            <th>Nombres </th>
            <th>Apellidos</th>
            <th>Documento</th>
            <th>Ciudad </th>
            <th>Direccion </th>
            <th>Cumpleaños </th>
            <th>Hijos</th>
            <th>Nombres</th>
            <th>Accion</th>
            </thead>
            <tbody>
            @foreach($datafamilies as $datafamily)
              <tr>
                <td>{{ $datafamily->first_name }}</td>
                <td>{{ $datafamily->last_name }}</td>
                <td>{{ $datafamily->document }}</td>
                <td>{{ $datafamily->city->name }}</td>
                <td>{{ $datafamily->address }}</td>
                <td>{{ $datafamily->date_birthday }}</td>
                <td>{{ $datafamily->number_brothers }}</td>
                <td>{{ $datafamily->name_brothers }}</td>
                <td>
                  <a class="btn btn-success btn-sm" href="{{route('datafamily_edit', $datafamily->id)}}" role="button">
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