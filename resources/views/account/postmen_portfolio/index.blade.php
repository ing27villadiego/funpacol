
@extends('layouts.app')

@section('content')
  <div class="content-box-large">
    <div class="panel-heading">
      <div class="panel-title">LISTA DE COBROS</div>
    </div>
    <div class="panel-body content-box-header panel-heading">
      <div class="btn btn-success">
        <i class="fa fa-plus glyphicon glyphicon-plus-sign"></i> <a href="{{route('assign_collection')}}" style="color: white; text-decoration: none">Agregar nuevo</a>
      </div>
    </div>
    <div class="content-box-large box-with-header">
      <div class="row">
        <div class="col-md-12">
          <div class="panel-body">
            <table cellpadding="0" class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
              <thead>
              <tr>
                <th>Codigo</th>
                <th>Padrino</th>
                <th>Estado del padrino</th>
                <th>Mensajero</th>
                <th>Accion</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($postmenPortfolios as $postmenPortfolio)
                <tr >
                  <td>{{ $postmenPortfolio->godfather->code_godfather }}</td>
                  <td>{{ $postmenPortfolio->godfather->first_name .' '. $postmenPortfolio->godfather->last_name}}</td>
                  <td>
                    @if($postmenPortfolio->godfather->state == 1)
                      Activo
                    @elseif($postmenPortfolio->godfather->state == 2)
                      Inactivo
                    @else
                      Eliminado
                    @endif
                  </td>
                  <td>{{ $postmenPortfolio->postmen->first_name .' '. $postmenPortfolio->postmen->last_name }}</td>
                  <td>
                    <a class="btn btn-success btn-sm" href="{{route('edit_collection', $postmenPortfolio->id)}}" role="button">
                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
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

@section('js')

  <script>
      $(document).ready(function(){
          $('#example').DataTable();
      });
  </script>

@stop


