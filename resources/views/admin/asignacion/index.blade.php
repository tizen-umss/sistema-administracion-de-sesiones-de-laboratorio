@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.asignaciones.title')</h3>
    <p>
        <a href="{{ route('admin.asignaciones.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($asignaciones) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        
                        <th>@lang('global.asignaciones.fields.user_id')</th>
                        <th>@lang('global.asignaciones.fields.grupomateria_id')</th>
                        <th>@lang('global.asignaciones.fields.grupolaboratorio_id')</th>
                
                        <th>&nbsp;</th>
                        
                    </tr>
                </thead>
                
                <tbody>
                
                    @if (count($asignaciones) > 0)
                        @foreach ($asignaciones as $asignacion)
                            <tr data-entry-id="{{ $asignacion->id }}">
                                <td></td>

                                {{-- <td>{{ $asignacion->nombregrupolab }}</td> --}}
                                {{-- <td>{{ $asignacion->each(function($asignacion){ $asignacion->materias;}) }}</td> --}}
                                <td>{{ $asignacion->user()->pluck('name')->first() }}</td>
                                <td>{{ $asignacion->grupoMateria()->pluck('nombregrupomat')->first() }}</td>
                                <td>{{ $asignacion->grupoLaboratorio()->pluck('nombregrupolab')->first() }}</td>
                                {{-- <td>{{ $asignacion->laboratorio_id }}</td> --}}
                                

                                <td>
                                    <a href="{{ route('admin.asignaciones.edit',[$asignacion->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.asignaciones.destroy', $asignacion->id])) !!}
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
        window.route_mass_crud_entries_destroy = '{{ route('admin.asignaciones.mass_destroy') }}';
    </script>
    
@endsection