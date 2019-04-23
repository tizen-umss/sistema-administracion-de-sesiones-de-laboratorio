@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.gruposMateria.title')</h3>
    <p>
        <a href="{{ route('admin.gruposMateria.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($gruposMateria) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        
                        <th>@lang('global.gruposMateria.fields.nombreGrupoMat')</th>
                        <th>@lang('global.gruposMateria.fields.materia_id')</th>
                        <th>@lang('global.gruposMateria.fields.user_id')</th>
                
                        <th>&nbsp;</th>
                        
                    </tr>
                </thead>
                
                <tbody>
                
                    @if (count($gruposMateria) > 0) 
                        @foreach ($gruposMateria as $grupoMateria)
                            <tr data-entry-id="{{ $grupoMateria->id }}">
                                <td></td>

                                <td>{{ $grupoMateria->nombreGrupoMat }}</td>
                                {{-- <td>{{ $grupoMateria->each(function($grupoMateria){ $grupoMateria->materias;}) }}</td> --}}
                                <td>{{ $grupoMateria->materia()->pluck('nombreMateria')->first() }}</td>
                                <td>{{ $grupoMateria->usuario()->pluck('name')->first() }}</td>
                                {{-- <td>{{ $user->user()->pluck('name')->first() }}</td> --}}
                                {{-- <td>{{ $grupoMateria->laboratorio()->pluck('nombreLab')->first() }}</td> --}}
                                {{-- <td>{{ $grupoMateria->laboratorio_id }}</td> --}}
                                {{-- @foreach($dias as $dia) --}}
                            {{-- <h1> {{{$dia['mi']}}}</h1> --}}
                                {{-- @endforeach --}}

                                {{-- <td>{{ $grupoMateria->diaGrupo  }}</td> --}}
                                {{-- <td>{{ $grupoMateria->horaGrupo }}</td> --}}
                                
                                <td>
                                    <a href="{{ route('admin.gruposMateria.edit',[$grupoMateria->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.gruposMateria.destroy', $grupoMateria->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
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
        window.route_mass_crud_entries_destroy = '{{ route('admin.gruposMateria.mass_destroy') }}';
    </script>
    
@endsection