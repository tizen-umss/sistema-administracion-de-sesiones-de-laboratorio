@extends('layouts.app')

@section('content')


<h3 class="page-title"></h3>
    
    {{-- {!! Form::model($materia, ['method' => 'PUT', 'route' => ['admin.materias.update', $materia->id]]) !!} --}}

<div class="panel panel-default">
        <div class="panel-heading">
            informacion
        </div>

        <div class="panel-body">

            <div class="row">
                <div class="col-xs-12 form-group">
                    <p>CODIGO : </p>
                </div>
            </div>

            <div class="row">
                    <div class="col-xs-12 form-group">
                        <p>DESCRIPCION : </p>
                    </div>
            </div>    
      </div>
</div>
    

<div class="box box-success">
    <div class="box-header">

        <div class="form-group">
            <label>Seleeccione la Tarea</label>
            <select class="form-control select2" style="width: 100%;">
              <option selected="selected">Alabama</option>
              <option>Alaska</option>
              <option disabled="disabled">California (disabled)</option>
              <option>Delaware</option>
              <option>Tennessee</option>
              <option>Texas</option>
              <option>Washington</option>
            </select>
          </div>

      <h3 class="box-title">Faltas</h3>
    </div>
    <div class="box-body">
      <!-- Minimal style -->

      <!-- checkbox -->
      <div class="form-group">
        <label>
          <input type="checkbox" class="minimal" >
          Copio
        </label>
      </div>

      <!-- checkbox -->
      <div class="form-group">
        <label>
          <input type="checkbox" class="minimal" >
          Recibio ayuda externa
        </label>
      </div>
      <!-- checkbox -->
      <div class="form-group">
        <label>
          <input type="checkbox" class="minimal" >
          Perjudico a sus companieros
        </label>
      </div>
      <!-- checkbox -->
      <div class="form-group">
        <label>
          <input type="checkbox" class="minimal" >
          Abandono el laboratorio
        </label>
      </div>
      <!-- checkbox -->
      <div class="form-group">
        <label>
          <input type="checkbox" class="minimal" >
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
            <table class="table table-bordered table-striped {{ count($estudiantes) > 0 ? 'datatable' : '' }} dt-select">
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
                
                    @if (count($estudiantes) > 0 )
                        @foreach ($estudiantes as $estudiante)
                            <tr data-entry-id="{{ $estudiante->id }}">
                                <td></td>

                                <td>{{ $estudiante->fecha }}</td>
                                <td>{{ $estudiante->cedula }}</td>
                                <td>{{ $estudiante->apellidopaterno }}</td>
                                <td>{{ $estudiante->apellidomaterno }}</td>
                                <td>{{ $estudiante->observaciones }}</td>
                                <td>{{ $estudiante->descripcion }}</td>
                                
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

  
