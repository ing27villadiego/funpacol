@extends('layouts.app')

@section('content')
  <div class="content-box-large">
    <div class="panel-heading">
      <div class="panel-title">LISTA DE COBROS</div>
    </div>
    <div class="panel-body content-box-header panel-heading">

      <div class="box-footer panel-title clearfix no-border">
        <i class="fa fa-plus glyphicon glyphicon-plus-sign"></i> <a href="{{ url('collection/create') }}">Agregar nuevo</a>
      </div>

      <div class="panel-options">
        <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
        <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
      </div>
    </div>
    <div class="content-box-large box-with-header">
      <div class="row">
        <div class="col-md-12">
          <div class="panel-body">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-lesss" id="example">
              <thead>
              <tr>
                <th>id</th>
                <th>Codigo</th>
                <th>Padrino</th>
                <th>Mensajero</th>
                <th>Valor</th>
                <th>Dia recaudo</th>
                <th>Accion</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($collections as $collection)
                <tr >
                  <td>{{ $collection->id}}</td>
                  <td>{{ $collection->receipt_code}}</td>
                  <td>{{ $collection->godfather->first_name }} {{ $collection->godfather->last_name }}</td>
                  <td>{{ $collection->postmen->first_name }} {{ $collection->postmen->last_name }}</td>
                  <td> $ {{ $collection->value_collected }}</td>
                  <td>{{ $collection->date_collection}}</td>
                  <td>
                    <a class="btn btn-success btn-sm" href="{{route('collection.edit', $collection->id)}}" role="button">
                      <i class="glyphicon glyphicon-pencil">
                      </i>
                    </a>
                    <a class="btn btn-danger btn-sm" href="{{route('collection.destroy', $collection->id)}}" onclick="return confirm('Quiere borrar el registro?')" role="button">
                      <i class="glyphicon glyphicon-remove">
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
  </div>
@endsection
