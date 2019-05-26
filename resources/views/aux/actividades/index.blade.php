@extends('layouts.app')

@section('content')


<h2 class="page-title"><center>Registro de actividades</center></h2>
@if(count($nombre) > 0)
  <h4><center>{{ $nombre[0]->name ." ". $nombre[0]->apellidopaterno ." ".$nombre[0]->apellidomaterno}}</center></h4>
@else
  <h4>No se encontro informacion</h4>
@endif
  <form name="formulario" action="/actividades" method = "post">
  {{ csrf_field() }}
      <h4>Selecciona una tarea</h4>
      <select name ="tarea_id" value="selecciona una tarea">
        <option value="-1">Selecciona una opcion</option>
        @if(count($tareas) > 0)
          @foreach($tareas as $tarea)
            <option value="{{$tarea->id}}">{{ $tarea->titulotarea }}</option>
          @endforeach
        @endif
      </select>

      <div class="box-body">
      <h3 class="box-title">Faltas</h3>

            <!-- Minimal style -->

            <!-- checkbox -->
            <div class="form-group">
              <label>
                <input name= "copio" type="checkbox" class="minimal" value="Copio">
                Copio
              </label>
            </div>

            <!-- checkbox -->
            <div class="form-group">
              <label>
                <input name = "recibio" type="checkbox" class="minimal" value="Recibio ayuda">
                Recibio ayuda externa
              </label>
            </div>
            <!-- checkbox -->
            <div class="form-group">
              <label>
                <input name="perjudico" type="checkbox" class="minimal" value="Perjudico a sus companieros">
                Perjudico a sus companieros
              </label>
            </div>
            <!-- checkbox -->
            <div class="form-group">
              <label>
                <input name="abandono" type="checkbox" class="minimal" value="Abandono el laboratorio">
                Abandono el laboratorio
              </label>
            </div>
            <!-- checkbox -->
            <div class="form-group">
              <label>
                <input name="saco" type="checkbox" class="minimal" value="saco su portatil">
                Saco su computadora portatil
              </label>
            </div>

            <!-- <label name = 'lol' value = 'hola'>Hola</label> -->

            <!-- textarea -->
            <div class="form-group">
              <label>Descripcion</label>
              <textarea name="descripcion" class="form-control" rows="3" placeholder="Enter ...">Trabajo regular</textarea>
            </div>
            
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Salvar</button>
            </div>

            

  </form>

        <label for=""></label>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($estudiantes) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Actividad</th>
                        <th>Observacion</th>
                        <th>Descripcion</th>
                        
                    </tr>
                </thead>
                
                <tbody>
                
                    @if (count($estudiantes) > 0 )
                        @foreach ($estudiantes as $estudiante)
                            <tr data-entry-id="{{ $estudiante->actividad_id }}">
                                <td>
                                  </td>
                                    <td>{{ $estudiante->actividad_id }}</td>
                                    <td>{{ $estudiante->fecha }}</td>
                                    <td>{{ $estudiante->cedula }}</td>
                                    <td>{{ $estudiante->name }}</td>
                                    <td>{{ $estudiante->apellidopaterno }}</td>
                                    <td>{{ $estudiante->apellidomaterno }}</td>
                                    <td>{{ $estudiante->nombre }}</td>
                                    <td>{{ $estudiante->observaciones }}</td>
                                    <td>{{ $estudiante->descripcion }}</td>
                                  
                                  <!-- <td>                                    
                                </td> -->

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

  
