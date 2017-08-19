@extends('layouts.app')

@section('content')
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header" data-background-color="blue">
              <div class="row">
                <div class="col-md-8">
                  <h5 class="title">LISTA MENSAJEROS DE  ( <span> {{ Auth::user()->city->name }}</span> )</h5>
                </div>
              </div>
            </div>
            <div class="card-content table-responsive">
              <table class="table" id="example">
                <thead class="text-info">
                <th>Nombres </th>
                <th>Apellido</th>
                <th>Documento</th>
                <th>Celular</th>
                <th>Direccion</th>
                <th>estado </th>
                <th>Accion</th>
                </thead>
                <tbody>
                @foreach ($postmens as $postmen )
                  <tr >
                    <td>{{ $postmen->first_name}}</td>
                    <td>{{ $postmen->last_name }}</td>
                    <td>{{ $postmen->document}}</td>
                    <td>{{ $postmen->cell_phone}}</td>
                    <td>{{ $postmen->address}}</td>
                    @if ($postmen->state  == 1)
                      <td class="text-primary">Activo</td>
                    @elseif ($postmen->state == 2)
                      <td class="text-danger">Inactivo</td>
                    @endif
                    <td>
                      <a class="btn btn-info btn-sm" href="#" role="button">
                        <i class="fa fa-eye" aria-hidden="true"></i>
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

@stop

@section('js')

  <script>
      $(document).ready(function(){
          $('#example').DataTable();
      });
  </script>

@stop
