@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.materias.title')</h3>
    {{-- <p>
        <a href="{{ route('aux.materias.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
    </p> --}}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($materias) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        
                        <th>@lang('global.materias.fields.nombreMateria')</th>
                        <th>@lang('global.materias.fields.codigoMateria')</th>
                        <th>@lang('global.materias.fields.descripcionMateria')</th>
                        <th>Grupos</th>
                        <th>&nbsp;</th>
                        
                    </tr>
                </thead>
                
                <tbody>
                
                    @if (count($materias) > 0)
                        @foreach ($materias as $materia)
                            <tr data-entry-id="{{ $materia->id }}">
                                <td></td>
                                @if(App\GrupoMateria::all()->pluck('materia_id')->first() == $materia->id) 
                                    <td>{{ $materia->nombreMateria }}</td>
                                    <td>{{ $materia->codigoMateria }}</td>
                                    <td>{{ $materia->descripcionMateria }}</td>

                                    <td>
                                            {{-- {{App\GrupoMateria::all()}} --}}
                                        {{-- @foreach (App\GrupoMateria::all()->where('id','=',Auth::user()->id)->pluck('nombreGrupoMat') as $permission) --}}
                                        @foreach (App\GrupoMateria::all()->where('user_id','=',Auth::user()->id)->pluck('nombreGrupoMat') as $permission)
                                            <span class="label label-info label-many">{{ $permission }}</span>
                                        @endforeach
                                    </td>
                                    
                                    <td>
                                        <a href="{{ route('materias.edit',[$materia->id]) }}" class="btn btn-xs btn-info">Portafolio</a>
                                        
                                    </td>
                                @endif
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
        window.route_mass_crud_entries_destroy = '{{ route('materias.mass_destroy') }}';
    </script>
    
@endsection