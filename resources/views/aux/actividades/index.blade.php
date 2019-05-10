@extends('layouts.app')
@section('content')


<div class="box box-success">
    <div class="box-header">
      <h3 class="box-title">Faltas</h3>
    </div>
    <div class="box-body">
      <!-- Minimal style -->

      <!-- checkbox -->
      <div class="form-group">
        <label>
          <input type="checkbox" class="minimal" disabled>
          Copio
        </label>
      </div>

      <!-- checkbox -->
      <div class="form-group">
        <label>
          <input type="checkbox" class="minimal" disabled>
          Recibio ayuda externa
        </label>
      </div>
      <!-- checkbox -->
      <div class="form-group">
        <label>
          <input type="checkbox" class="minimal" disabled>
          Perjudico a sus companieros
        </label>
      </div>
      <!-- checkbox -->
      <div class="form-group">
        <label>
          <input type="checkbox" class="minimal" disabled>
          Abandono el laboratorio
        </label>
      </div>
      <!-- checkbox -->
      <div class="form-group">
        <label>
          <input type="checkbox" class="minimal" disabled>
          Saco su computadora portatil
        </label>
      </div>

      <!-- textarea -->
      <div class="form-group">
        <label>Descripcion</label>
        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
      </div>
      

      <div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Salvar</button>
      </div>




    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($actividades) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        
                        <th>Fecha</th>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Observacion</th>
                        <th>Descripcion</th>
                        <th>&nbsp;</th>
                        
                    </tr>
                </thead>
                
                <tbody>
                
                    @if (count($actividades) > 0 )
                        @foreach ($actividades as $actividad)
                            <tr data-entry-id="{{ $actividad->id }}">
                                <td></td>

                                <td>{{ $actividad->fecha }}</td>
                                <td>{{ $actividad->tarea->user->cedula }}</td>
                                <td>{{ $actividad->tarea->user->apellidoPaterno }}</td>
                                <td>{{ $actividad->tarea->user->apellidoMaterno }}</td>
                                <td>{{ $actividad->observaciones }}</td>
                                <td>{{ $actividad->descripcion }}</td>
                                
                                <td>                                    
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('admin.materias.mass_destroy') }}';
    </script>
    
@endsection

  @stop
