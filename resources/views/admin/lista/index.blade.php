@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">Calificaciones</h3>
    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($listas) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Cedula</th>
                        <th>CodSiss</th>
                        <th>Nota</th>
                
                        <th>&nbsp;</th>
                        
                    </tr>
                </thead>
              <tbody>

                @if (count($listas) > 0) 
                @foreach ($listas as $lista)
                    <tr data-entry-id="{{ $lista->id }}">
                        <td></td>

                        <td>{{ $lista->name}}</td>
                        <td>{{ $lista->apellidopaterno}}</td>
                        <td>{{ $lista->apellidomaterno}}</td>
                        <td>{{ $lista->cedula}}</td>
                        <td>{{ $lista->codigosiss}}</td>
                        <td>{{ $lista->calificacion}}</td>
                        <td></td>

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
        window.route_mass_crud_entries_destroy = '{{ route('admin.asignaciones.mass_destroy') }}';
    </script>
    
@endsection